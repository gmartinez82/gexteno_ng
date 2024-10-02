<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsMarca
{ 
	
	const SES_PAGINACION = 'adm_insmarca_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insmarca_paginas_registros';
	const SES_CRITERIOS = 'adm_insmarca_criterios';
	
	const GEN_CLASE = 'InsMarca';
	const GEN_TABLA = 'ins_marca';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsMarca */ 
	const GEN_ATTR_ID = 'ins_marca.id';
	const GEN_ATTR_DESCRIPCION = 'ins_marca.descripcion';
	const GEN_ATTR_PUBLICA = 'ins_marca.publica';
	const GEN_ATTR_RELEVANCIA = 'ins_marca.relevancia';
	const GEN_ATTR_CODIGO = 'ins_marca.codigo';
	const GEN_ATTR_OBSERVACION = 'ins_marca.observacion';
	const GEN_ATTR_ORDEN = 'ins_marca.orden';
	const GEN_ATTR_ESTADO = 'ins_marca.estado';
	const GEN_ATTR_CREADO = 'ins_marca.creado';
	const GEN_ATTR_CREADO_POR = 'ins_marca.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_marca.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_marca.modificado_por';

	/* Constantes de Atributos Min de BInsMarca */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PUBLICA = 'publica';
	const GEN_ATTR_MIN_RELEVANCIA = 'relevancia';
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
	

	/* Atributos de BInsMarca */ 
	private $id;
	private $descripcion;
	private $publica;
	private $relevancia;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsMarca */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPublica(){ if(isset($this->publica)){ return $this->publica; }else{ return 0; } }
	public function getRelevancia(){ if(isset($this->relevancia)){ return $this->relevancia; }else{ return 1; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsMarca */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PUBLICA."
				, ".self::GEN_ATTR_RELEVANCIA."
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
				$this->setPublica($fila[self::GEN_ATTR_MIN_PUBLICA]);
				$this->setRelevancia($fila[self::GEN_ATTR_MIN_RELEVANCIA]);
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
	public function setPublica($v){ $this->publica = $v; }
	public function setRelevancia($v){ $this->relevancia = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsMarca();
            $o->setId($fila[InsMarca::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPublica($fila[self::GEN_ATTR_MIN_PUBLICA]);
			$o->setRelevancia($fila[self::GEN_ATTR_MIN_RELEVANCIA]);
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

	/* Control de BInsMarca */ 	
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

	/* Cambia el estado de BInsMarca */ 	
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

	/* Save de BInsMarca */ 	
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
						, ".self::GEN_ATTR_MIN_PUBLICA."
						, ".self::GEN_ATTR_MIN_RELEVANCIA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_marca_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPublica()."
						, ".$this->getRelevancia()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_marca_seq')";
            
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
                 
				 ".InsMarca::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PUBLICA." = ".$this->getPublica()."
						, ".self::GEN_ATTR_MIN_RELEVANCIA." = ".$this->getRelevancia()."
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
						, ".self::GEN_ATTR_MIN_PUBLICA."
						, ".self::GEN_ATTR_MIN_RELEVANCIA."
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
						, ".$this->getPublica()."
						, ".$this->getRelevancia()."
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
                     
				 ".InsMarca::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PUBLICA." = ".$this->getPublica()."
						, ".self::GEN_ATTR_MIN_RELEVANCIA." = ".$this->getRelevancia()."
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
            $o = new InsMarca();
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

	/* Delete de BInsMarca */ 	
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
	
            // se elimina la coleccion de InsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsMarcaImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsMarcaImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsMarcaImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsCategoriaInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsCategoriaInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsCategoriaInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsMatrizs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsMatriz::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsMatrizs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedorInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedorInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedorInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvImportacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvImportacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de MlValueInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(MlValueInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getMlValueInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CatCatalogos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CatCatalogo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCatCatalogos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsMarca(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsMarca::setAplicarFiltrosDeAlcance($criterio);

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
	
		$insmarcas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insmarca = new InsMarca();
                    $insmarca->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insmarca->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$insmarca->setPublica($fila[self::GEN_ATTR_MIN_PUBLICA]);
			$insmarca->setRelevancia($fila[self::GEN_ATTR_MIN_RELEVANCIA]);
			$insmarca->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$insmarca->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insmarca->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$insmarca->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$insmarca->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insmarca->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insmarca->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insmarca->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insmarcas[] = $insmarca;
		}
		
		return $insmarcas;
	}	
	

	/* Método getInsMarcas Habilitados */ 	
	static function getInsMarcasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsMarca::getInsMarcas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsMarcas para listado de Backend */ 	
	static function getInsMarcasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsMarca::getInsMarcas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsMarcasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsMarca::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsMarca::getInsMarcas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsMarcas filtrado para select */ 	
	static function getInsMarcasCmbF($paginador = null, $criterio = null){
            $col = InsMarca::getInsMarcas($paginador, $criterio);

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
            $url = 'ins_marca_adm.php';
            $url_gestion = 'ins_marca_gestion.php';
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
	

	/* Metodo getInsInsumos */ 	
	public function getInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumo = InsInsumo::hidratarObjeto($fila);			
                $insinsumos[] = $insinsumo;
            }

            return $insinsumos;
	}	
	

	/* Método getInsInsumosBloque para MasInfo */ 	
	public function getInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumos Habilitados */ 	
	public function getInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumo */ 	
	public function getInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumo relacionadas */ 	
	public function deleteInsInsumos(){
            $obs = $this->getInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumosCmb() InsInsumo relacionadas */ 	
	public function getInsInsumosCmb(){
            $c = new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsCategorias (Coleccion) relacionados a traves de InsInsumo */ 	
	public function getInsCategoriasXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsCategorias relacionados a traves de InsInsumo */ 	
	public function getCantidadInsCategoriasXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsCategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsCategoria (Objeto) relacionado a traves de InsInsumo */ 	
	public function getInsCategoriaXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsCategoriasXInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoInsMarcas */ 	
	public function getInsInsumoInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoinsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoinsmarca = InsInsumoInsMarca::hidratarObjeto($fila);			
                $insinsumoinsmarcas[] = $insinsumoinsmarca;
            }

            return $insinsumoinsmarcas;
	}	
	

	/* Método getInsInsumoInsMarcasBloque para MasInfo */ 	
	public function getInsInsumoInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoInsMarcas Habilitados */ 	
	public function getInsInsumoInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoInsMarca */ 	
	public function getInsInsumoInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoInsMarca relacionadas */ 	
	public function deleteInsInsumoInsMarcas(){
            $obs = $this->getInsInsumoInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoInsMarcasCmb() InsInsumoInsMarca relacionadas */ 	
	public function getInsInsumoInsMarcasCmb(){
            $c = new Criterio();
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoInsMarca::getInsInsumoInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoInsMarca */ 	
	public function getInsInsumosXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsMarca::GEN_TABLA, InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoInsMarca */ 	
	public function getCantidadInsInsumosXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsMarca::GEN_TABLA, InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoInsMarca */ 	
	public function getInsInsumoXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsMarcaImagens */ 	
	public function getInsMarcaImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsMarcaImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsMarcaImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsMarcaImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsMarcaImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsMarcaImagen::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsMarcaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsMarcaImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsMarcaImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insmarcaimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insmarcaimagen = InsMarcaImagen::hidratarObjeto($fila);			
                $insmarcaimagens[] = $insmarcaimagen;
            }

            return $insmarcaimagens;
	}	
	

	/* Método getInsMarcaImagensBloque para MasInfo */ 	
	public function getInsMarcaImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsMarcaImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsMarcaImagens Habilitados */ 	
	public function getInsMarcaImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsMarcaImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsMarcaImagen */ 	
	public function getInsMarcaImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsMarcaImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsMarcaImagen relacionadas */ 	
	public function deleteInsMarcaImagens(){
            $obs = $this->getInsMarcaImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsMarcaImagensCmb() InsMarcaImagen relacionadas */ 	
	public function getInsMarcaImagensCmb(){
            $c = new Criterio();
            $c->add(InsMarcaImagen::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarcaImagen::GEN_TABLA);
            $c->setCriterios();

            $os = InsMarcaImagen::getInsMarcaImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getInsCategoriaInsMarcas */ 	
	public function getInsCategoriaInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsCategoriaInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsCategoriaInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsCategoriaInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsCategoriaInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $inscategoriainsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $inscategoriainsmarca = InsCategoriaInsMarca::hidratarObjeto($fila);			
                $inscategoriainsmarcas[] = $inscategoriainsmarca;
            }

            return $inscategoriainsmarcas;
	}	
	

	/* Método getInsCategoriaInsMarcasBloque para MasInfo */ 	
	public function getInsCategoriaInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsCategoriaInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsCategoriaInsMarcas Habilitados */ 	
	public function getInsCategoriaInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsCategoriaInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsCategoriaInsMarca */ 	
	public function getInsCategoriaInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsCategoriaInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsCategoriaInsMarca relacionadas */ 	
	public function deleteInsCategoriaInsMarcas(){
            $obs = $this->getInsCategoriaInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsCategoriaInsMarcasCmb() InsCategoriaInsMarca relacionadas */ 	
	public function getInsCategoriaInsMarcasCmb(){
            $c = new Criterio();
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoriaInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = InsCategoriaInsMarca::getInsCategoriaInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsCategorias (Coleccion) relacionados a traves de InsCategoriaInsMarca */ 	
	public function getInsCategoriasXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(InsCategoriaInsMarca::GEN_TABLA, InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsCategorias relacionados a traves de InsCategoriaInsMarca */ 	
	public function getCantidadInsCategoriasXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsCategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(InsCategoriaInsMarca::GEN_TABLA, InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsCategoria (Objeto) relacionado a traves de InsCategoriaInsMarca */ 	
	public function getInsCategoriaXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsCategoriasXInsCategoriaInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsMatrizs */ 	
	public function getInsMatrizs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsMatriz::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsMatriz::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsMatriz::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsMatriz::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsMatriz::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsMatriz::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsMatriz::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsMatriz::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insmatrizs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insmatriz = InsMatriz::hidratarObjeto($fila);			
                $insmatrizs[] = $insmatriz;
            }

            return $insmatrizs;
	}	
	

	/* Método getInsMatrizsBloque para MasInfo */ 	
	public function getInsMatrizsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsMatrizs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsMatrizs Habilitados */ 	
	public function getInsMatrizsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsMatrizs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsMatriz */ 	
	public function getInsMatriz($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsMatrizs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsMatriz relacionadas */ 	
	public function deleteInsMatrizs(){
            $obs = $this->getInsMatrizs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsMatrizsCmb() InsMatriz relacionadas */ 	
	public function getInsMatrizsCmb(){
            $c = new Criterio();
            $c->add(InsMatriz::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMatriz::GEN_TABLA);
            $c->setCriterios();

            $os = InsMatriz::getInsMatrizsCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvProveedorInsMarcas */ 	
	public function getPrvProveedorInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedorInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedorInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedorInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedorInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedorinsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedorinsmarca = PrvProveedorInsMarca::hidratarObjeto($fila);			
                $prvproveedorinsmarcas[] = $prvproveedorinsmarca;
            }

            return $prvproveedorinsmarcas;
	}	
	

	/* Método getPrvProveedorInsMarcasBloque para MasInfo */ 	
	public function getPrvProveedorInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedorInsMarcas Habilitados */ 	
	public function getPrvProveedorInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedorInsMarca */ 	
	public function getPrvProveedorInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedorInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedorInsMarca relacionadas */ 	
	public function deletePrvProveedorInsMarcas(){
            $obs = $this->getPrvProveedorInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorInsMarcasCmb() PrvProveedorInsMarca relacionadas */ 	
	public function getPrvProveedorInsMarcasCmb(){
            $c = new Criterio();
            $c->add(PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedorInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedorInsMarca::getPrvProveedorInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PrvProveedorInsMarca */ 	
	public function getPrvProveedorsXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvProveedorInsMarca::GEN_TABLA, PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PrvProveedorInsMarca */ 	
	public function getCantidadPrvProveedorsXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvProveedorInsMarca::GEN_TABLA, PrvProveedorInsMarca::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PrvProveedorInsMarca */ 	
	public function getPrvProveedorXPrvProveedorInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPrvProveedorInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvInsumos */ 	
	public function getPrvInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvinsumo = PrvInsumo::hidratarObjeto($fila);			
                $prvinsumos[] = $prvinsumo;
            }

            return $prvinsumos;
	}	
	

	/* Método getPrvInsumosBloque para MasInfo */ 	
	public function getPrvInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvInsumos Habilitados */ 	
	public function getPrvInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvInsumo */ 	
	public function getPrvInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvInsumo relacionadas */ 	
	public function deletePrvInsumos(){
            $obs = $this->getPrvInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvInsumosCmb() PrvInsumo relacionadas */ 	
	public function getPrvInsumosCmb(){
            $c = new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = PrvInsumo::getPrvInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de PrvInsumo */ 	
	public function getInsInsumosXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de PrvInsumo */ 	
	public function getCantidadInsInsumosXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de PrvInsumo */ 	
	public function getInsInsumoXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXPrvInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvImportacions */ 	
	public function getPrvImportacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvImportacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvImportacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvImportacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvImportacion::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvImportacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvImportacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvimportacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvimportacion = PrvImportacion::hidratarObjeto($fila);			
                $prvimportacions[] = $prvimportacion;
            }

            return $prvimportacions;
	}	
	

	/* Método getPrvImportacionsBloque para MasInfo */ 	
	public function getPrvImportacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvImportacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvImportacions Habilitados */ 	
	public function getPrvImportacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvImportacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvImportacion */ 	
	public function getPrvImportacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvImportacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvImportacion relacionadas */ 	
	public function deletePrvImportacions(){
            $obs = $this->getPrvImportacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvImportacionsCmb() PrvImportacion relacionadas */ 	
	public function getPrvImportacionsCmb(){
            $c = new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->setCriterios();

            $os = PrvImportacion::getPrvImportacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvImportacionTipoEstados (Coleccion) relacionados a traves de PrvImportacion */ 	
	public function getPrvImportacionTipoEstadosXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacion::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacion::GEN_TABLA, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvImportacionTipoEstados relacionados a traves de PrvImportacion */ 	
	public function getCantidadPrvImportacionTipoEstadosXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvImportacionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacion::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacion::GEN_TABLA, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvImportacionTipoEstado (Objeto) relacionado a traves de PrvImportacion */ 	
	public function getPrvImportacionTipoEstadoXPrvImportacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvImportacionTipoEstadosXPrvImportacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getMlValueInsMarcas */ 	
	public function getMlValueInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(MlValueInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(MlValueInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(MlValueInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(MlValueInsMarca::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(MlValueInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(MlValueInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(MlValueInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".MlValueInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $mlvalueinsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $mlvalueinsmarca = MlValueInsMarca::hidratarObjeto($fila);			
                $mlvalueinsmarcas[] = $mlvalueinsmarca;
            }

            return $mlvalueinsmarcas;
	}	
	

	/* Método getMlValueInsMarcasBloque para MasInfo */ 	
	public function getMlValueInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getMlValueInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getMlValueInsMarcas Habilitados */ 	
	public function getMlValueInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getMlValueInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getMlValueInsMarca */ 	
	public function getMlValueInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getMlValueInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de MlValueInsMarca relacionadas */ 	
	public function deleteMlValueInsMarcas(){
            $obs = $this->getMlValueInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getMlValueInsMarcasCmb() MlValueInsMarca relacionadas */ 	
	public function getMlValueInsMarcasCmb(){
            $c = new Criterio();
            $c->add(MlValueInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlValueInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = MlValueInsMarca::getMlValueInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener MlValues (Coleccion) relacionados a traves de MlValueInsMarca */ 	
	public function getMlValuesXMlValueInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(MlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlValueInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlValueInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlValue::GEN_TABLA);
            $c->addRealJoin(MlValueInsMarca::GEN_TABLA, MlValueInsMarca::GEN_ATTR_ML_VALUE_ID, MlValue::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlValue::getMlValues($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de MlValues relacionados a traves de MlValueInsMarca */ 	
	public function getCantidadMlValuesXMlValueInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(MlValue::GEN_ATTR_ID);
            if($estado){
                $c->add(MlValue::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(MlValueInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(MlValueInsMarca::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlValue::GEN_TABLA);
            $c->addRealJoin(MlValueInsMarca::GEN_TABLA, MlValueInsMarca::GEN_ATTR_ML_VALUE_ID, MlValue::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlValue::getMlValues($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener MlValue (Objeto) relacionado a traves de MlValueInsMarca */ 	
	public function getMlValueXMlValueInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getMlValuesXMlValueInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCatCatalogos */ 	
	public function getCatCatalogos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CatCatalogo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CatCatalogo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CatCatalogo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CatCatalogo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CatCatalogo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CatCatalogo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CatCatalogo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $catcatalogos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $catcatalogo = CatCatalogo::hidratarObjeto($fila);			
                $catcatalogos[] = $catcatalogo;
            }

            return $catcatalogos;
	}	
	

	/* Método getCatCatalogosBloque para MasInfo */ 	
	public function getCatCatalogosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCatCatalogos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCatCatalogos Habilitados */ 	
	public function getCatCatalogosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCatCatalogos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCatCatalogo */ 	
	public function getCatCatalogo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCatCatalogos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CatCatalogo relacionadas */ 	
	public function deleteCatCatalogos(){
            $obs = $this->getCatCatalogos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCatCatalogosCmb() CatCatalogo relacionadas */ 	
	public function getCatCatalogosCmb(){
            $c = new Criterio();
            $c->add(CatCatalogo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatCatalogo::GEN_TABLA);
            $c->setCriterios();

            $os = CatCatalogo::getCatCatalogosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CatTipoCatalogos (Coleccion) relacionados a traves de CatCatalogo */ 	
	public function getCatTipoCatalogosXCatCatalogo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CatTipoCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CatCatalogo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatTipoCatalogo::GEN_TABLA);
            $c->addRealJoin(CatCatalogo::GEN_TABLA, CatCatalogo::GEN_ATTR_CAT_TIPO_CATALOGO_ID, CatTipoCatalogo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CatTipoCatalogo::getCatTipoCatalogos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CatTipoCatalogos relacionados a traves de CatCatalogo */ 	
	public function getCantidadCatTipoCatalogosXCatCatalogo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CatTipoCatalogo::GEN_ATTR_ID);
            if($estado){
                $c->add(CatTipoCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CatCatalogo::GEN_ATTR_INS_MARCA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CatTipoCatalogo::GEN_TABLA);
            $c->addRealJoin(CatCatalogo::GEN_TABLA, CatCatalogo::GEN_ATTR_CAT_TIPO_CATALOGO_ID, CatTipoCatalogo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CatTipoCatalogo::getCatTipoCatalogos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CatTipoCatalogo (Objeto) relacionado a traves de CatCatalogo */ 	
	public function getCatTipoCatalogoXCatCatalogo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCatTipoCatalogosXCatCatalogo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los InsCategorias asignados a InsMarca */ 	
	public function getInsCategoriaInsMarcasId(){
            $ids = array();
            foreach($this->getInsCategoriaInsMarcas() as $o){
            
                $ids[] = $o->getInsCategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsCategorias asignados al InsMarca */ 	
	public function setInsCategoriaInsMarcas($ids){
            $this->deleteInsCategoriaInsMarcas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsCategoriaInsMarca();
                    $o->setInsCategoriaId($id);
                    $o->setInsMarcaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsCategoria en el alta de InsMarca */ 	
	public function getAltaMostrarBloqueRelacionInsCategoriaInsMarca(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PrvProveedors asignados a InsMarca */ 	
	public function getPrvProveedorInsMarcasId(){
            $ids = array();
            foreach($this->getPrvProveedorInsMarcas() as $o){
            
                $ids[] = $o->getPrvProveedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvProveedors asignados al InsMarca */ 	
	public function setPrvProveedorInsMarcas($ids){
            $this->deletePrvProveedorInsMarcas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrvProveedorInsMarca();
                    $o->setPrvProveedorId($id);
                    $o->setInsMarcaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvProveedor en el alta de InsMarca */ 	
	public function getAltaMostrarBloqueRelacionPrvProveedorInsMarca(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_marca'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_marca';");
            
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

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'publica' */ 	
	static function getOxPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'publica' */ 	
	static function getOsxPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'relevancia' */ 	
	static function getOxRelevancia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RELEVANCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'relevancia' */ 	
	static function getOsxRelevancia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RELEVANCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas(null, $criterio);
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

            $obs = self::getInsMarcas($paginador, $criterio);
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

            $obs = self::getInsMarcas($paginador, $criterio);
            return $obs;
	}

	/* retorna el nombre de archivo de la imagen cuando no hay imagen */ 	
	public function getPathImagenNoImagen(){
            return Gral::getPath('path_http').'imgs/no-imagen.jpg';
	}

	/* retorna el nombre de archivo de la imagen */ 	
	public function getPathImagenPrincipal($thumb = false){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(InsMarcaImagen::GEN_TABLA);
            $c->addOrden(InsMarcaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getInsMarcaImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getInsMarcaImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(InsMarcaImagen::GEN_TABLA);
            $c->addOrden(InsMarcaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getInsMarcaImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getInsMarcaImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getInsMarcaImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(InsMarcaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(InsMarcaImagen::GEN_TABLA);
            $c->addOrden(InsMarcaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getInsMarcaImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_marca_adm');
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
                $c->addTabla(InsMarca::GEN_TABLA);
                $c->addOrden(InsMarca::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_marcas = InsMarca::getInsMarcas(null, $c);

                $arr = array();
                foreach($ins_marcas as $ins_marca){
                    $descripcion = $ins_marca->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>