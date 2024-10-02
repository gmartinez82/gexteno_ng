<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaTipoNotaDebito
{ 
	
	const SES_PAGINACION = 'adm_vtatiponotadebito_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtatiponotadebito_paginas_registros';
	const SES_CRITERIOS = 'adm_vtatiponotadebito_criterios';
	
	const GEN_CLASE = 'VtaTipoNotaDebito';
	const GEN_TABLA = 'vta_tipo_nota_debito';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaTipoNotaDebito */ 
	const GEN_ATTR_ID = 'vta_tipo_nota_debito.id';
	const GEN_ATTR_DESCRIPCION = 'vta_tipo_nota_debito.descripcion';
	const GEN_ATTR_CODIGO_MIN = 'vta_tipo_nota_debito.codigo_min';
	const GEN_ATTR_CODIGO = 'vta_tipo_nota_debito.codigo';
	const GEN_ATTR_INFORMA = 'vta_tipo_nota_debito.informa';
	const GEN_ATTR_OBSERVACION = 'vta_tipo_nota_debito.observacion';
	const GEN_ATTR_ORDEN = 'vta_tipo_nota_debito.orden';
	const GEN_ATTR_ESTADO = 'vta_tipo_nota_debito.estado';
	const GEN_ATTR_CREADO = 'vta_tipo_nota_debito.creado';
	const GEN_ATTR_CREADO_POR = 'vta_tipo_nota_debito.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_tipo_nota_debito.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_tipo_nota_debito.modificado_por';

	/* Constantes de Atributos Min de BVtaTipoNotaDebito */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO_MIN = 'codigo_min';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_INFORMA = 'informa';
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
	

	/* Atributos de BVtaTipoNotaDebito */ 
	private $id;
	private $descripcion;
	private $codigo_min;
	private $codigo;
	private $informa;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaTipoNotaDebito */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigoMin(){ if(isset($this->codigo_min)){ return $this->codigo_min; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getInforma(){ if(isset($this->informa)){ return $this->informa; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaTipoNotaDebito */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO_MIN."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_INFORMA."
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
				$this->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
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
	public function setCodigoMin($v){ $this->codigo_min = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setInforma($v){ $this->informa = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaTipoNotaDebito();
            $o->setId($fila[VtaTipoNotaDebito::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaTipoNotaDebito */ 	
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

	/* Cambia el estado de BVtaTipoNotaDebito */ 	
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

	/* Save de BVtaTipoNotaDebito */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_INFORMA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_tipo_nota_debito_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigoMin()."'
						, '".$this->getCodigo()."'
						, ".$this->getInforma()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_tipo_nota_debito_seq')";
            
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
                 
				 ".VtaTipoNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_INFORMA." = ".$this->getInforma()."
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
						, ".self::GEN_ATTR_MIN_CODIGO_MIN."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_INFORMA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getCodigoMin()."'
						, '".$this->getCodigo()."'
						, ".$this->getInforma()."
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
                     
				 ".VtaTipoNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MIN." = '".$this->getCodigoMin()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_INFORMA." = ".$this->getInforma()."
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
            $o = new VtaTipoNotaDebito();
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

	/* Delete de BVtaTipoNotaDebito */ 	
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
	
            // se elimina la coleccion de GralCondicionIvaVtaTipoNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCondicionIvaVtaTipoNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaTipoNotaDebitoWsFeParamTipoComprobantes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaTipoNotaDebito(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaTipoNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtatiponotadebitos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtatiponotadebito = new VtaTipoNotaDebito();
                    $vtatiponotadebito->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtatiponotadebito->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtatiponotadebito->setCodigoMin($fila[self::GEN_ATTR_MIN_CODIGO_MIN]);
			$vtatiponotadebito->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtatiponotadebito->setInforma($fila[self::GEN_ATTR_MIN_INFORMA]);
			$vtatiponotadebito->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtatiponotadebito->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtatiponotadebito->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtatiponotadebito->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtatiponotadebito->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtatiponotadebito->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtatiponotadebito->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtatiponotadebitos[] = $vtatiponotadebito;
		}
		
		return $vtatiponotadebitos;
	}	
	

	/* Método getVtaTipoNotaDebitos Habilitados */ 	
	static function getVtaTipoNotaDebitosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaTipoNotaDebitos para listado de Backend */ 	
	static function getVtaTipoNotaDebitosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaTipoNotaDebitosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaTipoNotaDebitos filtrado para select */ 	
	static function getVtaTipoNotaDebitosCmbF($paginador = null, $criterio = null){
            $col = VtaTipoNotaDebito::getVtaTipoNotaDebitos($paginador, $criterio);

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
            $url = 'vta_tipo_nota_debito_adm.php';
            $url_gestion = 'vta_tipo_nota_debito_gestion.php';
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
                
            $criterio->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = GralCondicionIvaVtaTipoNotaDebito::getGralCondicionIvaVtaTipoNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCondicionIvas (Coleccion) relacionados a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getGralCondicionIvasXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIva::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA, GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, GralCondicionIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCondicionIva::getGralCondicionIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCondicionIvas relacionados a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getCantidadGralCondicionIvasXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCondicionIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCondicionIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCondicionIva::GEN_TABLA);
            $c->addRealJoin(GralCondicionIvaVtaTipoNotaDebito::GEN_TABLA, GralCondicionIvaVtaTipoNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, GralCondicionIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCondicionIva::getGralCondicionIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCondicionIva (Objeto) relacionado a traves de GralCondicionIvaVtaTipoNotaDebito */ 	
	public function getGralCondicionIvaXGralCondicionIvaVtaTipoNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCondicionIvasXGralCondicionIvaVtaTipoNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaTipoNotaDebitoWsFeParamTipoComprobantes */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaTipoNotaDebitoWsFeParamTipoComprobante::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtatiponotadebitowsfeparamtipocomprobantes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtatiponotadebitowsfeparamtipocomprobante = VtaTipoNotaDebitoWsFeParamTipoComprobante::hidratarObjeto($fila);			
                $vtatiponotadebitowsfeparamtipocomprobantes[] = $vtatiponotadebitowsfeparamtipocomprobante;
            }

            return $vtatiponotadebitowsfeparamtipocomprobantes;
	}	
	

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobantesBloque para MasInfo */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobantes Habilitados */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobante($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function deleteVtaTipoNotaDebitoWsFeParamTipoComprobantes(){
            $obs = $this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmb() VtaTipoNotaDebitoWsFeParamTipoComprobante relacionadas */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmb(){
            $c = new Criterio();
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA);
            $c->setCriterios();

            $os = VtaTipoNotaDebitoWsFeParamTipoComprobante::getVtaTipoNotaDebitoWsFeParamTipoComprobantesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoComprobantes (Coleccion) relacionados a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getWsFeParamTipoComprobantesXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, WsFeParamTipoComprobante::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoComprobantes relacionados a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getCantidadWsFeParamTipoComprobantesXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoComprobante::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
            $c->addRealJoin(VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_TABLA, VtaTipoNotaDebitoWsFeParamTipoComprobante::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, WsFeParamTipoComprobante::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoComprobante::getWsFeParamTipoComprobantes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoComprobante (Objeto) relacionado a traves de VtaTipoNotaDebitoWsFeParamTipoComprobante */ 	
	public function getWsFeParamTipoComprobanteXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoComprobantesXVtaTipoNotaDebitoWsFeParamTipoComprobante($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los GralCondicionIvas asignados a VtaTipoNotaDebito */ 	
	public function getGralCondicionIvaVtaTipoNotaDebitosId(){
            $ids = array();
            foreach($this->getGralCondicionIvaVtaTipoNotaDebitos() as $o){
            
                $ids[] = $o->getGralCondicionIvaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCondicionIvas asignados al VtaTipoNotaDebito */ 	
	public function setGralCondicionIvaVtaTipoNotaDebitos($ids){
            $this->deleteGralCondicionIvaVtaTipoNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCondicionIvaVtaTipoNotaDebito();
                    $o->setGralCondicionIvaId($id);
                    $o->setVtaTipoNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCondicionIva en el alta de VtaTipoNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoNotaDebito(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los WsFeParamTipoComprobantes asignados a VtaTipoNotaDebito */ 	
	public function getVtaTipoNotaDebitoWsFeParamTipoComprobantesId(){
            $ids = array();
            foreach($this->getVtaTipoNotaDebitoWsFeParamTipoComprobantes() as $o){
            
                $ids[] = $o->getWsFeParamTipoComprobanteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeParamTipoComprobantes asignados al VtaTipoNotaDebito */ 	
	public function setVtaTipoNotaDebitoWsFeParamTipoComprobantes($ids){
            $this->deleteVtaTipoNotaDebitoWsFeParamTipoComprobantes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaTipoNotaDebitoWsFeParamTipoComprobante();
                    $o->setWsFeParamTipoComprobanteId($id);
                    $o->setVtaTipoNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeParamTipoComprobante en el alta de VtaTipoNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionVtaTipoNotaDebitoWsFeParamTipoComprobante(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_tipo_nota_debito'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_tipo_nota_debito';");
            
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

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_min' */ 	
	static function getOxCodigoMin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_min' */ 	
	static function getOsxCodigoMin($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MIN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'informa' */ 	
	static function getOxInforma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INFORMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'informa' */ 	
	static function getOsxInforma($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INFORMA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos(null, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaTipoNotaDebitos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_tipo_nota_debito_adm');
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
                $c->addTabla(VtaTipoNotaDebito::GEN_TABLA);
                $c->addOrden(VtaTipoNotaDebito::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_tipo_nota_debitos = VtaTipoNotaDebito::getVtaTipoNotaDebitos(null, $c);

                $arr = array();
                foreach($vta_tipo_nota_debitos as $vta_tipo_nota_debito){
                    $descripcion = $vta_tipo_nota_debito->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>