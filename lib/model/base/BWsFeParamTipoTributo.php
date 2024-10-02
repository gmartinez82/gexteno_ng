<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BWsFeParamTipoTributo
{ 
	
	const SES_PAGINACION = 'adm_wsfeparamtipotributo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_wsfeparamtipotributo_paginas_registros';
	const SES_CRITERIOS = 'adm_wsfeparamtipotributo_criterios';
	
	const GEN_CLASE = 'WsFeParamTipoTributo';
	const GEN_TABLA = 'ws_fe_param_tipo_tributo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BWsFeParamTipoTributo */ 
	const GEN_ATTR_ID = 'ws_fe_param_tipo_tributo.id';
	const GEN_ATTR_DESCRIPCION = 'ws_fe_param_tipo_tributo.descripcion';
	const GEN_ATTR_CODIGO = 'ws_fe_param_tipo_tributo.codigo';
	const GEN_ATTR_CODIGO_AFIP = 'ws_fe_param_tipo_tributo.codigo_afip';
	const GEN_ATTR_FECHA_DESDE = 'ws_fe_param_tipo_tributo.fecha_desde';
	const GEN_ATTR_FECHA_HASTA = 'ws_fe_param_tipo_tributo.fecha_hasta';
	const GEN_ATTR_OBSERVACION = 'ws_fe_param_tipo_tributo.observacion';
	const GEN_ATTR_ORDEN = 'ws_fe_param_tipo_tributo.orden';
	const GEN_ATTR_ESTADO = 'ws_fe_param_tipo_tributo.estado';
	const GEN_ATTR_CREADO = 'ws_fe_param_tipo_tributo.creado';
	const GEN_ATTR_CREADO_POR = 'ws_fe_param_tipo_tributo.creado_por';
	const GEN_ATTR_MODIFICADO = 'ws_fe_param_tipo_tributo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ws_fe_param_tipo_tributo.modificado_por';

	/* Constantes de Atributos Min de BWsFeParamTipoTributo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_AFIP = 'codigo_afip';
	const GEN_ATTR_MIN_FECHA_DESDE = 'fecha_desde';
	const GEN_ATTR_MIN_FECHA_HASTA = 'fecha_hasta';
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
	

	/* Atributos de BWsFeParamTipoTributo */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $codigo_afip;
	private $fecha_desde;
	private $fecha_hasta;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BWsFeParamTipoTributo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoAfip(){ if(isset($this->codigo_afip)){ return $this->codigo_afip; }else{ return ''; } }
	public function getFechaDesde(){ if(isset($this->fecha_desde)){ return $this->fecha_desde; }else{ return ''; } }
	public function getFechaHasta(){ if(isset($this->fecha_hasta)){ return $this->fecha_hasta; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BWsFeParamTipoTributo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_AFIP."
				, ".self::GEN_ATTR_FECHA_DESDE."
				, ".self::GEN_ATTR_FECHA_HASTA."
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
				$this->setCodigoAfip($fila[self::GEN_ATTR_MIN_CODIGO_AFIP]);
				$this->setFechaDesde($fila[self::GEN_ATTR_MIN_FECHA_DESDE]);
				$this->setFechaHasta($fila[self::GEN_ATTR_MIN_FECHA_HASTA]);
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
	public function setCodigoAfip($v){ $this->codigo_afip = $v; }
	public function setFechaDesde($v){ $this->fecha_desde = $v; }
	public function setFechaHasta($v){ $this->fecha_hasta = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new WsFeParamTipoTributo();
            $o->setId($fila[WsFeParamTipoTributo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoAfip($fila[self::GEN_ATTR_MIN_CODIGO_AFIP]);
			$o->setFechaDesde($fila[self::GEN_ATTR_MIN_FECHA_DESDE]);
			$o->setFechaHasta($fila[self::GEN_ATTR_MIN_FECHA_HASTA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BWsFeParamTipoTributo */ 	
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

	/* Cambia el estado de BWsFeParamTipoTributo */ 	
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

	/* Save de BWsFeParamTipoTributo */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO_AFIP."
						, ".self::GEN_ATTR_MIN_FECHA_DESDE."
						, ".self::GEN_ATTR_MIN_FECHA_HASTA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ws_fe_param_tipo_tributo_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoAfip()."'
						, '".$this->getFechaDesde()."'
						, '".$this->getFechaHasta()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ws_fe_param_tipo_tributo_seq')";
            
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
                 
				 ".WsFeParamTipoTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_AFIP." = '".$this->getCodigoAfip()."'
						, ".self::GEN_ATTR_MIN_FECHA_DESDE." = '".$this->getFechaDesde()."'
						, ".self::GEN_ATTR_MIN_FECHA_HASTA." = '".$this->getFechaHasta()."'
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
						, ".self::GEN_ATTR_MIN_CODIGO_AFIP."
						, ".self::GEN_ATTR_MIN_FECHA_DESDE."
						, ".self::GEN_ATTR_MIN_FECHA_HASTA."
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
						, '".$this->getCodigoAfip()."'
						, '".$this->getFechaDesde()."'
						, '".$this->getFechaHasta()."'
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
                     
				 ".WsFeParamTipoTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_AFIP." = '".$this->getCodigoAfip()."'
						, ".self::GEN_ATTR_MIN_FECHA_DESDE." = '".$this->getFechaDesde()."'
						, ".self::GEN_ATTR_MIN_FECHA_HASTA." = '".$this->getFechaHasta()."'
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
            $o = new WsFeParamTipoTributo();
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

	/* Delete de BWsFeParamTipoTributo */ 	
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
	
            // se elimina la coleccion de VtaTributoWsFeParamTipoTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTributoWsFeParamTipoTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTributoWsFeParamTipoTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarWsFeParamTipoTributo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getWsFeParamTipoTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = WsFeParamTipoTributo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$wsfeparamtipotributos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $wsfeparamtipotributo = new WsFeParamTipoTributo();
                    $wsfeparamtipotributo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $wsfeparamtipotributo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$wsfeparamtipotributo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$wsfeparamtipotributo->setCodigoAfip($fila[self::GEN_ATTR_MIN_CODIGO_AFIP]);
			$wsfeparamtipotributo->setFechaDesde($fila[self::GEN_ATTR_MIN_FECHA_DESDE]);
			$wsfeparamtipotributo->setFechaHasta($fila[self::GEN_ATTR_MIN_FECHA_HASTA]);
			$wsfeparamtipotributo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$wsfeparamtipotributo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$wsfeparamtipotributo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$wsfeparamtipotributo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$wsfeparamtipotributo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$wsfeparamtipotributo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$wsfeparamtipotributo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $wsfeparamtipotributos[] = $wsfeparamtipotributo;
		}
		
		return $wsfeparamtipotributos;
	}	
	

	/* Método getWsFeParamTipoTributos Habilitados */ 	
	static function getWsFeParamTipoTributosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getWsFeParamTipoTributos para listado de Backend */ 	
	static function getWsFeParamTipoTributosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getWsFeParamTipoTributosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = WsFeParamTipoTributo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeParamTipoTributos filtrado para select */ 	
	static function getWsFeParamTipoTributosCmbF($paginador = null, $criterio = null){
            $col = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $criterio);

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
            $url = 'ws_fe_param_tipo_tributo_adm.php';
            $url_gestion = 'ws_fe_param_tipo_tributo_gestion.php';
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
	

	/* Metodo getVtaTributoWsFeParamTipoTributos */ 	
	public function getVtaTributoWsFeParamTipoTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTributoWsFeParamTipoTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTributoWsFeParamTipoTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTributoWsFeParamTipoTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatributowsfeparamtipotributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatributowsfeparamtipotributo = VtaTributoWsFeParamTipoTributo::hidratarObjeto($fila);			
                $vtatributowsfeparamtipotributos[] = $vtatributowsfeparamtipotributo;
            }

            return $vtatributowsfeparamtipotributos;
	}	
	

	/* Método getVtaTributoWsFeParamTipoTributosBloque para MasInfo */ 	
	public function getVtaTributoWsFeParamTipoTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTributoWsFeParamTipoTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTributoWsFeParamTipoTributos Habilitados */ 	
	public function getVtaTributoWsFeParamTipoTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTributoWsFeParamTipoTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTributoWsFeParamTipoTributo */ 	
	public function getVtaTributoWsFeParamTipoTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTributoWsFeParamTipoTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTributoWsFeParamTipoTributo relacionadas */ 	
	public function deleteVtaTributoWsFeParamTipoTributos(){
            $obs = $this->getVtaTributoWsFeParamTipoTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTributoWsFeParamTipoTributosCmb() VtaTributoWsFeParamTipoTributo relacionadas */ 	
	public function getVtaTributoWsFeParamTipoTributosCmb(){
            $c = new Criterio();
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributoWsFeParamTipoTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTributoWsFeParamTipoTributo::getVtaTributoWsFeParamTipoTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getVtaTributosXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoWsFeParamTipoTributo::GEN_TABLA, VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getCantidadVtaTributosXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoWsFeParamTipoTributo::GEN_TABLA, VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getVtaTributoXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaTributoWsFeParamTipoTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getWsFeOpeSolicitudTributos */ 	
	public function getWsFeOpeSolicitudTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudtributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudtributo = WsFeOpeSolicitudTributo::hidratarObjeto($fila);			
                $wsfeopesolicitudtributos[] = $wsfeopesolicitudtributo;
            }

            return $wsfeopesolicitudtributos;
	}	
	

	/* Método getWsFeOpeSolicitudTributosBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudTributos Habilitados */ 	
	public function getWsFeOpeSolicitudTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudTributo */ 	
	public function getWsFeOpeSolicitudTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudTributo relacionadas */ 	
	public function deleteWsFeOpeSolicitudTributos(){
            $obs = $this->getWsFeOpeSolicitudTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudTributosCmb() WsFeOpeSolicitudTributo relacionadas */ 	
	public function getWsFeOpeSolicitudTributosCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de WsFeOpeSolicitudTributo */ 	
	public function getWsFeOpeSolicitudsXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudTributo::GEN_TABLA, WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de WsFeOpeSolicitudTributo */ 	
	public function getCantidadWsFeOpeSolicitudsXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudTributo::GEN_TABLA, WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de WsFeOpeSolicitudTributo */ 	
	public function getWsFeOpeSolicitudXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXWsFeOpeSolicitudTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a WsFeParamTipoTributo */ 	
	public function getVtaTributoWsFeParamTipoTributosId(){
            $ids = array();
            foreach($this->getVtaTributoWsFeParamTipoTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al WsFeParamTipoTributo */ 	
	public function setVtaTributoWsFeParamTipoTributos($ids){
            $this->deleteVtaTributoWsFeParamTipoTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTributoWsFeParamTipoTributo();
                    $o->setVtaTributoId($id);
                    $o->setWsFeParamTipoTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de WsFeParamTipoTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaTributoWsFeParamTipoTributo(){
            return true;
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ws_fe_param_tipo_tributo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ws_fe_param_tipo_tributo';");
            
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

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_afip' */ 	
	static function getOxCodigoAfip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_AFIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_afip' */ 	
	static function getOsxCodigoAfip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_AFIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_desde' */ 	
	static function getOxFechaDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_desde' */ 	
	static function getOsxFechaDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_hasta' */ 	
	static function getOxFechaHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_hasta' */ 	
	static function getOsxFechaHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos(null, $criterio);
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

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoTributos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ws_fe_param_tipo_tributo_adm');
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
                $c->addTabla(WsFeParamTipoTributo::GEN_TABLA);
                $c->addOrden(WsFeParamTipoTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ws_fe_param_tipo_tributos = WsFeParamTipoTributo::getWsFeParamTipoTributos(null, $c);

                $arr = array();
                foreach($ws_fe_param_tipo_tributos as $ws_fe_param_tipo_tributo){
                    $descripcion = $ws_fe_param_tipo_tributo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>