<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BFndChqTipoEmisorFndChqTipoEstado
{ 
	
	const SES_PAGINACION = 'adm_fndchqtipoemisorfndchqtipoestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_fndchqtipoemisorfndchqtipoestado_paginas_registros';
	const SES_CRITERIOS = 'adm_fndchqtipoemisorfndchqtipoestado_criterios';
	
	const GEN_CLASE = 'FndChqTipoEmisorFndChqTipoEstado';
	const GEN_TABLA = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BFndChqTipoEmisorFndChqTipoEstado */ 
	const GEN_ATTR_ID = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id';
	const GEN_ATTR_DESCRIPCION = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion';
	const GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id';
	const GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id';
	const GEN_ATTR_FND_CHQ_TIPO_ESTADO_POSIBLE = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible';
	const GEN_ATTR_CAMBIO_AUTOMATICO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico';
	const GEN_ATTR_CAMBIO_MANUAL = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual';
	const GEN_ATTR_PREDETERMINADO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado';
	const GEN_ATTR_CAMBIO_OTRO_COMPROBANTE = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante';
	const GEN_ATTR_CAMBIO_SIMULTANEO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo';
	const GEN_ATTR_CODIGO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo';
	const GEN_ATTR_OBSERVACION = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion';
	const GEN_ATTR_ORDEN = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.orden';
	const GEN_ATTR_ESTADO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado';
	const GEN_ATTR_CREADO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado';
	const GEN_ATTR_CREADO_POR = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado_por';

	/* Constantes de Atributos Min de BFndChqTipoEmisorFndChqTipoEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID = 'fnd_chq_tipo_emisor_id';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID = 'fnd_chq_tipo_estado_id';
	const GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE = 'fnd_chq_tipo_estado_posible';
	const GEN_ATTR_MIN_CAMBIO_AUTOMATICO = 'cambio_automatico';
	const GEN_ATTR_MIN_CAMBIO_MANUAL = 'cambio_manual';
	const GEN_ATTR_MIN_PREDETERMINADO = 'predeterminado';
	const GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE = 'cambio_otro_comprobante';
	const GEN_ATTR_MIN_CAMBIO_SIMULTANEO = 'cambio_simultaneo';
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
	

	/* Atributos de BFndChqTipoEmisorFndChqTipoEstado */ 
	private $id;
	private $descripcion;
	private $fnd_chq_tipo_emisor_id;
	private $fnd_chq_tipo_estado_id;
	private $fnd_chq_tipo_estado_posible;
	private $cambio_automatico;
	private $cambio_manual;
	private $predeterminado;
	private $cambio_otro_comprobante;
	private $cambio_simultaneo;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BFndChqTipoEmisorFndChqTipoEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getFndChqTipoEmisorId(){ if(isset($this->fnd_chq_tipo_emisor_id)){ return $this->fnd_chq_tipo_emisor_id; }else{ return 'null'; } }
	public function getFndChqTipoEstadoId(){ if(isset($this->fnd_chq_tipo_estado_id)){ return $this->fnd_chq_tipo_estado_id; }else{ return 'null'; } }
	public function getFndChqTipoEstadoPosible(){ if(isset($this->fnd_chq_tipo_estado_posible)){ return $this->fnd_chq_tipo_estado_posible; }else{ return 0; } }
	public function getFndChqTipoEstadoPosibleObj(){ if(isset($this->fnd_chq_tipo_estado_posible)){ return FndChqTipoEstado::getOxId($this->fnd_chq_tipo_estado_posible); }else{ return new FndChqTipoEstado(); } }
	public function getCambioAutomatico(){ if(isset($this->cambio_automatico)){ return $this->cambio_automatico; }else{ return 0; } }
	public function getCambioManual(){ if(isset($this->cambio_manual)){ return $this->cambio_manual; }else{ return 0; } }
	public function getPredeterminado(){ if(isset($this->predeterminado)){ return $this->predeterminado; }else{ return 0; } }
	public function getCambioOtroComprobante(){ if(isset($this->cambio_otro_comprobante)){ return $this->cambio_otro_comprobante; }else{ return 0; } }
	public function getCambioSimultaneo(){ if(isset($this->cambio_simultaneo)){ return $this->cambio_simultaneo; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BFndChqTipoEmisorFndChqTipoEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_POSIBLE."
				, ".self::GEN_ATTR_CAMBIO_AUTOMATICO."
				, ".self::GEN_ATTR_CAMBIO_MANUAL."
				, ".self::GEN_ATTR_PREDETERMINADO."
				, ".self::GEN_ATTR_CAMBIO_OTRO_COMPROBANTE."
				, ".self::GEN_ATTR_CAMBIO_SIMULTANEO."
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
				$this->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
				$this->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
				$this->setFndChqTipoEstadoPosible($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE]);
				$this->setCambioAutomatico($fila[self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO]);
				$this->setCambioManual($fila[self::GEN_ATTR_MIN_CAMBIO_MANUAL]);
				$this->setPredeterminado($fila[self::GEN_ATTR_MIN_PREDETERMINADO]);
				$this->setCambioOtroComprobante($fila[self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE]);
				$this->setCambioSimultaneo($fila[self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO]);
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
	public function setFndChqTipoEmisorId($v){ $this->fnd_chq_tipo_emisor_id = $v; }
	public function setFndChqTipoEstadoId($v){ $this->fnd_chq_tipo_estado_id = $v; }
	public function setFndChqTipoEstadoPosible($v){ $this->fnd_chq_tipo_estado_posible = $v; }
	public function setCambioAutomatico($v){ $this->cambio_automatico = $v; }
	public function setCambioManual($v){ $this->cambio_manual = $v; }
	public function setPredeterminado($v){ $this->predeterminado = $v; }
	public function setCambioOtroComprobante($v){ $this->cambio_otro_comprobante = $v; }
	public function setCambioSimultaneo($v){ $this->cambio_simultaneo = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new FndChqTipoEmisorFndChqTipoEstado();
            $o->setId($fila[FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
			$o->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
			$o->setFndChqTipoEstadoPosible($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE]);
			$o->setCambioAutomatico($fila[self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO]);
			$o->setCambioManual($fila[self::GEN_ATTR_MIN_CAMBIO_MANUAL]);
			$o->setPredeterminado($fila[self::GEN_ATTR_MIN_PREDETERMINADO]);
			$o->setCambioOtroComprobante($fila[self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE]);
			$o->setCambioSimultaneo($fila[self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO]);
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

	/* Control de BFndChqTipoEmisorFndChqTipoEstado */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BFndChqTipoEmisorFndChqTipoEstado */ 	
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

	/* Save de BFndChqTipoEmisorFndChqTipoEstado */ 	
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
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE."
						, ".self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO."
						, ".self::GEN_ATTR_MIN_CAMBIO_MANUAL."
						, ".self::GEN_ATTR_MIN_PREDETERMINADO."
						, ".self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('fnd_chq_tipo_emisor_fnd_chq_tipo_estado_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getFndChqTipoEmisorId()."
						, ".$this->getFndChqTipoEstadoId()."
						, ".$this->getFndChqTipoEstadoPosible()."
						, ".$this->getCambioAutomatico()."
						, ".$this->getCambioManual()."
						, ".$this->getPredeterminado()."
						, ".$this->getCambioOtroComprobante()."
						, ".$this->getCambioSimultaneo()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('fnd_chq_tipo_emisor_fnd_chq_tipo_estado_seq')";
            
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
                 
				 ".FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID." = ".$this->getFndChqTipoEmisorId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID." = ".$this->getFndChqTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE." = ".$this->getFndChqTipoEstadoPosible()."
						, ".self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO." = ".$this->getCambioAutomatico()."
						, ".self::GEN_ATTR_MIN_CAMBIO_MANUAL." = ".$this->getCambioManual()."
						, ".self::GEN_ATTR_MIN_PREDETERMINADO." = ".$this->getPredeterminado()."
						, ".self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE." = ".$this->getCambioOtroComprobante()."
						, ".self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO." = ".$this->getCambioSimultaneo()."
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
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE."
						, ".self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO."
						, ".self::GEN_ATTR_MIN_CAMBIO_MANUAL."
						, ".self::GEN_ATTR_MIN_PREDETERMINADO."
						, ".self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO."
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
						, ".$this->getFndChqTipoEmisorId()."
						, ".$this->getFndChqTipoEstadoId()."
						, ".$this->getFndChqTipoEstadoPosible()."
						, ".$this->getCambioAutomatico()."
						, ".$this->getCambioManual()."
						, ".$this->getPredeterminado()."
						, ".$this->getCambioOtroComprobante()."
						, ".$this->getCambioSimultaneo()."
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
                     
				 ".FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID." = ".$this->getFndChqTipoEmisorId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID." = ".$this->getFndChqTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE." = ".$this->getFndChqTipoEstadoPosible()."
						, ".self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO." = ".$this->getCambioAutomatico()."
						, ".self::GEN_ATTR_MIN_CAMBIO_MANUAL." = ".$this->getCambioManual()."
						, ".self::GEN_ATTR_MIN_PREDETERMINADO." = ".$this->getPredeterminado()."
						, ".self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE." = ".$this->getCambioOtroComprobante()."
						, ".self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO." = ".$this->getCambioSimultaneo()."
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
            $o = new FndChqTipoEmisorFndChqTipoEstado();
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

	/* Delete de BFndChqTipoEmisorFndChqTipoEstado */ 	
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
	
	public function duplicarFndChqTipoEmisorFndChqTipoEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getFndChqTipoEmisorFndChqTipoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = FndChqTipoEmisorFndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$fndchqtipoemisorfndchqtipoestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $fndchqtipoemisorfndchqtipoestado = new FndChqTipoEmisorFndChqTipoEstado();
                    $fndchqtipoemisorfndchqtipoestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $fndchqtipoemisorfndchqtipoestado->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$fndchqtipoemisorfndchqtipoestado->setFndChqTipoEmisorId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_EMISOR_ID]);
			$fndchqtipoemisorfndchqtipoestado->setFndChqTipoEstadoId($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_ID]);
			$fndchqtipoemisorfndchqtipoestado->setFndChqTipoEstadoPosible($fila[self::GEN_ATTR_MIN_FND_CHQ_TIPO_ESTADO_POSIBLE]);
			$fndchqtipoemisorfndchqtipoestado->setCambioAutomatico($fila[self::GEN_ATTR_MIN_CAMBIO_AUTOMATICO]);
			$fndchqtipoemisorfndchqtipoestado->setCambioManual($fila[self::GEN_ATTR_MIN_CAMBIO_MANUAL]);
			$fndchqtipoemisorfndchqtipoestado->setPredeterminado($fila[self::GEN_ATTR_MIN_PREDETERMINADO]);
			$fndchqtipoemisorfndchqtipoestado->setCambioOtroComprobante($fila[self::GEN_ATTR_MIN_CAMBIO_OTRO_COMPROBANTE]);
			$fndchqtipoemisorfndchqtipoestado->setCambioSimultaneo($fila[self::GEN_ATTR_MIN_CAMBIO_SIMULTANEO]);
			$fndchqtipoemisorfndchqtipoestado->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$fndchqtipoemisorfndchqtipoestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$fndchqtipoemisorfndchqtipoestado->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$fndchqtipoemisorfndchqtipoestado->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$fndchqtipoemisorfndchqtipoestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$fndchqtipoemisorfndchqtipoestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$fndchqtipoemisorfndchqtipoestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$fndchqtipoemisorfndchqtipoestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $fndchqtipoemisorfndchqtipoestados[] = $fndchqtipoemisorfndchqtipoestado;
		}
		
		return $fndchqtipoemisorfndchqtipoestados;
	}	
	

	/* Método getFndChqTipoEmisorFndChqTipoEstados Habilitados */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getFndChqTipoEmisorFndChqTipoEstados para listado de Backend */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = FndChqTipoEmisorFndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndChqTipoEmisorFndChqTipoEstados filtrado para select */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosCmbF($paginador = null, $criterio = null){
            $col = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getFndChqTipoEmisorFndChqTipoEstados filtrado por una coleccion de objetos foraneos de FndChqTipoEmisor */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosXFndChqTipoEmisors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA);
            $c->addOrden(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoEmisorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getFndChqTipoEmisorFndChqTipoEstados filtrado por una coleccion de objetos foraneos de FndChqTipoEstado */ 	
	static function getFndChqTipoEmisorFndChqTipoEstadosXFndChqTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA);
            $c->addOrden(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndChqTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_adm.php';
            $url_gestion = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_gestion.php';
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
	

	/* Metodo que retorna el FndChqTipoEmisor (Clave Foranea) */ 	
    public function getFndChqTipoEmisor(){
        $o = new FndChqTipoEmisor();
        $o->setId($this->getFndChqTipoEmisorId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoEmisor (Clave Foranea) en Array */ 	
    public function getFndChqTipoEmisorEnArray(&$arr_os){
        if($this->getFndChqTipoEmisorId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoEmisorId()])){
                $o = $arr_os[$this->getFndChqTipoEmisorId()];
            }else{
                $o = FndChqTipoEmisor::getOxId($this->getFndChqTipoEmisorId());
                if($o){
                    $arr_os[$this->getFndChqTipoEmisorId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoEmisor();
        }
        return $o;		
    }

	/* Metodo que retorna el FndChqTipoEstado (Clave Foranea) */ 	
    public function getFndChqTipoEstado(){
        $o = new FndChqTipoEstado();
        $o->setId($this->getFndChqTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el FndChqTipoEstado (Clave Foranea) en Array */ 	
    public function getFndChqTipoEstadoEnArray(&$arr_os){
        if($this->getFndChqTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getFndChqTipoEstadoId()])){
                $o = $arr_os[$this->getFndChqTipoEstadoId()];
            }else{
                $o = FndChqTipoEstado::getOxId($this->getFndChqTipoEstadoId());
                if($o){
                    $arr_os[$this->getFndChqTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new FndChqTipoEstado();
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
            		
        if($contexto_solicitante != FndChqTipoEmisor::GEN_CLASE){
            if($this->getFndChqTipoEmisor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEmisor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEmisor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoEstado::GEN_CLASE){
            if($this->getFndChqTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndChqTipoEstado::GEN_CLASE){
            if($this->getFndChqTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndChqTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndChqTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM fnd_chq_tipo_emisor_fnd_chq_tipo_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado';");
            
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_emisor_id' */ 	
	static function getOxFndChqTipoEmisorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_emisor_id' */ 	
	static function getOsxFndChqTipoEmisorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_estado_id' */ 	
	static function getOxFndChqTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_estado_id' */ 	
	static function getOsxFndChqTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_chq_tipo_estado_posible' */ 	
	static function getOxFndChqTipoEstadoPosible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_POSIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_chq_tipo_estado_posible' */ 	
	static function getOsxFndChqTipoEstadoPosible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CHQ_TIPO_ESTADO_POSIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cambio_automatico' */ 	
	static function getOxCambioAutomatico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_AUTOMATICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cambio_automatico' */ 	
	static function getOsxCambioAutomatico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_AUTOMATICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cambio_manual' */ 	
	static function getOxCambioManual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_MANUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cambio_manual' */ 	
	static function getOsxCambioManual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_MANUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'predeterminado' */ 	
	static function getOxPredeterminado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PREDETERMINADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'predeterminado' */ 	
	static function getOsxPredeterminado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PREDETERMINADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cambio_otro_comprobante' */ 	
	static function getOxCambioOtroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_OTRO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cambio_otro_comprobante' */ 	
	static function getOsxCambioOtroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_OTRO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cambio_simultaneo' */ 	
	static function getOxCambioSimultaneo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_SIMULTANEO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cambio_simultaneo' */ 	
	static function getOsxCambioSimultaneo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAMBIO_SIMULTANEO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
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

            $obs = self::getFndChqTipoEmisorFndChqTipoEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_adm');
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
                $c->addTabla(FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA);
                $c->addOrden(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $fnd_chq_tipo_emisor_fnd_chq_tipo_estados = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados(null, $c);

                $arr = array();
                foreach($fnd_chq_tipo_emisor_fnd_chq_tipo_estados as $fnd_chq_tipo_emisor_fnd_chq_tipo_estado){
                    $descripcion = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>