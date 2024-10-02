<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrdEquipo
{ 
	
	const SES_PAGINACION = 'adm_prdequipo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prdequipo_paginas_registros';
	const SES_CRITERIOS = 'adm_prdequipo_criterios';
	
	const GEN_CLASE = 'PrdEquipo';
	const GEN_TABLA = 'prd_equipo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrdEquipo */ 
	const GEN_ATTR_ID = 'prd_equipo.id';
	const GEN_ATTR_DESCRIPCION = 'prd_equipo.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'prd_equipo.descripcion_corta';
	const GEN_ATTR_CODIGO = 'prd_equipo.codigo';
	const GEN_ATTR_OBSERVACION = 'prd_equipo.observacion';
	const GEN_ATTR_ORDEN = 'prd_equipo.orden';
	const GEN_ATTR_ESTADO = 'prd_equipo.estado';
	const GEN_ATTR_CREADO = 'prd_equipo.creado';
	const GEN_ATTR_CREADO_POR = 'prd_equipo.creado_por';
	const GEN_ATTR_MODIFICADO = 'prd_equipo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prd_equipo.modificado_por';

	/* Constantes de Atributos Min de BPrdEquipo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
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
	

	/* Atributos de BPrdEquipo */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrdEquipo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrdEquipo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
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
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
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
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrdEquipo();
            $o->setId($fila[PrdEquipo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
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

	/* Control de BPrdEquipo */ 	
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

	/* Cambia el estado de BPrdEquipo */ 	
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

	/* Save de BPrdEquipo */ 	
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prd_equipo_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prd_equipo_seq')";
            
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
                 
				 ".PrdEquipo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
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
						, '".$this->getDescripcionCorta()."'
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
                     
				 ".PrdEquipo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
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
            $o = new PrdEquipo();
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

	/* Delete de BPrdEquipo */ 	
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
	
            // se elimina la coleccion de PrdOrdenTrabajoOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdParamOperacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdParamOperacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdParamOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdParamOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdLineaProduccionPrdParamOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdLineaProduccionPrdParamOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrdEquipo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrdEquipo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prdequipos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prdequipo = new PrdEquipo();
                    $prdequipo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prdequipo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prdequipo->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$prdequipo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prdequipo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prdequipo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prdequipo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prdequipo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prdequipo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prdequipo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prdequipo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prdequipos[] = $prdequipo;
		}
		
		return $prdequipos;
	}	
	

	/* Método getPrdEquipos Habilitados */ 	
	static function getPrdEquiposHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrdEquipo::getPrdEquipos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrdEquipos para listado de Backend */ 	
	static function getPrdEquiposDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrdEquipo::getPrdEquipos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrdEquiposCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrdEquipo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrdEquipo::getPrdEquipos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdEquipos filtrado para select */ 	
	static function getPrdEquiposCmbF($paginador = null, $criterio = null){
            $col = PrdEquipo::getPrdEquipos($paginador, $criterio);

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
            $url = 'prd_equipo_adm.php';
            $url_gestion = 'prd_equipo_gestion.php';
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
	

	/* Metodo getPrdOrdenTrabajoOperacionPrdEquipos */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacionprdequipo = PrdOrdenTrabajoOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdordentrabajooperacionprdequipos[] = $prdordentrabajooperacionprdequipo;
            }

            return $prdordentrabajooperacionprdequipos;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionPrdEquipos Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacionPrdEquipo relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacionPrdEquipos(){
            $obs = $this->getPrdOrdenTrabajoOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionPrdEquiposCmb() PrdOrdenTrabajoOperacionPrdEquipo relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionPrdEquipo::getPrdOrdenTrabajoOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacions (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA, PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoOperacions relacionados a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getCantidadPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA, PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacion (Objeto) relacionado a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdOrdenTrabajoOperacionXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdParamOperacions */ 	
	public function getPrdParamOperacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdParamOperacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdParamOperacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdParamOperacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdParamOperacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdParamOperacion::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdParamOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdParamOperacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdParamOperacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdparamoperacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdparamoperacion = PrdParamOperacion::hidratarObjeto($fila);			
                $prdparamoperacions[] = $prdparamoperacion;
            }

            return $prdparamoperacions;
	}	
	

	/* Método getPrdParamOperacionsBloque para MasInfo */ 	
	public function getPrdParamOperacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdParamOperacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdParamOperacions Habilitados */ 	
	public function getPrdParamOperacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdParamOperacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdParamOperacion */ 	
	public function getPrdParamOperacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdParamOperacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdParamOperacion relacionadas */ 	
	public function deletePrdParamOperacions(){
            $obs = $this->getPrdParamOperacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdParamOperacionsCmb() PrdParamOperacion relacionadas */ 	
	public function getPrdParamOperacionsCmb(){
            $c = new Criterio();
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->setCriterios();

            $os = PrdParamOperacion::getPrdParamOperacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdParamTipoOperacions (Coleccion) relacionados a traves de PrdParamOperacion */ 	
	public function getPrdParamTipoOperacionsXPrdParamOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdParamTipoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamTipoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacion::GEN_TABLA, PrdParamOperacion::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID, PrdParamTipoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdParamTipoOperacion::getPrdParamTipoOperacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdParamTipoOperacions relacionados a traves de PrdParamOperacion */ 	
	public function getCantidadPrdParamTipoOperacionsXPrdParamOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdParamTipoOperacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdParamTipoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacion::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamTipoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacion::GEN_TABLA, PrdParamOperacion::GEN_ATTR_PRD_PARAM_TIPO_OPERACION_ID, PrdParamTipoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdParamTipoOperacion::getPrdParamTipoOperacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdParamTipoOperacion (Objeto) relacionado a traves de PrdParamOperacion */ 	
	public function getPrdParamTipoOperacionXPrdParamOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdParamTipoOperacionsXPrdParamOperacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdParamOperacionPrdEquipos */ 	
	public function getPrdParamOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdParamOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdParamOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdParamOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdParamOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdparamoperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdparamoperacionprdequipo = PrdParamOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdparamoperacionprdequipos[] = $prdparamoperacionprdequipo;
            }

            return $prdparamoperacionprdequipos;
	}	
	

	/* Método getPrdParamOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdParamOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdParamOperacionPrdEquipos Habilitados */ 	
	public function getPrdParamOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdParamOperacionPrdEquipo */ 	
	public function getPrdParamOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdParamOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdParamOperacionPrdEquipo relacionadas */ 	
	public function deletePrdParamOperacionPrdEquipos(){
            $obs = $this->getPrdParamOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdParamOperacionPrdEquiposCmb() PrdParamOperacionPrdEquipo relacionadas */ 	
	public function getPrdParamOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdParamOperacionPrdEquipo::getPrdParamOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdParamOperacions (Coleccion) relacionados a traves de PrdParamOperacionPrdEquipo */ 	
	public function getPrdParamOperacionsXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdParamOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionPrdEquipo::GEN_TABLA, PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, PrdParamOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdParamOperacion::getPrdParamOperacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdParamOperacions relacionados a traves de PrdParamOperacionPrdEquipo */ 	
	public function getCantidadPrdParamOperacionsXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdParamOperacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdParamOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdParamOperacion::GEN_TABLA);
            $c->addRealJoin(PrdParamOperacionPrdEquipo::GEN_TABLA, PrdParamOperacionPrdEquipo::GEN_ATTR_PRD_PARAM_OPERACION_ID, PrdParamOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdParamOperacion::getPrdParamOperacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdParamOperacion (Objeto) relacionado a traves de PrdParamOperacionPrdEquipo */ 	
	public function getPrdParamOperacionXPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdParamOperacionsXPrdParamOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdLineaProduccionPrdParamOperacionPrdEquipos */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdLineaProduccionPrdParamOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdlineaproduccionprdparamoperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdlineaproduccionprdparamoperacionprdequipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdlineaproduccionprdparamoperacionprdequipos[] = $prdlineaproduccionprdparamoperacionprdequipo;
            }

            return $prdlineaproduccionprdparamoperacionprdequipos;
	}	
	

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquipos Habilitados */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdLineaProduccionPrdParamOperacionPrdEquipo relacionadas */ 	
	public function deletePrdLineaProduccionPrdParamOperacionPrdEquipos(){
            $obs = $this->getPrdLineaProduccionPrdParamOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdLineaProduccionPrdParamOperacionPrdEquiposCmb() PrdLineaProduccionPrdParamOperacionPrdEquipo relacionadas */ 	
	public function getPrdLineaProduccionPrdParamOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdLineaProduccionPrdParamOperacionPrdEquipo::getPrdLineaProduccionPrdParamOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdLineaProduccions (Coleccion) relacionados a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA, PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdLineaProduccions relacionados a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getCantidadPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdLineaProduccion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA, PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdLineaProduccion (Objeto) relacionado a traves de PrdLineaProduccionPrdParamOperacionPrdEquipo */ 	
	public function getPrdLineaProduccionXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdLineaProduccionsXPrdLineaProduccionPrdParamOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PrdParamOperacions asignados a PrdEquipo */ 	
	public function getPrdParamOperacionPrdEquiposId(){
            $ids = array();
            foreach($this->getPrdParamOperacionPrdEquipos() as $o){
            
                $ids[] = $o->getPrdParamOperacionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrdParamOperacions asignados al PrdEquipo */ 	
	public function setPrdParamOperacionPrdEquipos($ids){
            $this->deletePrdParamOperacionPrdEquipos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrdParamOperacionPrdEquipo();
                    $o->setPrdParamOperacionId($id);
                    $o->setPrdEquipoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrdParamOperacion en el alta de PrdEquipo */ 	
	public function getAltaMostrarBloqueRelacionPrdParamOperacionPrdEquipo(){
            return true;
	}
	

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prd_equipo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prd_equipo';");
            
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

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_corta' */ 	
	static function getOsxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos(null, $criterio);
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

            $obs = self::getPrdEquipos($paginador, $criterio);
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

            $obs = self::getPrdEquipos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prd_equipo_adm');
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
                $c->addTabla(PrdEquipo::GEN_TABLA);
                $c->addOrden(PrdEquipo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prd_equipos = PrdEquipo::getPrdEquipos(null, $c);

                $arr = array();
                foreach($prd_equipos as $prd_equipo){
                    $descripcion = $prd_equipo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>