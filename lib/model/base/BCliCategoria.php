<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliCategoria
{ 
	
	const SES_PAGINACION = 'adm_clicategoria_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_clicategoria_paginas_registros';
	const SES_CRITERIOS = 'adm_clicategoria_criterios';
	
	const GEN_CLASE = 'CliCategoria';
	const GEN_TABLA = 'cli_categoria';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliCategoria */ 
	const GEN_ATTR_ID = 'cli_categoria.id';
	const GEN_ATTR_DESCRIPCION = 'cli_categoria.descripcion';
	const GEN_ATTR_CODIGO = 'cli_categoria.codigo';
	const GEN_ATTR_OBSERVACION = 'cli_categoria.observacion';
	const GEN_ATTR_ORDEN = 'cli_categoria.orden';
	const GEN_ATTR_ESTADO = 'cli_categoria.estado';
	const GEN_ATTR_CREADO = 'cli_categoria.creado';
	const GEN_ATTR_CREADO_POR = 'cli_categoria.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_categoria.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_categoria.modificado_por';

	/* Constantes de Atributos Min de BCliCategoria */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
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
	

	/* Atributos de BCliCategoria */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCliCategoria */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCliCategoria */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CliCategoria();
            $o->setId($fila[CliCategoria::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
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

	/* Control de BCliCategoria */ 	
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

	/* Cambia el estado de BCliCategoria */ 	
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

	/* Save de BCliCategoria */ 	
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
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cli_categoria_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cli_categoria_seq')";
            
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
                 
				 ".CliCategoria::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
                     
				 ".CliCategoria::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
            $o = new CliCategoria();
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

	/* Delete de BCliCategoria */ 	
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
	
            // se elimina la coleccion de CliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCategoriaInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCategoriaInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCategoriaVtaDescuentoFinancieros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCategoriaVtaDescuentoFinanciero::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCategoriaVtaDescuentoFinancieros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCategoriaGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCategoriaGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliSubcategorias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliSubcategorias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCliCategoria(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliCategorias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliCategoria::setAplicarFiltrosDeAlcance($criterio);

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
	
		$clicategorias = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $clicategoria = new CliCategoria();
                    $clicategoria->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $clicategoria->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$clicategoria->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$clicategoria->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$clicategoria->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$clicategoria->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$clicategoria->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$clicategoria->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$clicategoria->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$clicategoria->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $clicategorias[] = $clicategoria;
		}
		
		return $clicategorias;
	}	
	

	/* Método getCliCategorias Habilitados */ 	
	static function getCliCategoriasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliCategoria::getCliCategorias($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliCategorias para listado de Backend */ 	
	static function getCliCategoriasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliCategoria::getCliCategorias($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliCategoriasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliCategoria::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliCategoria::getCliCategorias($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliCategorias filtrado para select */ 	
	static function getCliCategoriasCmbF($paginador = null, $criterio = null){
            $col = CliCategoria::getCliCategorias($paginador, $criterio);

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
            $url = 'cli_categoria_adm.php';
            $url_gestion = 'cli_categoria_gestion.php';
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
                
            $criterio->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getCliCategoriaInsTipoListaPrecios */ 	
	public function getCliCategoriaInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCategoriaInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCategoriaInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCategoriaInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicategoriainstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicategoriainstipolistaprecio = CliCategoriaInsTipoListaPrecio::hidratarObjeto($fila);			
                $clicategoriainstipolistaprecios[] = $clicategoriainstipolistaprecio;
            }

            return $clicategoriainstipolistaprecios;
	}	
	

	/* Método getCliCategoriaInsTipoListaPreciosBloque para MasInfo */ 	
	public function getCliCategoriaInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCategoriaInsTipoListaPrecios Habilitados */ 	
	public function getCliCategoriaInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCategoriaInsTipoListaPrecio */ 	
	public function getCliCategoriaInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCategoriaInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCategoriaInsTipoListaPrecio relacionadas */ 	
	public function deleteCliCategoriaInsTipoListaPrecios(){
            $obs = $this->getCliCategoriaInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCategoriaInsTipoListaPreciosCmb() CliCategoriaInsTipoListaPrecio relacionadas */ 	
	public function getCliCategoriaInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoriaInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = CliCategoriaInsTipoListaPrecio::getCliCategoriaInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getInsTipoListaPreciosXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(CliCategoriaInsTipoListaPrecio::GEN_TABLA, CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getCantidadInsTipoListaPreciosXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaInsTipoListaPrecio::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(CliCategoriaInsTipoListaPrecio::GEN_TABLA, CliCategoriaInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de CliCategoriaInsTipoListaPrecio */ 	
	public function getInsTipoListaPrecioXCliCategoriaInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXCliCategoriaInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCategoriaVtaDescuentoFinancieros */ 	
	public function getCliCategoriaVtaDescuentoFinancieros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCategoriaVtaDescuentoFinanciero::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCategoriaVtaDescuentoFinanciero::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCategoriaVtaDescuentoFinanciero::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCategoriaVtaDescuentoFinanciero::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicategoriavtadescuentofinancieros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicategoriavtadescuentofinanciero = CliCategoriaVtaDescuentoFinanciero::hidratarObjeto($fila);			
                $clicategoriavtadescuentofinancieros[] = $clicategoriavtadescuentofinanciero;
            }

            return $clicategoriavtadescuentofinancieros;
	}	
	

	/* Método getCliCategoriaVtaDescuentoFinancierosBloque para MasInfo */ 	
	public function getCliCategoriaVtaDescuentoFinancierosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCategoriaVtaDescuentoFinancieros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCategoriaVtaDescuentoFinancieros Habilitados */ 	
	public function getCliCategoriaVtaDescuentoFinancierosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCategoriaVtaDescuentoFinancieros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCategoriaVtaDescuentoFinanciero */ 	
	public function getCliCategoriaVtaDescuentoFinanciero($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCategoriaVtaDescuentoFinancieros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCategoriaVtaDescuentoFinanciero relacionadas */ 	
	public function deleteCliCategoriaVtaDescuentoFinancieros(){
            $obs = $this->getCliCategoriaVtaDescuentoFinancieros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCategoriaVtaDescuentoFinancierosCmb() CliCategoriaVtaDescuentoFinanciero relacionadas */ 	
	public function getCliCategoriaVtaDescuentoFinancierosCmb(){
            $c = new Criterio();
            $c->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoriaVtaDescuentoFinanciero::GEN_TABLA);
            $c->setCriterios();

            $os = CliCategoriaVtaDescuentoFinanciero::getCliCategoriaVtaDescuentoFinancierosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaDescuentoFinancieros (Coleccion) relacionados a traves de CliCategoriaVtaDescuentoFinanciero */ 	
	public function getVtaDescuentoFinancierosXCliCategoriaVtaDescuentoFinanciero($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaDescuentoFinanciero::GEN_TABLA);
            $c->addRealJoin(CliCategoriaVtaDescuentoFinanciero::GEN_TABLA, CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID, VtaDescuentoFinanciero::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaDescuentoFinanciero::getVtaDescuentoFinancieros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaDescuentoFinancieros relacionados a traves de CliCategoriaVtaDescuentoFinanciero */ 	
	public function getCantidadVtaDescuentoFinancierosXCliCategoriaVtaDescuentoFinanciero($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaDescuentoFinanciero::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaDescuentoFinanciero::GEN_TABLA);
            $c->addRealJoin(CliCategoriaVtaDescuentoFinanciero::GEN_TABLA, CliCategoriaVtaDescuentoFinanciero::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID, VtaDescuentoFinanciero::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaDescuentoFinanciero::getVtaDescuentoFinancieros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaDescuentoFinanciero (Objeto) relacionado a traves de CliCategoriaVtaDescuentoFinanciero */ 	
	public function getVtaDescuentoFinancieroXCliCategoriaVtaDescuentoFinanciero($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaDescuentoFinancierosXCliCategoriaVtaDescuentoFinanciero($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCategoriaGralFpFormaPagos */ 	
	public function getCliCategoriaGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCategoriaGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCategoriaGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCategoriaGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCategoriaGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicategoriagralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicategoriagralfpformapago = CliCategoriaGralFpFormaPago::hidratarObjeto($fila);			
                $clicategoriagralfpformapagos[] = $clicategoriagralfpformapago;
            }

            return $clicategoriagralfpformapagos;
	}	
	

	/* Método getCliCategoriaGralFpFormaPagosBloque para MasInfo */ 	
	public function getCliCategoriaGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCategoriaGralFpFormaPagos Habilitados */ 	
	public function getCliCategoriaGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCategoriaGralFpFormaPago */ 	
	public function getCliCategoriaGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCategoriaGralFpFormaPago relacionadas */ 	
	public function deleteCliCategoriaGralFpFormaPagos(){
            $obs = $this->getCliCategoriaGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCategoriaGralFpFormaPagosCmb() CliCategoriaGralFpFormaPago relacionadas */ 	
	public function getCliCategoriaGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = CliCategoriaGralFpFormaPago::getCliCategoriaGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de CliCategoriaGralFpFormaPago */ 	
	public function getGralFpFormaPagosXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(CliCategoriaGralFpFormaPago::GEN_TABLA, CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de CliCategoriaGralFpFormaPago */ 	
	public function getCantidadGralFpFormaPagosXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(CliCategoriaGralFpFormaPago::GEN_TABLA, CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de CliCategoriaGralFpFormaPago */ 	
	public function getGralFpFormaPagoXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXCliCategoriaGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliSubcategorias */ 	
	public function getCliSubcategorias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliSubcategoria::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliSubcategoria::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliSubcategoria::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliSubcategoria::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliSubcategoria::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliSubcategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliSubcategoria::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliSubcategoria::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clisubcategorias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clisubcategoria = CliSubcategoria::hidratarObjeto($fila);			
                $clisubcategorias[] = $clisubcategoria;
            }

            return $clisubcategorias;
	}	
	

	/* Método getCliSubcategoriasBloque para MasInfo */ 	
	public function getCliSubcategoriasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliSubcategorias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliSubcategorias Habilitados */ 	
	public function getCliSubcategoriasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliSubcategorias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliSubcategoria */ 	
	public function getCliSubcategoria($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliSubcategorias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliSubcategoria relacionadas */ 	
	public function deleteCliSubcategorias(){
            $obs = $this->getCliSubcategorias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliSubcategoriasCmb() CliSubcategoria relacionadas */ 	
	public function getCliSubcategoriasCmb(){
            $c = new Criterio();
            $c->add(CliSubcategoria::GEN_ATTR_CLI_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->setCriterios();

            $os = CliSubcategoria::getCliSubcategoriasCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna una coleccion de IDs de los InsTipoListaPrecios asignados a CliCategoria */ 	
	public function getCliCategoriaInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getCliCategoriaInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getInsTipoListaPrecioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsTipoListaPrecios asignados al CliCategoria */ 	
	public function setCliCategoriaInsTipoListaPrecios($ids){
            $this->deleteCliCategoriaInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliCategoriaInsTipoListaPrecio();
                    $o->setInsTipoListaPrecioId($id);
                    $o->setCliCategoriaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsTipoListaPrecio en el alta de CliCategoria */ 	
	public function getAltaMostrarBloqueRelacionCliCategoriaInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaDescuentoFinancieros asignados a CliCategoria */ 	
	public function getCliCategoriaVtaDescuentoFinancierosId(){
            $ids = array();
            foreach($this->getCliCategoriaVtaDescuentoFinancieros() as $o){
            
                $ids[] = $o->getVtaDescuentoFinancieroId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaDescuentoFinancieros asignados al CliCategoria */ 	
	public function setCliCategoriaVtaDescuentoFinancieros($ids){
            $this->deleteCliCategoriaVtaDescuentoFinancieros();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliCategoriaVtaDescuentoFinanciero();
                    $o->setVtaDescuentoFinancieroId($id);
                    $o->setCliCategoriaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaDescuentoFinanciero en el alta de CliCategoria */ 	
	public function getAltaMostrarBloqueRelacionCliCategoriaVtaDescuentoFinanciero(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralFpFormaPagos asignados a CliCategoria */ 	
	public function getCliCategoriaGralFpFormaPagosId(){
            $ids = array();
            foreach($this->getCliCategoriaGralFpFormaPagos() as $o){
            
                $ids[] = $o->getGralFpFormaPagoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralFpFormaPagos asignados al CliCategoria */ 	
	public function setCliCategoriaGralFpFormaPagos($ids){
            $this->deleteCliCategoriaGralFpFormaPagos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliCategoriaGralFpFormaPago();
                    $o->setGralFpFormaPagoId($id);
                    $o->setCliCategoriaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralFpFormaPago en el alta de CliCategoria */ 	
	public function getAltaMostrarBloqueRelacionCliCategoriaGralFpFormaPago(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_categoria'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_categoria';");
            
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

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias(null, $criterio);
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

            $obs = self::getCliCategorias($paginador, $criterio);
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

            $obs = self::getCliCategorias($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_categoria_adm');
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
                $c->addTabla(CliCategoria::GEN_TABLA);
                $c->addOrden(CliCategoria::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_categorias = CliCategoria::getCliCategorias(null, $c);

                $arr = array();
                foreach($cli_categorias as $cli_categoria){
                    $descripcion = $cli_categoria->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>