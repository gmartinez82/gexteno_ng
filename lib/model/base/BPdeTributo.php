<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeTributo
{ 
	
	const SES_PAGINACION = 'adm_pdetributo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdetributo_paginas_registros';
	const SES_CRITERIOS = 'adm_pdetributo_criterios';
	
	const GEN_CLASE = 'PdeTributo';
	const GEN_TABLA = 'pde_tributo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeTributo */ 
	const GEN_ATTR_ID = 'pde_tributo.id';
	const GEN_ATTR_DESCRIPCION = 'pde_tributo.descripcion';
	const GEN_ATTR_ALICUOTA_PORCENTUAL = 'pde_tributo.alicuota_porcentual';
	const GEN_ATTR_ALICUOTA_DECIMAL = 'pde_tributo.alicuota_decimal';
	const GEN_ATTR_FORMULA = 'pde_tributo.formula';
	const GEN_ATTR_CNTB_CUENTA_ID = 'pde_tributo.cntb_cuenta_id';
	const GEN_ATTR_ES_RETENCION = 'pde_tributo.es_retencion';
	const GEN_ATTR_ES_PERCEPCION = 'pde_tributo.es_percepcion';
	const GEN_ATTR_CODIGO = 'pde_tributo.codigo';
	const GEN_ATTR_OBSERVACION = 'pde_tributo.observacion';
	const GEN_ATTR_ORDEN = 'pde_tributo.orden';
	const GEN_ATTR_ESTADO = 'pde_tributo.estado';
	const GEN_ATTR_CREADO = 'pde_tributo.creado';
	const GEN_ATTR_CREADO_POR = 'pde_tributo.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_tributo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_tributo.modificado_por';

	/* Constantes de Atributos Min de BPdeTributo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_ALICUOTA_PORCENTUAL = 'alicuota_porcentual';
	const GEN_ATTR_MIN_ALICUOTA_DECIMAL = 'alicuota_decimal';
	const GEN_ATTR_MIN_FORMULA = 'formula';
	const GEN_ATTR_MIN_CNTB_CUENTA_ID = 'cntb_cuenta_id';
	const GEN_ATTR_MIN_ES_RETENCION = 'es_retencion';
	const GEN_ATTR_MIN_ES_PERCEPCION = 'es_percepcion';
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
	

	/* Atributos de BPdeTributo */ 
	private $id;
	private $descripcion;
	private $alicuota_porcentual;
	private $alicuota_decimal;
	private $formula;
	private $cntb_cuenta_id;
	private $es_retencion;
	private $es_percepcion;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeTributo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getAlicuotaPorcentual(){ if(isset($this->alicuota_porcentual)){ return $this->alicuota_porcentual; }else{ return 0; } }
	public function getAlicuotaDecimal(){ if(isset($this->alicuota_decimal)){ return $this->alicuota_decimal; }else{ return 0; } }
	public function getFormula(){ if(isset($this->formula)){ return $this->formula; }else{ return ''; } }
	public function getCntbCuentaId(){ if(isset($this->cntb_cuenta_id)){ return $this->cntb_cuenta_id; }else{ return 'null'; } }
	public function getEsRetencion(){ if(isset($this->es_retencion)){ return $this->es_retencion; }else{ return 0; } }
	public function getEsPercepcion(){ if(isset($this->es_percepcion)){ return $this->es_percepcion; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeTributo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_ALICUOTA_PORCENTUAL."
				, ".self::GEN_ATTR_ALICUOTA_DECIMAL."
				, ".self::GEN_ATTR_FORMULA."
				, ".self::GEN_ATTR_CNTB_CUENTA_ID."
				, ".self::GEN_ATTR_ES_RETENCION."
				, ".self::GEN_ATTR_ES_PERCEPCION."
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
				$this->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
				$this->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
				$this->setFormula($fila[self::GEN_ATTR_MIN_FORMULA]);
				$this->setCntbCuentaId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_ID]);
				$this->setEsRetencion($fila[self::GEN_ATTR_MIN_ES_RETENCION]);
				$this->setEsPercepcion($fila[self::GEN_ATTR_MIN_ES_PERCEPCION]);
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
	public function setAlicuotaPorcentual($v){ $this->alicuota_porcentual = $v; }
	public function setAlicuotaDecimal($v){ $this->alicuota_decimal = $v; }
	public function setFormula($v){ $this->formula = $v; }
	public function setCntbCuentaId($v){ $this->cntb_cuenta_id = $v; }
	public function setEsRetencion($v){ $this->es_retencion = $v; }
	public function setEsPercepcion($v){ $this->es_percepcion = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeTributo();
            $o->setId($fila[PdeTributo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$o->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
			$o->setFormula($fila[self::GEN_ATTR_MIN_FORMULA]);
			$o->setCntbCuentaId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_ID]);
			$o->setEsRetencion($fila[self::GEN_ATTR_MIN_ES_RETENCION]);
			$o->setEsPercepcion($fila[self::GEN_ATTR_MIN_ES_PERCEPCION]);
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

	/* Control de BPdeTributo */ 	
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

	/* Cambia el estado de BPdeTributo */ 	
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

	/* Save de BPdeTributo */ 	
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
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL."
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL."
						, ".self::GEN_ATTR_MIN_FORMULA."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_ES_RETENCION."
						, ".self::GEN_ATTR_MIN_ES_PERCEPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_tributo_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getAlicuotaPorcentual()."'
						, '".$this->getAlicuotaDecimal()."'
						, '".$this->getFormula()."'
						, ".$this->getCntbCuentaId()."
						, ".$this->getEsRetencion()."
						, ".$this->getEsPercepcion()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_tributo_seq')";
            
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
                 
				 ".PdeTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
						, ".self::GEN_ATTR_MIN_FORMULA." = '".$this->getFormula()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID." = ".$this->getCntbCuentaId()."
						, ".self::GEN_ATTR_MIN_ES_RETENCION." = ".$this->getEsRetencion()."
						, ".self::GEN_ATTR_MIN_ES_PERCEPCION." = ".$this->getEsPercepcion()."
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
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL."
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL."
						, ".self::GEN_ATTR_MIN_FORMULA."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID."
						, ".self::GEN_ATTR_MIN_ES_RETENCION."
						, ".self::GEN_ATTR_MIN_ES_PERCEPCION."
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
						, '".$this->getAlicuotaPorcentual()."'
						, '".$this->getAlicuotaDecimal()."'
						, '".$this->getFormula()."'
						, ".$this->getCntbCuentaId()."
						, ".$this->getEsRetencion()."
						, ".$this->getEsPercepcion()."
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
                     
				 ".PdeTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
						, ".self::GEN_ATTR_MIN_FORMULA." = '".$this->getFormula()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID." = ".$this->getCntbCuentaId()."
						, ".self::GEN_ATTR_MIN_ES_RETENCION." = ".$this->getEsRetencion()."
						, ".self::GEN_ATTR_MIN_ES_PERCEPCION." = ".$this->getEsPercepcion()."
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
            $o = new PdeTributo();
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

	/* Delete de BPdeTributo */ 	
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
	
            // se elimina la coleccion de PdeTributoExencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeTributoExencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeTributoExencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeTributo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeTributo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdetributos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdetributo = new PdeTributo();
                    $pdetributo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdetributo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdetributo->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$pdetributo->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
			$pdetributo->setFormula($fila[self::GEN_ATTR_MIN_FORMULA]);
			$pdetributo->setCntbCuentaId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_ID]);
			$pdetributo->setEsRetencion($fila[self::GEN_ATTR_MIN_ES_RETENCION]);
			$pdetributo->setEsPercepcion($fila[self::GEN_ATTR_MIN_ES_PERCEPCION]);
			$pdetributo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdetributo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdetributo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdetributo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdetributo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdetributo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdetributo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdetributo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdetributos[] = $pdetributo;
		}
		
		return $pdetributos;
	}	
	

	/* Método getPdeTributos Habilitados */ 	
	static function getPdeTributosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeTributo::getPdeTributos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeTributos para listado de Backend */ 	
	static function getPdeTributosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeTributo::getPdeTributos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeTributosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeTributo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeTributo::getPdeTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeTributos filtrado para select */ 	
	static function getPdeTributosCmbF($paginador = null, $criterio = null){
            $col = PdeTributo::getPdeTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeTributos filtrado por una coleccion de objetos foraneos de CntbCuenta */ 	
	static function getPdeTributosXCntbCuentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeTributo::GEN_ATTR_CNTB_CUENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addOrden(PdeTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeTributo::getPdeTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbCuentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_tributo_adm.php';
            $url_gestion = 'pde_tributo_gestion.php';
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
	

	/* Metodo getPdeTributoExencions */ 	
	public function getPdeTributoExencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeTributoExencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeTributoExencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeTributoExencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeTributoExencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeTributoExencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeTributoExencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdetributoexencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdetributoexencion = PdeTributoExencion::hidratarObjeto($fila);			
                $pdetributoexencions[] = $pdetributoexencion;
            }

            return $pdetributoexencions;
	}	
	

	/* Método getPdeTributoExencionsBloque para MasInfo */ 	
	public function getPdeTributoExencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeTributoExencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeTributoExencions Habilitados */ 	
	public function getPdeTributoExencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeTributoExencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeTributoExencion */ 	
	public function getPdeTributoExencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeTributoExencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeTributoExencion relacionadas */ 	
	public function deletePdeTributoExencions(){
            $obs = $this->getPdeTributoExencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeTributoExencionsCmb() PdeTributoExencion relacionadas */ 	
	public function getPdeTributoExencionsCmb(){
            $c = new Criterio();
            $c->add(PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributoExencion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeTributoExencion::getPdeTributoExencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeTributoExencion */ 	
	public function getPrvProveedorsXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeTributoExencion::GEN_TABLA, PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeTributoExencion */ 	
	public function getCantidadPrvProveedorsXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeTributoExencion::GEN_TABLA, PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeTributoExencion */ 	
	public function getPrvProveedorXPdeTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeTributoExencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeTributos */ 	
	public function getPdeFacturaPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdetributo = PdeFacturaPdeTributo::hidratarObjeto($fila);			
                $pdefacturapdetributos[] = $pdefacturapdetributo;
            }

            return $pdefacturapdetributos;
	}	
	

	/* Método getPdeFacturaPdeTributosBloque para MasInfo */ 	
	public function getPdeFacturaPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeTributos Habilitados */ 	
	public function getPdeFacturaPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeTributo */ 	
	public function getPdeFacturaPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeTributo relacionadas */ 	
	public function deletePdeFacturaPdeTributos(){
            $obs = $this->getPdeFacturaPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeTributosCmb() PdeFacturaPdeTributo relacionadas */ 	
	public function getPdeFacturaPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeTributo::getPdeFacturaPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeTributo */ 	
	public function getPdeFacturasXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeTributo::GEN_TABLA, PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeTributo */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeTributo::GEN_TABLA, PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeTributo */ 	
	public function getPdeFacturaXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeTributos */ 	
	public function getPdeNotaCreditoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdetributo = PdeNotaCreditoPdeTributo::hidratarObjeto($fila);			
                $pdenotacreditopdetributos[] = $pdenotacreditopdetributo;
            }

            return $pdenotacreditopdetributos;
	}	
	

	/* Método getPdeNotaCreditoPdeTributosBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeTributos Habilitados */ 	
	public function getPdeNotaCreditoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeTributo */ 	
	public function getPdeNotaCreditoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeTributo relacionadas */ 	
	public function deletePdeNotaCreditoPdeTributos(){
            $obs = $this->getPdeNotaCreditoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeTributosCmb() PdeNotaCreditoPdeTributo relacionadas */ 	
	public function getPdeNotaCreditoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeTributo::getPdeNotaCreditoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeTributo */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeTributo::GEN_TABLA, PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeTributo */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeTributo::GEN_TABLA, PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeTributo */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoPdeTributos */ 	
	public function getPdeNotaDebitoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitopdetributo = PdeNotaDebitoPdeTributo::hidratarObjeto($fila);			
                $pdenotadebitopdetributos[] = $pdenotadebitopdetributo;
            }

            return $pdenotadebitopdetributos;
	}	
	

	/* Método getPdeNotaDebitoPdeTributosBloque para MasInfo */ 	
	public function getPdeNotaDebitoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeTributos Habilitados */ 	
	public function getPdeNotaDebitoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeTributo */ 	
	public function getPdeNotaDebitoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoPdeTributo relacionadas */ 	
	public function deletePdeNotaDebitoPdeTributos(){
            $obs = $this->getPdeNotaDebitoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoPdeTributosCmb() PdeNotaDebitoPdeTributo relacionadas */ 	
	public function getPdeNotaDebitoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeTributo::getPdeNotaDebitoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitos (Coleccion) relacionados a traves de PdeNotaDebitoPdeTributo */ 	
	public function getPdeNotaDebitosXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeTributo::GEN_TABLA, PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitos relacionados a traves de PdeNotaDebitoPdeTributo */ 	
	public function getCantidadPdeNotaDebitosXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeTributo::GEN_TABLA, PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebito (Objeto) relacionado a traves de PdeNotaDebitoPdeTributo */ 	
	public function getPdeNotaDebitoXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitosXPdeNotaDebitoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboPdeTributos */ 	
	public function getPdeReciboPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibopdetributo = PdeReciboPdeTributo::hidratarObjeto($fila);			
                $pderecibopdetributos[] = $pderecibopdetributo;
            }

            return $pderecibopdetributos;
	}	
	

	/* Método getPdeReciboPdeTributosBloque para MasInfo */ 	
	public function getPdeReciboPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboPdeTributos Habilitados */ 	
	public function getPdeReciboPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboPdeTributo */ 	
	public function getPdeReciboPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboPdeTributo relacionadas */ 	
	public function deletePdeReciboPdeTributos(){
            $obs = $this->getPdeReciboPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboPdeTributosCmb() PdeReciboPdeTributo relacionadas */ 	
	public function getPdeReciboPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboPdeTributo::getPdeReciboPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecibos (Coleccion) relacionados a traves de PdeReciboPdeTributo */ 	
	public function getPdeRecibosXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboPdeTributo::GEN_TABLA, PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecibos relacionados a traves de PdeReciboPdeTributo */ 	
	public function getCantidadPdeRecibosXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboPdeTributo::GEN_TABLA, PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecibo (Objeto) relacionado a traves de PdeReciboPdeTributo */ 	
	public function getPdeReciboXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecibosXPdeReciboPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoPdeTributos */ 	
	public function getPdeOrdenPagoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdetributo = PdeOrdenPagoPdeTributo::hidratarObjeto($fila);			
                $pdeordenpagopdetributos[] = $pdeordenpagopdetributo;
            }

            return $pdeordenpagopdetributos;
	}	
	

	/* Método getPdeOrdenPagoPdeTributosBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeTributos Habilitados */ 	
	public function getPdeOrdenPagoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeTributo */ 	
	public function getPdeOrdenPagoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeTributo relacionadas */ 	
	public function deletePdeOrdenPagoPdeTributos(){
            $obs = $this->getPdeOrdenPagoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeTributosCmb() PdeOrdenPagoPdeTributo relacionadas */ 	
	public function getPdeOrdenPagoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeTributo::getPdeOrdenPagoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagos (Coleccion) relacionados a traves de PdeOrdenPagoPdeTributo */ 	
	public function getPdeOrdenPagosXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeTributo::GEN_TABLA, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagos relacionados a traves de PdeOrdenPagoPdeTributo */ 	
	public function getCantidadPdeOrdenPagosXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPago::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeTributo::GEN_TABLA, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPago (Objeto) relacionado a traves de PdeOrdenPagoPdeTributo */ 	
	public function getPdeOrdenPagoXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagosXPdeOrdenPagoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PdeFacturas asignados a PdeTributo */ 	
	public function getPdeFacturaPdeTributosId(){
            $ids = array();
            foreach($this->getPdeFacturaPdeTributos() as $o){
            
                $ids[] = $o->getPdeFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeFacturas asignados al PdeTributo */ 	
	public function setPdeFacturaPdeTributos($ids){
            $this->deletePdeFacturaPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeFacturaPdeTributo();
                    $o->setPdeFacturaId($id);
                    $o->setPdeTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeFactura en el alta de PdeTributo */ 	
	public function getAltaMostrarBloqueRelacionPdeFacturaPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeNotaCreditos asignados a PdeTributo */ 	
	public function getPdeNotaCreditoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeNotaCreditoPdeTributos() as $o){
            
                $ids[] = $o->getPdeNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeNotaCreditos asignados al PdeTributo */ 	
	public function setPdeNotaCreditoPdeTributos($ids){
            $this->deletePdeNotaCreditoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeNotaCreditoPdeTributo();
                    $o->setPdeNotaCreditoId($id);
                    $o->setPdeTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeNotaCredito en el alta de PdeTributo */ 	
	public function getAltaMostrarBloqueRelacionPdeNotaCreditoPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeNotaDebitos asignados a PdeTributo */ 	
	public function getPdeNotaDebitoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeNotaDebitoPdeTributos() as $o){
            
                $ids[] = $o->getPdeNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeNotaDebitos asignados al PdeTributo */ 	
	public function setPdeNotaDebitoPdeTributos($ids){
            $this->deletePdeNotaDebitoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeNotaDebitoPdeTributo();
                    $o->setPdeNotaDebitoId($id);
                    $o->setPdeTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeNotaDebito en el alta de PdeTributo */ 	
	public function getAltaMostrarBloqueRelacionPdeNotaDebitoPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeRecibos asignados a PdeTributo */ 	
	public function getPdeReciboPdeTributosId(){
            $ids = array();
            foreach($this->getPdeReciboPdeTributos() as $o){
            
                $ids[] = $o->getPdeReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeRecibos asignados al PdeTributo */ 	
	public function setPdeReciboPdeTributos($ids){
            $this->deletePdeReciboPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeReciboPdeTributo();
                    $o->setPdeReciboId($id);
                    $o->setPdeTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeRecibo en el alta de PdeTributo */ 	
	public function getAltaMostrarBloqueRelacionPdeReciboPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeOrdenPagos asignados a PdeTributo */ 	
	public function getPdeOrdenPagoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeOrdenPagoPdeTributos() as $o){
            
                $ids[] = $o->getPdeOrdenPagoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeOrdenPagos asignados al PdeTributo */ 	
	public function setPdeOrdenPagoPdeTributos($ids){
            $this->deletePdeOrdenPagoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeOrdenPagoPdeTributo();
                    $o->setPdeOrdenPagoId($id);
                    $o->setPdeTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeOrdenPago en el alta de PdeTributo */ 	
	public function getAltaMostrarBloqueRelacionPdeOrdenPagoPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna el CntbCuenta (Clave Foranea) */ 	
    public function getCntbCuenta(){
        $o = new CntbCuenta();
        $o->setId($this->getCntbCuentaId());
        return $o;			
    }

	/* Metodo que retorna el CntbCuenta (Clave Foranea) en Array */ 	
    public function getCntbCuentaEnArray(&$arr_os){
        if($this->getCntbCuentaId() != 'null'){
            if(isset($arr_os[$this->getCntbCuentaId()])){
                $o = $arr_os[$this->getCntbCuentaId()];
            }else{
                $o = CntbCuenta::getOxId($this->getCntbCuentaId());
                if($o){
                    $arr_os[$this->getCntbCuentaId()] = $o;
                }
            }
        }else{
            $o = new CntbCuenta();
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
            		
        if($contexto_solicitante != CntbCuenta::GEN_CLASE){
            if($this->getCntbCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbCuenta()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_tributo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_tributo';");
            
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

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_porcentual' */ 	
	static function getOxAlicuotaPorcentual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_PORCENTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alicuota_porcentual' */ 	
	static function getOsxAlicuotaPorcentual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_PORCENTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_decimal' */ 	
	static function getOxAlicuotaDecimal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_DECIMAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alicuota_decimal' */ 	
	static function getOsxAlicuotaDecimal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_DECIMAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'formula' */ 	
	static function getOxFormula($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FORMULA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'formula' */ 	
	static function getOsxFormula($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FORMULA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_id' */ 	
	static function getOxCntbCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_cuenta_id' */ 	
	static function getOsxCntbCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_retencion' */ 	
	static function getOxEsRetencion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_RETENCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_retencion' */ 	
	static function getOsxEsRetencion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_RETENCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_percepcion' */ 	
	static function getOxEsPercepcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_PERCEPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_percepcion' */ 	
	static function getOsxEsPercepcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_PERCEPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos(null, $criterio);
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

            $obs = self::getPdeTributos($paginador, $criterio);
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

            $obs = self::getPdeTributos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_tributo_adm');
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
                $c->addTabla(PdeTributo::GEN_TABLA);
                $c->addOrden(PdeTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_tributos = PdeTributo::getPdeTributos(null, $c);

                $arr = array();
                foreach($pde_tributos as $pde_tributo){
                    $descripcion = $pde_tributo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>