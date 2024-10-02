<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeRecepcionEstado
{ 
	
	const SES_PAGINACION = 'adm_pderecepcionestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pderecepcionestado_paginas_registros';
	const SES_CRITERIOS = 'adm_pderecepcionestado_criterios';
	
	const GEN_CLASE = 'PdeRecepcionEstado';
	const GEN_TABLA = 'pde_recepcion_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeRecepcionEstado */ 
	const GEN_ATTR_ID = 'pde_recepcion_estado.id';
	const GEN_ATTR_PDE_RECEPCION_ID = 'pde_recepcion_estado.pde_recepcion_id';
	const GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID = 'pde_recepcion_estado.pde_recepcion_tipo_estado_id';
	const GEN_ATTR_PDE_CENTRO_RECEPCION_ID = 'pde_recepcion_estado.pde_centro_recepcion_id';
	const GEN_ATTR_PAN_PANOL_ID = 'pde_recepcion_estado.pan_panol_id';
	const GEN_ATTR_CANTIDAD = 'pde_recepcion_estado.cantidad';
	const GEN_ATTR_INICIAL = 'pde_recepcion_estado.inicial';
	const GEN_ATTR_ACTUAL = 'pde_recepcion_estado.actual';
	const GEN_ATTR_OBSERVACION = 'pde_recepcion_estado.observacion';
	const GEN_ATTR_CREADO = 'pde_recepcion_estado.creado';
	const GEN_ATTR_CREADO_POR = 'pde_recepcion_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_recepcion_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_recepcion_estado.modificado_por';

	/* Constantes de Atributos Min de BPdeRecepcionEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_PDE_RECEPCION_ID = 'pde_recepcion_id';
	const GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID = 'pde_recepcion_tipo_estado_id';
	const GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID = 'pde_centro_recepcion_id';
	const GEN_ATTR_MIN_PAN_PANOL_ID = 'pan_panol_id';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_INICIAL = 'inicial';
	const GEN_ATTR_MIN_ACTUAL = 'actual';
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
	

	/* Atributos de BPdeRecepcionEstado */ 
	private $id;
	private $pde_recepcion_id;
	private $pde_recepcion_tipo_estado_id;
	private $pde_centro_recepcion_id;
	private $pan_panol_id;
	private $cantidad;
	private $inicial;
	private $actual;
	private $observacion;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeRecepcionEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getPdeRecepcionId(){ if(isset($this->pde_recepcion_id)){ return $this->pde_recepcion_id; }else{ return 'null'; } }
	public function getPdeRecepcionTipoEstadoId(){ if(isset($this->pde_recepcion_tipo_estado_id)){ return $this->pde_recepcion_tipo_estado_id; }else{ return 'null'; } }
	public function getPdeCentroRecepcionId(){ if(isset($this->pde_centro_recepcion_id)){ return $this->pde_centro_recepcion_id; }else{ return 'null'; } }
	public function getPanPanolId(){ if(isset($this->pan_panol_id)){ return $this->pan_panol_id; }else{ return 'null'; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getInicial(){ if(isset($this->inicial)){ return $this->inicial; }else{ return 0; } }
	public function getActual(){ if(isset($this->actual)){ return $this->actual; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdeRecepcionEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_PDE_RECEPCION_ID."
				, ".self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_PAN_PANOL_ID."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_INICIAL."
				, ".self::GEN_ATTR_ACTUAL."
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
                    				$this->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
				$this->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
				$this->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
				$this->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
				$this->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setPdeRecepcionId($v){ $this->pde_recepcion_id = $v; }
	public function setPdeRecepcionTipoEstadoId($v){ $this->pde_recepcion_tipo_estado_id = $v; }
	public function setPdeCentroRecepcionId($v){ $this->pde_centro_recepcion_id = $v; }
	public function setPanPanolId($v){ $this->pan_panol_id = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setInicial($v){ $this->inicial = $v; }
	public function setActual($v){ $this->actual = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeRecepcionEstado();
            $o->setId($fila[PdeRecepcionEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
			$o->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
			$o->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$o->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$o->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeRecepcionEstado */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BPdeRecepcionEstado */ 	
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

	/* Save de BPdeRecepcionEstado */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_recepcion_estado_seq'), 
                ".$this->getPdeRecepcionId()."
						, ".$this->getPdeRecepcionTipoEstadoId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPanPanolId()."
						, '".$this->getCantidad()."'
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, '".$this->getObservacion()."'
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_recepcion_estado_seq')";
            
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
                 
				 ".PdeRecepcionEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PDE_RECEPCION_ID." = ".$this->getPdeRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID." = ".$this->getPdeRecepcionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getPdeRecepcionId()."
						, ".$this->getPdeRecepcionTipoEstadoId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPanPanolId()."
						, '".$this->getCantidad()."'
						, ".$this->getInicial()."
						, ".$this->getActual()."
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
                     
				 ".PdeRecepcionEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PDE_RECEPCION_ID." = ".$this->getPdeRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID." = ".$this->getPdeRecepcionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
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
            $o = new PdeRecepcionEstado();
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

	/* Delete de BPdeRecepcionEstado */ 	
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
	
	public function duplicarPdeRecepcionEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeRecepcionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeRecepcionEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pderecepcionestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pderecepcionestado = new PdeRecepcionEstado();
                    $pderecepcionestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pderecepcionestado->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
			$pderecepcionestado->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
			$pderecepcionestado->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$pderecepcionestado->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$pderecepcionestado->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$pderecepcionestado->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$pderecepcionestado->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$pderecepcionestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pderecepcionestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pderecepcionestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pderecepcionestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pderecepcionestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pderecepcionestados[] = $pderecepcionestado;
		}
		
		return $pderecepcionestados;
	}	
	

	/* Método getPdeRecepcionEstados Habilitados */ 	
	static function getPdeRecepcionEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeRecepcionEstado::getPdeRecepcionEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeRecepcionEstados para listado de Backend */ 	
	static function getPdeRecepcionEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeRecepcionEstado::getPdeRecepcionEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeRecepcionEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeRecepcionEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeRecepcionEstado::getPdeRecepcionEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecepcionEstados filtrado para select */ 	
	static function getPdeRecepcionEstadosCmbF($paginador = null, $criterio = null){
            $col = PdeRecepcionEstado::getPdeRecepcionEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecepcionEstados filtrado por una coleccion de objetos foraneos de PdeRecepcion */ 	
	static function getPdeRecepcionEstadosXPdeRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->addOrden(PdeRecepcionEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcionEstado::getPdeRecepcionEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcionEstados filtrado por una coleccion de objetos foraneos de PdeRecepcionTipoEstado */ 	
	static function getPdeRecepcionEstadosXPdeRecepcionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->addOrden(PdeRecepcionEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcionEstado::getPdeRecepcionEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcionEstados filtrado por una coleccion de objetos foraneos de PdeCentroRecepcion */ 	
	static function getPdeRecepcionEstadosXPdeCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->addOrden(PdeRecepcionEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcionEstado::getPdeRecepcionEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcionEstados filtrado por una coleccion de objetos foraneos de PanPanol */ 	
	static function getPdeRecepcionEstadosXPanPanols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PAN_PANOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->addOrden(PdeRecepcionEstado::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcionEstado::getPdeRecepcionEstados($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanPanolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_recepcion_estado_adm.php';
            $url_gestion = 'pde_recepcion_estado_gestion.php';
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
	

	/* Metodo que retorna el PdeRecepcion (Clave Foranea) */ 	
    public function getPdeRecepcion(){
        $o = new PdeRecepcion();
        $o->setId($this->getPdeRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcion (Clave Foranea) en Array */ 	
    public function getPdeRecepcionEnArray(&$arr_os){
        if($this->getPdeRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionId()])){
                $o = $arr_os[$this->getPdeRecepcionId()];
            }else{
                $o = PdeRecepcion::getOxId($this->getPdeRecepcionId());
                if($o){
                    $arr_os[$this->getPdeRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeRecepcionTipoEstado (Clave Foranea) */ 	
    public function getPdeRecepcionTipoEstado(){
        $o = new PdeRecepcionTipoEstado();
        $o->setId($this->getPdeRecepcionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcionTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeRecepcionTipoEstadoEnArray(&$arr_os){
        if($this->getPdeRecepcionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionTipoEstadoId()])){
                $o = $arr_os[$this->getPdeRecepcionTipoEstadoId()];
            }else{
                $o = PdeRecepcionTipoEstado::getOxId($this->getPdeRecepcionTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeRecepcionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcionTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeCentroRecepcion (Clave Foranea) */ 	
    public function getPdeCentroRecepcion(){
        $o = new PdeCentroRecepcion();
        $o->setId($this->getPdeCentroRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroRecepcion (Clave Foranea) en Array */ 	
    public function getPdeCentroRecepcionEnArray(&$arr_os){
        if($this->getPdeCentroRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroRecepcionId()])){
                $o = $arr_os[$this->getPdeCentroRecepcionId()];
            }else{
                $o = PdeCentroRecepcion::getOxId($this->getPdeCentroRecepcionId());
                if($o){
                    $arr_os[$this->getPdeCentroRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el PanPanol (Clave Foranea) */ 	
    public function getPanPanol(){
        $o = new PanPanol();
        $o->setId($this->getPanPanolId());
        return $o;			
    }

	/* Metodo que retorna el PanPanol (Clave Foranea) en Array */ 	
    public function getPanPanolEnArray(&$arr_os){
        if($this->getPanPanolId() != 'null'){
            if(isset($arr_os[$this->getPanPanolId()])){
                $o = $arr_os[$this->getPanPanolId()];
            }else{
                $o = PanPanol::getOxId($this->getPanPanolId());
                if($o){
                    $arr_os[$this->getPanPanolId()] = $o;
                }
            }
        }else{
            $o = new PanPanol();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna la descripcion del objeto */ 	
    public function getDescripcion(){
        return $this->getId();
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

	/* Metodo que retorna la codigo del objeto */ 	
    public function getCodigo(){
        return $this->getId();			
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
            		
        if($contexto_solicitante != PdeRecepcion::GEN_CLASE){
            if($this->getPdeRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeRecepcionTipoEstado::GEN_CLASE){
            if($this->getPdeRecepcionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcionTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeCentroRecepcion::GEN_CLASE){
            if($this->getPdeCentroRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanPanol::GEN_CLASE){
            if($this->getPanPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanPanol()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_recepcion_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_recepcion_estado';");
            
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

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_id' */ 	
	static function getOxPdeRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_id' */ 	
	static function getOsxPdeRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_tipo_estado_id' */ 	
	static function getOxPdeRecepcionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_tipo_estado_id' */ 	
	static function getOsxPdeRecepcionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_recepcion_id' */ 	
	static function getOxPdeCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_recepcion_id' */ 	
	static function getOsxPdeCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_id' */ 	
	static function getOxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_panol_id' */ 	
	static function getOsxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad' */ 	
	static function getOsxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inicial' */ 	
	static function getOxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'inicial' */ 	
	static function getOsxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'actual' */ 	
	static function getOxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'actual' */ 	
	static function getOsxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados(null, $criterio);
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

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
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

            $obs = self::getPdeRecepcionEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_recepcion_estado_adm');
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
}
?>