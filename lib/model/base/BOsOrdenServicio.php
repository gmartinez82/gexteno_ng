<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BOsOrdenServicio
{ 
	
	const SES_PAGINACION = 'adm_osordenservicio_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_osordenservicio_paginas_registros';
	const SES_CRITERIOS = 'adm_osordenservicio_criterios';
	
	const GEN_CLASE = 'OsOrdenServicio';
	const GEN_TABLA = 'os_orden_servicio';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BOsOrdenServicio */ 
	const GEN_ATTR_ID = 'os_orden_servicio.id';
	const GEN_ATTR_OS_TIPO_ID = 'os_orden_servicio.os_tipo_id';
	const GEN_ATTR_PER_PERSONA_ID = 'os_orden_servicio.per_persona_id';
	const GEN_ATTR_OS_PRIORIDAD_ID = 'os_orden_servicio.os_prioridad_id';
	const GEN_ATTR_OS_TIPO_ESTADO_ID = 'os_orden_servicio.os_tipo_estado_id';
	const GEN_ATTR_NOTIFICACION = 'os_orden_servicio.notificacion';
	const GEN_ATTR_NOTIFICACION_MECANO = 'os_orden_servicio.notificacion_mecano';
	const GEN_ATTR_FECHA = 'os_orden_servicio.fecha';
	const GEN_ATTR_FECHA_HECHO = 'os_orden_servicio.fecha_hecho';
	const GEN_ATTR_FECHA_NOTIFICACION = 'os_orden_servicio.fecha_notificacion';
	const GEN_ATTR_DIAS_PARA_DESCARGO = 'os_orden_servicio.dias_para_descargo';
	const GEN_ATTR_FECHA_LIMITE_DESCARGO = 'os_orden_servicio.fecha_limite_descargo';
	const GEN_ATTR_FECHA_DESCARGO = 'os_orden_servicio.fecha_descargo';
	const GEN_ATTR_FECHA_NOTIFICADO_SIN_DESCARGO = 'os_orden_servicio.fecha_notificado_sin_descargo';
	const GEN_ATTR_FECHA_LIMITE_RESOLUCION = 'os_orden_servicio.fecha_limite_resolucion';
	const GEN_ATTR_FECHA_RESOLUCION = 'os_orden_servicio.fecha_resolucion';
	const GEN_ATTR_DESCRIPCION = 'os_orden_servicio.descripcion';
	const GEN_ATTR_CODIGO = 'os_orden_servicio.codigo';
	const GEN_ATTR_OBSERVACION = 'os_orden_servicio.observacion';
	const GEN_ATTR_ORDEN = 'os_orden_servicio.orden';
	const GEN_ATTR_ESTADO = 'os_orden_servicio.estado';
	const GEN_ATTR_CREADO = 'os_orden_servicio.creado';
	const GEN_ATTR_CREADO_POR = 'os_orden_servicio.creado_por';
	const GEN_ATTR_MODIFICADO = 'os_orden_servicio.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'os_orden_servicio.modificado_por';

	/* Constantes de Atributos Min de BOsOrdenServicio */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_OS_TIPO_ID = 'os_tipo_id';
	const GEN_ATTR_MIN_PER_PERSONA_ID = 'per_persona_id';
	const GEN_ATTR_MIN_OS_PRIORIDAD_ID = 'os_prioridad_id';
	const GEN_ATTR_MIN_OS_TIPO_ESTADO_ID = 'os_tipo_estado_id';
	const GEN_ATTR_MIN_NOTIFICACION = 'notificacion';
	const GEN_ATTR_MIN_NOTIFICACION_MECANO = 'notificacion_mecano';
	const GEN_ATTR_MIN_FECHA = 'fecha';
	const GEN_ATTR_MIN_FECHA_HECHO = 'fecha_hecho';
	const GEN_ATTR_MIN_FECHA_NOTIFICACION = 'fecha_notificacion';
	const GEN_ATTR_MIN_DIAS_PARA_DESCARGO = 'dias_para_descargo';
	const GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO = 'fecha_limite_descargo';
	const GEN_ATTR_MIN_FECHA_DESCARGO = 'fecha_descargo';
	const GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO = 'fecha_notificado_sin_descargo';
	const GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION = 'fecha_limite_resolucion';
	const GEN_ATTR_MIN_FECHA_RESOLUCION = 'fecha_resolucion';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
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
	

	/* Atributos de BOsOrdenServicio */ 
	private $id;
	private $os_tipo_id;
	private $per_persona_id;
	private $os_prioridad_id;
	private $os_tipo_estado_id;
	private $notificacion;
	private $notificacion_mecano;
	private $fecha;
	private $fecha_hecho;
	private $fecha_notificacion;
	private $dias_para_descargo;
	private $fecha_limite_descargo;
	private $fecha_descargo;
	private $fecha_notificado_sin_descargo;
	private $fecha_limite_resolucion;
	private $fecha_resolucion;
	private $descripcion;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BOsOrdenServicio */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getOsTipoId(){ if(isset($this->os_tipo_id)){ return $this->os_tipo_id; }else{ return 'null'; } }
	public function getPerPersonaId(){ if(isset($this->per_persona_id)){ return $this->per_persona_id; }else{ return 'null'; } }
	public function getOsPrioridadId(){ if(isset($this->os_prioridad_id)){ return $this->os_prioridad_id; }else{ return 'null'; } }
	public function getOsTipoEstadoId(){ if(isset($this->os_tipo_estado_id)){ return $this->os_tipo_estado_id; }else{ return 'null'; } }
	public function getNotificacion(){ if(isset($this->notificacion)){ return $this->notificacion; }else{ return ''; } }
	public function getNotificacionMecano(){ if(isset($this->notificacion_mecano)){ return $this->notificacion_mecano; }else{ return 0; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getFechaHecho(){ if(isset($this->fecha_hecho)){ return $this->fecha_hecho; }else{ return ''; } }
	public function getFechaNotificacion(){ if(isset($this->fecha_notificacion)){ return $this->fecha_notificacion; }else{ return ''; } }
	public function getDiasParaDescargo(){ if(isset($this->dias_para_descargo)){ return $this->dias_para_descargo; }else{ return 0; } }
	public function getFechaLimiteDescargo(){ if(isset($this->fecha_limite_descargo)){ return $this->fecha_limite_descargo; }else{ return ''; } }
	public function getFechaDescargo(){ if(isset($this->fecha_descargo)){ return $this->fecha_descargo; }else{ return ''; } }
	public function getFechaNotificadoSinDescargo(){ if(isset($this->fecha_notificado_sin_descargo)){ return $this->fecha_notificado_sin_descargo; }else{ return ''; } }
	public function getFechaLimiteResolucion(){ if(isset($this->fecha_limite_resolucion)){ return $this->fecha_limite_resolucion; }else{ return ''; } }
	public function getFechaResolucion(){ if(isset($this->fecha_resolucion)){ return $this->fecha_resolucion; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BOsOrdenServicio */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_OS_TIPO_ID."
				, ".self::GEN_ATTR_PER_PERSONA_ID."
				, ".self::GEN_ATTR_OS_PRIORIDAD_ID."
				, ".self::GEN_ATTR_OS_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_NOTIFICACION."
				, ".self::GEN_ATTR_NOTIFICACION_MECANO."
				, ".self::GEN_ATTR_FECHA."
				, ".self::GEN_ATTR_FECHA_HECHO."
				, ".self::GEN_ATTR_FECHA_NOTIFICACION."
				, ".self::GEN_ATTR_DIAS_PARA_DESCARGO."
				, ".self::GEN_ATTR_FECHA_LIMITE_DESCARGO."
				, ".self::GEN_ATTR_FECHA_DESCARGO."
				, ".self::GEN_ATTR_FECHA_NOTIFICADO_SIN_DESCARGO."
				, ".self::GEN_ATTR_FECHA_LIMITE_RESOLUCION."
				, ".self::GEN_ATTR_FECHA_RESOLUCION."
				, ".self::GEN_ATTR_DESCRIPCION."
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
                    				$this->setOsTipoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ID]);
				$this->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
				$this->setOsPrioridadId($fila[self::GEN_ATTR_MIN_OS_PRIORIDAD_ID]);
				$this->setOsTipoEstadoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID]);
				$this->setNotificacion($fila[self::GEN_ATTR_MIN_NOTIFICACION]);
				$this->setNotificacionMecano($fila[self::GEN_ATTR_MIN_NOTIFICACION_MECANO]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
				$this->setFechaHecho($fila[self::GEN_ATTR_MIN_FECHA_HECHO]);
				$this->setFechaNotificacion($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICACION]);
				$this->setDiasParaDescargo($fila[self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO]);
				$this->setFechaLimiteDescargo($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO]);
				$this->setFechaDescargo($fila[self::GEN_ATTR_MIN_FECHA_DESCARGO]);
				$this->setFechaNotificadoSinDescargo($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO]);
				$this->setFechaLimiteResolucion($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION]);
				$this->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
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
	public function setOsTipoId($v){ $this->os_tipo_id = $v; }
	public function setPerPersonaId($v){ $this->per_persona_id = $v; }
	public function setOsPrioridadId($v){ $this->os_prioridad_id = $v; }
	public function setOsTipoEstadoId($v){ $this->os_tipo_estado_id = $v; }
	public function setNotificacion($v){ $this->notificacion = $v; }
	public function setNotificacionMecano($v){ $this->notificacion_mecano = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setFechaHecho($v){ $this->fecha_hecho = $v; }
	public function setFechaNotificacion($v){ $this->fecha_notificacion = $v; }
	public function setDiasParaDescargo($v){ $this->dias_para_descargo = $v; }
	public function setFechaLimiteDescargo($v){ $this->fecha_limite_descargo = $v; }
	public function setFechaDescargo($v){ $this->fecha_descargo = $v; }
	public function setFechaNotificadoSinDescargo($v){ $this->fecha_notificado_sin_descargo = $v; }
	public function setFechaLimiteResolucion($v){ $this->fecha_limite_resolucion = $v; }
	public function setFechaResolucion($v){ $this->fecha_resolucion = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new OsOrdenServicio();
            $o->setId($fila[OsOrdenServicio::GEN_ATTR_MIN_ID], false);
            
			$o->setOsTipoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ID]);
			$o->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$o->setOsPrioridadId($fila[self::GEN_ATTR_MIN_OS_PRIORIDAD_ID]);
			$o->setOsTipoEstadoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID]);
			$o->setNotificacion($fila[self::GEN_ATTR_MIN_NOTIFICACION]);
			$o->setNotificacionMecano($fila[self::GEN_ATTR_MIN_NOTIFICACION_MECANO]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setFechaHecho($fila[self::GEN_ATTR_MIN_FECHA_HECHO]);
			$o->setFechaNotificacion($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICACION]);
			$o->setDiasParaDescargo($fila[self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO]);
			$o->setFechaLimiteDescargo($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO]);
			$o->setFechaDescargo($fila[self::GEN_ATTR_MIN_FECHA_DESCARGO]);
			$o->setFechaNotificadoSinDescargo($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO]);
			$o->setFechaLimiteResolucion($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION]);
			$o->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
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

	/* Control de BOsOrdenServicio */ 	
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

	/* Cambia el estado de BOsOrdenServicio */ 	
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

	/* Save de BOsOrdenServicio */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_OS_TIPO_ID."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_OS_PRIORIDAD_ID."
						, ".self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_NOTIFICACION."
						, ".self::GEN_ATTR_MIN_NOTIFICACION_MECANO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_FECHA_HECHO."
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICACION."
						, ".self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION."
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('os_orden_servicio_seq'), 
                ".$this->getOsTipoId()."
						, ".$this->getPerPersonaId()."
						, ".$this->getOsPrioridadId()."
						, ".$this->getOsTipoEstadoId()."
						, '".$this->getNotificacion()."'
						, ".$this->getNotificacionMecano()."
						, '".$this->getFecha()."'
						, '".$this->getFechaHecho()."'
						, '".$this->getFechaNotificacion()."'
						, ".$this->getDiasParaDescargo()."
						, '".$this->getFechaLimiteDescargo()."'
						, '".$this->getFechaDescargo()."'
						, '".$this->getFechaNotificadoSinDescargo()."'
						, '".$this->getFechaLimiteResolucion()."'
						, '".$this->getFechaResolucion()."'
						, '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('os_orden_servicio_seq')";
            
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
                 
				 ".OsOrdenServicio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_OS_TIPO_ID." = ".$this->getOsTipoId()."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_OS_PRIORIDAD_ID." = ".$this->getOsPrioridadId()."
						, ".self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID." = ".$this->getOsTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_NOTIFICACION." = '".$this->getNotificacion()."'
						, ".self::GEN_ATTR_MIN_NOTIFICACION_MECANO." = ".$this->getNotificacionMecano()."
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_FECHA_HECHO." = '".$this->getFechaHecho()."'
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICACION." = '".$this->getFechaNotificacion()."'
						, ".self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO." = ".$this->getDiasParaDescargo()."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO." = '".$this->getFechaLimiteDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_DESCARGO." = '".$this->getFechaDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO." = '".$this->getFechaNotificadoSinDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION." = '".$this->getFechaLimiteResolucion()."'
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION." = '".$this->getFechaResolucion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_OS_TIPO_ID."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_OS_PRIORIDAD_ID."
						, ".self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_NOTIFICACION."
						, ".self::GEN_ATTR_MIN_NOTIFICACION_MECANO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_FECHA_HECHO."
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICACION."
						, ".self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION."
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getOsTipoId()."
						, ".$this->getPerPersonaId()."
						, ".$this->getOsPrioridadId()."
						, ".$this->getOsTipoEstadoId()."
						, '".$this->getNotificacion()."'
						, ".$this->getNotificacionMecano()."
						, '".$this->getFecha()."'
						, '".$this->getFechaHecho()."'
						, '".$this->getFechaNotificacion()."'
						, ".$this->getDiasParaDescargo()."
						, '".$this->getFechaLimiteDescargo()."'
						, '".$this->getFechaDescargo()."'
						, '".$this->getFechaNotificadoSinDescargo()."'
						, '".$this->getFechaLimiteResolucion()."'
						, '".$this->getFechaResolucion()."'
						, '".$this->getDescripcion()."'
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
                     
				 ".OsOrdenServicio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_OS_TIPO_ID." = ".$this->getOsTipoId()."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_OS_PRIORIDAD_ID." = ".$this->getOsPrioridadId()."
						, ".self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID." = ".$this->getOsTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_NOTIFICACION." = '".$this->getNotificacion()."'
						, ".self::GEN_ATTR_MIN_NOTIFICACION_MECANO." = ".$this->getNotificacionMecano()."
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_FECHA_HECHO." = '".$this->getFechaHecho()."'
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICACION." = '".$this->getFechaNotificacion()."'
						, ".self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO." = ".$this->getDiasParaDescargo()."
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO." = '".$this->getFechaLimiteDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_DESCARGO." = '".$this->getFechaDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO." = '".$this->getFechaNotificadoSinDescargo()."'
						, ".self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION." = '".$this->getFechaLimiteResolucion()."'
						, ".self::GEN_ATTR_MIN_FECHA_RESOLUCION." = '".$this->getFechaResolucion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
            $o = new OsOrdenServicio();
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

	/* Delete de BOsOrdenServicio */ 	
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
	
            // se elimina la coleccion de OsOrdenServicioImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OsOrdenServicioImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOsOrdenServicioImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OsOrdenServicioArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OsOrdenServicioArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOsOrdenServicioArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OsEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OsEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOsEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OsResolucions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OsResolucion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOsResolucions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarOsOrdenServicio(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getOsOrdenServicios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = OsOrdenServicio::setAplicarFiltrosDeAlcance($criterio);

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
	
		$osordenservicios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $osordenservicio = new OsOrdenServicio();
                    $osordenservicio->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $osordenservicio->setOsTipoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ID]);
			$osordenservicio->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$osordenservicio->setOsPrioridadId($fila[self::GEN_ATTR_MIN_OS_PRIORIDAD_ID]);
			$osordenservicio->setOsTipoEstadoId($fila[self::GEN_ATTR_MIN_OS_TIPO_ESTADO_ID]);
			$osordenservicio->setNotificacion($fila[self::GEN_ATTR_MIN_NOTIFICACION]);
			$osordenservicio->setNotificacionMecano($fila[self::GEN_ATTR_MIN_NOTIFICACION_MECANO]);
			$osordenservicio->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$osordenservicio->setFechaHecho($fila[self::GEN_ATTR_MIN_FECHA_HECHO]);
			$osordenservicio->setFechaNotificacion($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICACION]);
			$osordenservicio->setDiasParaDescargo($fila[self::GEN_ATTR_MIN_DIAS_PARA_DESCARGO]);
			$osordenservicio->setFechaLimiteDescargo($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_DESCARGO]);
			$osordenservicio->setFechaDescargo($fila[self::GEN_ATTR_MIN_FECHA_DESCARGO]);
			$osordenservicio->setFechaNotificadoSinDescargo($fila[self::GEN_ATTR_MIN_FECHA_NOTIFICADO_SIN_DESCARGO]);
			$osordenservicio->setFechaLimiteResolucion($fila[self::GEN_ATTR_MIN_FECHA_LIMITE_RESOLUCION]);
			$osordenservicio->setFechaResolucion($fila[self::GEN_ATTR_MIN_FECHA_RESOLUCION]);
			$osordenservicio->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$osordenservicio->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$osordenservicio->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$osordenservicio->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$osordenservicio->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$osordenservicio->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$osordenservicio->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$osordenservicio->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$osordenservicio->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $osordenservicios[] = $osordenservicio;
		}
		
		return $osordenservicios;
	}	
	

	/* Método getOsOrdenServicios Habilitados */ 	
	static function getOsOrdenServiciosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return OsOrdenServicio::getOsOrdenServicios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getOsOrdenServicios para listado de Backend */ 	
	static function getOsOrdenServiciosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return OsOrdenServicio::getOsOrdenServicios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getOsOrdenServiciosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = OsOrdenServicio::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = OsOrdenServicio::getOsOrdenServicios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getOsOrdenServicios filtrado para select */ 	
	static function getOsOrdenServiciosCmbF($paginador = null, $criterio = null){
            $col = OsOrdenServicio::getOsOrdenServicios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getOsOrdenServicios filtrado por una coleccion de objetos foraneos de OsTipo */ 	
	static function getOsOrdenServiciosXOsTipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(OsOrdenServicio::GEN_ATTR_OS_TIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->addOrden(OsOrdenServicio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = OsOrdenServicio::getOsOrdenServicios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getOsTipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getOsOrdenServicios filtrado por una coleccion de objetos foraneos de PerPersona */ 	
	static function getOsOrdenServiciosXPerPersonas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->addOrden(OsOrdenServicio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = OsOrdenServicio::getOsOrdenServicios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerPersonaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getOsOrdenServicios filtrado por una coleccion de objetos foraneos de OsPrioridad */ 	
	static function getOsOrdenServiciosXOsPrioridads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(OsOrdenServicio::GEN_ATTR_OS_PRIORIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->addOrden(OsOrdenServicio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = OsOrdenServicio::getOsOrdenServicios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getOsPrioridadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getOsOrdenServicios filtrado por una coleccion de objetos foraneos de OsTipoEstado */ 	
	static function getOsOrdenServiciosXOsTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(OsOrdenServicio::GEN_ATTR_OS_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(OsOrdenServicio::GEN_TABLA);
            $c->addOrden(OsOrdenServicio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = OsOrdenServicio::getOsOrdenServicios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getOsTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'os_orden_servicio_adm.php';
            $url_gestion = 'os_orden_servicio_gestion.php';
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
	

	/* Metodo getOsOrdenServicioImagens */ 	
	public function getOsOrdenServicioImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OsOrdenServicioImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OsOrdenServicioImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OsOrdenServicioImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OsOrdenServicioImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OsOrdenServicioImagen::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OsOrdenServicioImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OsOrdenServicioImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OsOrdenServicioImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $osordenservicioimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $osordenservicioimagen = OsOrdenServicioImagen::hidratarObjeto($fila);			
                $osordenservicioimagens[] = $osordenservicioimagen;
            }

            return $osordenservicioimagens;
	}	
	

	/* Método getOsOrdenServicioImagensBloque para MasInfo */ 	
	public function getOsOrdenServicioImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOsOrdenServicioImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOsOrdenServicioImagens Habilitados */ 	
	public function getOsOrdenServicioImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOsOrdenServicioImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOsOrdenServicioImagen */ 	
	public function getOsOrdenServicioImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOsOrdenServicioImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OsOrdenServicioImagen relacionadas */ 	
	public function deleteOsOrdenServicioImagens(){
            $obs = $this->getOsOrdenServicioImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOsOrdenServicioImagensCmb() OsOrdenServicioImagen relacionadas */ 	
	public function getOsOrdenServicioImagensCmb(){
            $c = new Criterio();
            $c->add(OsOrdenServicioImagen::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsOrdenServicioImagen::GEN_TABLA);
            $c->setCriterios();

            $os = OsOrdenServicioImagen::getOsOrdenServicioImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getOsOrdenServicioArchivos */ 	
	public function getOsOrdenServicioArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OsOrdenServicioArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OsOrdenServicioArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OsOrdenServicioArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OsOrdenServicioArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OsOrdenServicioArchivo::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OsOrdenServicioArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OsOrdenServicioArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OsOrdenServicioArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $osordenservicioarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $osordenservicioarchivo = OsOrdenServicioArchivo::hidratarObjeto($fila);			
                $osordenservicioarchivos[] = $osordenservicioarchivo;
            }

            return $osordenservicioarchivos;
	}	
	

	/* Método getOsOrdenServicioArchivosBloque para MasInfo */ 	
	public function getOsOrdenServicioArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOsOrdenServicioArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOsOrdenServicioArchivos Habilitados */ 	
	public function getOsOrdenServicioArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOsOrdenServicioArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOsOrdenServicioArchivo */ 	
	public function getOsOrdenServicioArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOsOrdenServicioArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OsOrdenServicioArchivo relacionadas */ 	
	public function deleteOsOrdenServicioArchivos(){
            $obs = $this->getOsOrdenServicioArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOsOrdenServicioArchivosCmb() OsOrdenServicioArchivo relacionadas */ 	
	public function getOsOrdenServicioArchivosCmb(){
            $c = new Criterio();
            $c->add(OsOrdenServicioArchivo::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsOrdenServicioArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = OsOrdenServicioArchivo::getOsOrdenServicioArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getOsEstados */ 	
	public function getOsEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OsEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OsEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OsEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OsEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OsEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OsEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OsEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $osestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $osestado = OsEstado::hidratarObjeto($fila);			
                $osestados[] = $osestado;
            }

            return $osestados;
	}	
	

	/* Método getOsEstadosBloque para MasInfo */ 	
	public function getOsEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOsEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOsEstados Habilitados */ 	
	public function getOsEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOsEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOsEstado */ 	
	public function getOsEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOsEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OsEstado relacionadas */ 	
	public function deleteOsEstados(){
            $obs = $this->getOsEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOsEstadosCmb() OsEstado relacionadas */ 	
	public function getOsEstadosCmb(){
            $c = new Criterio();
            $c->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsEstado::GEN_TABLA);
            $c->setCriterios();

            $os = OsEstado::getOsEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OsTipoEstados (Coleccion) relacionados a traves de OsEstado */ 	
	public function getOsTipoEstadosXOsEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OsTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipoEstado::GEN_TABLA);
            $c->addRealJoin(OsEstado::GEN_TABLA, OsEstado::GEN_ATTR_OS_TIPO_ESTADO_ID, OsTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipoEstado::getOsTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OsTipoEstados relacionados a traves de OsEstado */ 	
	public function getCantidadOsTipoEstadosXOsEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OsTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(OsTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsEstado::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipoEstado::GEN_TABLA);
            $c->addRealJoin(OsEstado::GEN_TABLA, OsEstado::GEN_ATTR_OS_TIPO_ESTADO_ID, OsTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipoEstado::getOsTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OsTipoEstado (Objeto) relacionado a traves de OsEstado */ 	
	public function getOsTipoEstadoXOsEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOsTipoEstadosXOsEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getOsResolucions */ 	
	public function getOsResolucions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OsResolucion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OsResolucion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OsResolucion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OsResolucion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OsResolucion::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OsResolucion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OsResolucion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OsResolucion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $osresolucions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $osresolucion = OsResolucion::hidratarObjeto($fila);			
                $osresolucions[] = $osresolucion;
            }

            return $osresolucions;
	}	
	

	/* Método getOsResolucionsBloque para MasInfo */ 	
	public function getOsResolucionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOsResolucions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOsResolucions Habilitados */ 	
	public function getOsResolucionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOsResolucions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOsResolucion */ 	
	public function getOsResolucion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOsResolucions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OsResolucion relacionadas */ 	
	public function deleteOsResolucions(){
            $obs = $this->getOsResolucions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOsResolucionsCmb() OsResolucion relacionadas */ 	
	public function getOsResolucionsCmb(){
            $c = new Criterio();
            $c->add(OsResolucion::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsResolucion::GEN_TABLA);
            $c->setCriterios();

            $os = OsResolucion::getOsResolucionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OsTipoResolucions (Coleccion) relacionados a traves de OsResolucion */ 	
	public function getOsTipoResolucionsXOsResolucion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OsTipoResolucion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsResolucion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsResolucion::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipoResolucion::GEN_TABLA);
            $c->addRealJoin(OsResolucion::GEN_TABLA, OsResolucion::GEN_ATTR_OS_TIPO_RESOLUCION_ID, OsTipoResolucion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipoResolucion::getOsTipoResolucions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OsTipoResolucions relacionados a traves de OsResolucion */ 	
	public function getCantidadOsTipoResolucionsXOsResolucion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OsTipoResolucion::GEN_ATTR_ID);
            if($estado){
                $c->add(OsTipoResolucion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OsResolucion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OsResolucion::GEN_ATTR_OS_ORDEN_SERVICIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OsTipoResolucion::GEN_TABLA);
            $c->addRealJoin(OsResolucion::GEN_TABLA, OsResolucion::GEN_ATTR_OS_TIPO_RESOLUCION_ID, OsTipoResolucion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OsTipoResolucion::getOsTipoResolucions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OsTipoResolucion (Objeto) relacionado a traves de OsResolucion */ 	
	public function getOsTipoResolucionXOsResolucion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOsTipoResolucionsXOsResolucion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el OsTipo (Clave Foranea) */ 	
    public function getOsTipo(){
        $o = new OsTipo();
        $o->setId($this->getOsTipoId());
        return $o;			
    }

	/* Metodo que retorna el OsTipo (Clave Foranea) en Array */ 	
    public function getOsTipoEnArray(&$arr_os){
        if($this->getOsTipoId() != 'null'){
            if(isset($arr_os[$this->getOsTipoId()])){
                $o = $arr_os[$this->getOsTipoId()];
            }else{
                $o = OsTipo::getOxId($this->getOsTipoId());
                if($o){
                    $arr_os[$this->getOsTipoId()] = $o;
                }
            }
        }else{
            $o = new OsTipo();
        }
        return $o;		
    }

	/* Metodo que retorna el PerPersona (Clave Foranea) */ 	
    public function getPerPersona(){
        $o = new PerPersona();
        $o->setId($this->getPerPersonaId());
        return $o;			
    }

	/* Metodo que retorna el PerPersona (Clave Foranea) en Array */ 	
    public function getPerPersonaEnArray(&$arr_os){
        if($this->getPerPersonaId() != 'null'){
            if(isset($arr_os[$this->getPerPersonaId()])){
                $o = $arr_os[$this->getPerPersonaId()];
            }else{
                $o = PerPersona::getOxId($this->getPerPersonaId());
                if($o){
                    $arr_os[$this->getPerPersonaId()] = $o;
                }
            }
        }else{
            $o = new PerPersona();
        }
        return $o;		
    }

	/* Metodo que retorna el OsPrioridad (Clave Foranea) */ 	
    public function getOsPrioridad(){
        $o = new OsPrioridad();
        $o->setId($this->getOsPrioridadId());
        return $o;			
    }

	/* Metodo que retorna el OsPrioridad (Clave Foranea) en Array */ 	
    public function getOsPrioridadEnArray(&$arr_os){
        if($this->getOsPrioridadId() != 'null'){
            if(isset($arr_os[$this->getOsPrioridadId()])){
                $o = $arr_os[$this->getOsPrioridadId()];
            }else{
                $o = OsPrioridad::getOxId($this->getOsPrioridadId());
                if($o){
                    $arr_os[$this->getOsPrioridadId()] = $o;
                }
            }
        }else{
            $o = new OsPrioridad();
        }
        return $o;		
    }

	/* Metodo que retorna el OsTipoEstado (Clave Foranea) */ 	
    public function getOsTipoEstado(){
        $o = new OsTipoEstado();
        $o->setId($this->getOsTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el OsTipoEstado (Clave Foranea) en Array */ 	
    public function getOsTipoEstadoEnArray(&$arr_os){
        if($this->getOsTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getOsTipoEstadoId()])){
                $o = $arr_os[$this->getOsTipoEstadoId()];
            }else{
                $o = OsTipoEstado::getOxId($this->getOsTipoEstadoId());
                if($o){
                    $arr_os[$this->getOsTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new OsTipoEstado();
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
            		
        if($contexto_solicitante != OsTipo::GEN_CLASE){
            if($this->getOsTipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(OsTipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getOsTipo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PerPersona::GEN_CLASE){
            if($this->getPerPersona()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerPersona::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerPersona()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != OsPrioridad::GEN_CLASE){
            if($this->getOsPrioridad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(OsPrioridad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getOsPrioridad()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != OsTipoEstado::GEN_CLASE){
            if($this->getOsTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(OsTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getOsTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM os_orden_servicio'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'os_orden_servicio';");
            
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

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'os_tipo_id' */ 	
	static function getOxOsTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'os_tipo_id' */ 	
	static function getOsxOsTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_persona_id' */ 	
	static function getOxPerPersonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_PERSONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'per_persona_id' */ 	
	static function getOsxPerPersonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_PERSONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'os_prioridad_id' */ 	
	static function getOxOsPrioridadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_PRIORIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'os_prioridad_id' */ 	
	static function getOsxOsPrioridadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_PRIORIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'os_tipo_estado_id' */ 	
	static function getOxOsTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'os_tipo_estado_id' */ 	
	static function getOsxOsTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OS_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'notificacion' */ 	
	static function getOxNotificacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTIFICACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'notificacion' */ 	
	static function getOsxNotificacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTIFICACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'notificacion_mecano' */ 	
	static function getOxNotificacionMecano($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTIFICACION_MECANO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'notificacion_mecano' */ 	
	static function getOsxNotificacionMecano($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTIFICACION_MECANO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_hecho' */ 	
	static function getOxFechaHecho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_HECHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_hecho' */ 	
	static function getOsxFechaHecho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_HECHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_notificacion' */ 	
	static function getOxFechaNotificacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_NOTIFICACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_notificacion' */ 	
	static function getOsxFechaNotificacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_NOTIFICACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'dias_para_descargo' */ 	
	static function getOxDiasParaDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DIAS_PARA_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'dias_para_descargo' */ 	
	static function getOsxDiasParaDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DIAS_PARA_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_limite_descargo' */ 	
	static function getOxFechaLimiteDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_LIMITE_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_limite_descargo' */ 	
	static function getOsxFechaLimiteDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_LIMITE_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_descargo' */ 	
	static function getOxFechaDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_descargo' */ 	
	static function getOsxFechaDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_notificado_sin_descargo' */ 	
	static function getOxFechaNotificadoSinDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_NOTIFICADO_SIN_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_notificado_sin_descargo' */ 	
	static function getOsxFechaNotificadoSinDescargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_NOTIFICADO_SIN_DESCARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_limite_resolucion' */ 	
	static function getOxFechaLimiteResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_LIMITE_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_limite_resolucion' */ 	
	static function getOsxFechaLimiteResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_LIMITE_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_resolucion' */ 	
	static function getOxFechaResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_resolucion' */ 	
	static function getOsxFechaResolucion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RESOLUCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios(null, $criterio);
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

            $obs = self::getOsOrdenServicios($paginador, $criterio);
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

            $obs = self::getOsOrdenServicios($paginador, $criterio);
            return $obs;
	}

	/* retorna el nombre de archivo de la imagen cuando no hay imagen */ 	
	public function getPathImagenNoImagen(){
            return Gral::getPath('path_http').'imgs/no-imagen.jpg';
	}

	/* retorna el nombre de archivo de la imagen */ 	
	public function getPathImagenPrincipal($thumb = false){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(OsOrdenServicioImagen::GEN_TABLA);
            $c->addOrden(OsOrdenServicioImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getOsOrdenServicioImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getOsOrdenServicioImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(OsOrdenServicioImagen::GEN_TABLA);
            $c->addOrden(OsOrdenServicioImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getOsOrdenServicioImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getOsOrdenServicioImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getOsOrdenServicioImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(OsOrdenServicioImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(OsOrdenServicioImagen::GEN_TABLA);
            $c->addOrden(OsOrdenServicioImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getOsOrdenServicioImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'os_orden_servicio_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_hecho' */ 	
	public function getFechaHechoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaHecho(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaHechoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaHechoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_notificacion' */ 	
	public function getFechaNotificacionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaNotificacion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaNotificacionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaNotificacionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_limite_descargo' */ 	
	public function getFechaLimiteDescargoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaLimiteDescargo(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaLimiteDescargoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaLimiteDescargoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_descargo' */ 	
	public function getFechaDescargoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaDescargo(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDescargoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDescargoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_notificado_sin_descargo' */ 	
	public function getFechaNotificadoSinDescargoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaNotificadoSinDescargo(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaNotificadoSinDescargoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaNotificadoSinDescargoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_limite_resolucion' */ 	
	public function getFechaLimiteResolucionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaLimiteResolucion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaLimiteResolucionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaLimiteResolucionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_resolucion' */ 	
	public function getFechaResolucionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaResolucion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaResolucionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaResolucionDiferenciaDias();
        
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
                $c->addTabla(OsOrdenServicio::GEN_TABLA);
                $c->addOrden(OsOrdenServicio::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $os_orden_servicios = OsOrdenServicio::getOsOrdenServicios(null, $c);

                $arr = array();
                foreach($os_orden_servicios as $os_orden_servicio){
                    $descripcion = $os_orden_servicio->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>