<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BInsCategoria
{ 
	
	const SES_PAGINACION = 'adm_inscategoria_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_inscategoria_paginas_registros';
	const SES_CRITERIOS = 'adm_inscategoria_criterios';
	
	const GEN_CLASE = 'InsCategoria';
	const GEN_TABLA = 'ins_categoria';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_ARBOL_SEPARADOR = ' > ';

	/* Constantes de Atributos de BInsCategoria */ 
	const GEN_ATTR_ID = 'ins_categoria.id';
	const GEN_ATTR_DESCRIPCION = 'ins_categoria.descripcion';
	const GEN_ATTR_GEN_ARBOL_ID = 'ins_categoria.gen_arbol_id';
	const GEN_ATTR_INS_CATEGORIA_PADRE = 'ins_categoria.ins_categoria_padre';
	const GEN_ATTR_CODIGO = 'ins_categoria.codigo';
	const GEN_ATTR_FAMILIA_DESCRIPCION = 'ins_categoria.familia_descripcion';
	const GEN_ATTR_NIVEL = 'ins_categoria.nivel';
	const GEN_ATTR_OBSERVACION = 'ins_categoria.observacion';
	const GEN_ATTR_ORDEN = 'ins_categoria.orden';
	const GEN_ATTR_ESTADO = 'ins_categoria.estado';
	const GEN_ATTR_CREADO = 'ins_categoria.creado';
	const GEN_ATTR_CREADO_POR = 'ins_categoria.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_categoria.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_categoria.modificado_por';

	/* Constantes de Atributos Min de BInsCategoria */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GEN_ARBOL_ID = 'gen_arbol_id';
	const GEN_ATTR_MIN_INS_CATEGORIA_PADRE = 'ins_categoria_padre';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_FAMILIA_DESCRIPCION = 'familia_descripcion';
	const GEN_ATTR_MIN_NIVEL = 'nivel';
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
	

	/* Atributos de BInsCategoria */ 
	private $id;
	private $descripcion;
	private $gen_arbol_id;
	private $ins_categoria_padre;
	private $codigo;
	private $familia_descripcion;
	private $nivel;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsCategoria */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGenArbolId(){ if(isset($this->gen_arbol_id)){ return $this->gen_arbol_id; }else{ return 'null'; } }
	public function getInsCategoriaPadre(){ if(isset($this->ins_categoria_padre)){ return $this->ins_categoria_padre; }else{ return 'null'; } }
	public function getInsCategoriaPadreObj(){ if(isset($this->ins_categoria_padre)){ return InsCategoria::getOxId($this->ins_categoria_padre); }else{ return new InsCategoria(); } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getFamiliaDescripcion(){ if(isset($this->familia_descripcion)){ return $this->familia_descripcion; }else{ return ''; } }
	public function getNivel(){ if(isset($this->nivel)){ return $this->nivel; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BInsCategoria */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GEN_ARBOL_ID."
				, ".self::GEN_ATTR_INS_CATEGORIA_PADRE."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_FAMILIA_DESCRIPCION."
				, ".self::GEN_ATTR_NIVEL."
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
				$this->setGenArbolId($fila[self::GEN_ATTR_MIN_GEN_ARBOL_ID]);
				$this->setInsCategoriaPadre($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
				$this->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
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
	public function setGenArbolId($v){ $this->gen_arbol_id = $v; }
	public function setInsCategoriaPadre($v){ $this->ins_categoria_padre = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setFamiliaDescripcion($v){ $this->familia_descripcion = $v; }
	public function setNivel($v){ $this->nivel = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsCategoria();
            $o->setId($fila[InsCategoria::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGenArbolId($fila[self::GEN_ATTR_MIN_GEN_ARBOL_ID]);
			$o->setInsCategoriaPadre($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
			$o->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsCategoria */ 	
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

	/* Cambia el estado de BInsCategoria */ 	
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

	/* Save de BInsCategoria */ 	
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
						, ".self::GEN_ATTR_MIN_GEN_ARBOL_ID."
						, ".self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_NIVEL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_categoria_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGenArbolId()."
						, ".$this->getInsCategoriaPadre()."
						, '".$this->getCodigo()."'
						, '".$this->getFamiliaDescripcion()."'
						, ".$this->getNivel()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_categoria_seq')";
            
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
                 
				 ".InsCategoria::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEN_ARBOL_ID." = ".$this->getGenArbolId()."
						, ".self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE." = ".$this->getInsCategoriaPadre()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION." = '".$this->getFamiliaDescripcion()."'
						, ".self::GEN_ATTR_MIN_NIVEL." = ".$this->getNivel()."
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
						, ".self::GEN_ATTR_MIN_GEN_ARBOL_ID."
						, ".self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_NIVEL."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGenArbolId()."
						, ".$this->getInsCategoriaPadre()."
						, '".$this->getCodigo()."'
						, '".$this->getFamiliaDescripcion()."'
						, ".$this->getNivel()."
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
                     
				 ".InsCategoria::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEN_ARBOL_ID." = ".$this->getGenArbolId()."
						, ".self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE." = ".$this->getInsCategoriaPadre()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION." = '".$this->getFamiliaDescripcion()."'
						, ".self::GEN_ATTR_MIN_NIVEL." = ".$this->getNivel()."
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
            $o = new InsCategoria();
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

	/* Delete de BInsCategoria */ 	
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
            
            // se elimina la coleccion de InsCategoriaInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsCategoriaInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsCategoriaInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsCategorias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsCategoria::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsCategorias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsCategoria(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsCategorias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsCategoria::setAplicarFiltrosDeAlcance($criterio);

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
	
		$inscategorias = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $inscategoria = new InsCategoria();
                    $inscategoria->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $inscategoria->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$inscategoria->setGenArbolId($fila[self::GEN_ATTR_MIN_GEN_ARBOL_ID]);
			$inscategoria->setInsCategoriaPadre($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_PADRE]);
			$inscategoria->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$inscategoria->setFamiliaDescripcion($fila[self::GEN_ATTR_MIN_FAMILIA_DESCRIPCION]);
			$inscategoria->setNivel($fila[self::GEN_ATTR_MIN_NIVEL]);
			$inscategoria->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$inscategoria->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$inscategoria->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$inscategoria->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$inscategoria->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$inscategoria->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$inscategoria->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $inscategorias[] = $inscategoria;
		}
		
		return $inscategorias;
	}	
	

	/* Método getInsCategorias Habilitados */ 	
	static function getInsCategoriasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsCategoria::getInsCategorias($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsCategorias para listado de Backend */ 	
	static function getInsCategoriasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsCategoria::getInsCategorias($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsCategoriasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsCategoria::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsCategoria::getInsCategorias($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsCategorias filtrado para select */ 	
	static function getInsCategoriasCmbF($paginador = null, $criterio = null){
            $col = InsCategoria::getInsCategorias($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsCategorias filtrado por una coleccion de objetos foraneos de GenArbol */ 	
	static function getInsCategoriasXGenArbols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsCategoria::GEN_ATTR_GEN_ARBOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addOrden(InsCategoria::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsCategoria::getInsCategorias($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGenArbolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_categoria_adm.php';
            $url_gestion = 'ins_categoria_gestion.php';
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
                
            $criterio->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsMatrizs (Coleccion) relacionados a traves de InsInsumo */ 	
	public function getInsMatrizsXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsMatriz::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMatriz::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_INS_MATRIZ_ID, InsMatriz::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMatriz::getInsMatrizs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsMatrizs relacionados a traves de InsInsumo */ 	
	public function getCantidadInsMatrizsXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsMatriz::GEN_ATTR_ID);
            if($estado){
                $c->add(InsMatriz::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMatriz::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_INS_MATRIZ_ID, InsMatriz::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMatriz::getInsMatrizs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsMatriz (Objeto) relacionado a traves de InsInsumo */ 	
	public function getInsMatrizXInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsMatrizsXInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoriaInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = InsCategoriaInsMarca::getInsCategoriaInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsMarcas (Coleccion) relacionados a traves de InsCategoriaInsMarca */ 	
	public function getInsMarcasXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(InsCategoriaInsMarca::GEN_TABLA, InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsMarcas relacionados a traves de InsCategoriaInsMarca */ 	
	public function getCantidadInsMarcasXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsMarca::GEN_ATTR_ID);
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsCategoriaInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsCategoriaInsMarca::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(InsCategoriaInsMarca::GEN_TABLA, InsCategoriaInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsMarca (Objeto) relacionado a traves de InsCategoriaInsMarca */ 	
	public function getInsMarcaXInsCategoriaInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsMarcasXInsCategoriaInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoInsCategorias */ 	
	public function getVtaPoliticaDescuentoInsCategorias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoInsCategoria::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoInsCategoria::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoInsCategoria::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoInsCategoria::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentoinscategorias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentoinscategoria = VtaPoliticaDescuentoInsCategoria::hidratarObjeto($fila);			
                $vtapoliticadescuentoinscategorias[] = $vtapoliticadescuentoinscategoria;
            }

            return $vtapoliticadescuentoinscategorias;
	}	
	

	/* Método getVtaPoliticaDescuentoInsCategoriasBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoInsCategoriasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoInsCategorias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsCategorias Habilitados */ 	
	public function getVtaPoliticaDescuentoInsCategoriasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoInsCategorias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsCategoria */ 	
	public function getVtaPoliticaDescuentoInsCategoria($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoInsCategorias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoInsCategoria relacionadas */ 	
	public function deleteVtaPoliticaDescuentoInsCategorias(){
            $obs = $this->getVtaPoliticaDescuentoInsCategorias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoInsCategoriasCmb() VtaPoliticaDescuentoInsCategoria relacionadas */ 	
	public function getVtaPoliticaDescuentoInsCategoriasCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsCategoria::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsCategoria::getVtaPoliticaDescuentoInsCategoriasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPoliticaDescuentos (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPoliticaDescuentos relacionados a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getCantidadVtaPoliticaDescuentosXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPoliticaDescuento::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPoliticaDescuento (Objeto) relacionado a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getVtaPoliticaDescuentoXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsCategoria($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los InsMarcas asignados a InsCategoria */ 	
	public function getInsCategoriaInsMarcasId(){
            $ids = array();
            foreach($this->getInsCategoriaInsMarcas() as $o){
            
                $ids[] = $o->getInsMarcaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsMarcas asignados al InsCategoria */ 	
	public function setInsCategoriaInsMarcas($ids){
            $this->deleteInsCategoriaInsMarcas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsCategoriaInsMarca();
                    $o->setInsMarcaId($id);
                    $o->setInsCategoriaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsMarca en el alta de InsCategoria */ 	
	public function getAltaMostrarBloqueRelacionInsCategoriaInsMarca(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPoliticaDescuentos asignados a InsCategoria */ 	
	public function getVtaPoliticaDescuentoInsCategoriasId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsCategorias() as $o){
            
                $ids[] = $o->getVtaPoliticaDescuentoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPoliticaDescuentos asignados al InsCategoria */ 	
	public function setVtaPoliticaDescuentoInsCategorias($ids){
            $this->deleteVtaPoliticaDescuentoInsCategorias();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsCategoria();
                    $o->setVtaPoliticaDescuentoId($id);
                    $o->setInsCategoriaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPoliticaDescuento en el alta de InsCategoria */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsCategoria(){
            return true;
	}
	

	/* Metodo que retorna el GenArbol (Clave Foranea) */ 	
    public function getGenArbol(){
        $o = new GenArbol();
        $o->setId($this->getGenArbolId());
        return $o;			
    }

	/* Metodo que retorna el GenArbol (Clave Foranea) en Array */ 	
    public function getGenArbolEnArray(&$arr_os){
        if($this->getGenArbolId() != 'null'){
            if(isset($arr_os[$this->getGenArbolId()])){
                $o = $arr_os[$this->getGenArbolId()];
            }else{
                $o = GenArbol::getOxId($this->getGenArbolId());
                if($o){
                    $arr_os[$this->getGenArbolId()] = $o;
                }
            }
        }else{
            $o = new GenArbol();
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
            		
        if($contexto_solicitante != GenArbol::GEN_CLASE){
            if($this->getGenArbol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GenArbol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGenArbol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsCategoria::GEN_CLASE){
            if($this->getInsCategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsCategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsCategoria()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_categoria'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_categoria';");
            
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

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gen_arbol_id' */ 	
	static function getOxGenArbolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_ARBOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gen_arbol_id' */ 	
	static function getOsxGenArbolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_ARBOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_categoria_padre' */ 	
	static function getOxInsCategoriaPadre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CATEGORIA_PADRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_categoria_padre' */ 	
	static function getOsxInsCategoriaPadre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CATEGORIA_PADRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'familia_descripcion' */ 	
	static function getOxFamiliaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FAMILIA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'familia_descripcion' */ 	
	static function getOsxFamiliaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FAMILIA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nivel' */ 	
	static function getOxNivel($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NIVEL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nivel' */ 	
	static function getOsxNivel($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NIVEL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias(null, $criterio);
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

            $obs = self::getInsCategorias($paginador, $criterio);
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

            $obs = self::getInsCategorias($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_categoria_adm');
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

	/* Metodos de ARBOL */ 	
	/* Metodo que escribe el archivo XML del Arbol */
	public function wrArchivoXML($arbol){
            $fp = fopen(Gral::getPathAbs()."xml/ins_categoria/".$arbol->getCodigo().".xml","w+");

            // cabecera
            fwrite($fp, '<?xml version="1.0" encoding="utf-8" ?>
<!-- Arbol: '.$arbol->getDescripcion().' -->
<arbol>
	<clase>'.GenArbol::GEN_CLASE.'</clase>
	<tabla>'.GenArbol::GEN_TABLA.'</tabla>
	<item_clase>'.InsCategoria::GEN_CLASE.'</item_clase>
	<id>'.$arbol->getId().'</id>
' . PHP_EOL);
	
            // cuerpo
            $c = new Criterio('CRITERIO_MENU');
            $c->add(InsCategoria::GEN_ATTR_GEN_ARBOL_ID, $arbol->getId(), Criterio::IGUAL);
            $c->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE.' is null', ' and true', '');
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addOrden(InsCategoria::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $items = $this->getInsCategorias(null, $c);
            //Gral::prr();
            foreach($items as $item){
                self::wrItemXML($fp, $item);
            }

            // pie
            fwrite($fp, '</arbol>' . PHP_EOL);
            fclose($fp);
	}
	
	/* Metodo que escribe el Item XML del Arbol */
	static function wrItemXML($fp, $item){
	
            $texto = '
		<item>			
		
                    <id>' . $item->getId() . '</id>
                    <descripcion>' . $item->getDescripcion() . '</descripcion>
                    <gen_arbol_id>' . $item->getGenArbolId() . '</gen_arbol_id>
                    <ins_categoria_padre>' . $item->getInsCategoriaPadre() . '</ins_categoria_padre>
                    <codigo>' . $item->getCodigo() . '</codigo>
                    <familia_descripcion>' . $item->getFamiliaDescripcion() . '</familia_descripcion>
                    <nivel>' . $item->getNivel() . '</nivel>
                    <observacion>' . $item->getObservacion() . '</observacion>
                    <orden>' . $item->getOrden() . '</orden>
                    <estado>' . $item->getEstado() . '</estado>
                    <creado>' . $item->getCreado() . '</creado>
                    <creado_por>' . $item->getCreadoPor() . '</creado_por>
                    <modificado>' . $item->getModificado() . '</modificado>
                    <modificado_por>' . $item->getModificadoPor() . '</modificado_por>
                    <familia_descripcion>' . $item->getArbolFamiliaDescripcion() . '</familia_descripcion>
            ';		
            fwrite($fp, $texto . PHP_EOL);

            $cr_hijos = new Criterio();
            $cr_hijos->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, $item->getId(), Criterio::IGUAL);
            $cr_hijos->addTabla(InsCategoria::GEN_TABLA);
            $cr_hijos->addOrden(InsCategoria::GEN_ATTR_ORDEN, 'asc');
            $cr_hijos->setCriterios();
            $items_hijo = InsCategoria::getInsCategorias(null, $cr_hijos);

            if(!empty($items_hijo)){
                foreach($items_hijo as $item_hijo){
                    self::wrItemXML($fp, $item_hijo);
                }
            }
		
            $texto = '
                </item>';
            fwrite($fp, $texto . PHP_EOL);
	}
	
	/* Metodo que dibuja en HTML el Arbol */
	static function listarArbol($codigo = '', $caso){
            $file = Gral::getPathAbs().'/xml/ins_categoria/'.$codigo.'.xml';


            if(file_exists($file)){
                $xml = simplexml_load_file($file);
                $arbol = $xml->xpath('//arbol');
                $items = $xml->xpath('item');

                switch($caso){
                    case 'MENU':
                        foreach($items as $item){
                            self::echoItem($arbol, $item);
                        }
                    break;

                    case 'GESTION':
                        echo "<div class='raiz' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>Mueva aqui los elementos que quiera ubicar en la raiz del arbol";
                        echo " <div class='acciones' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."'  item_clase='".$arbol[0]->item_clase."'>";
                                    
                        if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_AGREGAR')){
                        echo "     <div class='accion agregar' archivo='ajax/modulos/ins_categoria/ins_categoria_alta.php'>
                                        <img src='imgs/btn_add.gif' width='22' border='0' title='Agregar Nuevo Item' />
                                    </div>";
                        }

                        echo "     

                                <div class='accion expandir-all'>
                                    <img src='imgs/icon_arbol_expandir.png' width='16' border='0' title='Expandir Arbol Completo' />
                                </div>
                                
                                <div class='accion colapsar-all'>
                                    <img src='imgs/icon_arbol_colapsar.png' width='18' border='0' title='Contraer Arbol Completo' />
                                </div>

                                <div class='accion refresh'>
                                    <img src='imgs/btn_refresh.gif' width='18' border='0' title='Regenerar Arbol' />
                                </div>
                                    
                                </div>";

                        echo "</div>";

                        echo "<ul arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>";
                        foreach($items as $item){
                                self::echoItemGestion($arbol, $item);
                        }
                        echo "</ul>";
                    break;				
                }						  

            }
	}
	
	/* Metodo que dibuja en HTML el Item del Arbol */
	static function echoItem($arbol, $item){
            if($item->estado != 1) return;

            echo "<li>";
                echo "<a title='".$item->alternativo."' href='".$item->link."'>".$item->descripcion."</a>";

            if($item->item){
                echo "<ul>";
                $items = $item->xpath('item');
                foreach($items as $item){
                    self::echoItem($arbol, $item);
                }
                echo "</ul>";
            }				
            echo "</li>";	
	}
	
	/* Metodo que dibuja en HTML Item del Arbol para Gestion */
	static function echoItemGestion($arbol, $item){
            echo "<li id='item_".$item->id."'>";
                echo "<div class='uno' id='div_item_".$item->id."' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."' item_id='".$item->id."'>";
                self::echoItemGestionDiv($arbol, $item);
                echo "</div>";

                echo "<div class='hijos' id='div_item_hijos_".$item->id."'>";
                if($item->item){
                    echo "<ul arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>";
                    $items = $item->xpath('item');
                    foreach($items as $item){
                        self::echoItemGestion($arbol, $item);
                    }
                    echo "</ul>";
                }				
                echo "</div>";
            echo "</li>";
	}
	
	/* Metodo que dibuja en HTML el DIV descriptivo del Item del Arbol */	
	static function echoItemGestionDiv($arbol, $item){
                
		echo "  <div class='arbol-acciones' arbol_tabla='".$arbol[0]->tabla."' arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."'  item_clase='".$arbol[0]->item_clase."' item_id='".$item->id."'>";
                            
                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_MODIFICAR')){
                echo "     <div class='accion modificar' archivo='ajax/modulos/ins_categoria/ins_categoria_alta.php'>
                                <img src='imgs/btn_modi.gif' width='20' border='0' title='Modificar Datos' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_ESTADO')){
                echo "     <div class='accion estado'>
                                <img src='imgs/btn_estado_".$item->estado.".gif' width='20' border='0' title='Habilitar/Deshabilitar' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_AGREGAR_HIJO')){
                echo "     <div class='accion agregar-hijo'>
                                <img src='imgs/btn_add.gif' width='22' border='0' title='Agregar Hijo' />
                            </div>";
                            }

                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_ORDENAR')){
                echo "     <div class='accion ordenar'>
                                <img src='imgs/btn_sort.png' width='20' border='0' title='Arrastre para reordenar' />
                            </div>";
                            }

                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_CAMBIAR_PADRE')){
                echo "     <div class='accion mover'>
                                <img src='imgs/btn_move.png' width='21' border='0' title='Cambiar de Padre, Arrastre hasta el nuevo Padre' />
                            </div>";
                            }
                            
                            if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ARBOL_ACCION_ELIMINAR')){
                echo "     <div class='accion eliminar'>
                                <img src='imgs/btn_elim.gif' width='21' border='0' title='Eliminar' />
                            </div>";
                            }
                            
                echo "     <div class='accion expandir-item'>
                                <img src='imgs/icon_arbol_expandir.png' width='15' border='0' title='Expandir Hijos' />
                            </div>";
                            
                echo "     <div class='accion colapsar-item'>
                                <img src='imgs/icon_arbol_colapsar.png' width='16' border='0' title='Contraer Hijos' />
                            </div>";

                echo " </div>";
                
		echo "	<div class='arbol-info'>";
				
		echo "	</div>";
                
		echo "  <div class='arbol-descripcion'>".$item->descripcion."</div>";
		echo "  <div class='arbol-familia-descripcion'>".$item->familia_descripcion."</div>";
	}
	
	/* Metodo que retorna una coleccion de los padres de acuerdo a un hijo indicado */	
	static function getArbolItemPadres($hijo, &$arr_padres){
            $o_padre = $hijo->tieneArbolItemPadre();

            $tiene_padre = false;
            if($o_padre){
                $tiene_padre = true;
            }
            if($tiene_padre){
                $arr_padres[] = $o_padre;
                //self::getArbolItemPadres($o_padre, $arr_padres);
                self::getArbolItemPadres($o_padre, $arr_padres);
            }	
	}
	
	/* Metodo que retorna la descripcion completa del item, considerando su familia completa */	
	public function getArbolFamiliaDescripcion(){
            $arr_padres = array();
            //$padres = self::getArbolItemPadres($this, $arr_padres);
            $padres = self::getArbolItemPadres($this, $arr_padres);

            krsort($arr_padres);
            $familia_descripcion = '';
            foreach($arr_padres as $padre){
                    $familia_descripcion.= $padre->getDescripcion().InsCategoria::GEN_ARBOL_SEPARADOR;
            }
            return $familia_descripcion.$this->getDescripcion();
	}
	
	/* Metodo que retorna si el item tiene padre */		
	public function tieneArbolItemPadre(){
            if($this->getInsCategoriaPadre() != 'null'){
                $o_padre = InsCategoria::getOxId($this->getInsCategoriaPadre());
                return $o_padre;
            }
            return false;
	}
	
	/* Metodo que retorna una coleccion de los Items Hijo de una Item en Particular */		
	static function getArbolItemHijos($padre_id = null){
		$c = new Criterio();
		if(is_null($padre_id)){
                    $c->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, 'and true', Criterio::IS_NULL);
		}else{
                    $c->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, $padre_id, Criterio::IGUAL);
		}
		$c->addOrden(InsCategoria::GEN_ATTR_ORDEN, 'asc');
		$c->addTabla(InsCategoria::GEN_TABLA);
		$c->setCriterios();

		$os_hijos = self::getInsCategorias(null, $c);
		return $os_hijos;
	}
	
	/* metodo que va cargando en la coleccion hijos todos los hijos a partir de un padre */
	//static function getArbolColeccionAbsolutaHijosDependientes($hijos, $padre_id = null){
	static function getArbolColeccionAbsolutaHijosDependientes($hijos, $padre_id = null){
            $hijos_propios = self::getArbolItemHijos($padre_id);
            foreach($hijos_propios as $hijo){
                if($hijo){
                    $hijos[] = $hijo;
                    self::getArbolColeccionAbsolutaHijosDependientes($hijos, $hijo->getId());
                }
            }
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
                $c->addTabla(InsCategoria::GEN_TABLA);
                $c->addOrden(InsCategoria::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_categorias = InsCategoria::getInsCategorias(null, $c);

                $arr = array();
                foreach($ins_categorias as $ins_categoria){
                    $descripcion = $ins_categoria->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>