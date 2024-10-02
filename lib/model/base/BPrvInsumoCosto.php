<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrvInsumoCosto
{ 
	
	const SES_PAGINACION = 'adm_prvinsumocosto_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prvinsumocosto_paginas_registros';
	const SES_CRITERIOS = 'adm_prvinsumocosto_criterios';
	
	const GEN_CLASE = 'PrvInsumoCosto';
	const GEN_TABLA = 'prv_insumo_costo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrvInsumoCosto */ 
	const GEN_ATTR_ID = 'prv_insumo_costo.id';
	const GEN_ATTR_PRV_INSUMO_ID = 'prv_insumo_costo.prv_insumo_id';
	const GEN_ATTR_IMPORTE_BRUTO = 'prv_insumo_costo.importe_bruto';
	const GEN_ATTR_DESCUENTO = 'prv_insumo_costo.descuento';
	const GEN_ATTR_INICIAL = 'prv_insumo_costo.inicial';
	const GEN_ATTR_ACTUAL = 'prv_insumo_costo.actual';
	const GEN_ATTR_NUMERO_IMPORTACION = 'prv_insumo_costo.numero_importacion';
	const GEN_ATTR_FECHA_ACTUALIZACION = 'prv_insumo_costo.fecha_actualizacion';
	const GEN_ATTR_PRV_IMPORTACION_ID = 'prv_insumo_costo.prv_importacion_id';
	const GEN_ATTR_OBSERVACION = 'prv_insumo_costo.observacion';
	const GEN_ATTR_ORDEN = 'prv_insumo_costo.orden';
	const GEN_ATTR_ESTADO = 'prv_insumo_costo.estado';
	const GEN_ATTR_CREADO = 'prv_insumo_costo.creado';
	const GEN_ATTR_CREADO_POR = 'prv_insumo_costo.creado_por';
	const GEN_ATTR_MODIFICADO = 'prv_insumo_costo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prv_insumo_costo.modificado_por';

	/* Constantes de Atributos Min de BPrvInsumoCosto */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_PRV_INSUMO_ID = 'prv_insumo_id';
	const GEN_ATTR_MIN_IMPORTE_BRUTO = 'importe_bruto';
	const GEN_ATTR_MIN_DESCUENTO = 'descuento';
	const GEN_ATTR_MIN_INICIAL = 'inicial';
	const GEN_ATTR_MIN_ACTUAL = 'actual';
	const GEN_ATTR_MIN_NUMERO_IMPORTACION = 'numero_importacion';
	const GEN_ATTR_MIN_FECHA_ACTUALIZACION = 'fecha_actualizacion';
	const GEN_ATTR_MIN_PRV_IMPORTACION_ID = 'prv_importacion_id';
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
	

	/* Atributos de BPrvInsumoCosto */ 
	private $id;
	private $prv_insumo_id;
	private $importe_bruto;
	private $descuento;
	private $inicial;
	private $actual;
	private $numero_importacion;
	private $fecha_actualizacion;
	private $prv_importacion_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrvInsumoCosto */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getPrvInsumoId(){ if(isset($this->prv_insumo_id)){ return $this->prv_insumo_id; }else{ return 'null'; } }
	public function getImporteBruto(){ if(isset($this->importe_bruto)){ return $this->importe_bruto; }else{ return 0; } }
	public function getDescuento(){ if(isset($this->descuento)){ return $this->descuento; }else{ return 0; } }
	public function getInicial(){ if(isset($this->inicial)){ return $this->inicial; }else{ return 0; } }
	public function getActual(){ if(isset($this->actual)){ return $this->actual; }else{ return 0; } }
	public function getNumeroImportacion(){ if(isset($this->numero_importacion)){ return $this->numero_importacion; }else{ return 0; } }
	public function getFechaActualizacion(){ if(isset($this->fecha_actualizacion)){ return $this->fecha_actualizacion; }else{ return ''; } }
	public function getPrvImportacionId(){ if(isset($this->prv_importacion_id)){ return $this->prv_importacion_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrvInsumoCosto */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_PRV_INSUMO_ID."
				, ".self::GEN_ATTR_IMPORTE_BRUTO."
				, ".self::GEN_ATTR_DESCUENTO."
				, ".self::GEN_ATTR_INICIAL."
				, ".self::GEN_ATTR_ACTUAL."
				, ".self::GEN_ATTR_NUMERO_IMPORTACION."
				, ".self::GEN_ATTR_FECHA_ACTUALIZACION."
				, ".self::GEN_ATTR_PRV_IMPORTACION_ID."
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
                    				$this->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
				$this->setImporteBruto($fila[self::GEN_ATTR_MIN_IMPORTE_BRUTO]);
				$this->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
				$this->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
				$this->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
				$this->setNumeroImportacion($fila[self::GEN_ATTR_MIN_NUMERO_IMPORTACION]);
				$this->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
				$this->setPrvImportacionId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_ID]);
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
	public function setPrvInsumoId($v){ $this->prv_insumo_id = $v; }
	public function setImporteBruto($v){ $this->importe_bruto = $v; }
	public function setDescuento($v){ $this->descuento = $v; }
	public function setInicial($v){ $this->inicial = $v; }
	public function setActual($v){ $this->actual = $v; }
	public function setNumeroImportacion($v){ $this->numero_importacion = $v; }
	public function setFechaActualizacion($v){ $this->fecha_actualizacion = $v; }
	public function setPrvImportacionId($v){ $this->prv_importacion_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrvInsumoCosto();
            $o->setId($fila[PrvInsumoCosto::GEN_ATTR_MIN_ID], false);
            
			$o->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$o->setImporteBruto($fila[self::GEN_ATTR_MIN_IMPORTE_BRUTO]);
			$o->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$o->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$o->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$o->setNumeroImportacion($fila[self::GEN_ATTR_MIN_NUMERO_IMPORTACION]);
			$o->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
			$o->setPrvImportacionId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPrvInsumoCosto */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BPrvInsumoCosto */ 	
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

	/* Save de BPrvInsumoCosto */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_BRUTO."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_NUMERO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prv_insumo_costo_seq'), 
                ".$this->getPrvInsumoId()."
						, '".$this->getImporteBruto()."'
						, '".$this->getDescuento()."'
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getNumeroImportacion()."
						, '".$this->getFechaActualizacion()."'
						, ".$this->getPrvImportacionId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prv_insumo_costo_seq')";
            
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
                 
				 ".PrvInsumoCosto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_BRUTO." = '".$this->getImporteBruto()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_NUMERO_IMPORTACION." = ".$this->getNumeroImportacion()."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION." = '".$this->getFechaActualizacion()."'
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_ID." = ".$this->getPrvImportacionId()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_BRUTO."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_INICIAL."
						, ".self::GEN_ATTR_MIN_ACTUAL."
						, ".self::GEN_ATTR_MIN_NUMERO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getPrvInsumoId()."
						, '".$this->getImporteBruto()."'
						, '".$this->getDescuento()."'
						, ".$this->getInicial()."
						, ".$this->getActual()."
						, ".$this->getNumeroImportacion()."
						, '".$this->getFechaActualizacion()."'
						, ".$this->getPrvImportacionId()."
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
                     
				 ".PrvInsumoCosto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_BRUTO." = '".$this->getImporteBruto()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_INICIAL." = ".$this->getInicial()."
						, ".self::GEN_ATTR_MIN_ACTUAL." = ".$this->getActual()."
						, ".self::GEN_ATTR_MIN_NUMERO_IMPORTACION." = ".$this->getNumeroImportacion()."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION." = '".$this->getFechaActualizacion()."'
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_ID." = ".$this->getPrvImportacionId()."
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
            $o = new PrvInsumoCosto();
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

	/* Delete de BPrvInsumoCosto */ 	
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
	
            // se elimina la coleccion de PdeOcAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrvInsumoCosto(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrvInsumoCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrvInsumoCosto::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prvinsumocostos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prvinsumocosto = new PrvInsumoCosto();
                    $prvinsumocosto->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prvinsumocosto->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$prvinsumocosto->setImporteBruto($fila[self::GEN_ATTR_MIN_IMPORTE_BRUTO]);
			$prvinsumocosto->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$prvinsumocosto->setInicial($fila[self::GEN_ATTR_MIN_INICIAL]);
			$prvinsumocosto->setActual($fila[self::GEN_ATTR_MIN_ACTUAL]);
			$prvinsumocosto->setNumeroImportacion($fila[self::GEN_ATTR_MIN_NUMERO_IMPORTACION]);
			$prvinsumocosto->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
			$prvinsumocosto->setPrvImportacionId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_ID]);
			$prvinsumocosto->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prvinsumocosto->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prvinsumocosto->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prvinsumocosto->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prvinsumocosto->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prvinsumocosto->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prvinsumocosto->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prvinsumocostos[] = $prvinsumocosto;
		}
		
		return $prvinsumocostos;
	}	
	

	/* Método getPrvInsumoCostos Habilitados */ 	
	static function getPrvInsumoCostosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrvInsumoCosto::getPrvInsumoCostos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrvInsumoCostos para listado de Backend */ 	
	static function getPrvInsumoCostosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrvInsumoCosto::getPrvInsumoCostos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrvInsumoCostosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrvInsumoCosto::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrvInsumoCosto::getPrvInsumoCostos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvInsumoCostos filtrado para select */ 	
	static function getPrvInsumoCostosCmbF($paginador = null, $criterio = null){
            $col = PrvInsumoCosto::getPrvInsumoCostos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvInsumoCostos filtrado por una coleccion de objetos foraneos de PrvInsumo */ 	
	static function getPrvInsumoCostosXPrvInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->addOrden(PrvInsumoCosto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumoCosto::getPrvInsumoCostos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvInsumoCostos filtrado por una coleccion de objetos foraneos de PrvImportacion */ 	
	static function getPrvInsumoCostosXPrvImportacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->addOrden(PrvInsumoCosto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumoCosto::getPrvInsumoCostos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvImportacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prv_insumo_costo_adm.php';
            $url_gestion = 'prv_insumo_costo_gestion.php';
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
	

	/* Metodo getPdeOcAgrupacionItems */ 	
	public function getPdeOcAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacionitem = PdeOcAgrupacionItem::hidratarObjeto($fila);			
                $pdeocagrupacionitems[] = $pdeocagrupacionitem;
            }

            return $pdeocagrupacionitems;
	}	
	

	/* Método getPdeOcAgrupacionItemsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItems Habilitados */ 	
	public function getPdeOcAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacionItem relacionadas */ 	
	public function deletePdeOcAgrupacionItems(){
            $obs = $this->getPdeOcAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionItemsCmb() PdeOcAgrupacionItem relacionadas */ 	
	public function getPdeOcAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcAgrupacions (Coleccion) relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcAgrupacions relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getCantidadPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcAgrupacion (Objeto) relacionado a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcs */ 	
	public function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOc::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeoc = PdeOc::hidratarObjeto($fila);			
                $pdeocs[] = $pdeoc;
            }

            return $pdeocs;
	}	
	

	/* Método getPdeOcsBloque para MasInfo */ 	
	public function getPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcs Habilitados */ 	
	public function getPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOc */ 	
	public function getPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOc relacionadas */ 	
	public function deletePdeOcs(){
            $obs = $this->getPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcsCmb() PdeOc relacionadas */ 	
	public function getPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeOc */ 	
	public function getCantidadPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_COSTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdePedidoXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el PrvInsumo (Clave Foranea) */ 	
    public function getPrvInsumo(){
        $o = new PrvInsumo();
        $o->setId($this->getPrvInsumoId());
        return $o;			
    }

	/* Metodo que retorna el PrvInsumo (Clave Foranea) en Array */ 	
    public function getPrvInsumoEnArray(&$arr_os){
        if($this->getPrvInsumoId() != 'null'){
            if(isset($arr_os[$this->getPrvInsumoId()])){
                $o = $arr_os[$this->getPrvInsumoId()];
            }else{
                $o = PrvInsumo::getOxId($this->getPrvInsumoId());
                if($o){
                    $arr_os[$this->getPrvInsumoId()] = $o;
                }
            }
        }else{
            $o = new PrvInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvImportacion (Clave Foranea) */ 	
    public function getPrvImportacion(){
        $o = new PrvImportacion();
        $o->setId($this->getPrvImportacionId());
        return $o;			
    }

	/* Metodo que retorna el PrvImportacion (Clave Foranea) en Array */ 	
    public function getPrvImportacionEnArray(&$arr_os){
        if($this->getPrvImportacionId() != 'null'){
            if(isset($arr_os[$this->getPrvImportacionId()])){
                $o = $arr_os[$this->getPrvImportacionId()];
            }else{
                $o = PrvImportacion::getOxId($this->getPrvImportacionId());
                if($o){
                    $arr_os[$this->getPrvImportacionId()] = $o;
                }
            }
        }else{
            $o = new PrvImportacion();
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
            		
        if($contexto_solicitante != PrvInsumo::GEN_CLASE){
            if($this->getPrvInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvImportacion::GEN_CLASE){
            if($this->getPrvImportacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvImportacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvImportacion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prv_insumo_costo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prv_insumo_costo';");
            
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

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_insumo_id' */ 	
	static function getOxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_insumo_id' */ 	
	static function getOsxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_bruto' */ 	
	static function getOxImporteBruto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_BRUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_bruto' */ 	
	static function getOsxImporteBruto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_BRUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descuento' */ 	
	static function getOxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descuento' */ 	
	static function getOsxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inicial' */ 	
	static function getOxInicial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INICIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'actual' */ 	
	static function getOxActual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_importacion' */ 	
	static function getOxNumeroImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_importacion' */ 	
	static function getOsxNumeroImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_actualizacion' */ 	
	static function getOxFechaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_actualizacion' */ 	
	static function getOsxFechaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_importacion_id' */ 	
	static function getOxPrvImportacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_IMPORTACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_importacion_id' */ 	
	static function getOsxPrvImportacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_IMPORTACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos(null, $criterio);
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

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
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

            $obs = self::getPrvInsumoCostos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prv_insumo_costo_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_actualizacion' */ 	
	public function getFechaActualizacionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaActualizacion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaActualizacionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaActualizacionDiferenciaDias();
        
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
}
?>