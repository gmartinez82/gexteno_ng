<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaHojaRuta
{ 
	
	const SES_PAGINACION = 'adm_vtahojaruta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtahojaruta_paginas_registros';
	const SES_CRITERIOS = 'adm_vtahojaruta_criterios';
	
	const GEN_CLASE = 'VtaHojaRuta';
	const GEN_TABLA = 'vta_hoja_ruta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaHojaRuta */ 
	const GEN_ATTR_ID = 'vta_hoja_ruta.id';
	const GEN_ATTR_DESCRIPCION = 'vta_hoja_ruta.descripcion';
	const GEN_ATTR_GRAL_RUTA_ID = 'vta_hoja_ruta.gral_ruta_id';
	const GEN_ATTR_OPE_CHOFER_ID = 'vta_hoja_ruta.ope_chofer_id';
	const GEN_ATTR_FECHA_DESPACHO = 'vta_hoja_ruta.fecha_despacho';
	const GEN_ATTR_FECHA_MAXIMA_PEDIDO = 'vta_hoja_ruta.fecha_maxima_pedido';
	const GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID = 'vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id';
	const GEN_ATTR_CODIGO = 'vta_hoja_ruta.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_hoja_ruta.observacion';
	const GEN_ATTR_ORDEN = 'vta_hoja_ruta.orden';
	const GEN_ATTR_ESTADO = 'vta_hoja_ruta.estado';
	const GEN_ATTR_CREADO = 'vta_hoja_ruta.creado';
	const GEN_ATTR_CREADO_POR = 'vta_hoja_ruta.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_hoja_ruta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_hoja_ruta.modificado_por';

	/* Constantes de Atributos Min de BVtaHojaRuta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_RUTA_ID = 'gral_ruta_id';
	const GEN_ATTR_MIN_OPE_CHOFER_ID = 'ope_chofer_id';
	const GEN_ATTR_MIN_FECHA_DESPACHO = 'fecha_despacho';
	const GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO = 'fecha_maxima_pedido';
	const GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID = 'vta_hoja_ruta_tipo_estado_id';
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
	

	/* Atributos de BVtaHojaRuta */ 
	private $id;
	private $descripcion;
	private $gral_ruta_id;
	private $ope_chofer_id;
	private $fecha_despacho;
	private $fecha_maxima_pedido;
	private $vta_hoja_ruta_tipo_estado_id;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaHojaRuta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralRutaId(){ if(isset($this->gral_ruta_id)){ return $this->gral_ruta_id; }else{ return 'null'; } }
	public function getOpeChoferId(){ if(isset($this->ope_chofer_id)){ return $this->ope_chofer_id; }else{ return 'null'; } }
	public function getFechaDespacho(){ if(isset($this->fecha_despacho)){ return $this->fecha_despacho; }else{ return ''; } }
	public function getFechaMaximaPedido(){ if(isset($this->fecha_maxima_pedido)){ return $this->fecha_maxima_pedido; }else{ return ''; } }
	public function getVtaHojaRutaTipoEstadoId(){ if(isset($this->vta_hoja_ruta_tipo_estado_id)){ return $this->vta_hoja_ruta_tipo_estado_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaHojaRuta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_RUTA_ID."
				, ".self::GEN_ATTR_OPE_CHOFER_ID."
				, ".self::GEN_ATTR_FECHA_DESPACHO."
				, ".self::GEN_ATTR_FECHA_MAXIMA_PEDIDO."
				, ".self::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID."
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
				$this->setGralRutaId($fila[self::GEN_ATTR_MIN_GRAL_RUTA_ID]);
				$this->setOpeChoferId($fila[self::GEN_ATTR_MIN_OPE_CHOFER_ID]);
				$this->setFechaDespacho($fila[self::GEN_ATTR_MIN_FECHA_DESPACHO]);
				$this->setFechaMaximaPedido($fila[self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO]);
				$this->setVtaHojaRutaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID]);
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
	public function setGralRutaId($v){ $this->gral_ruta_id = $v; }
	public function setOpeChoferId($v){ $this->ope_chofer_id = $v; }
	public function setFechaDespacho($v){ $this->fecha_despacho = $v; }
	public function setFechaMaximaPedido($v){ $this->fecha_maxima_pedido = $v; }
	public function setVtaHojaRutaTipoEstadoId($v){ $this->vta_hoja_ruta_tipo_estado_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaHojaRuta();
            $o->setId($fila[VtaHojaRuta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralRutaId($fila[self::GEN_ATTR_MIN_GRAL_RUTA_ID]);
			$o->setOpeChoferId($fila[self::GEN_ATTR_MIN_OPE_CHOFER_ID]);
			$o->setFechaDespacho($fila[self::GEN_ATTR_MIN_FECHA_DESPACHO]);
			$o->setFechaMaximaPedido($fila[self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO]);
			$o->setVtaHojaRutaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID]);
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

	/* Control de BVtaHojaRuta */ 	
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

	/* Cambia el estado de BVtaHojaRuta */ 	
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

	/* Save de BVtaHojaRuta */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_RUTA_ID."
						, ".self::GEN_ATTR_MIN_OPE_CHOFER_ID."
						, ".self::GEN_ATTR_MIN_FECHA_DESPACHO."
						, ".self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_hoja_ruta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralRutaId()."
						, ".$this->getOpeChoferId()."
						, '".$this->getFechaDespacho()."'
						, '".$this->getFechaMaximaPedido()."'
						, ".$this->getVtaHojaRutaTipoEstadoId()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_hoja_ruta_seq')";
            
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
                 
				 ".VtaHojaRuta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_RUTA_ID." = ".$this->getGralRutaId()."
						, ".self::GEN_ATTR_MIN_OPE_CHOFER_ID." = ".$this->getOpeChoferId()."
						, ".self::GEN_ATTR_MIN_FECHA_DESPACHO." = '".$this->getFechaDespacho()."'
						, ".self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO." = '".$this->getFechaMaximaPedido()."'
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID." = ".$this->getVtaHojaRutaTipoEstadoId()."
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
						, ".self::GEN_ATTR_MIN_GRAL_RUTA_ID."
						, ".self::GEN_ATTR_MIN_OPE_CHOFER_ID."
						, ".self::GEN_ATTR_MIN_FECHA_DESPACHO."
						, ".self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID."
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
						, ".$this->getGralRutaId()."
						, ".$this->getOpeChoferId()."
						, '".$this->getFechaDespacho()."'
						, '".$this->getFechaMaximaPedido()."'
						, ".$this->getVtaHojaRutaTipoEstadoId()."
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
                     
				 ".VtaHojaRuta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_RUTA_ID." = ".$this->getGralRutaId()."
						, ".self::GEN_ATTR_MIN_OPE_CHOFER_ID." = ".$this->getOpeChoferId()."
						, ".self::GEN_ATTR_MIN_FECHA_DESPACHO." = '".$this->getFechaDespacho()."'
						, ".self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO." = '".$this->getFechaMaximaPedido()."'
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID." = ".$this->getVtaHojaRutaTipoEstadoId()."
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
            $o = new VtaHojaRuta();
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

	/* Delete de BVtaHojaRuta */ 	
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
	
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaHojaRutaEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaHojaRutaEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaHojaRutaEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaHojaRutaVtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaHojaRutaVtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaHojaRutaVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaHojaRutaVtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaHojaRutaVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaHojaRuta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaHojaRutas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaHojaRuta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtahojarutas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtahojaruta = new VtaHojaRuta();
                    $vtahojaruta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtahojaruta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtahojaruta->setGralRutaId($fila[self::GEN_ATTR_MIN_GRAL_RUTA_ID]);
			$vtahojaruta->setOpeChoferId($fila[self::GEN_ATTR_MIN_OPE_CHOFER_ID]);
			$vtahojaruta->setFechaDespacho($fila[self::GEN_ATTR_MIN_FECHA_DESPACHO]);
			$vtahojaruta->setFechaMaximaPedido($fila[self::GEN_ATTR_MIN_FECHA_MAXIMA_PEDIDO]);
			$vtahojaruta->setVtaHojaRutaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_TIPO_ESTADO_ID]);
			$vtahojaruta->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtahojaruta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtahojaruta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtahojaruta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtahojaruta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtahojaruta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtahojaruta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtahojaruta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtahojarutas[] = $vtahojaruta;
		}
		
		return $vtahojarutas;
	}	
	

	/* Método getVtaHojaRutas Habilitados */ 	
	static function getVtaHojaRutasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaHojaRuta::getVtaHojaRutas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaHojaRutas para listado de Backend */ 	
	static function getVtaHojaRutasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaHojaRuta::getVtaHojaRutas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaHojaRutasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaHojaRuta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaHojaRuta::getVtaHojaRutas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaHojaRutas filtrado para select */ 	
	static function getVtaHojaRutasCmbF($paginador = null, $criterio = null){
            $col = VtaHojaRuta::getVtaHojaRutas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaHojaRutas filtrado por una coleccion de objetos foraneos de GralRuta */ 	
	static function getVtaHojaRutasXGralRutas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->addOrden(VtaHojaRuta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaHojaRuta::getVtaHojaRutas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralRutaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaHojaRutas filtrado por una coleccion de objetos foraneos de OpeChofer */ 	
	static function getVtaHojaRutasXOpeChofers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaHojaRuta::GEN_ATTR_OPE_CHOFER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->addOrden(VtaHojaRuta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaHojaRuta::getVtaHojaRutas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getOpeChoferId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaHojaRutas filtrado por una coleccion de objetos foraneos de VtaHojaRutaTipoEstado */ 	
	static function getVtaHojaRutasXVtaHojaRutaTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaHojaRuta::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->addOrden(VtaHojaRuta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaHojaRuta::getVtaHojaRutas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaHojaRutaTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_hoja_ruta_adm.php';
            $url_gestion = 'vta_hoja_ruta_gestion.php';
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
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaHojaRutaEstados */ 	
	public function getVtaHojaRutaEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaHojaRutaEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaHojaRutaEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaHojaRutaEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaHojaRutaEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaHojaRutaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaHojaRutaEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaHojaRutaEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtahojarutaestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtahojarutaestado = VtaHojaRutaEstado::hidratarObjeto($fila);			
                $vtahojarutaestados[] = $vtahojarutaestado;
            }

            return $vtahojarutaestados;
	}	
	

	/* Método getVtaHojaRutaEstadosBloque para MasInfo */ 	
	public function getVtaHojaRutaEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaHojaRutaEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaHojaRutaEstados Habilitados */ 	
	public function getVtaHojaRutaEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaHojaRutaEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaHojaRutaEstado */ 	
	public function getVtaHojaRutaEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaHojaRutaEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaHojaRutaEstado relacionadas */ 	
	public function deleteVtaHojaRutaEstados(){
            $obs = $this->getVtaHojaRutaEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaHojaRutaEstadosCmb() VtaHojaRutaEstado relacionadas */ 	
	public function getVtaHojaRutaEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaHojaRutaEstado::getVtaHojaRutaEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaHojaRutaTipoEstados (Coleccion) relacionados a traves de VtaHojaRutaEstado */ 	
	public function getVtaHojaRutaTipoEstadosXVtaHojaRutaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaHojaRutaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaEstado::GEN_TABLA, VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, VtaHojaRutaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaHojaRutaTipoEstado::getVtaHojaRutaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaHojaRutaTipoEstados relacionados a traves de VtaHojaRutaEstado */ 	
	public function getCantidadVtaHojaRutaTipoEstadosXVtaHojaRutaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaHojaRutaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaHojaRutaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaEstado::GEN_TABLA, VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, VtaHojaRutaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaHojaRutaTipoEstado::getVtaHojaRutaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaHojaRutaTipoEstado (Objeto) relacionado a traves de VtaHojaRutaEstado */ 	
	public function getVtaHojaRutaTipoEstadoXVtaHojaRutaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaHojaRutaTipoEstadosXVtaHojaRutaEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaHojaRutaVtaRemitos */ 	
	public function getVtaHojaRutaVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaHojaRutaVtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaHojaRutaVtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaHojaRutaVtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaHojaRutaVtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaHojaRutaVtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtahojarutavtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtahojarutavtaremito = VtaHojaRutaVtaRemito::hidratarObjeto($fila);			
                $vtahojarutavtaremitos[] = $vtahojarutavtaremito;
            }

            return $vtahojarutavtaremitos;
	}	
	

	/* Método getVtaHojaRutaVtaRemitosBloque para MasInfo */ 	
	public function getVtaHojaRutaVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaHojaRutaVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemitos Habilitados */ 	
	public function getVtaHojaRutaVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaHojaRutaVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemito */ 	
	public function getVtaHojaRutaVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaHojaRutaVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaHojaRutaVtaRemito relacionadas */ 	
	public function deleteVtaHojaRutaVtaRemitos(){
            $obs = $this->getVtaHojaRutaVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaHojaRutaVtaRemitosCmb() VtaHojaRutaVtaRemito relacionadas */ 	
	public function getVtaHojaRutaVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaVtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaHojaRutaVtaRemito::getVtaHojaRutaVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitos (Coleccion) relacionados a traves de VtaHojaRutaVtaRemito */ 	
	public function getVtaRemitosXVtaHojaRutaVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemito::GEN_TABLA, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitos relacionados a traves de VtaHojaRutaVtaRemito */ 	
	public function getCantidadVtaRemitosXVtaHojaRutaVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemito::GEN_TABLA, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemito (Objeto) relacionado a traves de VtaHojaRutaVtaRemito */ 	
	public function getVtaRemitoXVtaHojaRutaVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitosXVtaHojaRutaVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaHojaRutaVtaRemitoAjustes */ 	
	public function getVtaHojaRutaVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaHojaRutaVtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaHojaRutaVtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaHojaRutaVtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtahojarutavtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtahojarutavtaremitoajuste = VtaHojaRutaVtaRemitoAjuste::hidratarObjeto($fila);			
                $vtahojarutavtaremitoajustes[] = $vtahojarutavtaremitoajuste;
            }

            return $vtahojarutavtaremitoajustes;
	}	
	

	/* Método getVtaHojaRutaVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaHojaRutaVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemitoAjustes Habilitados */ 	
	public function getVtaHojaRutaVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaHojaRutaVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaHojaRutaVtaRemitoAjuste relacionadas */ 	
	public function deleteVtaHojaRutaVtaRemitoAjustes(){
            $obs = $this->getVtaHojaRutaVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaHojaRutaVtaRemitoAjustesCmb() VtaHojaRutaVtaRemitoAjuste relacionadas */ 	
	public function getVtaHojaRutaVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaHojaRutaVtaRemitoAjuste::getVtaHojaRutaVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoAjustes (Coleccion) relacionados a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoAjustes relacionados a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getCantidadVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoAjuste::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoAjuste (Objeto) relacionado a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaRemitoAjusteXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaRemitos asignados a VtaHojaRuta */ 	
	public function getVtaHojaRutaVtaRemitosId(){
            $ids = array();
            foreach($this->getVtaHojaRutaVtaRemitos() as $o){
            
                $ids[] = $o->getVtaRemitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaRemitos asignados al VtaHojaRuta */ 	
	public function setVtaHojaRutaVtaRemitos($ids){
            $this->deleteVtaHojaRutaVtaRemitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaHojaRutaVtaRemito();
                    $o->setVtaRemitoId($id);
                    $o->setVtaHojaRutaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaRemito en el alta de VtaHojaRuta */ 	
	public function getAltaMostrarBloqueRelacionVtaHojaRutaVtaRemito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaRemitoAjustes asignados a VtaHojaRuta */ 	
	public function getVtaHojaRutaVtaRemitoAjustesId(){
            $ids = array();
            foreach($this->getVtaHojaRutaVtaRemitoAjustes() as $o){
            
                $ids[] = $o->getVtaRemitoAjusteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaRemitoAjustes asignados al VtaHojaRuta */ 	
	public function setVtaHojaRutaVtaRemitoAjustes($ids){
            $this->deleteVtaHojaRutaVtaRemitoAjustes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaHojaRutaVtaRemitoAjuste();
                    $o->setVtaRemitoAjusteId($id);
                    $o->setVtaHojaRutaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaRemitoAjuste en el alta de VtaHojaRuta */ 	
	public function getAltaMostrarBloqueRelacionVtaHojaRutaVtaRemitoAjuste(){
            return true;
	}
	

	/* Metodo que retorna el GralRuta (Clave Foranea) */ 	
    public function getGralRuta(){
        $o = new GralRuta();
        $o->setId($this->getGralRutaId());
        return $o;			
    }

	/* Metodo que retorna el GralRuta (Clave Foranea) en Array */ 	
    public function getGralRutaEnArray(&$arr_os){
        if($this->getGralRutaId() != 'null'){
            if(isset($arr_os[$this->getGralRutaId()])){
                $o = $arr_os[$this->getGralRutaId()];
            }else{
                $o = GralRuta::getOxId($this->getGralRutaId());
                if($o){
                    $arr_os[$this->getGralRutaId()] = $o;
                }
            }
        }else{
            $o = new GralRuta();
        }
        return $o;		
    }

	/* Metodo que retorna el OpeChofer (Clave Foranea) */ 	
    public function getOpeChofer(){
        $o = new OpeChofer();
        $o->setId($this->getOpeChoferId());
        return $o;			
    }

	/* Metodo que retorna el OpeChofer (Clave Foranea) en Array */ 	
    public function getOpeChoferEnArray(&$arr_os){
        if($this->getOpeChoferId() != 'null'){
            if(isset($arr_os[$this->getOpeChoferId()])){
                $o = $arr_os[$this->getOpeChoferId()];
            }else{
                $o = OpeChofer::getOxId($this->getOpeChoferId());
                if($o){
                    $arr_os[$this->getOpeChoferId()] = $o;
                }
            }
        }else{
            $o = new OpeChofer();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaHojaRutaTipoEstado (Clave Foranea) */ 	
    public function getVtaHojaRutaTipoEstado(){
        $o = new VtaHojaRutaTipoEstado();
        $o->setId($this->getVtaHojaRutaTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaHojaRutaTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaHojaRutaTipoEstadoEnArray(&$arr_os){
        if($this->getVtaHojaRutaTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaHojaRutaTipoEstadoId()])){
                $o = $arr_os[$this->getVtaHojaRutaTipoEstadoId()];
            }else{
                $o = VtaHojaRutaTipoEstado::getOxId($this->getVtaHojaRutaTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaHojaRutaTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaHojaRutaTipoEstado();
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
            		
        if($contexto_solicitante != GralRuta::GEN_CLASE){
            if($this->getGralRuta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralRuta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralRuta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != OpeChofer::GEN_CLASE){
            if($this->getOpeChofer()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(OpeChofer::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getOpeChofer()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaHojaRutaTipoEstado::GEN_CLASE){
            if($this->getVtaHojaRutaTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaHojaRutaTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaHojaRutaTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_hoja_ruta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_hoja_ruta';");
            
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

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_ruta_id' */ 	
	static function getOxGralRutaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_RUTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_ruta_id' */ 	
	static function getOsxGralRutaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_RUTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ope_chofer_id' */ 	
	static function getOxOpeChoferId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OPE_CHOFER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ope_chofer_id' */ 	
	static function getOsxOpeChoferId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OPE_CHOFER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_despacho' */ 	
	static function getOxFechaDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_despacho' */ 	
	static function getOsxFechaDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_maxima_pedido' */ 	
	static function getOxFechaMaximaPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_MAXIMA_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_maxima_pedido' */ 	
	static function getOsxFechaMaximaPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_MAXIMA_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_hoja_ruta_tipo_estado_id' */ 	
	static function getOxVtaHojaRutaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_hoja_ruta_tipo_estado_id' */ 	
	static function getOsxVtaHojaRutaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas(null, $criterio);
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

            $obs = self::getVtaHojaRutas($paginador, $criterio);
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

            $obs = self::getVtaHojaRutas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_hoja_ruta_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_despacho' */ 	
	public function getFechaDespachoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaDespacho(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDespachoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDespachoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_maxima_pedido' */ 	
	public function getFechaMaximaPedidoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaMaximaPedido(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaMaximaPedidoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaMaximaPedidoDiferenciaDias();
        
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

	/* setea VtaHojaRutaEstado actual del 'VtaHojaRuta' */ 	
	public function setVtaHojaRutaEstadoDesdeBackend($codigo, $observacion){
            return $this->setVtaHojaRutaEstado($codigo, $observacion);
        }
        

	/* setea VtaHojaRutaEstado actual del 'VtaHojaRuta' */ 	
	public function setVtaHojaRutaEstado($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los VtaHojaRutaEstado del VtaHojaRuta
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getVtaHojaRutaEstados() as $vta_hoja_ruta_estado) {
                $vta_hoja_ruta_estado->setActual(0);
                $vta_hoja_ruta_estado->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo VtaHojaRutaEstado del VtaHojaRuta        
            // --------------------------------------------------------------------
            $vta_hoja_ruta_tipo_estado = VtaHojaRutaTipoEstado::getOxCodigo($codigo);

            $vta_hoja_ruta_estado = new VtaHojaRutaEstado();
            $vta_hoja_ruta_estado->setVtaHojaRutaId($this->getId());
            $vta_hoja_ruta_estado->setVtaHojaRutaTipoEstadoId($vta_hoja_ruta_tipo_estado->getId());
            $vta_hoja_ruta_estado->setInicial($inicial);
            $vta_hoja_ruta_estado->setActual(1);
            $vta_hoja_ruta_estado->setEstado(1);
            $vta_hoja_ruta_estado->setObservacion($observacion);
            $vta_hoja_ruta_estado->save();

            // --------------------------------------------------------------------
            // se actualiza el VtaHojaRutaEstado en VtaHojaRuta        
            // --------------------------------------------------------------------
            $this->setVtaHojaRutaTipoEstadoId($vta_hoja_ruta_tipo_estado->getId());
            $this->saveDesdeProceso();

            return $vta_hoja_ruta_estado;
	}

	/* devuelve el VtaHojaRutaEstado actual del 'VtaHojaRuta' */ 	
	public function getVtaHojaRutaEstadoActual(){
            
            $c = new Criterio();
            $c->add(VtaHojaRutaEstado::GEN_ATTR_VTA_HOJA_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->add(VtaHojaRutaEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaEstado::GEN_TABLA);
            $c->setCriterios();

            $vta_hoja_ruta_estados = VtaHojaRutaEstado::getVtaHojaRutaEstados(null, $c);
            foreach ($vta_hoja_ruta_estados as $vta_hoja_ruta_estado) {
                return $vta_hoja_ruta_estado;
            }
            return false;
	}

	/* devuelve el VtaHojaRutaTipoEstado potenciales para el 'VtaHojaRuta' */ 	
	public function getVtaHojaRutaTipoEstadosPotenciales(){
            $vta_hoja_ruta_tipo_estados = VtaHojaRutaTipoEstado::getVtaHojaRutaTipoEstados(null, null, true);
            return $vta_hoja_ruta_tipo_estados;
	}

	/* devuelve el VtaHojaRutaTipoEstado en CMB potenciales para el 'VtaHojaRuta' */ 	
	public function getVtaHojaRutaTipoEstadosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getVtaHojaRutaTipoEstadosPotenciales() as $vta_hoja_ruta_tipo_estado) {
                $cont++;
                $arr[$cont]['cod'] = $vta_hoja_ruta_tipo_estado->getId();
                $arr[$cont]['descripcion'] = $vta_hoja_ruta_tipo_estado->getDescripcionParaSelect();
            }
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(VtaHojaRuta::GEN_TABLA);
                $c->addOrden(VtaHojaRuta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_hoja_rutas = VtaHojaRuta::getVtaHojaRutas(null, $c);

                $arr = array();
                foreach($vta_hoja_rutas as $vta_hoja_ruta){
                    $descripcion = $vta_hoja_ruta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>