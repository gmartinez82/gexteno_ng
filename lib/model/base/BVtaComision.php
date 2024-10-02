<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaComision
{ 
	
	const SES_PAGINACION = 'adm_vtacomision_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtacomision_paginas_registros';
	const SES_CRITERIOS = 'adm_vtacomision_criterios';
	
	const GEN_CLASE = 'VtaComision';
	const GEN_TABLA = 'vta_comision';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaComision */ 
	const GEN_ATTR_ID = 'vta_comision.id';
	const GEN_ATTR_DESCRIPCION = 'vta_comision.descripcion';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_comision.vta_preventista_id';
	const GEN_ATTR_VTA_COMPRADOR_ID = 'vta_comision.vta_comprador_id';
	const GEN_ATTR_VTA_VENDEDOR_ID = 'vta_comision.vta_vendedor_id';
	const GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID = 'vta_comision.vta_comision_tipo_estado_id';
	const GEN_ATTR_FECHA_EMISION = 'vta_comision.fecha_emision';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_comision.persona_descripcion';
	const GEN_ATTR_CODIGO = 'vta_comision.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_comision.observacion';
	const GEN_ATTR_ORDEN = 'vta_comision.orden';
	const GEN_ATTR_ESTADO = 'vta_comision.estado';
	const GEN_ATTR_CREADO = 'vta_comision.creado';
	const GEN_ATTR_CREADO_POR = 'vta_comision.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_comision.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_comision.modificado_por';

	/* Constantes de Atributos Min de BVtaComision */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_VTA_COMPRADOR_ID = 'vta_comprador_id';
	const GEN_ATTR_MIN_VTA_VENDEDOR_ID = 'vta_vendedor_id';
	const GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID = 'vta_comision_tipo_estado_id';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
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
	

	/* Atributos de BVtaComision */ 
	private $id;
	private $descripcion;
	private $vta_preventista_id;
	private $vta_comprador_id;
	private $vta_vendedor_id;
	private $vta_comision_tipo_estado_id;
	private $fecha_emision;
	private $persona_descripcion;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaComision */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getVtaCompradorId(){ if(isset($this->vta_comprador_id)){ return $this->vta_comprador_id; }else{ return 'null'; } }
	public function getVtaVendedorId(){ if(isset($this->vta_vendedor_id)){ return $this->vta_vendedor_id; }else{ return 'null'; } }
	public function getVtaComisionTipoEstadoId(){ if(isset($this->vta_comision_tipo_estado_id)){ return $this->vta_comision_tipo_estado_id; }else{ return 'null'; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaComision */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_VTA_COMPRADOR_ID."
				, ".self::GEN_ATTR_VTA_VENDEDOR_ID."
				, ".self::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
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
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
				$this->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
				$this->setVtaComisionTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
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
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setVtaCompradorId($v){ $this->vta_comprador_id = $v; }
	public function setVtaVendedorId($v){ $this->vta_vendedor_id = $v; }
	public function setVtaComisionTipoEstadoId($v){ $this->vta_comision_tipo_estado_id = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaComision();
            $o->setId($fila[VtaComision::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$o->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$o->setVtaComisionTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
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

	/* Control de BVtaComision */ 	
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

	/* Cambia el estado de BVtaComision */ 	
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

	/* Save de BVtaComision */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_comision_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPreventistaId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getVtaComisionTipoEstadoId()."
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_comision_seq')";
            
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
                 
				 ".VtaComision::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID." = ".$this->getVtaComisionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
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
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
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
						, ".$this->getVtaPreventistaId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getVtaComisionTipoEstadoId()."
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
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
                     
				 ".VtaComision::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID." = ".$this->getVtaComisionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
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
            $o = new VtaComision();
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

	/* Delete de BVtaComision */ 	
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
	
            // se elimina la coleccion de VtaComisionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionGralFpFormaPagoCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionGralFpFormaPagoCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionGralFpFormaPagoCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaComision(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaComisions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaComision::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtacomisions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtacomision = new VtaComision();
                    $vtacomision->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtacomision->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtacomision->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtacomision->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$vtacomision->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$vtacomision->setVtaComisionTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_COMISION_TIPO_ESTADO_ID]);
			$vtacomision->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtacomision->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtacomision->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtacomision->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtacomision->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtacomision->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtacomision->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtacomision->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtacomision->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtacomision->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtacomisions[] = $vtacomision;
		}
		
		return $vtacomisions;
	}	
	

	/* Método getVtaComisions Habilitados */ 	
	static function getVtaComisionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaComision::getVtaComisions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaComisions para listado de Backend */ 	
	static function getVtaComisionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaComision::getVtaComisions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaComisionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaComision::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaComision::getVtaComisions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaComisions filtrado para select */ 	
	static function getVtaComisionsCmbF($paginador = null, $criterio = null){
            $col = VtaComision::getVtaComisions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaComisions filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaComisionsXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaComision::getVtaComisions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaComisions filtrado por una coleccion de objetos foraneos de VtaComprador */ 	
	static function getVtaComisionsXVtaCompradors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaComision::GEN_ATTR_VTA_COMPRADOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaComision::getVtaComisions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaCompradorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaComisions filtrado por una coleccion de objetos foraneos de VtaVendedor */ 	
	static function getVtaComisionsXVtaVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaComision::getVtaComisions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaComisions filtrado por una coleccion de objetos foraneos de VtaComisionTipoEstado */ 	
	static function getVtaComisionsXVtaComisionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaComision::getVtaComisions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaComisionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_comision_adm.php';
            $url_gestion = 'vta_comision_gestion.php';
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
	

	/* Metodo getVtaComisionEstados */ 	
	public function getVtaComisionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionEstado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionestado = VtaComisionEstado::hidratarObjeto($fila);			
                $vtacomisionestados[] = $vtacomisionestado;
            }

            return $vtacomisionestados;
	}	
	

	/* Método getVtaComisionEstadosBloque para MasInfo */ 	
	public function getVtaComisionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionEstados Habilitados */ 	
	public function getVtaComisionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionEstado */ 	
	public function getVtaComisionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionEstado relacionadas */ 	
	public function deleteVtaComisionEstados(){
            $obs = $this->getVtaComisionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionEstadosCmb() VtaComisionEstado relacionadas */ 	
	public function getVtaComisionEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaComisionEstado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionEstado::getVtaComisionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaComisionTipoEstados (Coleccion) relacionados a traves de VtaComisionEstado */ 	
	public function getVtaComisionTipoEstadosXVtaComisionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComisionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionEstado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaComisionEstado::GEN_TABLA, VtaComisionEstado::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, VtaComisionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComisionTipoEstado::getVtaComisionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaComisionTipoEstados relacionados a traves de VtaComisionEstado */ 	
	public function getCantidadVtaComisionTipoEstadosXVtaComisionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComisionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComisionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionEstado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaComisionEstado::GEN_TABLA, VtaComisionEstado::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, VtaComisionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComisionTipoEstado::getVtaComisionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComisionTipoEstado (Objeto) relacionado a traves de VtaComisionEstado */ 	
	public function getVtaComisionTipoEstadoXVtaComisionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaComisionTipoEstadosXVtaComisionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionEnviados */ 	
	public function getVtaComisionEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionEnviado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionenviado = VtaComisionEnviado::hidratarObjeto($fila);			
                $vtacomisionenviados[] = $vtacomisionenviado;
            }

            return $vtacomisionenviados;
	}	
	

	/* Método getVtaComisionEnviadosBloque para MasInfo */ 	
	public function getVtaComisionEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionEnviados Habilitados */ 	
	public function getVtaComisionEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionEnviado */ 	
	public function getVtaComisionEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionEnviado relacionadas */ 	
	public function deleteVtaComisionEnviados(){
            $obs = $this->getVtaComisionEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionEnviadosCmb() VtaComisionEnviado relacionadas */ 	
	public function getVtaComisionEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaComisionEnviado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionEnviado::getVtaComisionEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaComisionVtaFacturas */ 	
	public function getVtaComisionVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtafactura = VtaComisionVtaFactura::hidratarObjeto($fila);			
                $vtacomisionvtafacturas[] = $vtacomisionvtafactura;
            }

            return $vtacomisionvtafacturas;
	}	
	

	/* Método getVtaComisionVtaFacturasBloque para MasInfo */ 	
	public function getVtaComisionVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturas Habilitados */ 	
	public function getVtaComisionVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaFactura */ 	
	public function getVtaComisionVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaFactura relacionadas */ 	
	public function deleteVtaComisionVtaFacturas(){
            $obs = $this->getVtaComisionVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaFacturasCmb() VtaComisionVtaFactura relacionadas */ 	
	public function getVtaComisionVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaFactura::getVtaComisionVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaComisionVtaFactura */ 	
	public function getVtaFacturasXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaComisionVtaFactura */ 	
	public function getCantidadVtaFacturasXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaComisionVtaFactura */ 	
	public function getVtaFacturaXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaComisionVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaAjusteDebes */ 	
	public function getVtaComisionVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtaajustedebe = VtaComisionVtaAjusteDebe::hidratarObjeto($fila);			
                $vtacomisionvtaajustedebes[] = $vtacomisionvtaajustedebe;
            }

            return $vtacomisionvtaajustedebes;
	}	
	

	/* Método getVtaComisionVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaComisionVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebes Habilitados */ 	
	public function getVtaComisionVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebe */ 	
	public function getVtaComisionVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaAjusteDebe relacionadas */ 	
	public function deleteVtaComisionVtaAjusteDebes(){
            $obs = $this->getVtaComisionVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaAjusteDebesCmb() VtaComisionVtaAjusteDebe relacionadas */ 	
	public function getVtaComisionVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaAjusteDebe::getVtaComisionVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaComisionVtaAjusteDebe */ 	
	public function getVtaAjusteDebesXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaComisionVtaAjusteDebe */ 	
	public function getCantidadVtaAjusteDebesXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaComisionVtaAjusteDebe */ 	
	public function getVtaAjusteDebeXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaComisionVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionGralFpFormaPagos */ 	
	public function getVtaComisionGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisiongralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisiongralfpformapago = VtaComisionGralFpFormaPago::hidratarObjeto($fila);			
                $vtacomisiongralfpformapagos[] = $vtacomisiongralfpformapago;
            }

            return $vtacomisiongralfpformapagos;
	}	
	

	/* Método getVtaComisionGralFpFormaPagosBloque para MasInfo */ 	
	public function getVtaComisionGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPagos Habilitados */ 	
	public function getVtaComisionGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPago */ 	
	public function getVtaComisionGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionGralFpFormaPago relacionadas */ 	
	public function deleteVtaComisionGralFpFormaPagos(){
            $obs = $this->getVtaComisionGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionGralFpFormaPagosCmb() VtaComisionGralFpFormaPago relacionadas */ 	
	public function getVtaComisionGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de VtaComisionGralFpFormaPago */ 	
	public function getGralFpFormaPagosXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPago::GEN_TABLA, VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de VtaComisionGralFpFormaPago */ 	
	public function getCantidadGralFpFormaPagosXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPago::GEN_TABLA, VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de VtaComisionGralFpFormaPago */ 	
	public function getGralFpFormaPagoXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXVtaComisionGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionGralFpFormaPagoCheques */ 	
	public function getVtaComisionGralFpFormaPagoCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionGralFpFormaPagoCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionGralFpFormaPagoCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionGralFpFormaPagoCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionGralFpFormaPagoCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisiongralfpformapagocheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisiongralfpformapagocheque = VtaComisionGralFpFormaPagoCheque::hidratarObjeto($fila);			
                $vtacomisiongralfpformapagocheques[] = $vtacomisiongralfpformapagocheque;
            }

            return $vtacomisiongralfpformapagocheques;
	}	
	

	/* Método getVtaComisionGralFpFormaPagoChequesBloque para MasInfo */ 	
	public function getVtaComisionGralFpFormaPagoChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionGralFpFormaPagoCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPagoCheques Habilitados */ 	
	public function getVtaComisionGralFpFormaPagoChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionGralFpFormaPagoCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPagoCheque */ 	
	public function getVtaComisionGralFpFormaPagoCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionGralFpFormaPagoCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionGralFpFormaPagoCheque relacionadas */ 	
	public function deleteVtaComisionGralFpFormaPagoCheques(){
            $obs = $this->getVtaComisionGralFpFormaPagoCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionGralFpFormaPagoChequesCmb() VtaComisionGralFpFormaPagoCheque relacionadas */ 	
	public function getVtaComisionGralFpFormaPagoChequesCmb(){
            $c = new Criterio();
            $c->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionGralFpFormaPagoCheque::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionGralFpFormaPagoCheque::getVtaComisionGralFpFormaPagoChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaComisionGralFpFormaPagos (Coleccion) relacionados a traves de VtaComisionGralFpFormaPagoCheque */ 	
	public function getVtaComisionGralFpFormaPagosXVtaComisionGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPagoCheque::GEN_TABLA, VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID, VtaComisionGralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaComisionGralFpFormaPagos relacionados a traves de VtaComisionGralFpFormaPagoCheque */ 	
	public function getCantidadVtaComisionGralFpFormaPagosXVtaComisionGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComisionGralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPagoCheque::GEN_TABLA, VtaComisionGralFpFormaPagoCheque::GEN_ATTR_VTA_COMISION_GRAL_FP_FORMA_PAGO_ID, VtaComisionGralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComisionGralFpFormaPago (Objeto) relacionado a traves de VtaComisionGralFpFormaPagoCheque */ 	
	public function getVtaComisionGralFpFormaPagoXVtaComisionGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaComisionGralFpFormaPagosXVtaComisionGralFpFormaPagoCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndChqCheques */ 	
	public function getFndChqCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqcheque = FndChqCheque::hidratarObjeto($fila);			
                $fndchqcheques[] = $fndchqcheque;
            }

            return $fndchqcheques;
	}	
	

	/* Método getFndChqChequesBloque para MasInfo */ 	
	public function getFndChqChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqCheques Habilitados */ 	
	public function getFndChqChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqCheque */ 	
	public function getFndChqCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqCheque relacionadas */ 	
	public function deleteFndChqCheques(){
            $obs = $this->getFndChqCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqChequesCmb() FndChqCheque relacionadas */ 	
	public function getFndChqChequesCmb(){
            $c = new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqChequeras (Coleccion) relacionados a traves de FndChqCheque */ 	
	public function getFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqChequeras relacionados a traves de FndChqCheque */ 	
	public function getCantidadFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqChequera::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqChequera (Objeto) relacionado a traves de FndChqCheque */ 	
	public function getFndChqChequeraXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqChequerasXFndChqCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el VtaPreventista (Clave Foranea) */ 	
    public function getVtaPreventista(){
        $o = new VtaPreventista();
        $o->setId($this->getVtaPreventistaId());
        return $o;			
    }

	/* Metodo que retorna el VtaPreventista (Clave Foranea) en Array */ 	
    public function getVtaPreventistaEnArray(&$arr_os){
        if($this->getVtaPreventistaId() != 'null'){
            if(isset($arr_os[$this->getVtaPreventistaId()])){
                $o = $arr_os[$this->getVtaPreventistaId()];
            }else{
                $o = VtaPreventista::getOxId($this->getVtaPreventistaId());
                if($o){
                    $arr_os[$this->getVtaPreventistaId()] = $o;
                }
            }
        }else{
            $o = new VtaPreventista();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaComprador (Clave Foranea) */ 	
    public function getVtaComprador(){
        $o = new VtaComprador();
        $o->setId($this->getVtaCompradorId());
        return $o;			
    }

	/* Metodo que retorna el VtaComprador (Clave Foranea) en Array */ 	
    public function getVtaCompradorEnArray(&$arr_os){
        if($this->getVtaCompradorId() != 'null'){
            if(isset($arr_os[$this->getVtaCompradorId()])){
                $o = $arr_os[$this->getVtaCompradorId()];
            }else{
                $o = VtaComprador::getOxId($this->getVtaCompradorId());
                if($o){
                    $arr_os[$this->getVtaCompradorId()] = $o;
                }
            }
        }else{
            $o = new VtaComprador();
        }
        return $o;		
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

	/* Metodo que retorna el VtaComisionTipoEstado (Clave Foranea) */ 	
    public function getVtaComisionTipoEstado(){
        $o = new VtaComisionTipoEstado();
        $o->setId($this->getVtaComisionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaComisionTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaComisionTipoEstadoEnArray(&$arr_os){
        if($this->getVtaComisionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaComisionTipoEstadoId()])){
                $o = $arr_os[$this->getVtaComisionTipoEstadoId()];
            }else{
                $o = VtaComisionTipoEstado::getOxId($this->getVtaComisionTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaComisionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaComisionTipoEstado();
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
            		
        if($contexto_solicitante != VtaPreventista::GEN_CLASE){
            if($this->getVtaPreventista()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPreventista::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPreventista()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaComprador::GEN_CLASE){
            if($this->getVtaComprador()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaComprador::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaComprador()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaVendedor::GEN_CLASE){
            if($this->getVtaVendedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaVendedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaVendedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaComisionTipoEstado::GEN_CLASE){
            if($this->getVtaComisionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaComisionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaComisionTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_comision'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_comision';");
            
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

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_preventista_id' */ 	
	static function getOsxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comprador_id' */ 	
	static function getOxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_comprador_id' */ 	
	static function getOsxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_vendedor_id' */ 	
	static function getOxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comision_tipo_estado_id' */ 	
	static function getOxVtaComisionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_comision_tipo_estado_id' */ 	
	static function getOsxVtaComisionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_emision' */ 	
	static function getOsxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_descripcion' */ 	
	static function getOsxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions(null, $criterio);
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

            $obs = self::getVtaComisions($paginador, $criterio);
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

            $obs = self::getVtaComisions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_comision_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_emision' */ 	
	public function getFechaEmisionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaEmision(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaEmisionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaEmisionDiferenciaDias();
        
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
                $c->addTabla(VtaComision::GEN_TABLA);
                $c->addOrden(VtaComision::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_comisions = VtaComision::getVtaComisions(null, $c);

                $arr = array();
                foreach($vta_comisions as $vta_comision){
                    $descripcion = $vta_comision->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>