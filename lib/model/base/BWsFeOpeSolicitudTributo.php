<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BWsFeOpeSolicitudTributo
{ 
	
	const SES_PAGINACION = 'adm_wsfeopesolicitudtributo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_wsfeopesolicitudtributo_paginas_registros';
	const SES_CRITERIOS = 'adm_wsfeopesolicitudtributo_criterios';
	
	const GEN_CLASE = 'WsFeOpeSolicitudTributo';
	const GEN_TABLA = 'ws_fe_ope_solicitud_tributo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BWsFeOpeSolicitudTributo */ 
	const GEN_ATTR_ID = 'ws_fe_ope_solicitud_tributo.id';
	const GEN_ATTR_DESCRIPCION = 'ws_fe_ope_solicitud_tributo.descripcion';
	const GEN_ATTR_WS_FE_OPE_SOLICITUD_ID = 'ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id';
	const GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID = 'ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id';
	const GEN_ATTR_WS_FE_AFIP_CODIGO = 'ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo';
	const GEN_ATTR_WS_FE_AFIP_DESCRIPCION = 'ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion';
	const GEN_ATTR_WS_FE_AFIP_BASE_IMPONIBLE = 'ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible';
	const GEN_ATTR_WS_FE_AFIP_ALICUOTA = 'ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE = 'ws_fe_ope_solicitud_tributo.ws_fe_afip_importe';
	const GEN_ATTR_CODIGO = 'ws_fe_ope_solicitud_tributo.codigo';
	const GEN_ATTR_OBSERVACION = 'ws_fe_ope_solicitud_tributo.observacion';
	const GEN_ATTR_CREADO = 'ws_fe_ope_solicitud_tributo.creado';
	const GEN_ATTR_CREADO_POR = 'ws_fe_ope_solicitud_tributo.creado_por';
	const GEN_ATTR_MODIFICADO = 'ws_fe_ope_solicitud_tributo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ws_fe_ope_solicitud_tributo.modificado_por';

	/* Constantes de Atributos Min de BWsFeOpeSolicitudTributo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID = 'ws_fe_ope_solicitud_id';
	const GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID = 'ws_fe_param_tipo_tributo_id';
	const GEN_ATTR_MIN_WS_FE_AFIP_CODIGO = 'ws_fe_afip_codigo';
	const GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION = 'ws_fe_afip_descripcion';
	const GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE = 'ws_fe_afip_base_imponible';
	const GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA = 'ws_fe_afip_alicuota';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE = 'ws_fe_afip_importe';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
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
	

	/* Atributos de BWsFeOpeSolicitudTributo */ 
	private $id;
	private $descripcion;
	private $ws_fe_ope_solicitud_id;
	private $ws_fe_param_tipo_tributo_id;
	private $ws_fe_afip_codigo;
	private $ws_fe_afip_descripcion;
	private $ws_fe_afip_base_imponible;
	private $ws_fe_afip_alicuota;
	private $ws_fe_afip_importe;
	private $codigo;
	private $observacion;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BWsFeOpeSolicitudTributo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getWsFeOpeSolicitudId(){ if(isset($this->ws_fe_ope_solicitud_id)){ return $this->ws_fe_ope_solicitud_id; }else{ return 'null'; } }
	public function getWsFeParamTipoTributoId(){ if(isset($this->ws_fe_param_tipo_tributo_id)){ return $this->ws_fe_param_tipo_tributo_id; }else{ return 'null'; } }
	public function getWsFeAfipCodigo(){ if(isset($this->ws_fe_afip_codigo)){ return $this->ws_fe_afip_codigo; }else{ return ''; } }
	public function getWsFeAfipDescripcion(){ if(isset($this->ws_fe_afip_descripcion)){ return $this->ws_fe_afip_descripcion; }else{ return ''; } }
	public function getWsFeAfipBaseImponible(){ if(isset($this->ws_fe_afip_base_imponible)){ return $this->ws_fe_afip_base_imponible; }else{ return ''; } }
	public function getWsFeAfipAlicuota(){ if(isset($this->ws_fe_afip_alicuota)){ return $this->ws_fe_afip_alicuota; }else{ return ''; } }
	public function getWsFeAfipImporte(){ if(isset($this->ws_fe_afip_importe)){ return $this->ws_fe_afip_importe; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BWsFeOpeSolicitudTributo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID."
				, ".self::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID."
				, ".self::GEN_ATTR_WS_FE_AFIP_CODIGO."
				, ".self::GEN_ATTR_WS_FE_AFIP_DESCRIPCION."
				, ".self::GEN_ATTR_WS_FE_AFIP_BASE_IMPONIBLE."
				, ".self::GEN_ATTR_WS_FE_AFIP_ALICUOTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_OBSERVACION."
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
				$this->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
				$this->setWsFeParamTipoTributoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID]);
				$this->setWsFeAfipCodigo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO]);
				$this->setWsFeAfipDescripcion($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION]);
				$this->setWsFeAfipBaseImponible($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE]);
				$this->setWsFeAfipAlicuota($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA]);
				$this->setWsFeAfipImporte($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setWsFeOpeSolicitudId($v){ $this->ws_fe_ope_solicitud_id = $v; }
	public function setWsFeParamTipoTributoId($v){ $this->ws_fe_param_tipo_tributo_id = $v; }
	public function setWsFeAfipCodigo($v){ $this->ws_fe_afip_codigo = $v; }
	public function setWsFeAfipDescripcion($v){ $this->ws_fe_afip_descripcion = $v; }
	public function setWsFeAfipBaseImponible($v){ $this->ws_fe_afip_base_imponible = $v; }
	public function setWsFeAfipAlicuota($v){ $this->ws_fe_afip_alicuota = $v; }
	public function setWsFeAfipImporte($v){ $this->ws_fe_afip_importe = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new WsFeOpeSolicitudTributo();
            $o->setId($fila[WsFeOpeSolicitudTributo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
			$o->setWsFeParamTipoTributoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID]);
			$o->setWsFeAfipCodigo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO]);
			$o->setWsFeAfipDescripcion($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION]);
			$o->setWsFeAfipBaseImponible($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE]);
			$o->setWsFeAfipAlicuota($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA]);
			$o->setWsFeAfipImporte($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BWsFeOpeSolicitudTributo */ 	
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

	/* Cambia el estado de BWsFeOpeSolicitudTributo */ 	
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

	/* Save de BWsFeOpeSolicitudTributo */ 	
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
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ws_fe_ope_solicitud_tributo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeOpeSolicitudId()."
						, ".$this->getWsFeParamTipoTributoId()."
						, '".$this->getWsFeAfipCodigo()."'
						, '".$this->getWsFeAfipDescripcion()."'
						, '".$this->getWsFeAfipBaseImponible()."'
						, '".$this->getWsFeAfipAlicuota()."'
						, '".$this->getWsFeAfipImporte()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ws_fe_ope_solicitud_tributo_seq')";
            
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
                 
				 ".WsFeOpeSolicitudTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID." = ".$this->getWsFeOpeSolicitudId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID." = ".$this->getWsFeParamTipoTributoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO." = '".$this->getWsFeAfipCodigo()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION." = '".$this->getWsFeAfipDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE." = '".$this->getWsFeAfipBaseImponible()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA." = '".$this->getWsFeAfipAlicuota()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE." = '".$this->getWsFeAfipImporte()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeOpeSolicitudId()."
						, ".$this->getWsFeParamTipoTributoId()."
						, '".$this->getWsFeAfipCodigo()."'
						, '".$this->getWsFeAfipDescripcion()."'
						, '".$this->getWsFeAfipBaseImponible()."'
						, '".$this->getWsFeAfipAlicuota()."'
						, '".$this->getWsFeAfipImporte()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
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
                     
				 ".WsFeOpeSolicitudTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID." = ".$this->getWsFeOpeSolicitudId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID." = ".$this->getWsFeParamTipoTributoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO." = '".$this->getWsFeAfipCodigo()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION." = '".$this->getWsFeAfipDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE." = '".$this->getWsFeAfipBaseImponible()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA." = '".$this->getWsFeAfipAlicuota()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE." = '".$this->getWsFeAfipImporte()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
            $o = new WsFeOpeSolicitudTributo();
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

	/* Delete de BWsFeOpeSolicitudTributo */ 	
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
	
	public function duplicarWsFeOpeSolicitudTributo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getWsFeOpeSolicitudTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = WsFeOpeSolicitudTributo::setAplicarFiltrosDeAlcance($criterio);

                    if(is_array($arr_ordens)){
                        foreach($arr_ordens as $arr_orden){
                            $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                        }
                    }

	                            
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
	
		$wsfeopesolicitudtributos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $wsfeopesolicitudtributo = new WsFeOpeSolicitudTributo();
                    $wsfeopesolicitudtributo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $wsfeopesolicitudtributo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$wsfeopesolicitudtributo->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
			$wsfeopesolicitudtributo->setWsFeParamTipoTributoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_TRIBUTO_ID]);
			$wsfeopesolicitudtributo->setWsFeAfipCodigo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CODIGO]);
			$wsfeopesolicitudtributo->setWsFeAfipDescripcion($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_DESCRIPCION]);
			$wsfeopesolicitudtributo->setWsFeAfipBaseImponible($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_BASE_IMPONIBLE]);
			$wsfeopesolicitudtributo->setWsFeAfipAlicuota($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_ALICUOTA]);
			$wsfeopesolicitudtributo->setWsFeAfipImporte($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE]);
			$wsfeopesolicitudtributo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$wsfeopesolicitudtributo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$wsfeopesolicitudtributo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$wsfeopesolicitudtributo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$wsfeopesolicitudtributo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$wsfeopesolicitudtributo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $wsfeopesolicitudtributos[] = $wsfeopesolicitudtributo;
		}
		
		return $wsfeopesolicitudtributos;
	}	
	

	/* Método getWsFeOpeSolicitudTributos Habilitados */ 	
	static function getWsFeOpeSolicitudTributosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getWsFeOpeSolicitudTributos para listado de Backend */ 	
	static function getWsFeOpeSolicitudTributosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getWsFeOpeSolicitudTributosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = WsFeOpeSolicitudTributo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicitudTributos filtrado para select */ 	
	static function getWsFeOpeSolicitudTributosCmbF($paginador = null, $criterio = null){
            $col = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicitudTributos filtrado por una coleccion de objetos foraneos de WsFeOpeSolicitud */ 	
	static function getWsFeOpeSolicitudTributosXWsFeOpeSolicituds($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitudTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeOpeSolicitudId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicitudTributos filtrado por una coleccion de objetos foraneos de WsFeParamTipoTributo */ 	
	static function getWsFeOpeSolicitudTributosXWsFeParamTipoTributos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitudTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamTipoTributoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ws_fe_ope_solicitud_tributo_adm.php';
            $url_gestion = 'ws_fe_ope_solicitud_tributo_gestion.php';
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
	

	/* Metodo que retorna el WsFeOpeSolicitud (Clave Foranea) */ 	
    public function getWsFeOpeSolicitud(){
        $o = new WsFeOpeSolicitud();
        $o->setId($this->getWsFeOpeSolicitudId());
        return $o;			
    }

	/* Metodo que retorna el WsFeOpeSolicitud (Clave Foranea) en Array */ 	
    public function getWsFeOpeSolicitudEnArray(&$arr_os){
        if($this->getWsFeOpeSolicitudId() != 'null'){
            if(isset($arr_os[$this->getWsFeOpeSolicitudId()])){
                $o = $arr_os[$this->getWsFeOpeSolicitudId()];
            }else{
                $o = WsFeOpeSolicitud::getOxId($this->getWsFeOpeSolicitudId());
                if($o){
                    $arr_os[$this->getWsFeOpeSolicitudId()] = $o;
                }
            }
        }else{
            $o = new WsFeOpeSolicitud();
        }
        return $o;		
    }

	/* Metodo que retorna el WsFeParamTipoTributo (Clave Foranea) */ 	
    public function getWsFeParamTipoTributo(){
        $o = new WsFeParamTipoTributo();
        $o->setId($this->getWsFeParamTipoTributoId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamTipoTributo (Clave Foranea) en Array */ 	
    public function getWsFeParamTipoTributoEnArray(&$arr_os){
        if($this->getWsFeParamTipoTributoId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamTipoTributoId()])){
                $o = $arr_os[$this->getWsFeParamTipoTributoId()];
            }else{
                $o = WsFeParamTipoTributo::getOxId($this->getWsFeParamTipoTributoId());
                if($o){
                    $arr_os[$this->getWsFeParamTipoTributoId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamTipoTributo();
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
            		
        if($contexto_solicitante != WsFeOpeSolicitud::GEN_CLASE){
            if($this->getWsFeOpeSolicitud()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeOpeSolicitud::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeOpeSolicitud()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != WsFeParamTipoTributo::GEN_CLASE){
            if($this->getWsFeParamTipoTributo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamTipoTributo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamTipoTributo()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ws_fe_ope_solicitud_tributo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ws_fe_ope_solicitud_tributo';");
            
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

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_ope_solicitud_id' */ 	
	static function getOxWsFeOpeSolicitudId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_ope_solicitud_id' */ 	
	static function getOsxWsFeOpeSolicitudId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_tipo_tributo_id' */ 	
	static function getOxWsFeParamTipoTributoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_tipo_tributo_id' */ 	
	static function getOsxWsFeParamTipoTributoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_codigo' */ 	
	static function getOxWsFeAfipCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_codigo' */ 	
	static function getOsxWsFeAfipCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_descripcion' */ 	
	static function getOxWsFeAfipDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_descripcion' */ 	
	static function getOsxWsFeAfipDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_base_imponible' */ 	
	static function getOxWsFeAfipBaseImponible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_BASE_IMPONIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_base_imponible' */ 	
	static function getOsxWsFeAfipBaseImponible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_BASE_IMPONIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_alicuota' */ 	
	static function getOxWsFeAfipAlicuota($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_ALICUOTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_alicuota' */ 	
	static function getOsxWsFeAfipAlicuota($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_ALICUOTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe' */ 	
	static function getOxWsFeAfipImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe' */ 	
	static function getOsxWsFeAfipImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos(null, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudTributos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ws_fe_ope_solicitud_tributo_adm');
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
                $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
                $c->addOrden(WsFeOpeSolicitudTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ws_fe_ope_solicitud_tributos = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributos(null, $c);

                $arr = array();
                foreach($ws_fe_ope_solicitud_tributos as $ws_fe_ope_solicitud_tributo){
                    $descripcion = $ws_fe_ope_solicitud_tributo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>