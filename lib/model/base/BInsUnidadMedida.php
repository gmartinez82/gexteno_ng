<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsUnidadMedida
{ 
	
	const SES_PAGINACION = 'adm_insunidadmedida_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insunidadmedida_paginas_registros';
	const SES_CRITERIOS = 'adm_insunidadmedida_criterios';
	
	const GEN_CLASE = 'InsUnidadMedida';
	const GEN_TABLA = 'ins_unidad_medida';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsUnidadMedida */ 
	const GEN_ATTR_ID = 'ins_unidad_medida.id';
	const GEN_ATTR_DESCRIPCION = 'ins_unidad_medida.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'ins_unidad_medida.descripcion_corta';
	const GEN_ATTR_FRACCIONABLE = 'ins_unidad_medida.fraccionable';
	const GEN_ATTR_CODIGO = 'ins_unidad_medida.codigo';
	const GEN_ATTR_OBSERVACION = 'ins_unidad_medida.observacion';
	const GEN_ATTR_ORDEN = 'ins_unidad_medida.orden';
	const GEN_ATTR_ESTADO = 'ins_unidad_medida.estado';
	const GEN_ATTR_CREADO = 'ins_unidad_medida.creado';
	const GEN_ATTR_CREADO_POR = 'ins_unidad_medida.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_unidad_medida.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_unidad_medida.modificado_por';

	/* Constantes de Atributos Min de BInsUnidadMedida */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_FRACCIONABLE = 'fraccionable';
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
	

	/* Atributos de BInsUnidadMedida */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $fraccionable;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsUnidadMedida */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getFraccionable(){ if(isset($this->fraccionable)){ return $this->fraccionable; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsUnidadMedida */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_FRACCIONABLE."
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
				$this->setFraccionable($fila[self::GEN_ATTR_MIN_FRACCIONABLE]);
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
	public function setFraccionable($v){ $this->fraccionable = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsUnidadMedida();
            $o->setId($fila[InsUnidadMedida::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setFraccionable($fila[self::GEN_ATTR_MIN_FRACCIONABLE]);
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

	/* Control de BInsUnidadMedida */ 	
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

	/* Cambia el estado de BInsUnidadMedida */ 	
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

	/* Save de BInsUnidadMedida */ 	
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
						, ".self::GEN_ATTR_MIN_FRACCIONABLE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_unidad_medida_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, ".$this->getFraccionable()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_unidad_medida_seq')";
            
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
                 
				 ".InsUnidadMedida::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_FRACCIONABLE." = ".$this->getFraccionable()."
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
						, ".self::GEN_ATTR_MIN_FRACCIONABLE."
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
						, ".$this->getFraccionable()."
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
                     
				 ".InsUnidadMedida::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_FRACCIONABLE." = ".$this->getFraccionable()."
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
            $o = new InsUnidadMedida();
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

	/* Delete de BInsUnidadMedida */ 	
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
            
            // se elimina la coleccion de InsInsumoBultos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoBultos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoVtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamUnidadMedidaInsUnidadMedidas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamUnidadMedidaInsUnidadMedidas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsUnidadMedida(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsUnidadMedidas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);

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
	
		$insunidadmedidas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insunidadmedida = new InsUnidadMedida();
                    $insunidadmedida->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insunidadmedida->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$insunidadmedida->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$insunidadmedida->setFraccionable($fila[self::GEN_ATTR_MIN_FRACCIONABLE]);
			$insunidadmedida->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$insunidadmedida->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insunidadmedida->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$insunidadmedida->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$insunidadmedida->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insunidadmedida->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insunidadmedida->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insunidadmedida->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insunidadmedidas[] = $insunidadmedida;
		}
		
		return $insunidadmedidas;
	}	
	

	/* Método getInsUnidadMedidas Habilitados */ 	
	static function getInsUnidadMedidasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsUnidadMedida::getInsUnidadMedidas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsUnidadMedidas para listado de Backend */ 	
	static function getInsUnidadMedidasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsUnidadMedida::getInsUnidadMedidas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsUnidadMedidasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsUnidadMedida::getInsUnidadMedidas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsUnidadMedidas filtrado para select */ 	
	static function getInsUnidadMedidasCmbF($paginador = null, $criterio = null){
            $col = InsUnidadMedida::getInsUnidadMedidas($paginador, $criterio);

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
            $url = 'ins_unidad_medida_adm.php';
            $url_gestion = 'ins_unidad_medida_gestion.php';
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
                
            $criterio->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getInsInsumoBultos */ 	
	public function getInsInsumoBultos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoBulto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoBulto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoBulto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoBulto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoBulto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoBulto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumobultos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumobulto = InsInsumoBulto::hidratarObjeto($fila);			
                $insinsumobultos[] = $insinsumobulto;
            }

            return $insinsumobultos;
	}	
	

	/* Método getInsInsumoBultosBloque para MasInfo */ 	
	public function getInsInsumoBultosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoBultos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoBultos Habilitados */ 	
	public function getInsInsumoBultosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoBultos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoBulto */ 	
	public function getInsInsumoBulto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoBultos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoBulto relacionadas */ 	
	public function deleteInsInsumoBultos(){
            $obs = $this->getInsInsumoBultos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoBultosCmb() InsInsumoBulto relacionadas */ 	
	public function getInsInsumoBultosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoBulto::getInsInsumoBultosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoBulto */ 	
	public function getInsInsumosXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoBulto::GEN_TABLA, InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoBulto */ 	
	public function getCantidadInsInsumosXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoBulto::GEN_TABLA, InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoBulto */ 	
	public function getInsInsumoXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoBulto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditoVtaFacturaVtaOrdenVentas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditovtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditovtafacturavtaordenventa = VtaNotaCreditoVtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtanotacreditovtafacturavtaordenventas[] = $vtanotacreditovtafacturavtaordenventa;
            }

            return $vtanotacreditovtafacturavtaordenventas;
	}	
	

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaNotaCreditoVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb() VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaOrdenVentas */ 	
	public function getVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtaordenventa = VtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtafacturavtaordenventas[] = $vtafacturavtaordenventa;
            }

            return $vtafacturavtaordenventas;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaOrdenVentasCmb() VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeOcs */ 	
	public function getPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdeoc = PdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdefacturapdeocs[] = $pdefacturapdeoc;
            }

            return $pdefacturapdeocs;
	}	
	

	/* Método getPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeOc relacionadas */ 	
	public function deletePdeFacturaPdeOcs(){
            $obs = $this->getPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeOcsCmb() PdeFacturaPdeOc relacionadas */ 	
	public function getPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeOc */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturaXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeRecepcions */ 	
	public function getPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapderecepcion = PdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdefacturapderecepcions[] = $pdefacturapderecepcion;
            }

            return $pdefacturapderecepcions;
	}	
	

	/* Método getPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeFacturaPdeRecepcions(){
            $obs = $this->getPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeRecepcionsCmb() PdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeRecepcions */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapderecepcion = PdeNotaCreditoPdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapderecepcions[] = $pdenotacreditopdefacturapderecepcion;
            }

            return $pdenotacreditopdefacturapderecepcions;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeRecepcions(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb() PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeRecepcion::getPdeNotaCreditoPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeOcs */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapdeoc = PdeNotaCreditoPdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapdeocs[] = $pdenotacreditopdefacturapdeoc;
            }

            return $pdenotacreditopdefacturapdeocs;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeOcs(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeOcsCmb() PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeOc::getPdeNotaCreditoPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtaordenventa = VtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustedebevtaordenventas[] = $vtaajustedebevtaordenventa;
            }

            return $vtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtaajustedebevtaordenventa = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustehabervtaajustedebevtaordenventas[] = $vtaajustehabervtaajustedebevtaordenventa;
            }

            return $vtaajustehabervtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamUnidadMedidaInsUnidadMedidas */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedidas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamUnidadMedidaInsUnidadMedida::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamUnidadMedidaInsUnidadMedida::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamunidadmedidainsunidadmedidas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamunidadmedidainsunidadmedida = EkuParamUnidadMedidaInsUnidadMedida::hidratarObjeto($fila);			
                $ekuparamunidadmedidainsunidadmedidas[] = $ekuparamunidadmedidainsunidadmedida;
            }

            return $ekuparamunidadmedidainsunidadmedidas;
	}	
	

	/* Método getEkuParamUnidadMedidaInsUnidadMedidasBloque para MasInfo */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedidasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas Habilitados */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedidasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamUnidadMedidaInsUnidadMedida */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedida($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamUnidadMedidaInsUnidadMedida relacionadas */ 	
	public function deleteEkuParamUnidadMedidaInsUnidadMedidas(){
            $obs = $this->getEkuParamUnidadMedidaInsUnidadMedidas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamUnidadMedidaInsUnidadMedidasCmb() EkuParamUnidadMedidaInsUnidadMedida relacionadas */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedidasCmb(){
            $c = new Criterio();
            $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamUnidadMedidas (Coleccion) relacionados a traves de EkuParamUnidadMedidaInsUnidadMedida */ 	
	public function getEkuParamUnidadMedidasXEkuParamUnidadMedidaInsUnidadMedida($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamUnidadMedida::GEN_TABLA);
            $c->addRealJoin(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA, EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID, EkuParamUnidadMedida::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamUnidadMedida::getEkuParamUnidadMedidas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamUnidadMedidas relacionados a traves de EkuParamUnidadMedidaInsUnidadMedida */ 	
	public function getCantidadEkuParamUnidadMedidasXEkuParamUnidadMedidaInsUnidadMedida($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamUnidadMedida::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamUnidadMedida::GEN_TABLA);
            $c->addRealJoin(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA, EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID, EkuParamUnidadMedida::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamUnidadMedida::getEkuParamUnidadMedidas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamUnidadMedida (Objeto) relacionado a traves de EkuParamUnidadMedidaInsUnidadMedida */ 	
	public function getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamUnidadMedidasXEkuParamUnidadMedidaInsUnidadMedida($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los EkuParamUnidadMedidas asignados a InsUnidadMedida */ 	
	public function getEkuParamUnidadMedidaInsUnidadMedidasId(){
            $ids = array();
            foreach($this->getEkuParamUnidadMedidaInsUnidadMedidas() as $o){
            
                $ids[] = $o->getEkuParamUnidadMedidaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamUnidadMedidas asignados al InsUnidadMedida */ 	
	public function setEkuParamUnidadMedidaInsUnidadMedidas($ids){
            $this->deleteEkuParamUnidadMedidaInsUnidadMedidas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamUnidadMedidaInsUnidadMedida();
                    $o->setEkuParamUnidadMedidaId($id);
                    $o->setInsUnidadMedidaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamUnidadMedida en el alta de InsUnidadMedida */ 	
	public function getAltaMostrarBloqueRelacionEkuParamUnidadMedidaInsUnidadMedida(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_unidad_medida'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_unidad_medida';");
            
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

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fraccionable' */ 	
	static function getOxFraccionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FRACCIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fraccionable' */ 	
	static function getOsxFraccionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FRACCIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas(null, $criterio);
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

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getInsUnidadMedidas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_unidad_medida_adm');
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
                $c->addTabla(InsUnidadMedida::GEN_TABLA);
                $c->addOrden(InsUnidadMedida::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_unidad_medidas = InsUnidadMedida::getInsUnidadMedidas(null, $c);

                $arr = array();
                foreach($ins_unidad_medidas as $ins_unidad_medida){
                    $descripcion = $ins_unidad_medida->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>