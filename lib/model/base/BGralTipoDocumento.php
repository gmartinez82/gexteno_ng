<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralTipoDocumento
{ 
	
	const SES_PAGINACION = 'adm_graltipodocumento_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_graltipodocumento_paginas_registros';
	const SES_CRITERIOS = 'adm_graltipodocumento_criterios';
	
	const GEN_CLASE = 'GralTipoDocumento';
	const GEN_TABLA = 'gral_tipo_documento';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralTipoDocumento */ 
	const GEN_ATTR_ID = 'gral_tipo_documento.id';
	const GEN_ATTR_DESCRIPCION = 'gral_tipo_documento.descripcion';
	const GEN_ATTR_CODIGO = 'gral_tipo_documento.codigo';
	const GEN_ATTR_FISCAL = 'gral_tipo_documento.fiscal';
	const GEN_ATTR_OBSERVACION = 'gral_tipo_documento.observacion';
	const GEN_ATTR_ORDEN = 'gral_tipo_documento.orden';
	const GEN_ATTR_ESTADO = 'gral_tipo_documento.estado';
	const GEN_ATTR_CREADO = 'gral_tipo_documento.creado';
	const GEN_ATTR_CREADO_POR = 'gral_tipo_documento.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_tipo_documento.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_tipo_documento.modificado_por';

	/* Constantes de Atributos Min de BGralTipoDocumento */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_FISCAL = 'fiscal';
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
	

	/* Atributos de BGralTipoDocumento */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $fiscal;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralTipoDocumento */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getFiscal(){ if(isset($this->fiscal)){ return $this->fiscal; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralTipoDocumento */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_FISCAL."
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
				$this->setFiscal($fila[self::GEN_ATTR_MIN_FISCAL]);
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
	public function setFiscal($v){ $this->fiscal = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralTipoDocumento();
            $o->setId($fila[GralTipoDocumento::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setFiscal($fila[self::GEN_ATTR_MIN_FISCAL]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralTipoDocumento */ 	
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

	/* Cambia el estado de BGralTipoDocumento */ 	
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

	/* Save de BGralTipoDocumento */ 	
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
						, ".self::GEN_ATTR_MIN_FISCAL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_tipo_documento_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getFiscal()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_tipo_documento_seq')";
            
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
                 
				 ".GralTipoDocumento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FISCAL." = ".$this->getFiscal()."
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
						, ".self::GEN_ATTR_MIN_FISCAL."
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
						, ".$this->getFiscal()."
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
                     
				 ".GralTipoDocumento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FISCAL." = ".$this->getFiscal()."
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
            $o = new GralTipoDocumento();
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

	/* Delete de BGralTipoDocumento */ 	
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
	
            // se elimina la coleccion de GralTipoDocumentoWsFeParamTipoDocumentos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralTipoDocumentoWsFeParamTipoDocumentos(null, $c) as $o){
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
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamTipoDocumentoGralTipoDocumentos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamTipoDocumentoGralTipoDocumentos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralTipoDocumento(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralTipoDocumentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralTipoDocumento::setAplicarFiltrosDeAlcance($criterio);

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
	
		$graltipodocumentos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $graltipodocumento = new GralTipoDocumento();
                    $graltipodocumento->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $graltipodocumento->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$graltipodocumento->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$graltipodocumento->setFiscal($fila[self::GEN_ATTR_MIN_FISCAL]);
			$graltipodocumento->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$graltipodocumento->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$graltipodocumento->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$graltipodocumento->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$graltipodocumento->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$graltipodocumento->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$graltipodocumento->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $graltipodocumentos[] = $graltipodocumento;
		}
		
		return $graltipodocumentos;
	}	
	

	/* Método getGralTipoDocumentos Habilitados */ 	
	static function getGralTipoDocumentosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralTipoDocumento::getGralTipoDocumentos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralTipoDocumentos para listado de Backend */ 	
	static function getGralTipoDocumentosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralTipoDocumento::getGralTipoDocumentos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralTipoDocumentosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralTipoDocumento::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralTipoDocumento::getGralTipoDocumentos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralTipoDocumentos filtrado para select */ 	
	static function getGralTipoDocumentosCmbF($paginador = null, $criterio = null){
            $col = GralTipoDocumento::getGralTipoDocumentos($paginador, $criterio);

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
            $url = 'gral_tipo_documento_adm.php';
            $url_gestion = 'gral_tipo_documento_gestion.php';
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
	

	/* Metodo getGralTipoDocumentoWsFeParamTipoDocumentos */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralTipoDocumentoWsFeParamTipoDocumento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralTipoDocumentoWsFeParamTipoDocumento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $graltipodocumentowsfeparamtipodocumentos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $graltipodocumentowsfeparamtipodocumento = GralTipoDocumentoWsFeParamTipoDocumento::hidratarObjeto($fila);			
                $graltipodocumentowsfeparamtipodocumentos[] = $graltipodocumentowsfeparamtipodocumento;
            }

            return $graltipodocumentowsfeparamtipodocumentos;
	}	
	

	/* Método getGralTipoDocumentoWsFeParamTipoDocumentosBloque para MasInfo */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumentosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralTipoDocumentoWsFeParamTipoDocumentos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralTipoDocumentoWsFeParamTipoDocumentos Habilitados */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumentosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralTipoDocumentoWsFeParamTipoDocumentos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralTipoDocumentoWsFeParamTipoDocumento */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralTipoDocumentoWsFeParamTipoDocumentos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralTipoDocumentoWsFeParamTipoDocumento relacionadas */ 	
	public function deleteGralTipoDocumentoWsFeParamTipoDocumentos(){
            $obs = $this->getGralTipoDocumentoWsFeParamTipoDocumentos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralTipoDocumentoWsFeParamTipoDocumentosCmb() GralTipoDocumentoWsFeParamTipoDocumento relacionadas */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumentosCmb(){
            $c = new Criterio();
            $c->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA);
            $c->setCriterios();

            $os = GralTipoDocumentoWsFeParamTipoDocumento::getGralTipoDocumentoWsFeParamTipoDocumentosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoDocumentos (Coleccion) relacionados a traves de GralTipoDocumentoWsFeParamTipoDocumento */ 	
	public function getWsFeParamTipoDocumentosXGralTipoDocumentoWsFeParamTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoDocumento::GEN_TABLA);
            $c->addRealJoin(GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA, GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID, WsFeParamTipoDocumento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoDocumento::getWsFeParamTipoDocumentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoDocumentos relacionados a traves de GralTipoDocumentoWsFeParamTipoDocumento */ 	
	public function getCantidadWsFeParamTipoDocumentosXGralTipoDocumentoWsFeParamTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoDocumento::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoDocumento::GEN_TABLA);
            $c->addRealJoin(GralTipoDocumentoWsFeParamTipoDocumento::GEN_TABLA, GralTipoDocumentoWsFeParamTipoDocumento::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID, WsFeParamTipoDocumento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoDocumento::getWsFeParamTipoDocumentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoDocumento (Objeto) relacionado a traves de GralTipoDocumentoWsFeParamTipoDocumento */ 	
	public function getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoDocumentosXGralTipoDocumentoWsFeParamTipoDocumento($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaNotaCredito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaRemitos */ 	
	public function getVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremito = VtaRemito::hidratarObjeto($fila);			
                $vtaremitos[] = $vtaremito;
            }

            return $vtaremitos;
	}	
	

	/* Método getVtaRemitosBloque para MasInfo */ 	
	public function getVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitos Habilitados */ 	
	public function getVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemito */ 	
	public function getVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemito relacionadas */ 	
	public function deleteVtaRemitos(){
            $obs = $this->getVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitosCmb() VtaRemito relacionadas */ 	
	public function getVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaRemito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemito */ 	
	public function getCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemito */ 	
	public function getCantidadCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemito */ 	
	public function getCliClienteXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaRemitoAjustes */ 	
	public function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajuste = VtaRemitoAjuste::hidratarObjeto($fila);			
                $vtaremitoajustes[] = $vtaremitoajuste;
            }

            return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjustes Habilitados */ 	
	public function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjuste */ 	
	public function getVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjuste relacionadas */ 	
	public function deleteVtaRemitoAjustes(){
            $obs = $this->getVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjustesCmb() VtaRemitoAjuste relacionadas */ 	
	public function getVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemitoAjuste */ 	
	public function getCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemitoAjuste */ 	
	public function getCantidadCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemitoAjuste */ 	
	public function getCliClienteXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getEkuParamTipoDocumentoGralTipoDocumentos */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamTipoDocumentoGralTipoDocumento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamTipoDocumentoGralTipoDocumento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamtipodocumentograltipodocumentos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamtipodocumentograltipodocumento = EkuParamTipoDocumentoGralTipoDocumento::hidratarObjeto($fila);			
                $ekuparamtipodocumentograltipodocumentos[] = $ekuparamtipodocumentograltipodocumento;
            }

            return $ekuparamtipodocumentograltipodocumentos;
	}	
	

	/* Método getEkuParamTipoDocumentoGralTipoDocumentosBloque para MasInfo */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumentosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamTipoDocumentoGralTipoDocumentos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamTipoDocumentoGralTipoDocumentos Habilitados */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumentosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamTipoDocumentoGralTipoDocumentos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamTipoDocumentoGralTipoDocumento */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamTipoDocumentoGralTipoDocumentos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamTipoDocumentoGralTipoDocumento relacionadas */ 	
	public function deleteEkuParamTipoDocumentoGralTipoDocumentos(){
            $obs = $this->getEkuParamTipoDocumentoGralTipoDocumentos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamTipoDocumentoGralTipoDocumentosCmb() EkuParamTipoDocumentoGralTipoDocumento relacionadas */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumentosCmb(){
            $c = new Criterio();
            $c->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamTipoDocumentoGralTipoDocumento::getEkuParamTipoDocumentoGralTipoDocumentosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamTipoDocumentos (Coleccion) relacionados a traves de EkuParamTipoDocumentoGralTipoDocumento */ 	
	public function getEkuParamTipoDocumentosXEkuParamTipoDocumentoGralTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoDocumento::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA, EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_EKU_PARAM_TIPO_DOCUMENTO_ID, EkuParamTipoDocumento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoDocumento::getEkuParamTipoDocumentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamTipoDocumentos relacionados a traves de EkuParamTipoDocumentoGralTipoDocumento */ 	
	public function getCantidadEkuParamTipoDocumentosXEkuParamTipoDocumentoGralTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamTipoDocumento::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoDocumento::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoDocumentoGralTipoDocumento::GEN_TABLA, EkuParamTipoDocumentoGralTipoDocumento::GEN_ATTR_EKU_PARAM_TIPO_DOCUMENTO_ID, EkuParamTipoDocumento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoDocumento::getEkuParamTipoDocumentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamTipoDocumento (Objeto) relacionado a traves de EkuParamTipoDocumentoGralTipoDocumento */ 	
	public function getEkuParamTipoDocumentoXEkuParamTipoDocumentoGralTipoDocumento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamTipoDocumentosXEkuParamTipoDocumentoGralTipoDocumento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerPersonas */ 	
	public function getPerPersonas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersona::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersona::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersona::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerPersona::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersona::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersona::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersona = PerPersona::hidratarObjeto($fila);			
                $perpersonas[] = $perpersona;
            }

            return $perpersonas;
	}	
	

	/* Método getPerPersonasBloque para MasInfo */ 	
	public function getPerPersonasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonas Habilitados */ 	
	public function getPerPersonasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersona */ 	
	public function getPerPersona($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersona relacionadas */ 	
	public function deletePerPersonas(){
            $obs = $this->getPerPersonas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonasCmb() PerPersona relacionadas */ 	
	public function getPerPersonasCmb(){
            $c = new Criterio();
            $c->add(PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersona::getPerPersonasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEmpresas (Coleccion) relacionados a traves de PerPersona */ 	
	public function getGralEmpresasXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerPersona::GEN_TABLA, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEmpresas relacionados a traves de PerPersona */ 	
	public function getCantidadGralEmpresasXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEmpresa::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerPersona::GEN_TABLA, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEmpresa (Objeto) relacionado a traves de PerPersona */ 	
	public function getGralEmpresaXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEmpresasXPerPersona($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeParamTipoDocumentos asignados a GralTipoDocumento */ 	
	public function getGralTipoDocumentoWsFeParamTipoDocumentosId(){
            $ids = array();
            foreach($this->getGralTipoDocumentoWsFeParamTipoDocumentos() as $o){
            
                $ids[] = $o->getWsFeParamTipoDocumentoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamTipoDocumentos asignados al GralTipoDocumento */ 	
	public function setGralTipoDocumentoWsFeParamTipoDocumentos($ids){
            $this->deleteGralTipoDocumentoWsFeParamTipoDocumentos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralTipoDocumentoWsFeParamTipoDocumento();
                    $o->setWsFeParamTipoDocumentoId($id);
                    $o->setGralTipoDocumentoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamTipoDocumento en el alta de GralTipoDocumento */ 	
	public function getAltaMostrarBloqueRelacionGralTipoDocumentoWsFeParamTipoDocumento(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamTipoDocumentos asignados a GralTipoDocumento */ 	
	public function getEkuParamTipoDocumentoGralTipoDocumentosId(){
            $ids = array();
            foreach($this->getEkuParamTipoDocumentoGralTipoDocumentos() as $o){
            
                $ids[] = $o->getEkuParamTipoDocumentoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamTipoDocumentos asignados al GralTipoDocumento */ 	
	public function setEkuParamTipoDocumentoGralTipoDocumentos($ids){
            $this->deleteEkuParamTipoDocumentoGralTipoDocumentos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamTipoDocumentoGralTipoDocumento();
                    $o->setEkuParamTipoDocumentoId($id);
                    $o->setGralTipoDocumentoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamTipoDocumento en el alta de GralTipoDocumento */ 	
	public function getAltaMostrarBloqueRelacionEkuParamTipoDocumentoGralTipoDocumento(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_tipo_documento'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_tipo_documento';");
            
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

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fiscal' */ 	
	static function getOxFiscal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FISCAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fiscal' */ 	
	static function getOsxFiscal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FISCAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos(null, $criterio);
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

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
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

            $obs = self::getGralTipoDocumentos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_tipo_documento_adm');
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
                $c->addTabla(GralTipoDocumento::GEN_TABLA);
                $c->addOrden(GralTipoDocumento::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_tipo_documentos = GralTipoDocumento::getGralTipoDocumentos(null, $c);

                $arr = array();
                foreach($gral_tipo_documentos as $gral_tipo_documento){
                    $descripcion = $gral_tipo_documento->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>