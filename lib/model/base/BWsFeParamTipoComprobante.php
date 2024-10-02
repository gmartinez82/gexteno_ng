<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BWsFeParamTipoComprobante
{ 
	
	const SES_PAGINACION = 'adm_wsfeparamtipocomprobante_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_wsfeparamtipocomprobante_paginas_registros';
	const SES_CRITERIOS = 'adm_wsfeparamtipocomprobante_criterios';
	
	const GEN_CLASE = 'WsFeParamTipoComprobante';
	const GEN_TABLA = 'ws_fe_param_tipo_comprobante';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BWsFeParamTipoComprobante */ 
	const GEN_ATTR_ID = 'ws_fe_param_tipo_comprobante.id';
	const GEN_ATTR_DESCRIPCION = 'ws_fe_param_tipo_comprobante.descripcion';
	const GEN_ATTR_CODIGO = 'ws_fe_param_tipo_comprobante.codigo';
	const GEN_ATTR_CODIGO_AFIP = 'ws_fe_param_tipo_comprobante.codigo_afip';
	const GEN_ATTR_FECHA_DESDE = 'ws_fe_param_tipo_comprobante.fecha_desde';
	const GEN_ATTR_FECHA_HASTA = 'ws_fe_param_tipo_comprobante.fecha_hasta';
	const GEN_ATTR_OBSERVACION = 'ws_fe_param_tipo_comprobante.observacion';
	const GEN_ATTR_ORDEN = 'ws_fe_param_tipo_comprobante.orden';
	const GEN_ATTR_ESTADO = 'ws_fe_param_tipo_comprobante.estado';
	const GEN_ATTR_CREADO = 'ws_fe_param_tipo_comprobante.creado';
	const GEN_ATTR_CREADO_POR = 'ws_fe_param_tipo_comprobante.creado_por';
	const GEN_ATTR_MODIFICADO = 'ws_fe_param_tipo_comprobante.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ws_fe_param_tipo_comprobante.modificado_por';

	/* Constantes de Atributos Min de BWsFeParamTipoComprobante */ 
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
	

	/* Atributos de BWsFeParamTipoComprobante */ 
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

	/* Getters de BWsFeParamTipoComprobante */ 
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

	/* Setters de BWsFeParamTipoComprobante */ 	
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
            $o = new WsFeParamTipoComprobante();
            $o->setId($fila[WsFeParamTipoComprobante::GEN_ATTR_MIN_ID], false);
            
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

	/* Control de BWsFeParamTipoComprobante */ 	
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

	/* Cambia el estado de BWsFeParamTipoComprobante */ 	
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

	/* Save de BWsFeParamTipoComprobante */ 	
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
                nextval('ws_fe_param_tipo_comprobante_seq'), 
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
                    ) RETURNING currval('ws_fe_param_tipo_comprobante_seq')";
            
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
                 
				 ".WsFeParamTipoComprobante::GEN_TABLA."
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
                     
				 ".WsFeParamTipoComprobante::GEN_TABLA."
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
            $o = new WsFeParamTipoComprobante();
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

	/* Delete de BWsFeParamTipoComprobante */ 	
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
	
            // se elimina la coleccion de VtaTipoFacturaWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoFacturaWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoNotaCreditoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoNotaDebitoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoReciboWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoReciboWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoRemitoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoRemitoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoRemitoAjusteWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTipoFacturaWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTipoFacturaWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTipoNotaCreditoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeTipoNotaDebitoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoAjusteDebeWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoAjusteHaberWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarWsFeParamTipoComprobante(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = WsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);

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
	
		$wsfeparamtipocomprobantes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $wsfeparamtipocomprobante = new WsFeParamTipoComprobante();
                    $wsfeparamtipocomprobante->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $wsfeparamtipocomprobante->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$wsfeparamtipocomprobante->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$wsfeparamtipocomprobante->setCodigoAfip($fila[self::GEN_ATTR_MIN_CODIGO_AFIP]);
			$wsfeparamtipocomprobante->setFechaDesde($fila[self::GEN_ATTR_MIN_FECHA_DESDE]);
			$wsfeparamtipocomprobante->setFechaHasta($fila[self::GEN_ATTR_MIN_FECHA_HASTA]);
			$wsfeparamtipocomprobante->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$wsfeparamtipocomprobante->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$wsfeparamtipocomprobante->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$wsfeparamtipocomprobante->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$wsfeparamtipocomprobante->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$wsfeparamtipocomprobante->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$wsfeparamtipocomprobante->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $wsfeparamtipocomprobantes[] = $wsfeparamtipocomprobante;
		}
		
		return $wsfeparamtipocomprobantes;
	}	
	

	/* Método getWsFeParamTipoComprobantes Habilitados */ 	
	static function getWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getWsFeParamTipoComprobantes para listado de Backend */ 	
	static function getWsFeParamTipoComprobantesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getWsFeParamTipoComprobantesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = WsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeParamTipoComprobantes filtrado para select */ 	
	static function getWsFeParamTipoComprobantesCmbF($paginador = null, $criterio = null){
            $col = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $criterio);

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
            $url = 'ws_fe_param_tipo_comprobante_adm.php';
            $url_gestion = 'ws_fe_param_tipo_comprobante_gestion.php';
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
	

	/* Metodo getVtaTipoFacturaWsFeParamTipoComprobantes */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoFacturaWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatipofacturawsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatipofacturawsfeparamtipocomprobante = VtaTipoFacturaWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatipofacturawsfeparamtipocomprobantes[] = $vtatipofacturawsfeparamtipocomprobante;
            }

            return $vtatipofacturawsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoFacturaWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoFacturaWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoFacturaWsFeParamTipoComprobante */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoFacturaWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoFacturaWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoFacturaWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoFacturaWsFeParamTipoComprobantesCmb() VtaTipoFacturaWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoFacturaWsFeParamTipoComprobante::getVtaTipoFacturaWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoFacturas (Coleccion) relacionados a traves de VtaTipoFacturaWsFeParamTipoComprobante */ 	
	public function getVtaTipoFacturasXVtaTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoFactura::GEN_TABLA);
            $c->addRealJoin(VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA, VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_FACTURA_ID, VtaTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoFactura::getVtaTipoFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoFacturas relacionados a traves de VtaTipoFacturaWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoFacturasXVtaTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoFactura::GEN_TABLA);
            $c->addRealJoin(VtaTipoFacturaWsFeParamTipoComprobante::GEN_TABLA, VtaTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_FACTURA_ID, VtaTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoFactura::getVtaTipoFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoFactura (Objeto) relacionado a traves de VtaTipoFacturaWsFeParamTipoComprobante */ 	
	public function getVtaTipoFacturaXVtaTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoFacturasXVtaTipoFacturaWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoNotaCreditoWsFeParamTipoComprobantes */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoNotaCreditoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiponotacreditowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiponotacreditowsfeparamtipocomprobante = VtaTipoNotaCreditoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiponotacreditowsfeparamtipocomprobantes[] = $vtatiponotacreditowsfeparamtipocomprobante;
            }

            return $vtatiponotacreditowsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoNotaCreditoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoNotaCreditoWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoNotaCreditoWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoNotaCreditoWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoNotaCreditoWsFeParamTipoComprobantesCmb() VtaTipoNotaCreditoWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoNotaCreditoWsFeParamTipoComprobante::getVtaTipoNotaCreditoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaCreditos (Coleccion) relacionados a traves de VtaTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaCreditosXVtaTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaCreditos relacionados a traves de VtaTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoNotaCreditosXVtaTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaCredito (Objeto) relacionado a traves de VtaTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaCreditoXVtaTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaCreditosXVtaTipoNotaCreditoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoNotaDebitoWsFeParamTipoComprobantes */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoNotaDebitoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiponotadebitowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiponotadebitowsfeparamtipocomprobante = VtaTipoNotaDebitoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiponotadebitowsfeparamtipocomprobantes[] = $vtatiponotadebitowsfeparamtipocomprobante;
            }

            return $vtatiponotadebitowsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoNotaDebitoWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmb() VtaTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoNotaDebitoWsFeParamTipoComprobante::getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaDebitos (Coleccion) relacionados a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaDebitosXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaDebitos relacionados a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoNotaDebitosXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaDebito (Objeto) relacionado a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaDebitoXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaDebitosXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoReciboWsFeParamTipoComprobantes */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoReciboWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoReciboWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiporecibowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiporecibowsfeparamtipocomprobante = VtaTipoReciboWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiporecibowsfeparamtipocomprobantes[] = $vtatiporecibowsfeparamtipocomprobante;
            }

            return $vtatiporecibowsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoReciboWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoReciboWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoReciboWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoReciboWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoReciboWsFeParamTipoComprobante */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoReciboWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoReciboWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoReciboWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoReciboWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoReciboWsFeParamTipoComprobantesCmb() VtaTipoReciboWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoReciboWsFeParamTipoComprobante::getVtaTipoReciboWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoRecibos (Coleccion) relacionados a traves de VtaTipoReciboWsFeParamTipoComprobante */ 	
	public function getVtaTipoRecibosXVtaTipoReciboWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA, VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoRecibos relacionados a traves de VtaTipoReciboWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoRecibosXVtaTipoReciboWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(VtaTipoReciboWsFeParamTipoComprobante::GEN_TABLA, VtaTipoReciboWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoRecibo (Objeto) relacionado a traves de VtaTipoReciboWsFeParamTipoComprobante */ 	
	public function getVtaTipoReciboXVtaTipoReciboWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoRecibosXVtaTipoReciboWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoRemitoWsFeParamTipoComprobantes */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoRemitoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoRemitoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiporemitowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiporemitowsfeparamtipocomprobante = VtaTipoRemitoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiporemitowsfeparamtipocomprobantes[] = $vtatiporemitowsfeparamtipocomprobante;
            }

            return $vtatiporemitowsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoRemitoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoRemitoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoRemitoWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoRemitoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoRemitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoRemitoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoRemitoWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoRemitoWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoRemitoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoRemitoWsFeParamTipoComprobantesCmb() VtaTipoRemitoWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoRemitoWsFeParamTipoComprobante::getVtaTipoRemitoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoRemitos (Coleccion) relacionados a traves de VtaTipoRemitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitosXVtaTipoRemitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemito::GEN_TABLA);
            $c->addRealJoin(VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_REMITO_ID, VtaTipoRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRemito::getVtaTipoRemitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoRemitos relacionados a traves de VtaTipoRemitoWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoRemitosXVtaTipoRemitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoRemito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemito::GEN_TABLA);
            $c->addRealJoin(VtaTipoRemitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoRemitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_REMITO_ID, VtaTipoRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRemito::getVtaTipoRemitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoRemito (Objeto) relacionado a traves de VtaTipoRemitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoXVtaTipoRemitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoRemitosXVtaTipoRemitoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoRemitoAjusteWsFeParamTipoComprobantes */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoRemitoAjusteWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoRemitoAjusteWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiporemitoajustewsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiporemitoajustewsfeparamtipocomprobante = VtaTipoRemitoAjusteWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiporemitoajustewsfeparamtipocomprobantes[] = $vtatiporemitoajustewsfeparamtipocomprobante;
            }

            return $vtatiporemitoajustewsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoRemitoAjusteWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoRemitoAjusteWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoRemitoAjusteWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoRemitoAjusteWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoRemitoAjusteWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoRemitoAjusteWsFeParamTipoComprobantesCmb() VtaTipoRemitoAjusteWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoRemitoAjusteWsFeParamTipoComprobante::getVtaTipoRemitoAjusteWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoRemitoAjustes (Coleccion) relacionados a traves de VtaTipoRemitoAjusteWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoAjustesXVtaTipoRemitoAjusteWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA, VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, VtaTipoRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRemitoAjuste::getVtaTipoRemitoAjustes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoRemitoAjustes relacionados a traves de VtaTipoRemitoAjusteWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoRemitoAjustesXVtaTipoRemitoAjusteWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoRemitoAjuste::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_TABLA, VtaTipoRemitoAjusteWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, VtaTipoRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRemitoAjuste::getVtaTipoRemitoAjustes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoRemitoAjuste (Objeto) relacionado a traves de VtaTipoRemitoAjusteWsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoAjusteXVtaTipoRemitoAjusteWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoRemitoAjustesXVtaTipoRemitoAjusteWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getWsFeOpeSolicituds */ 	
	public function getWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(WsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitud = WsFeOpeSolicitud::hidratarObjeto($fila);			
                $wsfeopesolicituds[] = $wsfeopesolicitud;
            }

            return $wsfeopesolicituds;
	}	
	

	/* Método getWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicituds Habilitados */ 	
	public function getWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitud relacionadas */ 	
	public function deleteWsFeOpeSolicituds(){
            $obs = $this->getWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudsCmb() WsFeOpeSolicitud relacionadas */ 	
	public function getWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamPuntoVentas (Coleccion) relacionados a traves de WsFeOpeSolicitud */ 	
	public function getWsFeParamPuntoVentasXWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamPuntoVenta::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitud::GEN_TABLA, WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, WsFeParamPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamPuntoVenta::getWsFeParamPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamPuntoVentas relacionados a traves de WsFeOpeSolicitud */ 	
	public function getCantidadWsFeParamPuntoVentasXWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamPuntoVenta::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitud::GEN_TABLA, WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, WsFeParamPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamPuntoVenta::getWsFeParamPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamPuntoVenta (Objeto) relacionado a traves de WsFeOpeSolicitud */ 	
	public function getWsFeParamPuntoVentaXWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamPuntoVentasXWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeTipoFacturaWsFeParamTipoComprobantes */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTipoFacturaWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetipofacturawsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetipofacturawsfeparamtipocomprobante = PdeTipoFacturaWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $pdetipofacturawsfeparamtipocomprobantes[] = $pdetipofacturawsfeparamtipocomprobante;
            }

            return $pdetipofacturawsfeparamtipocomprobantes;
	}	
	

	/* Método getPdeTipoFacturaWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTipoFacturaWsFeParamTipoComprobantes Habilitados */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTipoFacturaWsFeParamTipoComprobante */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTipoFacturaWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTipoFacturaWsFeParamTipoComprobante relacionadas */ 	
	public function deletePdeTipoFacturaWsFeParamTipoComprobantes(){
            $obs = $this->getPdeTipoFacturaWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTipoFacturaWsFeParamTipoComprobantesCmb() PdeTipoFacturaWsFeParamTipoComprobante relacionadas */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTipoFacturaWsFeParamTipoComprobante::getPdeTipoFacturaWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoFacturas (Coleccion) relacionados a traves de PdeTipoFacturaWsFeParamTipoComprobante */ 	
	public function getPdeTipoFacturasXPdeTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoFactura::GEN_TABLA);
            $c->addRealJoin(PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA, PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_FACTURA_ID, PdeTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoFactura::getPdeTipoFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoFacturas relacionados a traves de PdeTipoFacturaWsFeParamTipoComprobante */ 	
	public function getCantidadPdeTipoFacturasXPdeTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoFactura::GEN_TABLA);
            $c->addRealJoin(PdeTipoFacturaWsFeParamTipoComprobante::GEN_TABLA, PdeTipoFacturaWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_FACTURA_ID, PdeTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoFactura::getPdeTipoFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoFactura (Objeto) relacionado a traves de PdeTipoFacturaWsFeParamTipoComprobante */ 	
	public function getPdeTipoFacturaXPdeTipoFacturaWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoFacturasXPdeTipoFacturaWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeTipoNotaCreditoWsFeParamTipoComprobantes */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTipoNotaCreditoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetiponotacreditowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetiponotacreditowsfeparamtipocomprobante = PdeTipoNotaCreditoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $pdetiponotacreditowsfeparamtipocomprobantes[] = $pdetiponotacreditowsfeparamtipocomprobante;
            }

            return $pdetiponotacreditowsfeparamtipocomprobantes;
	}	
	

	/* Método getPdeTipoNotaCreditoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTipoNotaCreditoWsFeParamTipoComprobantes Habilitados */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTipoNotaCreditoWsFeParamTipoComprobante relacionadas */ 	
	public function deletePdeTipoNotaCreditoWsFeParamTipoComprobantes(){
            $obs = $this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTipoNotaCreditoWsFeParamTipoComprobantesCmb() PdeTipoNotaCreditoWsFeParamTipoComprobante relacionadas */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTipoNotaCreditoWsFeParamTipoComprobante::getPdeTipoNotaCreditoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaCreditos (Coleccion) relacionados a traves de PdeTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaCreditosXPdeTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaCreditos relacionados a traves de PdeTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getCantidadPdeTipoNotaCreditosXPdeTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaCreditoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaCredito (Objeto) relacionado a traves de PdeTipoNotaCreditoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaCreditoXPdeTipoNotaCreditoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaCreditosXPdeTipoNotaCreditoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeTipoNotaDebitoWsFeParamTipoComprobantes */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTipoNotaDebitoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetiponotadebitowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetiponotadebitowsfeparamtipocomprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $pdetiponotadebitowsfeparamtipocomprobantes[] = $pdetiponotadebitowsfeparamtipocomprobante;
            }

            return $pdetiponotadebitowsfeparamtipocomprobantes;
	}	
	

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobantes Habilitados */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function deletePdeTipoNotaDebitoWsFeParamTipoComprobantes(){
            $obs = $this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmb() PdeTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTipoNotaDebitoWsFeParamTipoComprobante::getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaDebitos (Coleccion) relacionados a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaDebitosXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaDebitos relacionados a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getCantidadPdeTipoNotaDebitosXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, PdeTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaDebito (Objeto) relacionado a traves de PdeTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaDebitoXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaDebitosXPdeTipoNotaDebitoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoAjusteDebeWsFeParamTipoComprobantes */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoAjusteDebeWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoAjusteDebeWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatipoajustedebewsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatipoajustedebewsfeparamtipocomprobante = VtaTipoAjusteDebeWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatipoajustedebewsfeparamtipocomprobantes[] = $vtatipoajustedebewsfeparamtipocomprobante;
            }

            return $vtatipoajustedebewsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoAjusteDebeWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoAjusteDebeWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoAjusteDebeWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoAjusteDebeWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoAjusteDebeWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoAjusteDebeWsFeParamTipoComprobantesCmb() VtaTipoAjusteDebeWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoAjusteDebeWsFeParamTipoComprobante::getVtaTipoAjusteDebeWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoAjusteDebes (Coleccion) relacionados a traves de VtaTipoAjusteDebeWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteDebesXVtaTipoAjusteDebeWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA, VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, VtaTipoAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteDebe::getVtaTipoAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoAjusteDebes relacionados a traves de VtaTipoAjusteDebeWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoAjusteDebesXVtaTipoAjusteDebeWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_TABLA, VtaTipoAjusteDebeWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, VtaTipoAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteDebe::getVtaTipoAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoAjusteDebe (Objeto) relacionado a traves de VtaTipoAjusteDebeWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteDebeXVtaTipoAjusteDebeWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoAjusteDebesXVtaTipoAjusteDebeWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoAjusteHaberWsFeParamTipoComprobantes */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoAjusteHaberWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoAjusteHaberWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatipoajustehaberwsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatipoajustehaberwsfeparamtipocomprobante = VtaTipoAjusteHaberWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatipoajustehaberwsfeparamtipocomprobantes[] = $vtatipoajustehaberwsfeparamtipocomprobante;
            }

            return $vtatipoajustehaberwsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoAjusteHaberWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoAjusteHaberWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoAjusteHaberWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoAjusteHaberWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoAjusteHaberWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoAjusteHaberWsFeParamTipoComprobantesCmb() VtaTipoAjusteHaberWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoAjusteHaberWsFeParamTipoComprobante::getVtaTipoAjusteHaberWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoAjusteHabers (Coleccion) relacionados a traves de VtaTipoAjusteHaberWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteHabersXVtaTipoAjusteHaberWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA, VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoAjusteHabers relacionados a traves de VtaTipoAjusteHaberWsFeParamTipoComprobante */ 	
	public function getCantidadVtaTipoAjusteHabersXVtaTipoAjusteHaberWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_TABLA, VtaTipoAjusteHaberWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoAjusteHaber (Objeto) relacionado a traves de VtaTipoAjusteHaberWsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteHaberXVtaTipoAjusteHaberWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoAjusteHabersXVtaTipoAjusteHaberWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaTipoFacturas asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoFacturaWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoFacturaWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoFacturas asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoFacturaWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoFacturaWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoFacturaWsFeParamTipoComprobante();
                    $o->setVtaTipoFacturaId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoFactura en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoFacturaWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoNotaCreditos asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaCreditoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoNotaCreditoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoNotaCreditos asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoNotaCreditoWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoNotaCreditoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoNotaCreditoWsFeParamTipoComprobante();
                    $o->setVtaTipoNotaCreditoId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoNotaCredito en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoNotaCreditoWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoNotaDebitos asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoNotaDebitos asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoNotaDebitoWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoNotaDebitoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoNotaDebitoWsFeParamTipoComprobante();
                    $o->setVtaTipoNotaDebitoId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoNotaDebito en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoNotaDebitoWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoRecibos asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoReciboWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoReciboWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoRecibos asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoReciboWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoReciboWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoReciboWsFeParamTipoComprobante();
                    $o->setVtaTipoReciboId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoRecibo en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoReciboWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoRemitos asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoRemitoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoRemitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoRemitos asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoRemitoWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoRemitoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoRemitoWsFeParamTipoComprobante();
                    $o->setVtaTipoRemitoId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoRemito en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoRemitoWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoRemitoAjustes asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoRemitoAjusteWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoRemitoAjusteWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoRemitoAjusteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoRemitoAjustes asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoRemitoAjusteWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoRemitoAjusteWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoRemitoAjusteWsFeParamTipoComprobante();
                    $o->setVtaTipoRemitoAjusteId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoRemitoAjuste en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoRemitoAjusteWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoFacturas asignados a WsFeParamTipoComprobante */ 	
	public function getPdeTipoFacturaWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getPdeTipoFacturaWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getPdeTipoFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoFacturas asignados al WsFeParamTipoComprobante */ 	
	public function setPdeTipoFacturaWsFeParamTipoComprobantes($ids){
            $this->deletePdeTipoFacturaWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeTipoFacturaWsFeParamTipoComprobante();
                    $o->setPdeTipoFacturaId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoFactura en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionPdeTipoFacturaWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoNotaCreditos asignados a WsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaCreditoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getPdeTipoNotaCreditoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getPdeTipoNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoNotaCreditos asignados al WsFeParamTipoComprobante */ 	
	public function setPdeTipoNotaCreditoWsFeParamTipoComprobantes($ids){
            $this->deletePdeTipoNotaCreditoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeTipoNotaCreditoWsFeParamTipoComprobante();
                    $o->setPdeTipoNotaCreditoId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoNotaCredito en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionPdeTipoNotaCreditoWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoNotaDebitos asignados a WsFeParamTipoComprobante */ 	
	public function getPdeTipoNotaDebitoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getPdeTipoNotaDebitoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getPdeTipoNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoNotaDebitos asignados al WsFeParamTipoComprobante */ 	
	public function setPdeTipoNotaDebitoWsFeParamTipoComprobantes($ids){
            $this->deletePdeTipoNotaDebitoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
                    $o->setPdeTipoNotaDebitoId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoNotaDebito en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionPdeTipoNotaDebitoWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoAjusteDebes asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteDebeWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoAjusteDebeWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoAjusteDebeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoAjusteDebes asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoAjusteDebeWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoAjusteDebeWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoAjusteDebeWsFeParamTipoComprobante();
                    $o->setVtaTipoAjusteDebeId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoAjusteDebe en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoAjusteDebeWsFeParamTipoComprobante(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoAjusteHabers asignados a WsFeParamTipoComprobante */ 	
	public function getVtaTipoAjusteHaberWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoAjusteHaberWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getVtaTipoAjusteHaberId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoAjusteHabers asignados al WsFeParamTipoComprobante */ 	
	public function setVtaTipoAjusteHaberWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoAjusteHaberWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoAjusteHaberWsFeParamTipoComprobante();
                    $o->setVtaTipoAjusteHaberId($id);
                    $o->setWsFeParamTipoComprobanteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoAjusteHaber en el alta de WsFeParamTipoComprobante */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoAjusteHaberWsFeParamTipoComprobante(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ws_fe_param_tipo_comprobante'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ws_fe_param_tipo_comprobante';");
            
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

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_afip' */ 	
	static function getOxCodigoAfip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_AFIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_desde' */ 	
	static function getOxFechaDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_hasta' */ 	
	static function getOxFechaHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes(null, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
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

            $obs = self::getWsFeParamTipoComprobantes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ws_fe_param_tipo_comprobante_adm');
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
                $c->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
                $c->addOrden(WsFeParamTipoComprobante::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ws_fe_param_tipo_comprobantes = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes(null, $c);

                $arr = array();
                foreach($ws_fe_param_tipo_comprobantes as $ws_fe_param_tipo_comprobante){
                    $descripcion = $ws_fe_param_tipo_comprobante->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>