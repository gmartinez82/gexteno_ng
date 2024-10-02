<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BMlAttribute
{ 
	
	const SES_PAGINACION = 'adm_mlattribute_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_mlattribute_paginas_registros';
	const SES_CRITERIOS = 'adm_mlattribute_criterios';
	
	const GEN_CLASE = 'MlAttribute';
	const GEN_TABLA = 'ml_attribute';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BMlAttribute */ 
	const GEN_ATTR_ID = 'ml_attribute.id';
	const GEN_ATTR_DESCRIPCION = 'ml_attribute.descripcion';
	const GEN_ATTR_ML_ATTRIBUTE_TYPE_ID = 'ml_attribute.ml_attribute_type_id';
	const GEN_ATTR_CODIGO = 'ml_attribute.codigo';
	const GEN_ATTR_CODIGO_ML = 'ml_attribute.codigo_ml';
	const GEN_ATTR_TOOLTIP = 'ml_attribute.tooltip';
	const GEN_ATTR_OBSERVACION = 'ml_attribute.observacion';
	const GEN_ATTR_ORDEN = 'ml_attribute.orden';
	const GEN_ATTR_ESTADO = 'ml_attribute.estado';
	const GEN_ATTR_CREADO = 'ml_attribute.creado';
	const GEN_ATTR_CREADO_POR = 'ml_attribute.creado_por';
	const GEN_ATTR_MODIFICADO = 'ml_attribute.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ml_attribute.modificado_por';

	/* Constantes de Atributos Min de BMlAttribute */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID = 'ml_attribute_type_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_ML = 'codigo_ml';
	const GEN_ATTR_MIN_TOOLTIP = 'tooltip';
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
	

	/* Atributos de BMlAttribute */ 
	private $id;
	private $descripcion;
	private $ml_attribute_type_id;
	private $codigo;
	private $codigo_ml;
	private $tooltip;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BMlAttribute */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getMlAttributeTypeId(){ if(isset($this->ml_attribute_type_id)){ return $this->ml_attribute_type_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoMl(){ if(isset($this->codigo_ml)){ return $this->codigo_ml; }else{ return ''; } }
	public function getTooltip(){ if(isset($this->tooltip)){ return $this->tooltip; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BMlAttribute */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_ML_ATTRIBUTE_TYPE_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_ML."
				, ".self::GEN_ATTR_TOOLTIP."
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
				$this->setMlAttributeTypeId($fila[self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoMl($fila[self::GEN_ATTR_MIN_CODIGO_ML]);
				$this->setTooltip($fila[self::GEN_ATTR_MIN_TOOLTIP]);
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
	public function setMlAttributeTypeId($v){ $this->ml_attribute_type_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoMl($v){ $this->codigo_ml = $v; }
	public function setTooltip($v){ $this->tooltip = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new MlAttribute();
            $o->setId($fila[MlAttribute::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setMlAttributeTypeId($fila[self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoMl($fila[self::GEN_ATTR_MIN_CODIGO_ML]);
			$o->setTooltip($fila[self::GEN_ATTR_MIN_TOOLTIP]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BMlAttribute */ 	
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

	/* Cambia el estado de BMlAttribute */ 	
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

	/* Save de BMlAttribute */ 	
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
						, ".self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_ML."
						, ".self::GEN_ATTR_MIN_TOOLTIP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ml_attribute_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getMlAttributeTypeId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMl()."'
						, '".$this->getTooltip()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ml_attribute_seq')";
            
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
                 
				 ".MlAttribute::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID." = ".$this->getMlAttributeTypeId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ML." = '".$this->getCodigoMl()."'
						, ".self::GEN_ATTR_MIN_TOOLTIP." = '".$this->getTooltip()."'
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
						, ".self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_ML."
						, ".self::GEN_ATTR_MIN_TOOLTIP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getMlAttributeTypeId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMl()."'
						, '".$this->getTooltip()."'
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
                     
				 ".MlAttribute::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID." = ".$this->getMlAttributeTypeId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ML." = '".$this->getCodigoMl()."'
						, ".self::GEN_ATTR_MIN_TOOLTIP." = '".$this->getTooltip()."'
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
            $o = new MlAttribute();
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

	/* Delete de BMlAttribute */ 	
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
	
            // se elimina la coleccion de InsVentaMlInfoMlAttributes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsVentaMlInfoMlAttributes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de MlCategoryMlAttributes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(MlCategoryMlAttribute::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getMlCategoryMlAttributes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de MlAttributeInsAtributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(MlAttributeInsAtributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getMlAttributeInsAtributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de MlAttributeMlValues relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(MlAttributeMlValue::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getMlAttributeMlValues(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarMlAttribute(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getMlAttributes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = MlAttribute::setAplicarFiltrosDeAlcance($criterio);

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
	
		$mlattributes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $mlattribute = new MlAttribute();
                    $mlattribute->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $mlattribute->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$mlattribute->setMlAttributeTypeId($fila[self::GEN_ATTR_MIN_ML_ATTRIBUTE_TYPE_ID]);
			$mlattribute->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$mlattribute->setCodigoMl($fila[self::GEN_ATTR_MIN_CODIGO_ML]);
			$mlattribute->setTooltip($fila[self::GEN_ATTR_MIN_TOOLTIP]);
			$mlattribute->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$mlattribute->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$mlattribute->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$mlattribute->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$mlattribute->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$mlattribute->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$mlattribute->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $mlattributes[] = $mlattribute;
		}
		
		return $mlattributes;
	}	
	

	/* Método getMlAttributes Habilitados */ 	
	static function getMlAttributesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return MlAttribute::getMlAttributes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getMlAttributes para listado de Backend */ 	
	static function getMlAttributesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return MlAttribute::getMlAttributes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getMlAttributesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = MlAttribute::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = MlAttribute::getMlAttributes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getMlAttributes filtrado para select */ 	
	static function getMlAttributesCmbF($paginador = null, $criterio = null){
            $col = MlAttribute::getMlAttributes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getMlAttributes filtrado por una coleccion de objetos foraneos de MlAttributeType */ 	
	static function getMlAttributesXMlAttributeTypes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(MlAttribute::GEN_ATTR_ML_ATTRIBUTE_TYPE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(MlAttribute::GEN_TABLA);
            $c->addOrden(MlAttribute::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = MlAttribute::getMlAttributes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlAttributeTypeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ml_attribute_adm.php';
            $url_gestion = 'ml_attribute_gestion.php';
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
	

	/* Metodo getInsVentaMlInfoMlAttributes */ 	
	public function getInsVentaMlInfoMlAttributes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsVentaMlInfoMlAttribute::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsVentaMlInfoMlAttribute::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsVentaMlInfoMlAttribute::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insventamlinfomlattributes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insventamlinfomlattribute = InsVentaMlInfoMlAttribute::hidratarObjeto($fila);			
                $insventamlinfomlattributes[] = $insventamlinfomlattribute;
            }

            return $insventamlinfomlattributes;
	}	
	

	/* Método getInsVentaMlInfoMlAttributesBloque para MasInfo */ 	
	public function getInsVentaMlInfoMlAttributesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsVentaMlInfoMlAttributes Habilitados */ 	
	public function getInsVentaMlInfoMlAttributesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsVentaMlInfoMlAttribute */ 	
	public function getInsVentaMlInfoMlAttribute($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsVentaMlInfoMlAttribute relacionadas */ 	
	public function deleteInsVentaMlInfoMlAttributes(){
            $obs = $this->getInsVentaMlInfoMlAttributes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsVentaMlInfoMlAttributesCmb() InsVentaMlInfoMlAttribute relacionadas */ 	
	public function getInsVentaMlInfoMlAttributesCmb(){
            $c = new Criterio();
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);
            $c->setCriterios();

            $os = InsVentaMlInfoMlAttribute::getInsVentaMlInfoMlAttributesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsVentaMlInfos (Coleccion) relacionados a traves de InsVentaMlInfoMlAttribute */ 	
	public function getInsVentaMlInfosXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfoMlAttribute::GEN_TABLA, InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, InsVentaMlInfo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsVentaMlInfo::getInsVentaMlInfos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsVentaMlInfos relacionados a traves de InsVentaMlInfoMlAttribute */ 	
	public function getCantidadInsVentaMlInfosXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsVentaMlInfo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfoMlAttribute::GEN_TABLA, InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, InsVentaMlInfo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsVentaMlInfo::getInsVentaMlInfos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsVentaMlInfo (Objeto) relacionado a traves de InsVentaMlInfoMlAttribute */ 	
	public function getInsVentaMlInfoXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsVentaMlInfosXInsVentaMlInfoMlAttribute($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getMlCategoryMlAttributes */ 	
	public function getMlCategoryMlAttributes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(MlCategoryMlAttribute::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(MlCategoryMlAttribute::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(MlCategoryMlAttribute::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(MlCategoryMlAttribute::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(MlCategoryMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(MlCategoryMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(MlCategoryMlAttribute::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".MlCategoryMlAttribute::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $mlcategorymlattributes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $mlcategorymlattribute = MlCategoryMlAttribute::hidratarObjeto($fila);			
                $mlcategorymlattributes[] = $mlcategorymlattribute;
            }

            return $mlcategorymlattributes;
	}	
	

	/* Método getMlCategoryMlAttributesBloque para MasInfo */ 	
	public function getMlCategoryMlAttributesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getMlCategoryMlAttributes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getMlCategoryMlAttributes Habilitados */ 	
	public function getMlCategoryMlAttributesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getMlCategoryMlAttributes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getMlCategoryMlAttribute */ 	
	public function getMlCategoryMlAttribute($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getMlCategoryMlAttributes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de MlCategoryMlAttribute relacionadas */ 	
	public function deleteMlCategoryMlAttributes(){
            $obs = $this->getMlCategoryMlAttributes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getMlCategoryMlAttributesCmb() MlCategoryMlAttribute relacionadas */ 	
	public function getMlCategoryMlAttributesCmb(){
            $c = new Criterio();
            $c->add(MlCategoryMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlCategoryMlAttribute::GEN_TABLA);
            $c->setCriterios();

            $os = MlCategoryMlAttribute::getMlCategoryMlAttributesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener MlCategorys (Coleccion) relacionados a traves de MlCategoryMlAttribute */ 	
	public function getMlCategorysXMlCategoryMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(MlCategory::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlCategoryMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlCategoryMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlCategory::GEN_TABLA);
            $c->addRealJoin(MlCategoryMlAttribute::GEN_TABLA, MlCategoryMlAttribute::GEN_ATTR_ML_CATEGORY_ID, MlCategory::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlCategory::getMlCategorys($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de MlCategorys relacionados a traves de MlCategoryMlAttribute */ 	
	public function getCantidadMlCategorysXMlCategoryMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(MlCategory::GEN_ATTR_ID);
            if($estado){
                $c->add(MlCategory::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlCategoryMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlCategoryMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlCategory::GEN_TABLA);
            $c->addRealJoin(MlCategoryMlAttribute::GEN_TABLA, MlCategoryMlAttribute::GEN_ATTR_ML_CATEGORY_ID, MlCategory::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlCategory::getMlCategorys($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener MlCategory (Objeto) relacionado a traves de MlCategoryMlAttribute */ 	
	public function getMlCategoryXMlCategoryMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getMlCategorysXMlCategoryMlAttribute($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getMlAttributeInsAtributos */ 	
	public function getMlAttributeInsAtributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(MlAttributeInsAtributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(MlAttributeInsAtributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(MlAttributeInsAtributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(MlAttributeInsAtributo::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(MlAttributeInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(MlAttributeInsAtributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".MlAttributeInsAtributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $mlattributeinsatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $mlattributeinsatributo = MlAttributeInsAtributo::hidratarObjeto($fila);			
                $mlattributeinsatributos[] = $mlattributeinsatributo;
            }

            return $mlattributeinsatributos;
	}	
	

	/* Método getMlAttributeInsAtributosBloque para MasInfo */ 	
	public function getMlAttributeInsAtributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getMlAttributeInsAtributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getMlAttributeInsAtributos Habilitados */ 	
	public function getMlAttributeInsAtributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getMlAttributeInsAtributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getMlAttributeInsAtributo */ 	
	public function getMlAttributeInsAtributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getMlAttributeInsAtributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de MlAttributeInsAtributo relacionadas */ 	
	public function deleteMlAttributeInsAtributos(){
            $obs = $this->getMlAttributeInsAtributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getMlAttributeInsAtributosCmb() MlAttributeInsAtributo relacionadas */ 	
	public function getMlAttributeInsAtributosCmb(){
            $c = new Criterio();
            $c->add(MlAttributeInsAtributo::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlAttributeInsAtributo::GEN_TABLA);
            $c->setCriterios();

            $os = MlAttributeInsAtributo::getMlAttributeInsAtributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsAtributos (Coleccion) relacionados a traves de MlAttributeInsAtributo */ 	
	public function getInsAtributosXMlAttributeInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlAttributeInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlAttributeInsAtributo::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsAtributo::GEN_TABLA);
            $c->addRealJoin(MlAttributeInsAtributo::GEN_TABLA, MlAttributeInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, InsAtributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsAtributo::getInsAtributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsAtributos relacionados a traves de MlAttributeInsAtributo */ 	
	public function getCantidadInsAtributosXMlAttributeInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsAtributo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlAttributeInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlAttributeInsAtributo::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsAtributo::GEN_TABLA);
            $c->addRealJoin(MlAttributeInsAtributo::GEN_TABLA, MlAttributeInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, InsAtributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsAtributo::getInsAtributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsAtributo (Objeto) relacionado a traves de MlAttributeInsAtributo */ 	
	public function getInsAtributoXMlAttributeInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsAtributosXMlAttributeInsAtributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getMlAttributeMlValues */ 	
	public function getMlAttributeMlValues($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(MlAttributeMlValue::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(MlAttributeMlValue::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(MlAttributeMlValue::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(MlAttributeMlValue::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(MlAttributeMlValue::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(MlAttributeMlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(MlAttributeMlValue::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".MlAttributeMlValue::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $mlattributemlvalues = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $mlattributemlvalue = MlAttributeMlValue::hidratarObjeto($fila);			
                $mlattributemlvalues[] = $mlattributemlvalue;
            }

            return $mlattributemlvalues;
	}	
	

	/* Método getMlAttributeMlValuesBloque para MasInfo */ 	
	public function getMlAttributeMlValuesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getMlAttributeMlValues($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getMlAttributeMlValues Habilitados */ 	
	public function getMlAttributeMlValuesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getMlAttributeMlValues($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getMlAttributeMlValue */ 	
	public function getMlAttributeMlValue($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getMlAttributeMlValues($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de MlAttributeMlValue relacionadas */ 	
	public function deleteMlAttributeMlValues(){
            $obs = $this->getMlAttributeMlValues();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getMlAttributeMlValuesCmb() MlAttributeMlValue relacionadas */ 	
	public function getMlAttributeMlValuesCmb(){
            $c = new Criterio();
            $c->add(MlAttributeMlValue::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlAttributeMlValue::GEN_TABLA);
            $c->setCriterios();

            $os = MlAttributeMlValue::getMlAttributeMlValuesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener MlValues (Coleccion) relacionados a traves de MlAttributeMlValue */ 	
	public function getMlValuesXMlAttributeMlValue($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(MlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlAttributeMlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlAttributeMlValue::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlValue::GEN_TABLA);
            $c->addRealJoin(MlAttributeMlValue::GEN_TABLA, MlAttributeMlValue::GEN_ATTR_ML_VALUE_ID, MlValue::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlValue::getMlValues($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de MlValues relacionados a traves de MlAttributeMlValue */ 	
	public function getCantidadMlValuesXMlAttributeMlValue($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(MlValue::GEN_ATTR_ID);
            if($estado){
                $c->add(MlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlAttributeMlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlAttributeMlValue::GEN_ATTR_ML_ATTRIBUTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlValue::GEN_TABLA);
            $c->addRealJoin(MlAttributeMlValue::GEN_TABLA, MlAttributeMlValue::GEN_ATTR_ML_VALUE_ID, MlValue::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlValue::getMlValues($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener MlValue (Objeto) relacionado a traves de MlAttributeMlValue */ 	
	public function getMlValueXMlAttributeMlValue($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getMlValuesXMlAttributeMlValue($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los InsAtributos asignados a MlAttribute */ 	
	public function getMlAttributeInsAtributosId(){
            $ids = array();
            foreach($this->getMlAttributeInsAtributos() as $o){
            
                $ids[] = $o->getInsAtributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsAtributos asignados al MlAttribute */ 	
	public function setMlAttributeInsAtributos($ids){
            $this->deleteMlAttributeInsAtributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new MlAttributeInsAtributo();
                    $o->setInsAtributoId($id);
                    $o->setMlAttributeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsAtributo en el alta de MlAttribute */ 	
	public function getAltaMostrarBloqueRelacionMlAttributeInsAtributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los MlValues asignados a MlAttribute */ 	
	public function getMlAttributeMlValuesId(){
            $ids = array();
            foreach($this->getMlAttributeMlValues() as $o){
            
                $ids[] = $o->getMlValueId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos MlValues asignados al MlAttribute */ 	
	public function setMlAttributeMlValues($ids){
            $this->deleteMlAttributeMlValues();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new MlAttributeMlValue();
                    $o->setMlValueId($id);
                    $o->setMlAttributeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion MlValue en el alta de MlAttribute */ 	
	public function getAltaMostrarBloqueRelacionMlAttributeMlValue(){
            return true;
	}
	

	/* Metodo que retorna el MlAttributeType (Clave Foranea) */ 	
    public function getMlAttributeType(){
        $o = new MlAttributeType();
        $o->setId($this->getMlAttributeTypeId());
        return $o;			
    }

	/* Metodo que retorna el MlAttributeType (Clave Foranea) en Array */ 	
    public function getMlAttributeTypeEnArray(&$arr_os){
        if($this->getMlAttributeTypeId() != 'null'){
            if(isset($arr_os[$this->getMlAttributeTypeId()])){
                $o = $arr_os[$this->getMlAttributeTypeId()];
            }else{
                $o = MlAttributeType::getOxId($this->getMlAttributeTypeId());
                if($o){
                    $arr_os[$this->getMlAttributeTypeId()] = $o;
                }
            }
        }else{
            $o = new MlAttributeType();
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
            		
        if($contexto_solicitante != MlAttributeType::GEN_CLASE){
            if($this->getMlAttributeType()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlAttributeType::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlAttributeType()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ml_attribute'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ml_attribute';");
            
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

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_attribute_type_id' */ 	
	static function getOxMlAttributeTypeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ATTRIBUTE_TYPE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_attribute_type_id' */ 	
	static function getOsxMlAttributeTypeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ATTRIBUTE_TYPE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_ml' */ 	
	static function getOxCodigoMl($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ML, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_ml' */ 	
	static function getOsxCodigoMl($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ML, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'tooltip' */ 	
	static function getOxTooltip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TOOLTIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'tooltip' */ 	
	static function getOsxTooltip($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TOOLTIP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes(null, $criterio);
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

            $obs = self::getMlAttributes($paginador, $criterio);
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

            $obs = self::getMlAttributes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ml_attribute_adm');
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
                $c->addTabla(MlAttribute::GEN_TABLA);
                $c->addOrden(MlAttribute::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ml_attributes = MlAttribute::getMlAttributes(null, $c);

                $arr = array();
                foreach($ml_attributes as $ml_attribute){
                    $descripcion = $ml_attribute->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>