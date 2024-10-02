<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuDeAsch01Req
{ 
	
	const SES_PAGINACION = 'adm_ekudeasch01req_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekudeasch01req_paginas_registros';
	const SES_CRITERIOS = 'adm_ekudeasch01req_criterios';
	
	const GEN_CLASE = 'EkuDeAsch01Req';
	const GEN_TABLA = 'eku_de_asch01_req';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BEkuDeAsch01Req */ 
	const GEN_ATTR_ID = 'eku_de_asch01_req.id';
	const GEN_ATTR_DESCRIPCION = 'eku_de_asch01_req.descripcion';
	const GEN_ATTR_EKU_DE_ID = 'eku_de_asch01_req.eku_de_id';
	const GEN_ATTR_EKU_ASCH02_DID = 'eku_de_asch01_req.eku_asch02_did';
	const GEN_ATTR_EKU_ASCH03_XDE = 'eku_de_asch01_req.eku_asch03_xde';
	const GEN_ATTR_CODIGO = 'eku_de_asch01_req.codigo';
	const GEN_ATTR_OBSERVACION = 'eku_de_asch01_req.observacion';
	const GEN_ATTR_ORDEN = 'eku_de_asch01_req.orden';
	const GEN_ATTR_ESTADO = 'eku_de_asch01_req.estado';
	const GEN_ATTR_CREADO = 'eku_de_asch01_req.creado';
	const GEN_ATTR_CREADO_POR = 'eku_de_asch01_req.creado_por';
	const GEN_ATTR_MODIFICADO = 'eku_de_asch01_req.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'eku_de_asch01_req.modificado_por';

	/* Constantes de Atributos Min de BEkuDeAsch01Req */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_EKU_DE_ID = 'eku_de_id';
	const GEN_ATTR_MIN_EKU_ASCH02_DID = 'eku_asch02_did';
	const GEN_ATTR_MIN_EKU_ASCH03_XDE = 'eku_asch03_xde';
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
	

	/* Atributos de BEkuDeAsch01Req */ 
	private $id;
	private $descripcion;
	private $eku_de_id;
	private $eku_asch02_did;
	private $eku_asch03_xde;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BEkuDeAsch01Req */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getEkuDeId(){ if(isset($this->eku_de_id)){ return $this->eku_de_id; }else{ return 'null'; } }
	public function getEkuAsch02Did(){ if(isset($this->eku_asch02_did)){ return $this->eku_asch02_did; }else{ return ''; } }
	public function getEkuAsch03Xde(){ if(isset($this->eku_asch03_xde)){ return $this->eku_asch03_xde; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BEkuDeAsch01Req */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_EKU_DE_ID."
				, ".self::GEN_ATTR_EKU_ASCH02_DID."
				, ".self::GEN_ATTR_EKU_ASCH03_XDE."
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
				$this->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
				$this->setEkuAsch02Did($fila[self::GEN_ATTR_MIN_EKU_ASCH02_DID]);
				$this->setEkuAsch03Xde($fila[self::GEN_ATTR_MIN_EKU_ASCH03_XDE]);
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
	public function setEkuDeId($v){ $this->eku_de_id = $v; }
	public function setEkuAsch02Did($v){ $this->eku_asch02_did = $v; }
	public function setEkuAsch03Xde($v){ $this->eku_asch03_xde = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuDeAsch01Req();
            $o->setId($fila[EkuDeAsch01Req::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$o->setEkuAsch02Did($fila[self::GEN_ATTR_MIN_EKU_ASCH02_DID]);
			$o->setEkuAsch03Xde($fila[self::GEN_ATTR_MIN_EKU_ASCH03_XDE]);
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

	/* Control de BEkuDeAsch01Req */ 	
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

	/* Cambia el estado de BEkuDeAsch01Req */ 	
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

	/* Save de BEkuDeAsch01Req */ 	
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
						, ".self::GEN_ATTR_MIN_EKU_DE_ID."
						, ".self::GEN_ATTR_MIN_EKU_ASCH02_DID."
						, ".self::GEN_ATTR_MIN_EKU_ASCH03_XDE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('eku_de_asch01_req_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getEkuDeId()."
						, '".$this->getEkuAsch02Did()."'
						, '".$this->getEkuAsch03Xde()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('eku_de_asch01_req_seq')";
            
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
                 
				 ".EkuDeAsch01Req::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_ASCH02_DID." = '".$this->getEkuAsch02Did()."'
						, ".self::GEN_ATTR_MIN_EKU_ASCH03_XDE." = '".$this->getEkuAsch03Xde()."'
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
						, ".self::GEN_ATTR_MIN_EKU_DE_ID."
						, ".self::GEN_ATTR_MIN_EKU_ASCH02_DID."
						, ".self::GEN_ATTR_MIN_EKU_ASCH03_XDE."
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
						, ".$this->getEkuDeId()."
						, '".$this->getEkuAsch02Did()."'
						, '".$this->getEkuAsch03Xde()."'
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
                     
				 ".EkuDeAsch01Req::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_EKU_DE_ID." = ".$this->getEkuDeId()."
						, ".self::GEN_ATTR_MIN_EKU_ASCH02_DID." = '".$this->getEkuAsch02Did()."'
						, ".self::GEN_ATTR_MIN_EKU_ASCH03_XDE." = '".$this->getEkuAsch03Xde()."'
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
            $o = new EkuDeAsch01Req();
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

	/* Delete de BEkuDeAsch01Req */ 	
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
	
            // se elimina la coleccion de EkuDeArsch01Resps relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeArsch01Resp::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeArsch01Resps(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeArsch01RespMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeArsch01RespMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarEkuDeAsch01Req(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuDeAsch01Reqs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuDeAsch01Req::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ekudeasch01reqs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekudeasch01req = new EkuDeAsch01Req();
                    $ekudeasch01req->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekudeasch01req->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ekudeasch01req->setEkuDeId($fila[self::GEN_ATTR_MIN_EKU_DE_ID]);
			$ekudeasch01req->setEkuAsch02Did($fila[self::GEN_ATTR_MIN_EKU_ASCH02_DID]);
			$ekudeasch01req->setEkuAsch03Xde($fila[self::GEN_ATTR_MIN_EKU_ASCH03_XDE]);
			$ekudeasch01req->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ekudeasch01req->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ekudeasch01req->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ekudeasch01req->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ekudeasch01req->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekudeasch01req->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ekudeasch01req->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ekudeasch01req->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ekudeasch01reqs[] = $ekudeasch01req;
		}
		
		return $ekudeasch01reqs;
	}	
	

	/* Método getEkuDeAsch01Reqs Habilitados */ 	
	static function getEkuDeAsch01ReqsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuDeAsch01Reqs para listado de Backend */ 	
	static function getEkuDeAsch01ReqsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuDeAsch01ReqsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuDeAsch01Req::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeAsch01Reqs filtrado para select */ 	
	static function getEkuDeAsch01ReqsCmbF($paginador = null, $criterio = null){
            $col = EkuDeAsch01Req::getEkuDeAsch01Reqs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuDeAsch01Reqs filtrado por una coleccion de objetos foraneos de EkuDe */ 	
	static function getEkuDeAsch01ReqsXEkuDes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuDeAsch01Req::GEN_ATTR_EKU_DE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
            $c->addOrden(EkuDeAsch01Req::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuDeAsch01Req::getEkuDeAsch01Reqs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuDeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_de_asch01_req_adm.php';
            $url_gestion = 'eku_de_asch01_req_gestion.php';
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
	

	/* Metodo getEkuDeArsch01Resps */ 	
	public function getEkuDeArsch01Resps($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeArsch01Resp::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeArsch01Resp::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeArsch01Resp::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeArsch01Resp::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudearsch01resps = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudearsch01resp = EkuDeArsch01Resp::hidratarObjeto($fila);			
                $ekudearsch01resps[] = $ekudearsch01resp;
            }

            return $ekudearsch01resps;
	}	
	

	/* Método getEkuDeArsch01RespsBloque para MasInfo */ 	
	public function getEkuDeArsch01RespsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeArsch01Resps($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeArsch01Resps Habilitados */ 	
	public function getEkuDeArsch01RespsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeArsch01Resps($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeArsch01Resp */ 	
	public function getEkuDeArsch01Resp($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeArsch01Resps($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeArsch01Resp relacionadas */ 	
	public function deleteEkuDeArsch01Resps(){
            $obs = $this->getEkuDeArsch01Resps();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeArsch01RespsCmb() EkuDeArsch01Resp relacionadas */ 	
	public function getEkuDeArsch01RespsCmb(){
            $c = new Criterio();
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeArsch01Resp::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeArsch01Resp::getEkuDeArsch01RespsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeArsch01Resp */ 	
	public function getEkuDesXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01Resp::GEN_TABLA, EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeArsch01Resp */ 	
	public function getCantidadEkuDesXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01Resp::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01Resp::GEN_TABLA, EkuDeArsch01Resp::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeArsch01Resp */ 	
	public function getEkuDeXEkuDeArsch01Resp($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeArsch01Resp($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeArsch01RespMensajes */ 	
	public function getEkuDeArsch01RespMensajes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeArsch01RespMensaje::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeArsch01RespMensaje::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeArsch01RespMensaje::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeArsch01RespMensaje::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudearsch01respmensajes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudearsch01respmensaje = EkuDeArsch01RespMensaje::hidratarObjeto($fila);			
                $ekudearsch01respmensajes[] = $ekudearsch01respmensaje;
            }

            return $ekudearsch01respmensajes;
	}	
	

	/* Método getEkuDeArsch01RespMensajesBloque para MasInfo */ 	
	public function getEkuDeArsch01RespMensajesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeArsch01RespMensajes Habilitados */ 	
	public function getEkuDeArsch01RespMensajesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeArsch01RespMensaje */ 	
	public function getEkuDeArsch01RespMensaje($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeArsch01RespMensajes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeArsch01RespMensaje relacionadas */ 	
	public function deleteEkuDeArsch01RespMensajes(){
            $obs = $this->getEkuDeArsch01RespMensajes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeArsch01RespMensajesCmb() EkuDeArsch01RespMensaje relacionadas */ 	
	public function getEkuDeArsch01RespMensajesCmb(){
            $c = new Criterio();
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeArsch01RespMensaje::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeArsch01RespMensaje::getEkuDeArsch01RespMensajesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeArsch01RespMensaje */ 	
	public function getEkuDesXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01RespMensaje::GEN_TABLA, EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeArsch01RespMensaje */ 	
	public function getCantidadEkuDesXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ASCH01_REQ_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeArsch01RespMensaje::GEN_TABLA, EkuDeArsch01RespMensaje::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeArsch01RespMensaje */ 	
	public function getEkuDeXEkuDeArsch01RespMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeArsch01RespMensaje($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el EkuDe (Clave Foranea) */ 	
    public function getEkuDe(){
        $o = new EkuDe();
        $o->setId($this->getEkuDeId());
        return $o;			
    }

	/* Metodo que retorna el EkuDe (Clave Foranea) en Array */ 	
    public function getEkuDeEnArray(&$arr_os){
        if($this->getEkuDeId() != 'null'){
            if(isset($arr_os[$this->getEkuDeId()])){
                $o = $arr_os[$this->getEkuDeId()];
            }else{
                $o = EkuDe::getOxId($this->getEkuDeId());
                if($o){
                    $arr_os[$this->getEkuDeId()] = $o;
                }
            }
        }else{
            $o = new EkuDe();
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
            		
        if($contexto_solicitante != EkuDe::GEN_CLASE){
            if($this->getEkuDe()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(EkuDe::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getEkuDe()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_de_asch01_req'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_de_asch01_req';");
            
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

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_de_id' */ 	
	static function getOxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_de_id' */ 	
	static function getOsxEkuDeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_DE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_asch02_did' */ 	
	static function getOxEkuAsch02Did($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_ASCH02_DID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_asch02_did' */ 	
	static function getOsxEkuAsch02Did($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_ASCH02_DID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_asch03_xde' */ 	
	static function getOxEkuAsch03Xde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_ASCH03_XDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_asch03_xde' */ 	
	static function getOsxEkuAsch03Xde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_ASCH03_XDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs(null, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
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

            $obs = self::getEkuDeAsch01Reqs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_de_asch01_req_adm');
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
                $c->addTabla(EkuDeAsch01Req::GEN_TABLA);
                $c->addOrden(EkuDeAsch01Req::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $eku_de_asch01_reqs = EkuDeAsch01Req::getEkuDeAsch01Reqs(null, $c);

                $arr = array();
                foreach($eku_de_asch01_reqs as $eku_de_asch01_req){
                    $descripcion = $eku_de_asch01_req->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>