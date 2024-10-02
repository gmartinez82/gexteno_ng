<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaTributo
{ 
	
	const SES_PAGINACION = 'adm_vtatributo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtatributo_paginas_registros';
	const SES_CRITERIOS = 'adm_vtatributo_criterios';
	
	const GEN_CLASE = 'VtaTributo';
	const GEN_TABLA = 'vta_tributo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaTributo */ 
	const GEN_ATTR_ID = 'vta_tributo.id';
	const GEN_ATTR_DESCRIPCION = 'vta_tributo.descripcion';
	const GEN_ATTR_ALICUOTA_PORCENTUAL = 'vta_tributo.alicuota_porcentual';
	const GEN_ATTR_ALICUOTA_DECIMAL = 'vta_tributo.alicuota_decimal';
	const GEN_ATTR_FORMULA = 'vta_tributo.formula';
	const GEN_ATTR_CNTB_CUENTA_ID = 'vta_tributo.cntb_cuenta_id';
	const GEN_ATTR_CODIGO = 'vta_tributo.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_tributo.observacion';
	const GEN_ATTR_ORDEN = 'vta_tributo.orden';
	const GEN_ATTR_ESTADO = 'vta_tributo.estado';
	const GEN_ATTR_CREADO = 'vta_tributo.creado';
	const GEN_ATTR_CREADO_POR = 'vta_tributo.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_tributo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_tributo.modificado_por';

	/* Constantes de Atributos Min de BVtaTributo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_ALICUOTA_PORCENTUAL = 'alicuota_porcentual';
	const GEN_ATTR_MIN_ALICUOTA_DECIMAL = 'alicuota_decimal';
	const GEN_ATTR_MIN_FORMULA = 'formula';
	const GEN_ATTR_MIN_CNTB_CUENTA_ID = 'cntb_cuenta_id';
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
	

	/* Atributos de BVtaTributo */ 
	private $id;
	private $descripcion;
	private $alicuota_porcentual;
	private $alicuota_decimal;
	private $formula;
	private $cntb_cuenta_id;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaTributo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getAlicuotaPorcentual(){ if(isset($this->alicuota_porcentual)){ return $this->alicuota_porcentual; }else{ return 0; } }
	public function getAlicuotaDecimal(){ if(isset($this->alicuota_decimal)){ return $this->alicuota_decimal; }else{ return 0; } }
	public function getFormula(){ if(isset($this->formula)){ return $this->formula; }else{ return ''; } }
	public function getCntbCuentaId(){ if(isset($this->cntb_cuenta_id)){ return $this->cntb_cuenta_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaTributo */ 	
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaTributo();
            $o->setId($fila[VtaTributo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$o->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
			$o->setFormula($fila[self::GEN_ATTR_MIN_FORMULA]);
			$o->setCntbCuentaId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_ID]);
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

	/* Control de BVtaTributo */ 	
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

	/* Cambia el estado de BVtaTributo */ 	
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

	/* Save de BVtaTributo */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_tributo_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getAlicuotaPorcentual()."'
						, '".$this->getAlicuotaDecimal()."'
						, '".$this->getFormula()."'
						, ".$this->getCntbCuentaId()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_tributo_seq')";
            
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
                 
				 ".VtaTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
						, ".self::GEN_ATTR_MIN_FORMULA." = '".$this->getFormula()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID." = ".$this->getCntbCuentaId()."
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
                     
				 ".VtaTributo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL." = '".$this->getAlicuotaPorcentual()."'
						, ".self::GEN_ATTR_MIN_ALICUOTA_DECIMAL." = '".$this->getAlicuotaDecimal()."'
						, ".self::GEN_ATTR_MIN_FORMULA." = '".$this->getFormula()."'
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_ID." = ".$this->getCntbCuentaId()."
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
            $o = new VtaTributo();
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

	/* Delete de BVtaTributo */ 	
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
            
            // se elimina la coleccion de VtaTributoExencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTributoExencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTributoExencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaTributo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaTributo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtatributos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtatributo = new VtaTributo();
                    $vtatributo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtatributo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtatributo->setAlicuotaPorcentual($fila[self::GEN_ATTR_MIN_ALICUOTA_PORCENTUAL]);
			$vtatributo->setAlicuotaDecimal($fila[self::GEN_ATTR_MIN_ALICUOTA_DECIMAL]);
			$vtatributo->setFormula($fila[self::GEN_ATTR_MIN_FORMULA]);
			$vtatributo->setCntbCuentaId($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_ID]);
			$vtatributo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtatributo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtatributo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtatributo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtatributo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtatributo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtatributo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtatributo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtatributos[] = $vtatributo;
		}
		
		return $vtatributos;
	}	
	

	/* Método getVtaTributos Habilitados */ 	
	static function getVtaTributosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaTributo::getVtaTributos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaTributos para listado de Backend */ 	
	static function getVtaTributosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaTributo::getVtaTributos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaTributosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaTributo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaTributo::getVtaTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaTributos filtrado para select */ 	
	static function getVtaTributosCmbF($paginador = null, $criterio = null){
            $col = VtaTributo::getVtaTributos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaTributos filtrado por una coleccion de objetos foraneos de CntbCuenta */ 	
	static function getVtaTributosXCntbCuentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaTributo::GEN_ATTR_CNTB_CUENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addOrden(VtaTributo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaTributo::getVtaTributos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbCuentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_tributo_adm.php';
            $url_gestion = 'vta_tributo_gestion.php';
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
                
            $criterio->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributoWsFeParamTipoTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTributoWsFeParamTipoTributo::getVtaTributoWsFeParamTipoTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoTributos (Coleccion) relacionados a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getWsFeParamTipoTributosXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoWsFeParamTipoTributo::GEN_TABLA, VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, WsFeParamTipoTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoTributos relacionados a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getCantidadWsFeParamTipoTributosXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoWsFeParamTipoTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoTributo::GEN_TABLA);
            $c->addRealJoin(VtaTributoWsFeParamTipoTributo::GEN_TABLA, VtaTributoWsFeParamTipoTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, WsFeParamTipoTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoTributo (Objeto) relacionado a traves de VtaTributoWsFeParamTipoTributo */ 	
	public function getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoTributosXVtaTributoWsFeParamTipoTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTributoExencions */ 	
	public function getVtaTributoExencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTributoExencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTributoExencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTributoExencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTributoExencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTributoExencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTributoExencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatributoexencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatributoexencion = VtaTributoExencion::hidratarObjeto($fila);			
                $vtatributoexencions[] = $vtatributoexencion;
            }

            return $vtatributoexencions;
	}	
	

	/* Método getVtaTributoExencionsBloque para MasInfo */ 	
	public function getVtaTributoExencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTributoExencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTributoExencions Habilitados */ 	
	public function getVtaTributoExencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTributoExencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTributoExencion */ 	
	public function getVtaTributoExencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTributoExencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTributoExencion relacionadas */ 	
	public function deleteVtaTributoExencions(){
            $obs = $this->getVtaTributoExencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTributoExencionsCmb() VtaTributoExencion relacionadas */ 	
	public function getVtaTributoExencionsCmb(){
            $c = new Criterio();
            $c->add(VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributoExencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTributoExencion::getVtaTributoExencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaTributoExencion */ 	
	public function getCliClientesXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaTributoExencion::GEN_TABLA, VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaTributoExencion */ 	
	public function getCantidadCliClientesXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaTributoExencion::GEN_TABLA, VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaTributoExencion */ 	
	public function getCliClienteXVtaTributoExencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaTributoExencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditoVtaTributos */ 	
	public function getVtaNotaCreditoVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditovtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditovtatributo = VtaNotaCreditoVtaTributo::hidratarObjeto($fila);			
                $vtanotacreditovtatributos[] = $vtanotacreditovtatributo;
            }

            return $vtanotacreditovtatributos;
	}	
	

	/* Método getVtaNotaCreditoVtaTributosBloque para MasInfo */ 	
	public function getVtaNotaCreditoVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaTributos Habilitados */ 	
	public function getVtaNotaCreditoVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaTributo */ 	
	public function getVtaNotaCreditoVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoVtaTributo relacionadas */ 	
	public function deleteVtaNotaCreditoVtaTributos(){
            $obs = $this->getVtaNotaCreditoVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoVtaTributosCmb() VtaNotaCreditoVtaTributo relacionadas */ 	
	public function getVtaNotaCreditoVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoVtaTributo::getVtaNotaCreditoVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoVtaTributo */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaTributo::GEN_TABLA, VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoVtaTributo */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaTributo::GEN_TABLA, VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoVtaTributo */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoVtaTributos */ 	
	public function getVtaNotaDebitoVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitovtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitovtatributo = VtaNotaDebitoVtaTributo::hidratarObjeto($fila);			
                $vtanotadebitovtatributos[] = $vtanotadebitovtatributo;
            }

            return $vtanotadebitovtatributos;
	}	
	

	/* Método getVtaNotaDebitoVtaTributosBloque para MasInfo */ 	
	public function getVtaNotaDebitoVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaTributos Habilitados */ 	
	public function getVtaNotaDebitoVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaTributo */ 	
	public function getVtaNotaDebitoVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoVtaTributo relacionadas */ 	
	public function deleteVtaNotaDebitoVtaTributos(){
            $obs = $this->getVtaNotaDebitoVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoVtaTributosCmb() VtaNotaDebitoVtaTributo relacionadas */ 	
	public function getVtaNotaDebitoVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaTributo::getVtaNotaDebitoVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebitoVtaTributo */ 	
	public function getVtaNotaDebitosXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaTributo::GEN_TABLA, VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaNotaDebitoVtaTributo */ 	
	public function getCantidadVtaNotaDebitosXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaTributo::GEN_TABLA, VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaNotaDebitoVtaTributo */ 	
	public function getVtaNotaDebitoXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaNotaDebitoVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboVtaTributos */ 	
	public function getVtaReciboVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibovtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibovtatributo = VtaReciboVtaTributo::hidratarObjeto($fila);			
                $vtarecibovtatributos[] = $vtarecibovtatributo;
            }

            return $vtarecibovtatributos;
	}	
	

	/* Método getVtaReciboVtaTributosBloque para MasInfo */ 	
	public function getVtaReciboVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboVtaTributos Habilitados */ 	
	public function getVtaReciboVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboVtaTributo */ 	
	public function getVtaReciboVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboVtaTributo relacionadas */ 	
	public function deleteVtaReciboVtaTributos(){
            $obs = $this->getVtaReciboVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboVtaTributosCmb() VtaReciboVtaTributo relacionadas */ 	
	public function getVtaReciboVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboVtaTributo::getVtaReciboVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaReciboVtaTributo */ 	
	public function getVtaRecibosXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboVtaTributo::GEN_TABLA, VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaReciboVtaTributo */ 	
	public function getCantidadVtaRecibosXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboVtaTributo::GEN_TABLA, VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaReciboVtaTributo */ 	
	public function getVtaReciboXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaReciboVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaTributos */ 	
	public function getVtaFacturaVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtatributo = VtaFacturaVtaTributo::hidratarObjeto($fila);			
                $vtafacturavtatributos[] = $vtafacturavtatributo;
            }

            return $vtafacturavtatributos;
	}	
	

	/* Método getVtaFacturaVtaTributosBloque para MasInfo */ 	
	public function getVtaFacturaVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaTributos Habilitados */ 	
	public function getVtaFacturaVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaTributo */ 	
	public function getVtaFacturaVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaTributo relacionadas */ 	
	public function deleteVtaFacturaVtaTributos(){
            $obs = $this->getVtaFacturaVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaTributosCmb() VtaFacturaVtaTributo relacionadas */ 	
	public function getVtaFacturaVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaTributo::getVtaFacturaVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaTributo */ 	
	public function getVtaFacturasXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaTributo::GEN_TABLA, VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaTributo */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaTributo::GEN_TABLA, VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaTributo */ 	
	public function getVtaFacturaXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaTributos */ 	
	public function getVtaAjusteDebeVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtatributo = VtaAjusteDebeVtaTributo::hidratarObjeto($fila);			
                $vtaajustedebevtatributos[] = $vtaajustedebevtatributo;
            }

            return $vtaajustedebevtatributos;
	}	
	

	/* Método getVtaAjusteDebeVtaTributosBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaTributos Habilitados */ 	
	public function getVtaAjusteDebeVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebeVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaTributo relacionadas */ 	
	public function deleteVtaAjusteDebeVtaTributos(){
            $obs = $this->getVtaAjusteDebeVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaTributosCmb() VtaAjusteDebeVtaTributo relacionadas */ 	
	public function getVtaAjusteDebeVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaTributo::getVtaAjusteDebeVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaTributo */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaTributos */ 	
	public function getVtaAjusteHaberVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtatributo = VtaAjusteHaberVtaTributo::hidratarObjeto($fila);			
                $vtaajustehabervtatributos[] = $vtaajustehabervtatributo;
            }

            return $vtaajustehabervtatributos;
	}	
	

	/* Método getVtaAjusteHaberVtaTributosBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaTributos Habilitados */ 	
	public function getVtaAjusteHaberVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaTributo */ 	
	public function getVtaAjusteHaberVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaTributo relacionadas */ 	
	public function deleteVtaAjusteHaberVtaTributos(){
            $obs = $this->getVtaAjusteHaberVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaTributosCmb() VtaAjusteHaberVtaTributo relacionadas */ 	
	public function getVtaAjusteHaberVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaTributo::getVtaAjusteHaberVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberVtaTributo */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaTributo::GEN_TABLA, VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberVtaTributo */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaTributo::GEN_TABLA, VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberVtaTributo */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeParamTipoTributos asignados a VtaTributo */ 	
	public function getVtaTributoWsFeParamTipoTributosId(){
            $ids = array();
            foreach($this->getVtaTributoWsFeParamTipoTributos() as $o){
            
                $ids[] = $o->getWsFeParamTipoTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamTipoTributos asignados al VtaTributo */ 	
	public function setVtaTributoWsFeParamTipoTributos($ids){
            $this->deleteVtaTributoWsFeParamTipoTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTributoWsFeParamTipoTributo();
                    $o->setWsFeParamTipoTributoId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamTipoTributo en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaTributoWsFeParamTipoTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaNotaCreditos asignados a VtaTributo */ 	
	public function getVtaNotaCreditoVtaTributosId(){
            $ids = array();
            foreach($this->getVtaNotaCreditoVtaTributos() as $o){
            
                $ids[] = $o->getVtaNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaCreditos asignados al VtaTributo */ 	
	public function setVtaNotaCreditoVtaTributos($ids){
            $this->deleteVtaNotaCreditoVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaCreditoVtaTributo();
                    $o->setVtaNotaCreditoId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaCredito en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaCreditoVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaNotaDebitos asignados a VtaTributo */ 	
	public function getVtaNotaDebitoVtaTributosId(){
            $ids = array();
            foreach($this->getVtaNotaDebitoVtaTributos() as $o){
            
                $ids[] = $o->getVtaNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaDebitos asignados al VtaTributo */ 	
	public function setVtaNotaDebitoVtaTributos($ids){
            $this->deleteVtaNotaDebitoVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaDebitoVtaTributo();
                    $o->setVtaNotaDebitoId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaDebito en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaDebitoVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaRecibos asignados a VtaTributo */ 	
	public function getVtaReciboVtaTributosId(){
            $ids = array();
            foreach($this->getVtaReciboVtaTributos() as $o){
            
                $ids[] = $o->getVtaReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaRecibos asignados al VtaTributo */ 	
	public function setVtaReciboVtaTributos($ids){
            $this->deleteVtaReciboVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaReciboVtaTributo();
                    $o->setVtaReciboId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaRecibo en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaReciboVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaFacturas asignados a VtaTributo */ 	
	public function getVtaFacturaVtaTributosId(){
            $ids = array();
            foreach($this->getVtaFacturaVtaTributos() as $o){
            
                $ids[] = $o->getVtaFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaFacturas asignados al VtaTributo */ 	
	public function setVtaFacturaVtaTributos($ids){
            $this->deleteVtaFacturaVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaFacturaVtaTributo();
                    $o->setVtaFacturaId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaFactura en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaFacturaVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteDebes asignados a VtaTributo */ 	
	public function getVtaAjusteDebeVtaTributosId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeVtaTributos() as $o){
            
                $ids[] = $o->getVtaAjusteDebeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteDebes asignados al VtaTributo */ 	
	public function setVtaAjusteDebeVtaTributos($ids){
            $this->deleteVtaAjusteDebeVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeVtaTributo();
                    $o->setVtaAjusteDebeId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteDebe en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteHabers asignados a VtaTributo */ 	
	public function getVtaAjusteHaberVtaTributosId(){
            $ids = array();
            foreach($this->getVtaAjusteHaberVtaTributos() as $o){
            
                $ids[] = $o->getVtaAjusteHaberId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteHabers asignados al VtaTributo */ 	
	public function setVtaAjusteHaberVtaTributos($ids){
            $this->deleteVtaAjusteHaberVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteHaberVtaTributo();
                    $o->setVtaAjusteHaberId($id);
                    $o->setVtaTributoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteHaber en el alta de VtaTributo */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteHaberVtaTributo(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_tributo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_tributo';");
            
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

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_porcentual' */ 	
	static function getOxAlicuotaPorcentual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_PORCENTUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alicuota_decimal' */ 	
	static function getOxAlicuotaDecimal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALICUOTA_DECIMAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'formula' */ 	
	static function getOxFormula($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FORMULA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_id' */ 	
	static function getOxCntbCuentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos(null, $criterio);
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

            $obs = self::getVtaTributos($paginador, $criterio);
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

            $obs = self::getVtaTributos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_tributo_adm');
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
                $c->addTabla(VtaTributo::GEN_TABLA);
                $c->addOrden(VtaTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_tributos = VtaTributo::getVtaTributos(null, $c);

                $arr = array();
                foreach($vta_tributos as $vta_tributo){
                    $descripcion = $vta_tributo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>