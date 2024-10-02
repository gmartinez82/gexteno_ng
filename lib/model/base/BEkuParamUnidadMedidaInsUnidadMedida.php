<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BEkuParamUnidadMedidaInsUnidadMedida
{ 
	
	const SES_PAGINACION = 'adm_ekuparamunidadmedidainsunidadmedida_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ekuparamunidadmedidainsunidadmedida_paginas_registros';
	const SES_CRITERIOS = 'adm_ekuparamunidadmedidainsunidadmedida_criterios';
	
	const GEN_CLASE = 'EkuParamUnidadMedidaInsUnidadMedida';
	const GEN_TABLA = 'eku_param_unidad_medida_ins_unidad_medida';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BEkuParamUnidadMedidaInsUnidadMedida */ 
	const GEN_ATTR_ID = 'eku_param_unidad_medida_ins_unidad_medida.id';
	const GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID = 'eku_param_unidad_medida_ins_unidad_medida.eku_param_unidad_medida_id';
	const GEN_ATTR_INS_UNIDAD_MEDIDA_ID = 'eku_param_unidad_medida_ins_unidad_medida.ins_unidad_medida_id';
	const GEN_ATTR_CREADO = 'eku_param_unidad_medida_ins_unidad_medida.creado';
	const GEN_ATTR_CREADO_POR = 'eku_param_unidad_medida_ins_unidad_medida.creado_por';

	/* Constantes de Atributos Min de BEkuParamUnidadMedidaInsUnidadMedida */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID = 'eku_param_unidad_medida_id';
	const GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID = 'ins_unidad_medida_id';
	const GEN_ATTR_MIN_CREADO = 'creado';
	const GEN_ATTR_MIN_CREADO_POR = 'creado_por';
	
		
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
	

	/* Atributos de BEkuParamUnidadMedidaInsUnidadMedida */ 
	private $id;
	private $eku_param_unidad_medida_id;
	private $ins_unidad_medida_id;
	private $creado;
	private $creado_por;

	/* Getters de BEkuParamUnidadMedidaInsUnidadMedida */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getEkuParamUnidadMedidaId(){ if(isset($this->eku_param_unidad_medida_id)){ return $this->eku_param_unidad_medida_id; }else{ return 'null'; } }
	public function getInsUnidadMedidaId(){ if(isset($this->ins_unidad_medida_id)){ return $this->ins_unidad_medida_id; }else{ return 'null'; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }

	/* Setters de BEkuParamUnidadMedidaInsUnidadMedida */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID."
				, ".self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID."
				, ".self::GEN_ATTR_CREADO."
				, ".self::GEN_ATTR_CREADO_POR."
			 FROM ".self::GEN_TABLA."
			 WHERE ". self::GEN_ATTR_ID." = ".$this->getId();

                $cons = new Consulta();
                $cons->setSQL($sql);
                $cons->execute();

                while($fila = pg_fetch_array($cons->getResultado())){
                    				$this->setEkuParamUnidadMedidaId($fila[self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID]);
				$this->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
    
                }
            }
	}
	public function setEkuParamUnidadMedidaId($v){ $this->eku_param_unidad_medida_id = $v; }
	public function setInsUnidadMedidaId($v){ $this->ins_unidad_medida_id = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new EkuParamUnidadMedidaInsUnidadMedida();
            $o->setId($fila[EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_MIN_ID], false);
            
			$o->setEkuParamUnidadMedidaId($fila[self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID]);
			$o->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
            return $o;
	}

	/* Control de BEkuParamUnidadMedidaInsUnidadMedida */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BEkuParamUnidadMedidaInsUnidadMedida */ 	
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

	/* Save de BEkuParamUnidadMedidaInsUnidadMedida */ 	
	public function save($array_datos_auditoria = false){
            $ejec = new Ejecucion();
            if(!isset($this->id)){
            
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->creado = $array_datos_auditoria['creado'];
                    				
                    $this->creado_por = $array_datos_auditoria['creado_por'];
                                        
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->creado = Gral::getFechaHoraActual();
                    				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    	
                }            
                    
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                nextval('eku_param_unidad_medida_ins_unidad_medida_seq'), 
                ".$this->getEkuParamUnidadMedidaId()."
						, ".$this->getInsUnidadMedidaId()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    ) RETURNING currval('eku_param_unidad_medida_ins_unidad_medida_seq')";
            
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
                    				
                                        
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    				
                    	
                }            

                $sql = "
				 UPDATE 
                 
				 ".EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID." = ".$this->getEkuParamUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
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
                    				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    	
                }
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getEkuParamUnidadMedidaId()."
						, ".$this->getInsUnidadMedidaId()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    )";
		}else{
                    if(!$mantener_datos_creado){                
                        
                        
                    }
                    
                    $sql = "
				 UPDATE 
                     
				 ".EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID." = ".$this->getEkuParamUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
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
            $o = new EkuParamUnidadMedidaInsUnidadMedida();
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

	/* Delete de BEkuParamUnidadMedidaInsUnidadMedida */ 	
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
	
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarEkuParamUnidadMedidaInsUnidadMedida(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = EkuParamUnidadMedidaInsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);

                    if(is_array($arr_ordens)){
                        foreach($arr_ordens as $arr_orden){
                            $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                        }
                    }

	                            
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
	
		$ekuparamunidadmedidainsunidadmedidas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ekuparamunidadmedidainsunidadmedida = new EkuParamUnidadMedidaInsUnidadMedida();
                    $ekuparamunidadmedidainsunidadmedida->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ekuparamunidadmedidainsunidadmedida->setEkuParamUnidadMedidaId($fila[self::GEN_ATTR_MIN_EKU_PARAM_UNIDAD_MEDIDA_ID]);
			$ekuparamunidadmedidainsunidadmedida->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$ekuparamunidadmedidainsunidadmedida->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ekuparamunidadmedidainsunidadmedida->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				

                    $ekuparamunidadmedidainsunidadmedidas[] = $ekuparamunidadmedidainsunidadmedida;
		}
		
		return $ekuparamunidadmedidainsunidadmedidas;
	}	
	

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas Habilitados */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas para listado de Backend */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = EkuParamUnidadMedidaInsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas filtrado para select */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasCmbF($paginador = null, $criterio = null){
            $col = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas filtrado por una coleccion de objetos foraneos de EkuParamUnidadMedida */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasXEkuParamUnidadMedidas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA);
            $c->addOrden(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getEkuParamUnidadMedidaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getEkuParamUnidadMedidaInsUnidadMedidas filtrado por una coleccion de objetos foraneos de InsUnidadMedida */ 	
	static function getEkuParamUnidadMedidaInsUnidadMedidasXInsUnidadMedidas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(EkuParamUnidadMedidaInsUnidadMedida::GEN_TABLA);
            $c->addOrden(EkuParamUnidadMedidaInsUnidadMedida::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsUnidadMedidaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'eku_param_unidad_medida_ins_unidad_medida_adm.php';
            $url_gestion = 'eku_param_unidad_medida_ins_unidad_medida_gestion.php';
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
	

	/* Metodo que retorna el EkuParamUnidadMedida (Clave Foranea) */ 	
    public function getEkuParamUnidadMedida(){
        $o = new EkuParamUnidadMedida();
        $o->setId($this->getEkuParamUnidadMedidaId());
        return $o;			
    }

	/* Metodo que retorna el EkuParamUnidadMedida (Clave Foranea) en Array */ 	
    public function getEkuParamUnidadMedidaEnArray(&$arr_os){
        if($this->getEkuParamUnidadMedidaId() != 'null'){
            if(isset($arr_os[$this->getEkuParamUnidadMedidaId()])){
                $o = $arr_os[$this->getEkuParamUnidadMedidaId()];
            }else{
                $o = EkuParamUnidadMedida::getOxId($this->getEkuParamUnidadMedidaId());
                if($o){
                    $arr_os[$this->getEkuParamUnidadMedidaId()] = $o;
                }
            }
        }else{
            $o = new EkuParamUnidadMedida();
        }
        return $o;		
    }

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) */ 	
    public function getInsUnidadMedida(){
        $o = new InsUnidadMedida();
        $o->setId($this->getInsUnidadMedidaId());
        return $o;			
    }

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) en Array */ 	
    public function getInsUnidadMedidaEnArray(&$arr_os){
        if($this->getInsUnidadMedidaId() != 'null'){
            if(isset($arr_os[$this->getInsUnidadMedidaId()])){
                $o = $arr_os[$this->getInsUnidadMedidaId()];
            }else{
                $o = InsUnidadMedida::getOxId($this->getInsUnidadMedidaId());
                if($o){
                    $arr_os[$this->getInsUnidadMedidaId()] = $o;
                }
            }
        }else{
            $o = new InsUnidadMedida();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna la descripcion del objeto */ 	
    public function getDescripcion(){
        return $this->getId();
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

	/* Metodo que retorna la codigo del objeto */ 	
    public function getCodigo(){
        return $this->getId();			
    }

	/* Metodo que retorna un array con la descripcion extendida del objeto */ 	
    public function getArrDescripcionExtendidaParaBackend(){
        $array = array();            
        
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
            		
        if($contexto_solicitante != EkuParamUnidadMedida::GEN_CLASE){
            if($this->getEkuParamUnidadMedida()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(EkuParamUnidadMedida::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getEkuParamUnidadMedida()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsUnidadMedida::GEN_CLASE){
            if($this->getInsUnidadMedida()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsUnidadMedida::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsUnidadMedida()->getDescripcion().'</strong>';
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

	/* Metodo que retorna la cantidad total de registros */ 	
    static function getCantidadTotalDeRegistros(){
            $cons = new Consulta();
            
            //$cons->setSQL('SELECT count(id) cantidad FROM eku_param_unidad_medida_ins_unidad_medida'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'eku_param_unidad_medida_ins_unidad_medida';");
            
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'eku_param_unidad_medida_id' */ 	
	static function getOxEkuParamUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'eku_param_unidad_medida_id' */ 	
	static function getOsxEkuParamUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EKU_PARAM_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOsxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas(null, $criterio);
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
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

            $obs = self::getEkuParamUnidadMedidaInsUnidadMedidas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'eku_param_unidad_medida_ins_unidad_medida_adm');
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
}
?>