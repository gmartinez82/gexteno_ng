<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BGenPrcaEjecucionDetalle
{ 
	
	const SES_PAGINACION = 'adm_genprcaejecuciondetalle_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_genprcaejecuciondetalle_paginas_registros';
	const SES_CRITERIOS = 'adm_genprcaejecuciondetalle_criterios';
	
	const GEN_CLASE = 'GenPrcaEjecucionDetalle';
	const GEN_TABLA = 'gen_prca_ejecucion_detalle';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGenPrcaEjecucionDetalle */ 
	const GEN_ATTR_ID = 'gen_prca_ejecucion_detalle.id';
	const GEN_ATTR_DESCRIPCION = 'gen_prca_ejecucion_detalle.descripcion';
	const GEN_ATTR_GEN_API_PROYECTO_ID = 'gen_prca_ejecucion_detalle.gen_api_proyecto_id';
	const GEN_ATTR_GEN_PRCA_PROCESO_ID = 'gen_prca_ejecucion_detalle.gen_prca_proceso_id';
	const GEN_ATTR_GEN_PRCA_EJECUCION_ID = 'gen_prca_ejecucion_detalle.gen_prca_ejecucion_id';
	const GEN_ATTR_FECHAHORA_INICIO = 'gen_prca_ejecucion_detalle.fechahora_inicio';
	const GEN_ATTR_FECHAHORA_FIN = 'gen_prca_ejecucion_detalle.fechahora_fin';
	const GEN_ATTR_INICIADO = 'gen_prca_ejecucion_detalle.iniciado';
	const GEN_ATTR_FINALIZADO = 'gen_prca_ejecucion_detalle.finalizado';
	const GEN_ATTR_CODIGO = 'gen_prca_ejecucion_detalle.codigo';
	const GEN_ATTR_ID_REMOTO = 'gen_prca_ejecucion_detalle.id_remoto';
	const GEN_ATTR_CONFIRMADO = 'gen_prca_ejecucion_detalle.confirmado';
	const GEN_ATTR_OBSERVACION = 'gen_prca_ejecucion_detalle.observacion';
	const GEN_ATTR_ORDEN = 'gen_prca_ejecucion_detalle.orden';
	const GEN_ATTR_ESTADO = 'gen_prca_ejecucion_detalle.estado';
	const GEN_ATTR_CREADO = 'gen_prca_ejecucion_detalle.creado';
	const GEN_ATTR_CREADO_POR = 'gen_prca_ejecucion_detalle.creado_por';
	const GEN_ATTR_MODIFICADO = 'gen_prca_ejecucion_detalle.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gen_prca_ejecucion_detalle.modificado_por';

	/* Constantes de Atributos Min de BGenPrcaEjecucionDetalle */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GEN_API_PROYECTO_ID = 'gen_api_proyecto_id';
	const GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID = 'gen_prca_proceso_id';
	const GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID = 'gen_prca_ejecucion_id';
	const GEN_ATTR_MIN_FECHAHORA_INICIO = 'fechahora_inicio';
	const GEN_ATTR_MIN_FECHAHORA_FIN = 'fechahora_fin';
	const GEN_ATTR_MIN_INICIADO = 'iniciado';
	const GEN_ATTR_MIN_FINALIZADO = 'finalizado';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_ID_REMOTO = 'id_remoto';
	const GEN_ATTR_MIN_CONFIRMADO = 'confirmado';
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
	

	/* Atributos de BGenPrcaEjecucionDetalle */ 
	private $id;
	private $descripcion;
	private $gen_api_proyecto_id;
	private $gen_prca_proceso_id;
	private $gen_prca_ejecucion_id;
	private $fechahora_inicio;
	private $fechahora_fin;
	private $iniciado;
	private $finalizado;
	private $codigo;
	private $id_remoto;
	private $confirmado;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGenPrcaEjecucionDetalle */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGenApiProyectoId(){ if(isset($this->gen_api_proyecto_id)){ return $this->gen_api_proyecto_id; }else{ return 'null'; } }
	public function getGenPrcaProcesoId(){ if(isset($this->gen_prca_proceso_id)){ return $this->gen_prca_proceso_id; }else{ return 'null'; } }
	public function getGenPrcaEjecucionId(){ if(isset($this->gen_prca_ejecucion_id)){ return $this->gen_prca_ejecucion_id; }else{ return 'null'; } }
	public function getFechahoraInicio(){ if(isset($this->fechahora_inicio)){ return $this->fechahora_inicio; }else{ return ''; } }
	public function getFechahoraFin(){ if(isset($this->fechahora_fin)){ return $this->fechahora_fin; }else{ return ''; } }
	public function getIniciado(){ if(isset($this->iniciado)){ return $this->iniciado; }else{ return 0; } }
	public function getFinalizado(){ if(isset($this->finalizado)){ return $this->finalizado; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getIdRemoto(){ if(isset($this->id_remoto)){ return $this->id_remoto; }else{ return 0; } }
	public function getConfirmado(){ if(isset($this->confirmado)){ return $this->confirmado; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGenPrcaEjecucionDetalle */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GEN_API_PROYECTO_ID."
				, ".self::GEN_ATTR_GEN_PRCA_PROCESO_ID."
				, ".self::GEN_ATTR_GEN_PRCA_EJECUCION_ID."
				, ".self::GEN_ATTR_FECHAHORA_INICIO."
				, ".self::GEN_ATTR_FECHAHORA_FIN."
				, ".self::GEN_ATTR_INICIADO."
				, ".self::GEN_ATTR_FINALIZADO."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_ID_REMOTO."
				, ".self::GEN_ATTR_CONFIRMADO."
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
				$this->setGenApiProyectoId($fila[self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID]);
				$this->setGenPrcaProcesoId($fila[self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID]);
				$this->setGenPrcaEjecucionId($fila[self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID]);
				$this->setFechahoraInicio($fila[self::GEN_ATTR_MIN_FECHAHORA_INICIO]);
				$this->setFechahoraFin($fila[self::GEN_ATTR_MIN_FECHAHORA_FIN]);
				$this->setIniciado($fila[self::GEN_ATTR_MIN_INICIADO]);
				$this->setFinalizado($fila[self::GEN_ATTR_MIN_FINALIZADO]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setIdRemoto($fila[self::GEN_ATTR_MIN_ID_REMOTO]);
				$this->setConfirmado($fila[self::GEN_ATTR_MIN_CONFIRMADO]);
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
	public function setGenApiProyectoId($v){ $this->gen_api_proyecto_id = $v; }
	public function setGenPrcaProcesoId($v){ $this->gen_prca_proceso_id = $v; }
	public function setGenPrcaEjecucionId($v){ $this->gen_prca_ejecucion_id = $v; }
	public function setFechahoraInicio($v){ $this->fechahora_inicio = $v; }
	public function setFechahoraFin($v){ $this->fechahora_fin = $v; }
	public function setIniciado($v){ $this->iniciado = $v; }
	public function setFinalizado($v){ $this->finalizado = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setIdRemoto($v){ $this->id_remoto = $v; }
	public function setConfirmado($v){ $this->confirmado = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GenPrcaEjecucionDetalle();
            $o->setId($fila[GenPrcaEjecucionDetalle::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGenApiProyectoId($fila[self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID]);
			$o->setGenPrcaProcesoId($fila[self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID]);
			$o->setGenPrcaEjecucionId($fila[self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID]);
			$o->setFechahoraInicio($fila[self::GEN_ATTR_MIN_FECHAHORA_INICIO]);
			$o->setFechahoraFin($fila[self::GEN_ATTR_MIN_FECHAHORA_FIN]);
			$o->setIniciado($fila[self::GEN_ATTR_MIN_INICIADO]);
			$o->setFinalizado($fila[self::GEN_ATTR_MIN_FINALIZADO]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setIdRemoto($fila[self::GEN_ATTR_MIN_ID_REMOTO]);
			$o->setConfirmado($fila[self::GEN_ATTR_MIN_CONFIRMADO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGenPrcaEjecucionDetalle */ 	
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

	/* Cambia el estado de BGenPrcaEjecucionDetalle */ 	
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

	/* Save de BGenPrcaEjecucionDetalle */ 	
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
						, ".self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID."
						, ".self::GEN_ATTR_MIN_FECHAHORA_INICIO."
						, ".self::GEN_ATTR_MIN_FECHAHORA_FIN."
						, ".self::GEN_ATTR_MIN_INICIADO."
						, ".self::GEN_ATTR_MIN_FINALIZADO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ID_REMOTO."
						, ".self::GEN_ATTR_MIN_CONFIRMADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gen_prca_ejecucion_detalle_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGenApiProyectoId()."
						, ".$this->getGenPrcaProcesoId()."
						, ".$this->getGenPrcaEjecucionId()."
						, '".$this->getFechahoraInicio()."'
						, '".$this->getFechahoraFin()."'
						, ".$this->getIniciado()."
						, ".$this->getFinalizado()."
						, '".$this->getCodigo()."'
						, ".$this->getIdRemoto()."
						, ".$this->getConfirmado()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gen_prca_ejecucion_detalle_seq')";
            
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
                 
				 ".GenPrcaEjecucionDetalle::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID." = ".$this->getGenApiProyectoId()."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID." = ".$this->getGenPrcaProcesoId()."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID." = ".$this->getGenPrcaEjecucionId()."
						, ".self::GEN_ATTR_MIN_FECHAHORA_INICIO." = '".$this->getFechahoraInicio()."'
						, ".self::GEN_ATTR_MIN_FECHAHORA_FIN." = '".$this->getFechahoraFin()."'
						, ".self::GEN_ATTR_MIN_INICIADO." = ".$this->getIniciado()."
						, ".self::GEN_ATTR_MIN_FINALIZADO." = ".$this->getFinalizado()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ID_REMOTO." = ".$this->getIdRemoto()."
						, ".self::GEN_ATTR_MIN_CONFIRMADO." = ".$this->getConfirmado()."
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
						, ".self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID."
						, ".self::GEN_ATTR_MIN_FECHAHORA_INICIO."
						, ".self::GEN_ATTR_MIN_FECHAHORA_FIN."
						, ".self::GEN_ATTR_MIN_INICIADO."
						, ".self::GEN_ATTR_MIN_FINALIZADO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ID_REMOTO."
						, ".self::GEN_ATTR_MIN_CONFIRMADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGenApiProyectoId()."
						, ".$this->getGenPrcaProcesoId()."
						, ".$this->getGenPrcaEjecucionId()."
						, '".$this->getFechahoraInicio()."'
						, '".$this->getFechahoraFin()."'
						, ".$this->getIniciado()."
						, ".$this->getFinalizado()."
						, '".$this->getCodigo()."'
						, ".$this->getIdRemoto()."
						, ".$this->getConfirmado()."
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
                     
				 ".GenPrcaEjecucionDetalle::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID." = ".$this->getGenApiProyectoId()."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID." = ".$this->getGenPrcaProcesoId()."
						, ".self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID." = ".$this->getGenPrcaEjecucionId()."
						, ".self::GEN_ATTR_MIN_FECHAHORA_INICIO." = '".$this->getFechahoraInicio()."'
						, ".self::GEN_ATTR_MIN_FECHAHORA_FIN." = '".$this->getFechahoraFin()."'
						, ".self::GEN_ATTR_MIN_INICIADO." = ".$this->getIniciado()."
						, ".self::GEN_ATTR_MIN_FINALIZADO." = ".$this->getFinalizado()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ID_REMOTO." = ".$this->getIdRemoto()."
						, ".self::GEN_ATTR_MIN_CONFIRMADO." = ".$this->getConfirmado()."
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
            $o = new GenPrcaEjecucionDetalle();
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

	/* Delete de BGenPrcaEjecucionDetalle */ 	
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
	
	public function duplicarGenPrcaEjecucionDetalle(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGenPrcaEjecucionDetalles($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GenPrcaEjecucionDetalle::setAplicarFiltrosDeAlcance($criterio);

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
	
		$genprcaejecuciondetalles = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $genprcaejecuciondetalle = new GenPrcaEjecucionDetalle();
                    $genprcaejecuciondetalle->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $genprcaejecuciondetalle->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$genprcaejecuciondetalle->setGenApiProyectoId($fila[self::GEN_ATTR_MIN_GEN_API_PROYECTO_ID]);
			$genprcaejecuciondetalle->setGenPrcaProcesoId($fila[self::GEN_ATTR_MIN_GEN_PRCA_PROCESO_ID]);
			$genprcaejecuciondetalle->setGenPrcaEjecucionId($fila[self::GEN_ATTR_MIN_GEN_PRCA_EJECUCION_ID]);
			$genprcaejecuciondetalle->setFechahoraInicio($fila[self::GEN_ATTR_MIN_FECHAHORA_INICIO]);
			$genprcaejecuciondetalle->setFechahoraFin($fila[self::GEN_ATTR_MIN_FECHAHORA_FIN]);
			$genprcaejecuciondetalle->setIniciado($fila[self::GEN_ATTR_MIN_INICIADO]);
			$genprcaejecuciondetalle->setFinalizado($fila[self::GEN_ATTR_MIN_FINALIZADO]);
			$genprcaejecuciondetalle->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$genprcaejecuciondetalle->setIdRemoto($fila[self::GEN_ATTR_MIN_ID_REMOTO]);
			$genprcaejecuciondetalle->setConfirmado($fila[self::GEN_ATTR_MIN_CONFIRMADO]);
			$genprcaejecuciondetalle->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$genprcaejecuciondetalle->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$genprcaejecuciondetalle->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$genprcaejecuciondetalle->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$genprcaejecuciondetalle->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$genprcaejecuciondetalle->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$genprcaejecuciondetalle->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $genprcaejecuciondetalles[] = $genprcaejecuciondetalle;
		}
		
		return $genprcaejecuciondetalles;
	}	
	

	/* Método getGenPrcaEjecucionDetalles Habilitados */ 	
	static function getGenPrcaEjecucionDetallesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGenPrcaEjecucionDetalles para listado de Backend */ 	
	static function getGenPrcaEjecucionDetallesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGenPrcaEjecucionDetallesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GenPrcaEjecucionDetalle::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGenPrcaEjecucionDetalles filtrado para select */ 	
	static function getGenPrcaEjecucionDetallesCmbF($paginador = null, $criterio = null){
            $col = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGenPrcaEjecucionDetalles filtrado por una coleccion de objetos foraneos de GenApiProyecto */ 	
	static function getGenPrcaEjecucionDetallesXGenApiProyectos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GenPrcaEjecucionDetalle::GEN_ATTR_GEN_API_PROYECTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GenPrcaEjecucionDetalle::GEN_TABLA);
            $c->addOrden(GenPrcaEjecucionDetalle::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGenApiProyectoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getGenPrcaEjecucionDetalles filtrado por una coleccion de objetos foraneos de GenPrcaProceso */ 	
	static function getGenPrcaEjecucionDetallesXGenPrcaProcesos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GenPrcaEjecucionDetalle::GEN_ATTR_GEN_PRCA_PROCESO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GenPrcaEjecucionDetalle::GEN_TABLA);
            $c->addOrden(GenPrcaEjecucionDetalle::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGenPrcaProcesoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getGenPrcaEjecucionDetalles filtrado por una coleccion de objetos foraneos de GenPrcaEjecucion */ 	
	static function getGenPrcaEjecucionDetallesXGenPrcaEjecucions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GenPrcaEjecucionDetalle::GEN_ATTR_GEN_PRCA_EJECUCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GenPrcaEjecucionDetalle::GEN_TABLA);
            $c->addOrden(GenPrcaEjecucionDetalle::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGenPrcaEjecucionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'gen_prca_ejecucion_detalle_adm.php';
            $url_gestion = 'gen_prca_ejecucion_detalle_gestion.php';
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
	

	/* Metodo que retorna el GenApiProyecto (Clave Foranea) */ 	
    public function getGenApiProyecto(){
        $o = new GenApiProyecto();
        $o->setId($this->getGenApiProyectoId());
        return $o;			
    }

	/* Metodo que retorna el GenApiProyecto (Clave Foranea) en Array */ 	
    public function getGenApiProyectoEnArray(&$arr_os){
        if($this->getGenApiProyectoId() != 'null'){
            if(isset($arr_os[$this->getGenApiProyectoId()])){
                $o = $arr_os[$this->getGenApiProyectoId()];
            }else{
                $o = GenApiProyecto::getOxId($this->getGenApiProyectoId());
                if($o){
                    $arr_os[$this->getGenApiProyectoId()] = $o;
                }
            }
        }else{
            $o = new GenApiProyecto();
        }
        return $o;		
    }

	/* Metodo que retorna el GenPrcaProceso (Clave Foranea) */ 	
    public function getGenPrcaProceso(){
        $o = new GenPrcaProceso();
        $o->setId($this->getGenPrcaProcesoId());
        return $o;			
    }

	/* Metodo que retorna el GenPrcaProceso (Clave Foranea) en Array */ 	
    public function getGenPrcaProcesoEnArray(&$arr_os){
        if($this->getGenPrcaProcesoId() != 'null'){
            if(isset($arr_os[$this->getGenPrcaProcesoId()])){
                $o = $arr_os[$this->getGenPrcaProcesoId()];
            }else{
                $o = GenPrcaProceso::getOxId($this->getGenPrcaProcesoId());
                if($o){
                    $arr_os[$this->getGenPrcaProcesoId()] = $o;
                }
            }
        }else{
            $o = new GenPrcaProceso();
        }
        return $o;		
    }

	/* Metodo que retorna el GenPrcaEjecucion (Clave Foranea) */ 	
    public function getGenPrcaEjecucion(){
        $o = new GenPrcaEjecucion();
        $o->setId($this->getGenPrcaEjecucionId());
        return $o;			
    }

	/* Metodo que retorna el GenPrcaEjecucion (Clave Foranea) en Array */ 	
    public function getGenPrcaEjecucionEnArray(&$arr_os){
        if($this->getGenPrcaEjecucionId() != 'null'){
            if(isset($arr_os[$this->getGenPrcaEjecucionId()])){
                $o = $arr_os[$this->getGenPrcaEjecucionId()];
            }else{
                $o = GenPrcaEjecucion::getOxId($this->getGenPrcaEjecucionId());
                if($o){
                    $arr_os[$this->getGenPrcaEjecucionId()] = $o;
                }
            }
        }else{
            $o = new GenPrcaEjecucion();
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
            		
        if($contexto_solicitante != GenApiProyecto::GEN_CLASE){
            if($this->getGenApiProyecto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GenApiProyecto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGenApiProyecto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GenPrcaProceso::GEN_CLASE){
            if($this->getGenPrcaProceso()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GenPrcaProceso::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGenPrcaProceso()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GenPrcaEjecucion::GEN_CLASE){
            if($this->getGenPrcaEjecucion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GenPrcaEjecucion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGenPrcaEjecucion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gen_prca_ejecucion_detalle'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gen_prca_ejecucion_detalle';");
            
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

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gen_api_proyecto_id' */ 	
	static function getOxGenApiProyectoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_API_PROYECTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gen_api_proyecto_id' */ 	
	static function getOsxGenApiProyectoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_API_PROYECTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gen_prca_proceso_id' */ 	
	static function getOxGenPrcaProcesoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_PRCA_PROCESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gen_prca_proceso_id' */ 	
	static function getOsxGenPrcaProcesoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_PRCA_PROCESO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gen_prca_ejecucion_id' */ 	
	static function getOxGenPrcaEjecucionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_PRCA_EJECUCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gen_prca_ejecucion_id' */ 	
	static function getOsxGenPrcaEjecucionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_PRCA_EJECUCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fechahora_inicio' */ 	
	static function getOxFechahoraInicio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA_INICIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fechahora_inicio' */ 	
	static function getOsxFechahoraInicio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA_INICIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fechahora_fin' */ 	
	static function getOxFechahoraFin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA_FIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fechahora_fin' */ 	
	static function getOsxFechahoraFin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA_FIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iniciado' */ 	
	static function getOxIniciado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iniciado' */ 	
	static function getOsxIniciado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'finalizado' */ 	
	static function getOxFinalizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FINALIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'finalizado' */ 	
	static function getOsxFinalizado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FINALIZADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'id_remoto' */ 	
	static function getOxIdRemoto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID_REMOTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'id_remoto' */ 	
	static function getOsxIdRemoto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID_REMOTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'confirmado' */ 	
	static function getOxConfirmado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFIRMADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'confirmado' */ 	
	static function getOsxConfirmado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFIRMADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles(null, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
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

            $obs = self::getGenPrcaEjecucionDetalles($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gen_prca_ejecucion_detalle_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fechahora_inicio' */ 	
	public function getFechahoraInicioDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechahoraInicio(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechahoraInicioDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechahoraInicioDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fechahora_fin' */ 	
	public function getFechahoraFinDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechahoraFin(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechahoraFinDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechahoraFinDiferenciaDias();
        
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
                $c->addTabla(GenPrcaEjecucionDetalle::GEN_TABLA);
                $c->addOrden(GenPrcaEjecucionDetalle::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gen_prca_ejecucion_detalles = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetalles(null, $c);

                $arr = array();
                foreach($gen_prca_ejecucion_detalles as $gen_prca_ejecucion_detalle){
                    $descripcion = $gen_prca_ejecucion_detalle->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>