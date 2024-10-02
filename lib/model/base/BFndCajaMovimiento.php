<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BFndCajaMovimiento
{ 
	
	const SES_PAGINACION = 'adm_fndcajamovimiento_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_fndcajamovimiento_paginas_registros';
	const SES_CRITERIOS = 'adm_fndcajamovimiento_criterios';
	
	const GEN_CLASE = 'FndCajaMovimiento';
	const GEN_TABLA = 'fnd_caja_movimiento';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BFndCajaMovimiento */ 
	const GEN_ATTR_ID = 'fnd_caja_movimiento.id';
	const GEN_ATTR_DESCRIPCION = 'fnd_caja_movimiento.descripcion';
	const GEN_ATTR_FND_CAJA_ORIGEN = 'fnd_caja_movimiento.fnd_caja_origen';
	const GEN_ATTR_FND_CAJA_DESTINO = 'fnd_caja_movimiento.fnd_caja_destino';
	const GEN_ATTR_FND_CAJA_TIPO_MOVIMIENTO_ID = 'fnd_caja_movimiento.fnd_caja_tipo_movimiento_id';
	const GEN_ATTR_AUTORIZADO = 'fnd_caja_movimiento.autorizado';
	const GEN_ATTR_AUTORIZADO_EL = 'fnd_caja_movimiento.autorizado_el';
	const GEN_ATTR_AUTORIZADO_POR = 'fnd_caja_movimiento.autorizado_por';
	const GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID = 'fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id';
	const GEN_ATTR_CODIGO = 'fnd_caja_movimiento.codigo';
	const GEN_ATTR_OBSERVACION = 'fnd_caja_movimiento.observacion';
	const GEN_ATTR_ORDEN = 'fnd_caja_movimiento.orden';
	const GEN_ATTR_ESTADO = 'fnd_caja_movimiento.estado';
	const GEN_ATTR_CREADO = 'fnd_caja_movimiento.creado';
	const GEN_ATTR_CREADO_POR = 'fnd_caja_movimiento.creado_por';
	const GEN_ATTR_MODIFICADO = 'fnd_caja_movimiento.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'fnd_caja_movimiento.modificado_por';

	/* Constantes de Atributos Min de BFndCajaMovimiento */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_FND_CAJA_ORIGEN = 'fnd_caja_origen';
	const GEN_ATTR_MIN_FND_CAJA_DESTINO = 'fnd_caja_destino';
	const GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID = 'fnd_caja_tipo_movimiento_id';
	const GEN_ATTR_MIN_AUTORIZADO = 'autorizado';
	const GEN_ATTR_MIN_AUTORIZADO_EL = 'autorizado_el';
	const GEN_ATTR_MIN_AUTORIZADO_POR = 'autorizado_por';
	const GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID = 'fnd_caja_movimiento_tipo_estado_id';
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
	

	/* Atributos de BFndCajaMovimiento */ 
	private $id;
	private $descripcion;
	private $fnd_caja_origen;
	private $fnd_caja_destino;
	private $fnd_caja_tipo_movimiento_id;
	private $autorizado;
	private $autorizado_el;
	private $autorizado_por;
	private $fnd_caja_movimiento_tipo_estado_id;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BFndCajaMovimiento */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getFndCajaOrigen(){ if(isset($this->fnd_caja_origen)){ return $this->fnd_caja_origen; }else{ return 0; } }
	public function getFndCajaOrigenObj(){ if(isset($this->fnd_caja_origen)){ return FndCaja::getOxId($this->fnd_caja_origen); }else{ return new FndCaja(); } }
	public function getFndCajaDestino(){ if(isset($this->fnd_caja_destino)){ return $this->fnd_caja_destino; }else{ return 0; } }
	public function getFndCajaDestinoObj(){ if(isset($this->fnd_caja_destino)){ return FndCaja::getOxId($this->fnd_caja_destino); }else{ return new FndCaja(); } }
	public function getFndCajaTipoMovimientoId(){ if(isset($this->fnd_caja_tipo_movimiento_id)){ return $this->fnd_caja_tipo_movimiento_id; }else{ return 'null'; } }
	public function getAutorizado(){ if(isset($this->autorizado)){ return $this->autorizado; }else{ return 0; } }
	public function getAutorizadoEl(){ if(isset($this->autorizado_el)){ return $this->autorizado_el; }else{ return ''; } }
	public function getAutorizadoPor(){ if(isset($this->autorizado_por)){ return $this->autorizado_por; }else{ return 'null'; } }
	public function getAutorizadoPorObj(){ if(isset($this->autorizado_por)){ return UsUsuario::getOxId($this->autorizado_por); }else{ return new UsUsuario(); } }
	public function getFndCajaMovimientoTipoEstadoId(){ if(isset($this->fnd_caja_movimiento_tipo_estado_id)){ return $this->fnd_caja_movimiento_tipo_estado_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BFndCajaMovimiento */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_FND_CAJA_ORIGEN."
				, ".self::GEN_ATTR_FND_CAJA_DESTINO."
				, ".self::GEN_ATTR_FND_CAJA_TIPO_MOVIMIENTO_ID."
				, ".self::GEN_ATTR_AUTORIZADO."
				, ".self::GEN_ATTR_AUTORIZADO_EL."
				, ".self::GEN_ATTR_AUTORIZADO_POR."
				, ".self::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID."
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
				$this->setFndCajaOrigen($fila[self::GEN_ATTR_MIN_FND_CAJA_ORIGEN]);
				$this->setFndCajaDestino($fila[self::GEN_ATTR_MIN_FND_CAJA_DESTINO]);
				$this->setFndCajaTipoMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID]);
				$this->setAutorizado($fila[self::GEN_ATTR_MIN_AUTORIZADO]);
				$this->setAutorizadoEl($fila[self::GEN_ATTR_MIN_AUTORIZADO_EL]);
				$this->setAutorizadoPor($fila[self::GEN_ATTR_MIN_AUTORIZADO_POR]);
				$this->setFndCajaMovimientoTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID]);
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
	public function setFndCajaOrigen($v){ $this->fnd_caja_origen = $v; }
	public function setFndCajaDestino($v){ $this->fnd_caja_destino = $v; }
	public function setFndCajaTipoMovimientoId($v){ $this->fnd_caja_tipo_movimiento_id = $v; }
	public function setAutorizado($v){ $this->autorizado = $v; }
	public function setAutorizadoEl($v){ $this->autorizado_el = $v; }
	public function setAutorizadoPor($v){ $this->autorizado_por = $v; }
	public function setFndCajaMovimientoTipoEstadoId($v){ $this->fnd_caja_movimiento_tipo_estado_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new FndCajaMovimiento();
            $o->setId($fila[FndCajaMovimiento::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setFndCajaOrigen($fila[self::GEN_ATTR_MIN_FND_CAJA_ORIGEN]);
			$o->setFndCajaDestino($fila[self::GEN_ATTR_MIN_FND_CAJA_DESTINO]);
			$o->setFndCajaTipoMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID]);
			$o->setAutorizado($fila[self::GEN_ATTR_MIN_AUTORIZADO]);
			$o->setAutorizadoEl($fila[self::GEN_ATTR_MIN_AUTORIZADO_EL]);
			$o->setAutorizadoPor($fila[self::GEN_ATTR_MIN_AUTORIZADO_POR]);
			$o->setFndCajaMovimientoTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID]);
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

	/* Control de BFndCajaMovimiento */ 	
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

	/* Cambia el estado de BFndCajaMovimiento */ 	
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

	/* Save de BFndCajaMovimiento */ 	
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
						, ".self::GEN_ATTR_MIN_FND_CAJA_ORIGEN."
						, ".self::GEN_ATTR_MIN_FND_CAJA_DESTINO."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_AUTORIZADO."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_EL."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_POR."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('fnd_caja_movimiento_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getFndCajaOrigen()."
						, ".$this->getFndCajaDestino()."
						, ".$this->getFndCajaTipoMovimientoId()."
						, ".$this->getAutorizado()."
						, '".$this->getAutorizadoEl()."'
						, ".$this->getAutorizadoPor()."
						, ".$this->getFndCajaMovimientoTipoEstadoId()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('fnd_caja_movimiento_seq')";
            
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
                 
				 ".FndCajaMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CAJA_ORIGEN." = ".$this->getFndCajaOrigen()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_DESTINO." = ".$this->getFndCajaDestino()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID." = ".$this->getFndCajaTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_AUTORIZADO." = ".$this->getAutorizado()."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_EL." = '".$this->getAutorizadoEl()."'
						, ".self::GEN_ATTR_MIN_AUTORIZADO_POR." = ".$this->getAutorizadoPor()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID." = ".$this->getFndCajaMovimientoTipoEstadoId()."
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
						, ".self::GEN_ATTR_MIN_FND_CAJA_ORIGEN."
						, ".self::GEN_ATTR_MIN_FND_CAJA_DESTINO."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_AUTORIZADO."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_EL."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_POR."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID."
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
						, ".$this->getFndCajaOrigen()."
						, ".$this->getFndCajaDestino()."
						, ".$this->getFndCajaTipoMovimientoId()."
						, ".$this->getAutorizado()."
						, '".$this->getAutorizadoEl()."'
						, ".$this->getAutorizadoPor()."
						, ".$this->getFndCajaMovimientoTipoEstadoId()."
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
                     
				 ".FndCajaMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CAJA_ORIGEN." = ".$this->getFndCajaOrigen()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_DESTINO." = ".$this->getFndCajaDestino()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID." = ".$this->getFndCajaTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_AUTORIZADO." = ".$this->getAutorizado()."
						, ".self::GEN_ATTR_MIN_AUTORIZADO_EL." = '".$this->getAutorizadoEl()."'
						, ".self::GEN_ATTR_MIN_AUTORIZADO_POR." = ".$this->getAutorizadoPor()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID." = ".$this->getFndCajaMovimientoTipoEstadoId()."
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
            $o = new FndCajaMovimiento();
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

	/* Delete de BFndCajaMovimiento */ 	
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
	
            // se elimina la coleccion de FndCajaMovimientoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaMovimientoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaMovimientoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaMovimientoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaMovimientoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaMovimientoEstados(null, $c) as $o){
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
	
	public function duplicarFndCajaMovimiento(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getFndCajaMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = FndCajaMovimiento::setAplicarFiltrosDeAlcance($criterio);

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
	
		$fndcajamovimientos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $fndcajamovimiento = new FndCajaMovimiento();
                    $fndcajamovimiento->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $fndcajamovimiento->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$fndcajamovimiento->setFndCajaOrigen($fila[self::GEN_ATTR_MIN_FND_CAJA_ORIGEN]);
			$fndcajamovimiento->setFndCajaDestino($fila[self::GEN_ATTR_MIN_FND_CAJA_DESTINO]);
			$fndcajamovimiento->setFndCajaTipoMovimientoId($fila[self::GEN_ATTR_MIN_FND_CAJA_TIPO_MOVIMIENTO_ID]);
			$fndcajamovimiento->setAutorizado($fila[self::GEN_ATTR_MIN_AUTORIZADO]);
			$fndcajamovimiento->setAutorizadoEl($fila[self::GEN_ATTR_MIN_AUTORIZADO_EL]);
			$fndcajamovimiento->setAutorizadoPor($fila[self::GEN_ATTR_MIN_AUTORIZADO_POR]);
			$fndcajamovimiento->setFndCajaMovimientoTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID]);
			$fndcajamovimiento->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$fndcajamovimiento->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$fndcajamovimiento->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$fndcajamovimiento->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$fndcajamovimiento->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$fndcajamovimiento->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$fndcajamovimiento->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$fndcajamovimiento->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $fndcajamovimientos[] = $fndcajamovimiento;
		}
		
		return $fndcajamovimientos;
	}	
	

	/* Método getFndCajaMovimientos Habilitados */ 	
	static function getFndCajaMovimientosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return FndCajaMovimiento::getFndCajaMovimientos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getFndCajaMovimientos para listado de Backend */ 	
	static function getFndCajaMovimientosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return FndCajaMovimiento::getFndCajaMovimientos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getFndCajaMovimientosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = FndCajaMovimiento::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = FndCajaMovimiento::getFndCajaMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndCajaMovimientos filtrado para select */ 	
	static function getFndCajaMovimientosCmbF($paginador = null, $criterio = null){
            $col = FndCajaMovimiento::getFndCajaMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndCajaMovimientos filtrado por una coleccion de objetos foraneos de FndCajaTipoMovimiento */ 	
	static function getFndCajaMovimientosXFndCajaTipoMovimientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndCajaMovimiento::GEN_ATTR_FND_CAJA_TIPO_MOVIMIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndCajaMovimiento::GEN_TABLA);
            $c->addOrden(FndCajaMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndCajaMovimiento::getFndCajaMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaTipoMovimientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndCajaMovimientos filtrado por una coleccion de objetos foraneos de FndCajaMovimientoTipoEstado */ 	
	static function getFndCajaMovimientosXFndCajaMovimientoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndCajaMovimiento::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndCajaMovimiento::GEN_TABLA);
            $c->addOrden(FndCajaMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndCajaMovimiento::getFndCajaMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaMovimientoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'fnd_caja_movimiento_adm.php';
            $url_gestion = 'fnd_caja_movimiento_gestion.php';
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
	

	/* Metodo getFndCajaMovimientoItems */ 	
	public function getFndCajaMovimientoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaMovimientoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaMovimientoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaMovimientoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaMovimientoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaMovimientoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajamovimientoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajamovimientoitem = FndCajaMovimientoItem::hidratarObjeto($fila);			
                $fndcajamovimientoitems[] = $fndcajamovimientoitem;
            }

            return $fndcajamovimientoitems;
	}	
	

	/* Método getFndCajaMovimientoItemsBloque para MasInfo */ 	
	public function getFndCajaMovimientoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaMovimientoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaMovimientoItems Habilitados */ 	
	public function getFndCajaMovimientoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaMovimientoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaMovimientoItem */ 	
	public function getFndCajaMovimientoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaMovimientoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaMovimientoItem relacionadas */ 	
	public function deleteFndCajaMovimientoItems(){
            $obs = $this->getFndCajaMovimientoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaMovimientoItemsCmb() FndCajaMovimientoItem relacionadas */ 	
	public function getFndCajaMovimientoItemsCmb(){
            $c = new Criterio();
            $c->add(FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimientoItem::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaMovimientoItem::getFndCajaMovimientoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de FndCajaMovimientoItem */ 	
	public function getGralFpFormaPagosXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoItem::GEN_TABLA, FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de FndCajaMovimientoItem */ 	
	public function getCantidadGralFpFormaPagosXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoItem::GEN_TABLA, FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de FndCajaMovimientoItem */ 	
	public function getGralFpFormaPagoXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXFndCajaMovimientoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaMovimientoEstados */ 	
	public function getFndCajaMovimientoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaMovimientoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaMovimientoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaMovimientoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaMovimientoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaMovimientoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaMovimientoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaMovimientoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajamovimientoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajamovimientoestado = FndCajaMovimientoEstado::hidratarObjeto($fila);			
                $fndcajamovimientoestados[] = $fndcajamovimientoestado;
            }

            return $fndcajamovimientoestados;
	}	
	

	/* Método getFndCajaMovimientoEstadosBloque para MasInfo */ 	
	public function getFndCajaMovimientoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaMovimientoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaMovimientoEstados Habilitados */ 	
	public function getFndCajaMovimientoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaMovimientoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaMovimientoEstado */ 	
	public function getFndCajaMovimientoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaMovimientoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaMovimientoEstado relacionadas */ 	
	public function deleteFndCajaMovimientoEstados(){
            $obs = $this->getFndCajaMovimientoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaMovimientoEstadosCmb() FndCajaMovimientoEstado relacionadas */ 	
	public function getFndCajaMovimientoEstadosCmb(){
            $c = new Criterio();
            $c->add(FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimientoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaMovimientoEstado::getFndCajaMovimientoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajaMovimientoTipoEstados (Coleccion) relacionados a traves de FndCajaMovimientoEstado */ 	
	public function getFndCajaMovimientoTipoEstadosXFndCajaMovimientoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajaMovimientoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimientoTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoEstado::GEN_TABLA, FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID, FndCajaMovimientoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaMovimientoTipoEstado::getFndCajaMovimientoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajaMovimientoTipoEstados relacionados a traves de FndCajaMovimientoEstado */ 	
	public function getCantidadFndCajaMovimientoTipoEstadosXFndCajaMovimientoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajaMovimientoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajaMovimientoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimientoTipoEstado::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoEstado::GEN_TABLA, FndCajaMovimientoEstado::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID, FndCajaMovimientoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaMovimientoTipoEstado::getFndCajaMovimientoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajaMovimientoTipoEstado (Objeto) relacionado a traves de FndCajaMovimientoEstado */ 	
	public function getFndCajaMovimientoTipoEstadoXFndCajaMovimientoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajaMovimientoTipoEstadosXFndCajaMovimientoEstado($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna el FndCajaTipoMovimiento (Clave Foranea) */ 	
    public function getFndCajaTipoMovimiento(){
        $o = new FndCajaTipoMovimiento();
        $o->setId($this->getFndCajaTipoMovimientoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaTipoMovimiento (Clave Foranea) en Array */ 	
    public function getFndCajaTipoMovimientoEnArray(&$arr_os){
        if($this->getFndCajaTipoMovimientoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaTipoMovimientoId()])){
                $o = $arr_os[$this->getFndCajaTipoMovimientoId()];
            }else{
                $o = FndCajaTipoMovimiento::getOxId($this->getFndCajaTipoMovimientoId());
                if($o){
                    $arr_os[$this->getFndCajaTipoMovimientoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaTipoMovimiento();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCajaMovimientoTipoEstado (Clave Foranea) */ 	
    public function getFndCajaMovimientoTipoEstado(){
        $o = new FndCajaMovimientoTipoEstado();
        $o->setId($this->getFndCajaMovimientoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el FndCajaMovimientoTipoEstado (Clave Foranea) en Array */ 	
    public function getFndCajaMovimientoTipoEstadoEnArray(&$arr_os){
        if($this->getFndCajaMovimientoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getFndCajaMovimientoTipoEstadoId()])){
                $o = $arr_os[$this->getFndCajaMovimientoTipoEstadoId()];
            }else{
                $o = FndCajaMovimientoTipoEstado::getOxId($this->getFndCajaMovimientoTipoEstadoId());
                if($o){
                    $arr_os[$this->getFndCajaMovimientoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new FndCajaMovimientoTipoEstado();
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
            		
        if($contexto_solicitante != FndCaja::GEN_CLASE){
            if($this->getFndCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCaja()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCaja::GEN_CLASE){
            if($this->getFndCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCaja()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaTipoMovimiento::GEN_CLASE){
            if($this->getFndCajaTipoMovimiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaTipoMovimiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaTipoMovimiento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != UsUsuario::GEN_CLASE){
            if($this->getUsUsuario()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(UsUsuario::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getUsUsuario()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCajaMovimientoTipoEstado::GEN_CLASE){
            if($this->getFndCajaMovimientoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCajaMovimientoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCajaMovimientoTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM fnd_caja_movimiento'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'fnd_caja_movimiento';");
            
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

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_origen' */ 	
	static function getOxFndCajaOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_origen' */ 	
	static function getOsxFndCajaOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_destino' */ 	
	static function getOxFndCajaDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_destino' */ 	
	static function getOsxFndCajaDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_tipo_movimiento_id' */ 	
	static function getOxFndCajaTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_tipo_movimiento_id' */ 	
	static function getOsxFndCajaTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'autorizado' */ 	
	static function getOxAutorizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'autorizado' */ 	
	static function getOsxAutorizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'autorizado_el' */ 	
	static function getOxAutorizadoEl($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO_EL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'autorizado_el' */ 	
	static function getOsxAutorizadoEl($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO_EL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'autorizado_por' */ 	
	static function getOxAutorizadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'autorizado_por' */ 	
	static function getOsxAutorizadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AUTORIZADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_movimiento_tipo_estado_id' */ 	
	static function getOxFndCajaMovimientoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_movimiento_tipo_estado_id' */ 	
	static function getOsxFndCajaMovimientoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos(null, $criterio);
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

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
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

            $obs = self::getFndCajaMovimientos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'fnd_caja_movimiento_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'autorizado_el' */ 	
	public function getAutorizadoElDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getAutorizadoEl(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getAutorizadoElDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getAutorizadoElDiferenciaDias();
        
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
                $c->addTabla(FndCajaMovimiento::GEN_TABLA);
                $c->addOrden(FndCajaMovimiento::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $fnd_caja_movimientos = FndCajaMovimiento::getFndCajaMovimientos(null, $c);

                $arr = array();
                foreach($fnd_caja_movimientos as $fnd_caja_movimiento){
                    $descripcion = $fnd_caja_movimiento->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>