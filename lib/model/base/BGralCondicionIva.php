<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralCondicionIva
{ 
	
	const SES_PAGINACION = 'adm_gralcondicioniva_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_gralcondicioniva_paginas_registros';
	const SES_CRITERIOS = 'adm_gralcondicioniva_criterios';
	
	const GEN_CLASE = 'GralCondicionIva';
	const GEN_TABLA = 'gral_condicion_iva';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralCondicionIva */ 
	const GEN_ATTR_ID = 'gral_condicion_iva.id';
	const GEN_ATTR_DESCRIPCION = 'gral_condicion_iva.descripcion';
	const GEN_ATTR_CODIGO = 'gral_condicion_iva.codigo';
	const GEN_ATTR_IVA_DISCRIMINADO = 'gral_condicion_iva.iva_discriminado';
	const GEN_ATTR_IVA_DISCRIMINADO_COMPROBANTE = 'gral_condicion_iva.iva_discriminado_comprobante';
	const GEN_ATTR_LEYENDA_COMPROBANTE = 'gral_condicion_iva.leyenda_comprobante';
	const GEN_ATTR_OBSERVACION = 'gral_condicion_iva.observacion';
	const GEN_ATTR_ORDEN = 'gral_condicion_iva.orden';
	const GEN_ATTR_ESTADO = 'gral_condicion_iva.estado';
	const GEN_ATTR_CREADO = 'gral_condicion_iva.creado';
	const GEN_ATTR_CREADO_POR = 'gral_condicion_iva.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_condicion_iva.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_condicion_iva.modificado_por';

	/* Constantes de Atributos Min de BGralCondicionIva */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_IVA_DISCRIMINADO = 'iva_discriminado';
	const GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE = 'iva_discriminado_comprobante';
	const GEN_ATTR_MIN_LEYENDA_COMPROBANTE = 'leyenda_comprobante';
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
	

	/* Atributos de BGralCondicionIva */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $iva_discriminado;
	private $iva_discriminado_comprobante;
	private $leyenda_comprobante;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralCondicionIva */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getIvaDiscriminado(){ if(isset($this->iva_discriminado)){ return $this->iva_discriminado; }else{ return 0; } }
	public function getIvaDiscriminadoComprobante(){ if(isset($this->iva_discriminado_comprobante)){ return $this->iva_discriminado_comprobante; }else{ return 0; } }
	public function getLeyendaComprobante(){ if(isset($this->leyenda_comprobante)){ return $this->leyenda_comprobante; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralCondicionIva */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_IVA_DISCRIMINADO."
				, ".self::GEN_ATTR_IVA_DISCRIMINADO_COMPROBANTE."
				, ".self::GEN_ATTR_LEYENDA_COMPROBANTE."
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
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setIvaDiscriminado($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO]);
				$this->setIvaDiscriminadoComprobante($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE]);
				$this->setLeyendaComprobante($fila[self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE]);
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setIvaDiscriminado($v){ $this->iva_discriminado = $v; }
	public function setIvaDiscriminadoComprobante($v){ $this->iva_discriminado_comprobante = $v; }
	public function setLeyendaComprobante($v){ $this->leyenda_comprobante = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralCondicionIva();
            $o->setId($fila[GralCondicionIva::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setIvaDiscriminado($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO]);
			$o->setIvaDiscriminadoComprobante($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE]);
			$o->setLeyendaComprobante($fila[self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralCondicionIva */ 	
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

	/* Cambia el estado de BGralCondicionIva */ 	
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

	/* Save de BGralCondicionIva */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_condicion_iva_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getIvaDiscriminado()."
						, ".$this->getIvaDiscriminadoComprobante()."
						, '".$this->getLeyendaComprobante()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_condicion_iva_seq')";
            
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
                 
				 ".GralCondicionIva::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO." = ".$this->getIvaDiscriminado()."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE." = ".$this->getIvaDiscriminadoComprobante()."
						, ".self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE." = '".$this->getLeyendaComprobante()."'
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getIvaDiscriminado()."
						, ".$this->getIvaDiscriminadoComprobante()."
						, '".$this->getLeyendaComprobante()."'
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
                     
				 ".GralCondicionIva::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO." = ".$this->getIvaDiscriminado()."
						, ".self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE." = ".$this->getIvaDiscriminadoComprobante()."
						, ".self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE." = '".$this->getLeyendaComprobante()."'
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
            $o = new GralCondicionIva();
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

	/* Delete de BGralCondicionIva */ 	
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
	
            // se elimina la coleccion de GralCondicionIvaVtaTipoFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaVtaTipoNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaVtaTipoNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaVtaTipoRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaPdeTipoFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaPdeTipoFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaPdeTipoFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaPdeTipoNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaPdeTipoNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaPdeTipoNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaPdeTipoNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaPdeTipoRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaPdeTipoRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaPdeTipoRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralEmpresas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralEmpresas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaVtaTipoAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCondicionIvaVtaTipoAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamTipoNaturalezaReceptorGralCondicionIvas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralCondicionIva(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralCondicionIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralCondicionIva::setAplicarFiltrosDeAlcance($criterio);

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
	
		$gralcondicionivas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $gralcondicioniva = new GralCondicionIva();
                    $gralcondicioniva->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $gralcondicioniva->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$gralcondicioniva->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$gralcondicioniva->setIvaDiscriminado($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO]);
			$gralcondicioniva->setIvaDiscriminadoComprobante($fila[self::GEN_ATTR_MIN_IVA_DISCRIMINADO_COMPROBANTE]);
			$gralcondicioniva->setLeyendaComprobante($fila[self::GEN_ATTR_MIN_LEYENDA_COMPROBANTE]);
			$gralcondicioniva->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$gralcondicioniva->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$gralcondicioniva->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$gralcondicioniva->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$gralcondicioniva->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$gralcondicioniva->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$gralcondicioniva->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $gralcondicionivas[] = $gralcondicioniva;
		}
		
		return $gralcondicionivas;
	}	
	

	/* Método getGralCondicionIvas Habilitados */ 	
	static function getGralCondicionIvasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralCondicionIva::getGralCondicionIvas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralCondicionIvas para listado de Backend */ 	
	static function getGralCondicionIvasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralCondicionIva::getGralCondicionIvas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralCondicionIvasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralCondicionIva::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralCondicionIva::getGralCondicionIvas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralCondicionIvas filtrado para select */ 	
	static function getGralCondicionIvasCmbF($paginador = null, $criterio = null){
            $col = GralCondicionIva::getGralCondicionIvas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'gral_condicion_iva_adm.php';
            $url_gestion = 'gral_condicion_iva_gestion.php';
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
	

	/* Metodo getGralCondicionIvaVtaTipoFacturas */ 	
	public function getGralCondicionIvaVtaTipoFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatipofacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatipofactura = GralCondicionIvaVtaTipoFactura::hidratarObjeto($fila);			
                $gralcondicionivavtatipofacturas[] = $gralcondicionivavtatipofactura;
            }

            return $gralcondicionivavtatipofacturas;
	}	
	

	/* Método getGralCondicionIvaVtaTipoFacturasBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoFacturas Habilitados */ 	
	public function getGralCondicionIvaVtaTipoFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoFactura */ 	
	public function getGralCondicionIvaVtaTipoFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoFactura relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoFacturas(){
            $obs = $this->getGralCondicionIvaVtaTipoFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoFacturasCmb() GralCondicionIvaVtaTipoFactura relacionadas */ 	
	public function getGralCondicionIvaVtaTipoFacturasCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoFactura::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoFactura::getGralCondicionIvaVtaTipoFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoFacturas (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoFactura */ 	
	public function getVtaTipoFacturasXGralCondicionIvaVtaTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoFactura::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoFactura::GEN_TABLA, GralCondicionIvaVtaTipoFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, VtaTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoFactura::getVtaTipoFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoFacturas relacionados a traves de GralCondicionIvaVtaTipoFactura */ 	
	public function getCantidadVtaTipoFacturasXGralCondicionIvaVtaTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoFactura::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoFactura::GEN_TABLA, GralCondicionIvaVtaTipoFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, VtaTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoFactura::getVtaTipoFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoFactura (Objeto) relacionado a traves de GralCondicionIvaVtaTipoFactura */ 	
	public function getVtaTipoFacturaXGralCondicionIvaVtaTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoFacturasXGralCondicionIvaVtaTipoFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaVtaTipoNotaCreditos */ 	
	public function getGralCondicionIvaVtaTipoNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatiponotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatiponotacredito = GralCondicionIvaVtaTipoNotaCredito::hidratarObjeto($fila);			
                $gralcondicionivavtatiponotacreditos[] = $gralcondicionivavtatiponotacredito;
            }

            return $gralcondicionivavtatiponotacreditos;
	}	
	

	/* Método getGralCondicionIvaVtaTipoNotaCreditosBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoNotaCreditos Habilitados */ 	
	public function getGralCondicionIvaVtaTipoNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoNotaCredito */ 	
	public function getGralCondicionIvaVtaTipoNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoNotaCredito relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoNotaCreditos(){
            $obs = $this->getGralCondicionIvaVtaTipoNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoNotaCreditosCmb() GralCondicionIvaVtaTipoNotaCredito relacionadas */ 	
	public function getGralCondicionIvaVtaTipoNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoNotaCredito::getGralCondicionIvaVtaTipoNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaCreditos (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoNotaCredito */ 	
	public function getVtaTipoNotaCreditosXGralCondicionIvaVtaTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA, GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaCreditos relacionados a traves de GralCondicionIvaVtaTipoNotaCredito */ 	
	public function getCantidadVtaTipoNotaCreditosXGralCondicionIvaVtaTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaCredito::GEN_TABLA, GralCondicionIvaVtaTipoNotaCredito::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, VtaTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaCredito::getVtaTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaCredito (Objeto) relacionado a traves de GralCondicionIvaVtaTipoNotaCredito */ 	
	public function getVtaTipoNotaCreditoXGralCondicionIvaVtaTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaCreditosXGralCondicionIvaVtaTipoNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaVtaTipoNotaDebitos */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatiponotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatiponotadebito = GralCondicionIvaVtaTipoNotaDebito::hidratarObjeto($fila);			
                $gralcondicionivavtatiponotadebitos[] = $gralcondicionivavtatiponotadebito;
            }

            return $gralcondicionivavtatiponotadebitos;
	}	
	

	/* Método getGralCondicionIvaVtaTipoNotaDebitosBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoNotaDebitos Habilitados */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoNotaDebito */ 	
	public function getGralCondicionIvaVtaTipoNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoNotaDebito relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoNotaDebitos(){
            $obs = $this->getGralCondicionIvaVtaTipoNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoNotaDebitosCmb() GralCondicionIvaVtaTipoNotaDebito relacionadas */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoNotaDebito::getGralCondicionIvaVtaTipoNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoNotaDebitos (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getVtaTipoNotaDebitosXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA, GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoNotaDebitos relacionados a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getCantidadVtaTipoNotaDebitosXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA, GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, VtaTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoNotaDebito (Objeto) relacionado a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getVtaTipoNotaDebitoXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoNotaDebitosXGralCondicionIvaVtaTipoNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaVtaTipoRecibos */ 	
	public function getGralCondicionIvaVtaTipoRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatiporecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatiporecibo = GralCondicionIvaVtaTipoRecibo::hidratarObjeto($fila);			
                $gralcondicionivavtatiporecibos[] = $gralcondicionivavtatiporecibo;
            }

            return $gralcondicionivavtatiporecibos;
	}	
	

	/* Método getGralCondicionIvaVtaTipoRecibosBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoRecibos Habilitados */ 	
	public function getGralCondicionIvaVtaTipoRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoRecibo */ 	
	public function getGralCondicionIvaVtaTipoRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoRecibo relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoRecibos(){
            $obs = $this->getGralCondicionIvaVtaTipoRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoRecibosCmb() GralCondicionIvaVtaTipoRecibo relacionadas */ 	
	public function getGralCondicionIvaVtaTipoRecibosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoRecibo::getGralCondicionIvaVtaTipoRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoRecibos (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoRecibo */ 	
	public function getVtaTipoRecibosXGralCondicionIvaVtaTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoRecibo::GEN_TABLA, GralCondicionIvaVtaTipoRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoRecibos relacionados a traves de GralCondicionIvaVtaTipoRecibo */ 	
	public function getCantidadVtaTipoRecibosXGralCondicionIvaVtaTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoRecibo::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoRecibo::GEN_TABLA, GralCondicionIvaVtaTipoRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, VtaTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoRecibo::getVtaTipoRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoRecibo (Objeto) relacionado a traves de GralCondicionIvaVtaTipoRecibo */ 	
	public function getVtaTipoReciboXGralCondicionIvaVtaTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoRecibosXGralCondicionIvaVtaTipoRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaPdeTipoFacturas */ 	
	public function getGralCondicionIvaPdeTipoFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaPdeTipoFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaPdeTipoFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaPdeTipoFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaPdeTipoFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaPdeTipoFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivapdetipofacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivapdetipofactura = GralCondicionIvaPdeTipoFactura::hidratarObjeto($fila);			
                $gralcondicionivapdetipofacturas[] = $gralcondicionivapdetipofactura;
            }

            return $gralcondicionivapdetipofacturas;
	}	
	

	/* Método getGralCondicionIvaPdeTipoFacturasBloque para MasInfo */ 	
	public function getGralCondicionIvaPdeTipoFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaPdeTipoFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoFacturas Habilitados */ 	
	public function getGralCondicionIvaPdeTipoFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaPdeTipoFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoFactura */ 	
	public function getGralCondicionIvaPdeTipoFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaPdeTipoFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaPdeTipoFactura relacionadas */ 	
	public function deleteGralCondicionIvaPdeTipoFacturas(){
            $obs = $this->getGralCondicionIvaPdeTipoFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaPdeTipoFacturasCmb() GralCondicionIvaPdeTipoFactura relacionadas */ 	
	public function getGralCondicionIvaPdeTipoFacturasCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaPdeTipoFactura::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaPdeTipoFactura::getGralCondicionIvaPdeTipoFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoFacturas (Coleccion) relacionados a traves de GralCondicionIvaPdeTipoFactura */ 	
	public function getPdeTipoFacturasXGralCondicionIvaPdeTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoFactura::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoFactura::GEN_TABLA, GralCondicionIvaPdeTipoFactura::GEN_ATTR_PDE_TIPO_FACTURA_ID, PdeTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoFactura::getPdeTipoFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoFacturas relacionados a traves de GralCondicionIvaPdeTipoFactura */ 	
	public function getCantidadPdeTipoFacturasXGralCondicionIvaPdeTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoFactura::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoFactura::GEN_TABLA, GralCondicionIvaPdeTipoFactura::GEN_ATTR_PDE_TIPO_FACTURA_ID, PdeTipoFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoFactura::getPdeTipoFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoFactura (Objeto) relacionado a traves de GralCondicionIvaPdeTipoFactura */ 	
	public function getPdeTipoFacturaXGralCondicionIvaPdeTipoFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoFacturasXGralCondicionIvaPdeTipoFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaPdeTipoNotaCreditos */ 	
	public function getGralCondicionIvaPdeTipoNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaPdeTipoNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaPdeTipoNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivapdetiponotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivapdetiponotacredito = GralCondicionIvaPdeTipoNotaCredito::hidratarObjeto($fila);			
                $gralcondicionivapdetiponotacreditos[] = $gralcondicionivapdetiponotacredito;
            }

            return $gralcondicionivapdetiponotacreditos;
	}	
	

	/* Método getGralCondicionIvaPdeTipoNotaCreditosBloque para MasInfo */ 	
	public function getGralCondicionIvaPdeTipoNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaPdeTipoNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaCreditos Habilitados */ 	
	public function getGralCondicionIvaPdeTipoNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaPdeTipoNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaCredito */ 	
	public function getGralCondicionIvaPdeTipoNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaPdeTipoNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaPdeTipoNotaCredito relacionadas */ 	
	public function deleteGralCondicionIvaPdeTipoNotaCreditos(){
            $obs = $this->getGralCondicionIvaPdeTipoNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaPdeTipoNotaCreditosCmb() GralCondicionIvaPdeTipoNotaCredito relacionadas */ 	
	public function getGralCondicionIvaPdeTipoNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaPdeTipoNotaCredito::getGralCondicionIvaPdeTipoNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaCreditos (Coleccion) relacionados a traves de GralCondicionIvaPdeTipoNotaCredito */ 	
	public function getPdeTipoNotaCreditosXGralCondicionIvaPdeTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA, GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaCreditos relacionados a traves de GralCondicionIvaPdeTipoNotaCredito */ 	
	public function getCantidadPdeTipoNotaCreditosXGralCondicionIvaPdeTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaCredito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaCredito::GEN_TABLA, GralCondicionIvaPdeTipoNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, PdeTipoNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaCredito::getPdeTipoNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaCredito (Objeto) relacionado a traves de GralCondicionIvaPdeTipoNotaCredito */ 	
	public function getPdeTipoNotaCreditoXGralCondicionIvaPdeTipoNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaCreditosXGralCondicionIvaPdeTipoNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaPdeTipoNotaDebitos */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaPdeTipoNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaPdeTipoNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivapdetiponotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivapdetiponotadebito = GralCondicionIvaPdeTipoNotaDebito::hidratarObjeto($fila);			
                $gralcondicionivapdetiponotadebitos[] = $gralcondicionivapdetiponotadebito;
            }

            return $gralcondicionivapdetiponotadebitos;
	}	
	

	/* Método getGralCondicionIvaPdeTipoNotaDebitosBloque para MasInfo */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaDebitos Habilitados */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoNotaDebito */ 	
	public function getGralCondicionIvaPdeTipoNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaPdeTipoNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaPdeTipoNotaDebito relacionadas */ 	
	public function deleteGralCondicionIvaPdeTipoNotaDebitos(){
            $obs = $this->getGralCondicionIvaPdeTipoNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaPdeTipoNotaDebitosCmb() GralCondicionIvaPdeTipoNotaDebito relacionadas */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaPdeTipoNotaDebito::getGralCondicionIvaPdeTipoNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoNotaDebitos (Coleccion) relacionados a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getPdeTipoNotaDebitosXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA, GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoNotaDebitos relacionados a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getCantidadPdeTipoNotaDebitosXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoNotaDebito::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoNotaDebito::GEN_TABLA, GralCondicionIvaPdeTipoNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, PdeTipoNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoNotaDebito (Objeto) relacionado a traves de GralCondicionIvaPdeTipoNotaDebito */ 	
	public function getPdeTipoNotaDebitoXGralCondicionIvaPdeTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoNotaDebitosXGralCondicionIvaPdeTipoNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaPdeTipoRecibos */ 	
	public function getGralCondicionIvaPdeTipoRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaPdeTipoRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaPdeTipoRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaPdeTipoRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaPdeTipoRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivapdetiporecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivapdetiporecibo = GralCondicionIvaPdeTipoRecibo::hidratarObjeto($fila);			
                $gralcondicionivapdetiporecibos[] = $gralcondicionivapdetiporecibo;
            }

            return $gralcondicionivapdetiporecibos;
	}	
	

	/* Método getGralCondicionIvaPdeTipoRecibosBloque para MasInfo */ 	
	public function getGralCondicionIvaPdeTipoRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaPdeTipoRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoRecibos Habilitados */ 	
	public function getGralCondicionIvaPdeTipoRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaPdeTipoRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaPdeTipoRecibo */ 	
	public function getGralCondicionIvaPdeTipoRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaPdeTipoRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaPdeTipoRecibo relacionadas */ 	
	public function deleteGralCondicionIvaPdeTipoRecibos(){
            $obs = $this->getGralCondicionIvaPdeTipoRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaPdeTipoRecibosCmb() GralCondicionIvaPdeTipoRecibo relacionadas */ 	
	public function getGralCondicionIvaPdeTipoRecibosCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaPdeTipoRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaPdeTipoRecibo::getGralCondicionIvaPdeTipoRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecibos (Coleccion) relacionados a traves de GralCondicionIvaPdeTipoRecibo */ 	
	public function getPdeTipoRecibosXGralCondicionIvaPdeTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecibo::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoRecibo::GEN_TABLA, GralCondicionIvaPdeTipoRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, PdeTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecibo::getPdeTipoRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecibos relacionados a traves de GralCondicionIvaPdeTipoRecibo */ 	
	public function getCantidadPdeTipoRecibosXGralCondicionIvaPdeTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaPdeTipoRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecibo::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaPdeTipoRecibo::GEN_TABLA, GralCondicionIvaPdeTipoRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, PdeTipoRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecibo::getPdeTipoRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecibo (Objeto) relacionado a traves de GralCondicionIvaPdeTipoRecibo */ 	
	public function getPdeTipoReciboXGralCondicionIvaPdeTipoRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecibosXGralCondicionIvaPdeTipoRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralEmpresas */ 	
	public function getGralEmpresas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralEmpresa::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralEmpresa::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralEmpresa::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralEmpresa::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralEmpresa::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralEmpresa::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralempresas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralempresa = GralEmpresa::hidratarObjeto($fila);			
                $gralempresas[] = $gralempresa;
            }

            return $gralempresas;
	}	
	

	/* Método getGralEmpresasBloque para MasInfo */ 	
	public function getGralEmpresasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralEmpresas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralEmpresas Habilitados */ 	
	public function getGralEmpresasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralEmpresas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralEmpresa */ 	
	public function getGralEmpresa($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralEmpresas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralEmpresa relacionadas */ 	
	public function deleteGralEmpresas(){
            $obs = $this->getGralEmpresas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralEmpresasCmb() GralEmpresa relacionadas */ 	
	public function getGralEmpresasCmb(){
            $c = new Criterio();
            $c->add(GralEmpresa::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoPersonerias (Coleccion) relacionados a traves de GralEmpresa */ 	
	public function getGralTipoPersoneriasXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralEmpresa::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoPersonerias relacionados a traves de GralEmpresa */ 	
	public function getCantidadGralTipoPersoneriasXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoPersoneria::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralEmpresa::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoPersoneria (Objeto) relacionado a traves de GralEmpresa */ 	
	public function getGralTipoPersoneriaXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoPersoneriasXGralEmpresa($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvProveedors */ 	
	public function getPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvProveedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedor = PrvProveedor::hidratarObjeto($fila);			
                $prvproveedors[] = $prvproveedor;
            }

            return $prvproveedors;
	}	
	

	/* Método getPrvProveedorsBloque para MasInfo */ 	
	public function getPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedors Habilitados */ 	
	public function getPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedor */ 	
	public function getPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedor relacionadas */ 	
	public function deletePrvProveedors(){
            $obs = $this->getPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorsCmb() PrvProveedor relacionadas */ 	
	public function getPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvTipos (Coleccion) relacionados a traves de PrvProveedor */ 	
	public function getPrvTiposXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTipo::GEN_TABLA);
            $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_PRV_TIPO_ID, PrvTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTipo::getPrvTipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvTipos relacionados a traves de PrvProveedor */ 	
	public function getCantidadPrvTiposXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvTipo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTipo::GEN_TABLA);
            $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_PRV_TIPO_ID, PrvTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTipo::getPrvTipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvTipo (Objeto) relacionado a traves de PrvProveedor */ 	
	public function getPrvTipoXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvTiposXPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClientes */ 	
	public function getCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCliente::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicliente = CliCliente::hidratarObjeto($fila);			
                $cliclientes[] = $clicliente;
            }

            return $cliclientes;
	}	
	

	/* Método getCliClientesBloque para MasInfo */ 	
	public function getCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClientes Habilitados */ 	
	public function getCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCliente */ 	
	public function getCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCliente relacionadas */ 	
	public function deleteCliClientes(){
            $obs = $this->getCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClientesCmb() CliCliente relacionadas */ 	
	public function getCliClientesCmb(){
            $c = new Criterio();
            $c->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = CliCliente::getCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoPersonerias (Coleccion) relacionados a traves de CliCliente */ 	
	public function getGralTipoPersoneriasXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoPersonerias relacionados a traves de CliCliente */ 	
	public function getCantidadGralTipoPersoneriasXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoPersoneria::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoPersoneria (Objeto) relacionado a traves de CliCliente */ 	
	public function getGralTipoPersoneriaXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoPersoneriasXCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestos */ 	
	public function getVtaPresupuestos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuesto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuesto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuesto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuesto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuesto = VtaPresupuesto::hidratarObjeto($fila);			
                $vtapresupuestos[] = $vtapresupuesto;
            }

            return $vtapresupuestos;
	}	
	

	/* Método getVtaPresupuestosBloque para MasInfo */ 	
	public function getVtaPresupuestosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestos Habilitados */ 	
	public function getVtaPresupuestosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuesto */ 	
	public function getVtaPresupuesto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuesto relacionadas */ 	
	public function deleteVtaPresupuestos(){
            $obs = $this->getVtaPresupuestos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestosCmb() VtaPresupuesto relacionadas */ 	
	public function getVtaPresupuestosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaPresupuesto */ 	
	public function getCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaPresupuesto */ 	
	public function getCantidadCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaPresupuesto */ 	
	public function getCliClienteXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaPresupuesto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditos */ 	
	public function getVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacredito = VtaNotaCredito::hidratarObjeto($fila);			
                $vtanotacreditos[] = $vtanotacredito;
            }

            return $vtanotacreditos;
	}	
	

	/* Método getVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditos Habilitados */ 	
	public function getVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCredito */ 	
	public function getVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCredito relacionadas */ 	
	public function deleteVtaNotaCreditos(){
            $obs = $this->getVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditosCmb() VtaNotaCredito relacionadas */ 	
	public function getVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaCredito */ 	
	public function getCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaCredito */ 	
	public function getCantidadCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaCredito */ 	
	public function getCliClienteXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitos */ 	
	public function getVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebito = VtaNotaDebito::hidratarObjeto($fila);			
                $vtanotadebitos[] = $vtanotadebito;
            }

            return $vtanotadebitos;
	}	
	

	/* Método getVtaNotaDebitosBloque para MasInfo */ 	
	public function getVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitos Habilitados */ 	
	public function getVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebito */ 	
	public function getVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebito relacionadas */ 	
	public function deleteVtaNotaDebitos(){
            $obs = $this->getVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitosCmb() VtaNotaDebito relacionadas */ 	
	public function getVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaDebito */ 	
	public function getCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaDebito */ 	
	public function getCantidadCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaDebito */ 	
	public function getCliClienteXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRecibos */ 	
	public function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibo = VtaRecibo::hidratarObjeto($fila);			
                $vtarecibos[] = $vtarecibo;
            }

            return $vtarecibos;
	}	
	

	/* Método getVtaRecibosBloque para MasInfo */ 	
	public function getVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRecibos Habilitados */ 	
	public function getVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRecibo */ 	
	public function getVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRecibo relacionadas */ 	
	public function deleteVtaRecibos(){
            $obs = $this->getVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRecibosCmb() VtaRecibo relacionadas */ 	
	public function getVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRecibo */ 	
	public function getCantidadCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getCliClienteXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaFactura */ 	
	public function getCantidadCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaFactura */ 	
	public function getCliClienteXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturas */ 	
	public function getPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefactura = PdeFactura::hidratarObjeto($fila);			
                $pdefacturas[] = $pdefactura;
            }

            return $pdefacturas;
	}	
	

	/* Método getPdeFacturasBloque para MasInfo */ 	
	public function getPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturas Habilitados */ 	
	public function getPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFactura */ 	
	public function getPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFactura relacionadas */ 	
	public function deletePdeFacturas(){
            $obs = $this->getPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturasCmb() PdeFactura relacionadas */ 	
	public function getPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeFactura */ 	
	public function getPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeFactura */ 	
	public function getCantidadPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeFactura */ 	
	public function getPrvProveedorXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditos */ 	
	public function getPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacredito = PdeNotaCredito::hidratarObjeto($fila);			
                $pdenotacreditos[] = $pdenotacredito;
            }

            return $pdenotacreditos;
	}	
	

	/* Método getPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditos Habilitados */ 	
	public function getPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCredito */ 	
	public function getPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCredito relacionadas */ 	
	public function deletePdeNotaCreditos(){
            $obs = $this->getPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditosCmb() PdeNotaCredito relacionadas */ 	
	public function getPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaCredito */ 	
	public function getPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaCredito */ 	
	public function getCantidadPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaCredito */ 	
	public function getPrvProveedorXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitos */ 	
	public function getPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebito = PdeNotaDebito::hidratarObjeto($fila);			
                $pdenotadebitos[] = $pdenotadebito;
            }

            return $pdenotadebitos;
	}	
	

	/* Método getPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitos Habilitados */ 	
	public function getPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebito */ 	
	public function getPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebito relacionadas */ 	
	public function deletePdeNotaDebitos(){
            $obs = $this->getPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitosCmb() PdeNotaDebito relacionadas */ 	
	public function getPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaDebito */ 	
	public function getPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaDebito */ 	
	public function getCantidadPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaDebito */ 	
	public function getPrvProveedorXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecibos */ 	
	public function getPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibo = PdeRecibo::hidratarObjeto($fila);			
                $pderecibos[] = $pderecibo;
            }

            return $pderecibos;
	}	
	

	/* Método getPdeRecibosBloque para MasInfo */ 	
	public function getPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecibos Habilitados */ 	
	public function getPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecibo */ 	
	public function getPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecibo relacionadas */ 	
	public function deletePdeRecibos(){
            $obs = $this->getPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecibosCmb() PdeRecibo relacionadas */ 	
	public function getPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeRecibo */ 	
	public function getPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeRecibo */ 	
	public function getCantidadPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeRecibo */ 	
	public function getPrvProveedorXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagos */ 	
	public function getPdeOrdenPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPago::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpago = PdeOrdenPago::hidratarObjeto($fila);			
                $pdeordenpagos[] = $pdeordenpago;
            }

            return $pdeordenpagos;
	}	
	

	/* Método getPdeOrdenPagosBloque para MasInfo */ 	
	public function getPdeOrdenPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagos Habilitados */ 	
	public function getPdeOrdenPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPago */ 	
	public function getPdeOrdenPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPago relacionadas */ 	
	public function deletePdeOrdenPagos(){
            $obs = $this->getPdeOrdenPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagosCmb() PdeOrdenPago relacionadas */ 	
	public function getPdeOrdenPagosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeOrdenPago */ 	
	public function getPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeOrdenPago */ 	
	public function getCantidadPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeOrdenPago */ 	
	public function getPrvProveedorXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeOrdenPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getCliClienteXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaVtaTipoAjusteDebes */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatipoajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatipoajustedebe = GralCondicionIvaVtaTipoAjusteDebe::hidratarObjeto($fila);			
                $gralcondicionivavtatipoajustedebes[] = $gralcondicionivavtatipoajustedebe;
            }

            return $gralcondicionivavtatipoajustedebes;
	}	
	

	/* Método getGralCondicionIvaVtaTipoAjusteDebesBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoAjusteDebes Habilitados */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoAjusteDebe */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoAjusteDebe relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoAjusteDebes(){
            $obs = $this->getGralCondicionIvaVtaTipoAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoAjusteDebesCmb() GralCondicionIvaVtaTipoAjusteDebe relacionadas */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoAjusteDebe::getGralCondicionIvaVtaTipoAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoAjusteDebes (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoAjusteDebe */ 	
	public function getVtaTipoAjusteDebesXGralCondicionIvaVtaTipoAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteDebe::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA, GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, VtaTipoAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteDebe::getVtaTipoAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoAjusteDebes relacionados a traves de GralCondicionIvaVtaTipoAjusteDebe */ 	
	public function getCantidadVtaTipoAjusteDebesXGralCondicionIvaVtaTipoAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteDebe::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoAjusteDebe::GEN_TABLA, GralCondicionIvaVtaTipoAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, VtaTipoAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteDebe::getVtaTipoAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoAjusteDebe (Objeto) relacionado a traves de GralCondicionIvaVtaTipoAjusteDebe */ 	
	public function getVtaTipoAjusteDebeXGralCondicionIvaVtaTipoAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoAjusteDebesXGralCondicionIvaVtaTipoAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHabers */ 	
	public function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaber = VtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustehabers[] = $vtaajustehaber;
            }

            return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaber */ 	
	public function getVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteHabers(){
            $obs = $this->getVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHabersCmb() VtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getCliClienteXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCondicionIvaVtaTipoAjusteHabers */ 	
	public function getGralCondicionIvaVtaTipoAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCondicionIvaVtaTipoAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCondicionIvaVtaTipoAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcondicionivavtatipoajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcondicionivavtatipoajustehaber = GralCondicionIvaVtaTipoAjusteHaber::hidratarObjeto($fila);			
                $gralcondicionivavtatipoajustehabers[] = $gralcondicionivavtatipoajustehaber;
            }

            return $gralcondicionivavtatipoajustehabers;
	}	
	

	/* Método getGralCondicionIvaVtaTipoAjusteHabersBloque para MasInfo */ 	
	public function getGralCondicionIvaVtaTipoAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCondicionIvaVtaTipoAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoAjusteHabers Habilitados */ 	
	public function getGralCondicionIvaVtaTipoAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCondicionIvaVtaTipoAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCondicionIvaVtaTipoAjusteHaber */ 	
	public function getGralCondicionIvaVtaTipoAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCondicionIvaVtaTipoAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCondicionIvaVtaTipoAjusteHaber relacionadas */ 	
	public function deleteGralCondicionIvaVtaTipoAjusteHabers(){
            $obs = $this->getGralCondicionIvaVtaTipoAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCondicionIvaVtaTipoAjusteHabersCmb() GralCondicionIvaVtaTipoAjusteHaber relacionadas */ 	
	public function getGralCondicionIvaVtaTipoAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoAjusteHaber::getGralCondicionIvaVtaTipoAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoAjusteHabers (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoAjusteHaber */ 	
	public function getVtaTipoAjusteHabersXGralCondicionIvaVtaTipoAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA, GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoAjusteHabers relacionados a traves de GralCondicionIvaVtaTipoAjusteHaber */ 	
	public function getCantidadVtaTipoAjusteHabersXGralCondicionIvaVtaTipoAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoAjusteHaber::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoAjusteHaber::GEN_TABLA, GralCondicionIvaVtaTipoAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, VtaTipoAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoAjusteHaber::getVtaTipoAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoAjusteHaber (Objeto) relacionado a traves de GralCondicionIvaVtaTipoAjusteHaber */ 	
	public function getVtaTipoAjusteHaberXGralCondicionIvaVtaTipoAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoAjusteHabersXGralCondicionIvaVtaTipoAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendas */ 	
	public function getCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTienda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTienda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTienda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTienda::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTienda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetienda = CliClienteTienda::hidratarObjeto($fila);			
                $cliclientetiendas[] = $cliclientetienda;
            }

            return $cliclientetiendas;
	}	
	

	/* Método getCliClienteTiendasBloque para MasInfo */ 	
	public function getCliClienteTiendasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendas Habilitados */ 	
	public function getCliClienteTiendasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTienda */ 	
	public function getCliClienteTienda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTienda relacionadas */ 	
	public function deleteCliClienteTiendas(){
            $obs = $this->getCliClienteTiendas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendasCmb() CliClienteTienda relacionadas */ 	
	public function getCliClienteTiendasCmb(){
            $c = new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteTienda */ 	
	public function getCliClientesXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteTienda */ 	
	public function getCantidadCliClientesXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteTienda */ 	
	public function getCliClienteXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteTienda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamTipoNaturalezaReceptorGralCondicionIvas */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamTipoNaturalezaReceptorGralCondicionIva::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamTipoNaturalezaReceptorGralCondicionIva::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamtiponaturalezareceptorgralcondicionivas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamtiponaturalezareceptorgralcondicioniva = EkuParamTipoNaturalezaReceptorGralCondicionIva::hidratarObjeto($fila);			
                $ekuparamtiponaturalezareceptorgralcondicionivas[] = $ekuparamtiponaturalezareceptorgralcondicioniva;
            }

            return $ekuparamtiponaturalezareceptorgralcondicionivas;
	}	
	

	/* Método getEkuParamTipoNaturalezaReceptorGralCondicionIvasBloque para MasInfo */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIvasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamTipoNaturalezaReceptorGralCondicionIvas Habilitados */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIvasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamTipoNaturalezaReceptorGralCondicionIva */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIva($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamTipoNaturalezaReceptorGralCondicionIva relacionadas */ 	
	public function deleteEkuParamTipoNaturalezaReceptorGralCondicionIvas(){
            $obs = $this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamTipoNaturalezaReceptorGralCondicionIvasCmb() EkuParamTipoNaturalezaReceptorGralCondicionIva relacionadas */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIvasCmb(){
            $c = new Criterio();
            $c->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamTipoNaturalezaReceptorGralCondicionIva::getEkuParamTipoNaturalezaReceptorGralCondicionIvasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamTipoNaturalezaReceptors (Coleccion) relacionados a traves de EkuParamTipoNaturalezaReceptorGralCondicionIva */ 	
	public function getEkuParamTipoNaturalezaReceptorsXEkuParamTipoNaturalezaReceptorGralCondicionIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamTipoNaturalezaReceptor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoNaturalezaReceptor::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA, EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ID, EkuParamTipoNaturalezaReceptor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoNaturalezaReceptor::getEkuParamTipoNaturalezaReceptors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamTipoNaturalezaReceptors relacionados a traves de EkuParamTipoNaturalezaReceptorGralCondicionIva */ 	
	public function getCantidadEkuParamTipoNaturalezaReceptorsXEkuParamTipoNaturalezaReceptorGralCondicionIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamTipoNaturalezaReceptor::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamTipoNaturalezaReceptor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_GRAL_CONDICION_IVA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoNaturalezaReceptor::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_TABLA, EkuParamTipoNaturalezaReceptorGralCondicionIva::GEN_ATTR_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ID, EkuParamTipoNaturalezaReceptor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoNaturalezaReceptor::getEkuParamTipoNaturalezaReceptors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamTipoNaturalezaReceptor (Objeto) relacionado a traves de EkuParamTipoNaturalezaReceptorGralCondicionIva */ 	
	public function getEkuParamTipoNaturalezaReceptorXEkuParamTipoNaturalezaReceptorGralCondicionIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamTipoNaturalezaReceptorsXEkuParamTipoNaturalezaReceptorGralCondicionIva($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaTipoFacturas asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoFacturasId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoFacturas() as $o){
            
                $ids[] = $o->getVtaTipoFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoFacturas asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoFacturas($ids){
            $this->deleteGralCondicionIvaVtaTipoFacturas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoFactura();
                    $o->setVtaTipoFacturaId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoFactura en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoFactura(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoNotaCreditos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoNotaCreditosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoNotaCreditos() as $o){
            
                $ids[] = $o->getVtaTipoNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoNotaCreditos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoNotaCreditos($ids){
            $this->deleteGralCondicionIvaVtaTipoNotaCreditos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoNotaCredito();
                    $o->setVtaTipoNotaCreditoId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoNotaCredito en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoNotaCredito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoNotaDebitos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoNotaDebitos() as $o){
            
                $ids[] = $o->getVtaTipoNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoNotaDebitos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoNotaDebitos($ids){
            $this->deleteGralCondicionIvaVtaTipoNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoNotaDebito();
                    $o->setVtaTipoNotaDebitoId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoNotaDebito en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoNotaDebito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoRecibos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoRecibosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoRecibos() as $o){
            
                $ids[] = $o->getVtaTipoReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoRecibos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoRecibos($ids){
            $this->deleteGralCondicionIvaVtaTipoRecibos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoRecibo();
                    $o->setVtaTipoReciboId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoRecibo en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoRecibo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoFacturas asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaPdeTipoFacturasId(){
            $ids = array();
            foreach($this->getGralCondicionIvaPdeTipoFacturas() as $o){
            
                $ids[] = $o->getPdeTipoFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoFacturas asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaPdeTipoFacturas($ids){
            $this->deleteGralCondicionIvaPdeTipoFacturas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaPdeTipoFactura();
                    $o->setPdeTipoFacturaId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoFactura en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoFactura(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoNotaCreditos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaPdeTipoNotaCreditosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaPdeTipoNotaCreditos() as $o){
            
                $ids[] = $o->getPdeTipoNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoNotaCreditos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaPdeTipoNotaCreditos($ids){
            $this->deleteGralCondicionIvaPdeTipoNotaCreditos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaPdeTipoNotaCredito();
                    $o->setPdeTipoNotaCreditoId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoNotaCredito en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoNotaCredito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoNotaDebitos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaPdeTipoNotaDebitosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaPdeTipoNotaDebitos() as $o){
            
                $ids[] = $o->getPdeTipoNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoNotaDebitos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaPdeTipoNotaDebitos($ids){
            $this->deleteGralCondicionIvaPdeTipoNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaPdeTipoNotaDebito();
                    $o->setPdeTipoNotaDebitoId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoNotaDebito en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoNotaDebito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTipoRecibos asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaPdeTipoRecibosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaPdeTipoRecibos() as $o){
            
                $ids[] = $o->getPdeTipoReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTipoRecibos asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaPdeTipoRecibos($ids){
            $this->deleteGralCondicionIvaPdeTipoRecibos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaPdeTipoRecibo();
                    $o->setPdeTipoReciboId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTipoRecibo en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoRecibo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoAjusteDebes asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoAjusteDebesId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoAjusteDebes() as $o){
            
                $ids[] = $o->getVtaTipoAjusteDebeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoAjusteDebes asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoAjusteDebes($ids){
            $this->deleteGralCondicionIvaVtaTipoAjusteDebes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoAjusteDebe();
                    $o->setVtaTipoAjusteDebeId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoAjusteDebe en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoAjusteDebe(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTipoAjusteHabers asignados a GralCondicionIva */ 	
	public function getGralCondicionIvaVtaTipoAjusteHabersId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoAjusteHabers() as $o){
            
                $ids[] = $o->getVtaTipoAjusteHaberId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTipoAjusteHabers asignados al GralCondicionIva */ 	
	public function setGralCondicionIvaVtaTipoAjusteHabers($ids){
            $this->deleteGralCondicionIvaVtaTipoAjusteHabers();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoAjusteHaber();
                    $o->setVtaTipoAjusteHaberId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTipoAjusteHaber en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoAjusteHaber(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamTipoNaturalezaReceptors asignados a GralCondicionIva */ 	
	public function getEkuParamTipoNaturalezaReceptorGralCondicionIvasId(){
            $ids = array();
            foreach($this->getEkuParamTipoNaturalezaReceptorGralCondicionIvas() as $o){
            
                $ids[] = $o->getEkuParamTipoNaturalezaReceptorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamTipoNaturalezaReceptors asignados al GralCondicionIva */ 	
	public function setEkuParamTipoNaturalezaReceptorGralCondicionIvas($ids){
            $this->deleteEkuParamTipoNaturalezaReceptorGralCondicionIvas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamTipoNaturalezaReceptorGralCondicionIva();
                    $o->setEkuParamTipoNaturalezaReceptorId($id);
                    $o->setGralCondicionIvaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamTipoNaturalezaReceptor en el alta de GralCondicionIva */ 	
	public function getAltaMostrarBloqueRelacionEkuParamTipoNaturalezaReceptorGralCondicionIva(){
            return true;
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_condicion_iva'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_condicion_iva';");
            
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

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_discriminado' */ 	
	static function getOxIvaDiscriminado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_DISCRIMINADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_discriminado' */ 	
	static function getOsxIvaDiscriminado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_DISCRIMINADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_discriminado_comprobante' */ 	
	static function getOxIvaDiscriminadoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_DISCRIMINADO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_discriminado_comprobante' */ 	
	static function getOsxIvaDiscriminadoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_DISCRIMINADO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'leyenda_comprobante' */ 	
	static function getOxLeyendaComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEYENDA_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'leyenda_comprobante' */ 	
	static function getOsxLeyendaComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEYENDA_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas(null, $criterio);
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

            $obs = self::getGralCondicionIvas($paginador, $criterio);
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

            $obs = self::getGralCondicionIvas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_condicion_iva_adm');
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
                $c->addTabla(GralCondicionIva::GEN_TABLA);
                $c->addOrden(GralCondicionIva::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_condicion_ivas = GralCondicionIva::getGralCondicionIvas(null, $c);

                $arr = array();
                foreach($gral_condicion_ivas as $gral_condicion_iva){
                    $descripcion = $gral_condicion_iva->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>