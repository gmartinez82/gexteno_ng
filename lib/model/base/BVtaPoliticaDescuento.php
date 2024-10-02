<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaPoliticaDescuento
{ 
	
	const SES_PAGINACION = 'adm_vtapoliticadescuento_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtapoliticadescuento_paginas_registros';
	const SES_CRITERIOS = 'adm_vtapoliticadescuento_criterios';
	
	const GEN_CLASE = 'VtaPoliticaDescuento';
	const GEN_TABLA = 'vta_politica_descuento';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaPoliticaDescuento */ 
	const GEN_ATTR_ID = 'vta_politica_descuento.id';
	const GEN_ATTR_DESCRIPCION = 'vta_politica_descuento.descripcion';
	const GEN_ATTR_CODIGO = 'vta_politica_descuento.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_politica_descuento.observacion';
	const GEN_ATTR_ORDEN = 'vta_politica_descuento.orden';
	const GEN_ATTR_ESTADO = 'vta_politica_descuento.estado';
	const GEN_ATTR_CREADO = 'vta_politica_descuento.creado';
	const GEN_ATTR_CREADO_POR = 'vta_politica_descuento.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_politica_descuento.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_politica_descuento.modificado_por';

	/* Constantes de Atributos Min de BVtaPoliticaDescuento */ 
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
	

	/* Atributos de BVtaPoliticaDescuento */ 
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

	/* Getters de BVtaPoliticaDescuento */ 
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

	/* Setters de BVtaPoliticaDescuento */ 	
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
            $o = new VtaPoliticaDescuento();
            $o->setId($fila[VtaPoliticaDescuento::GEN_ATTR_MIN_ID], false);
            
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

	/* Control de BVtaPoliticaDescuento */ 	
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

	/* Cambia el estado de BVtaPoliticaDescuento */ 	
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

	/* Save de BVtaPoliticaDescuento */ 	
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
                nextval('vta_politica_descuento_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_politica_descuento_seq')";
            
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
                 
				 ".VtaPoliticaDescuento::GEN_TABLA."
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
                     
				 ".VtaPoliticaDescuento::GEN_TABLA."
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
            $o = new VtaPoliticaDescuento();
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

	/* Delete de BVtaPoliticaDescuento */ 	
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
	
            // se elimina la coleccion de VtaPresupuestoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoRangos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoRangos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsCategorias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsCategoria::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsCategorias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaPoliticaDescuento(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaPoliticaDescuentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaPoliticaDescuento::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtapoliticadescuentos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtapoliticadescuento = new VtaPoliticaDescuento();
                    $vtapoliticadescuento->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtapoliticadescuento->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtapoliticadescuento->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtapoliticadescuento->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtapoliticadescuento->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtapoliticadescuento->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtapoliticadescuento->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtapoliticadescuento->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtapoliticadescuento->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtapoliticadescuento->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtapoliticadescuentos[] = $vtapoliticadescuento;
		}
		
		return $vtapoliticadescuentos;
	}	
	

	/* Método getVtaPoliticaDescuentos Habilitados */ 	
	static function getVtaPoliticaDescuentosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaPoliticaDescuentos para listado de Backend */ 	
	static function getVtaPoliticaDescuentosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaPoliticaDescuentosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaPoliticaDescuento::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPoliticaDescuentos filtrado para select */ 	
	static function getVtaPoliticaDescuentosCmbF($paginador = null, $criterio = null){
            $col = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $criterio);

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
            $url = 'vta_politica_descuento_adm.php';
            $url_gestion = 'vta_politica_descuento_gestion.php';
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
	

	/* Metodo getVtaPresupuestoInsInsumos */ 	
	public function getVtaPresupuestoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoInsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoInsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoinsinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoinsinsumo = VtaPresupuestoInsInsumo::hidratarObjeto($fila);			
                $vtapresupuestoinsinsumos[] = $vtapresupuestoinsinsumo;
            }

            return $vtapresupuestoinsinsumos;
	}	
	

	/* Método getVtaPresupuestoInsInsumosBloque para MasInfo */ 	
	public function getVtaPresupuestoInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumos Habilitados */ 	
	public function getVtaPresupuestoInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoInsInsumo relacionadas */ 	
	public function deleteVtaPresupuestoInsInsumos(){
            $obs = $this->getVtaPresupuestoInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoInsInsumosCmb() VtaPresupuestoInsInsumo relacionadas */ 	
	public function getVtaPresupuestoInsInsumosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentas */ 	
	public function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventa = VtaOrdenVenta::hidratarObjeto($fila);			
                $vtaordenventas[] = $vtaordenventa;
            }

            return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentas Habilitados */ 	
	public function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVenta */ 	
	public function getVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVenta relacionadas */ 	
	public function deleteVtaOrdenVentas(){
            $obs = $this->getVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentasCmb() VtaOrdenVenta relacionadas */ 	
	public function getVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoRangos */ 	
	public function getVtaPoliticaDescuentoRangos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoRango::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPoliticaDescuentoRango::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoRango::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentorangos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentorango = VtaPoliticaDescuentoRango::hidratarObjeto($fila);			
                $vtapoliticadescuentorangos[] = $vtapoliticadescuentorango;
            }

            return $vtapoliticadescuentorangos;
	}	
	

	/* Método getVtaPoliticaDescuentoRangosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoRangosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoRangos Habilitados */ 	
	public function getVtaPoliticaDescuentoRangosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoRango */ 	
	public function getVtaPoliticaDescuentoRango($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoRangos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoRango relacionadas */ 	
	public function deleteVtaPoliticaDescuentoRangos(){
            $obs = $this->getVtaPoliticaDescuentoRangos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoRangosCmb() VtaPoliticaDescuentoRango relacionadas */ 	
	public function getVtaPoliticaDescuentoRangosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de VtaPoliticaDescuentoRango */ 	
	public function getInsTipoListaPreciosXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de VtaPoliticaDescuentoRango */ 	
	public function getCantidadInsTipoListaPreciosXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de VtaPoliticaDescuentoRango */ 	
	public function getInsTipoListaPrecioXVtaPoliticaDescuentoRango($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXVtaPoliticaDescuentoRango($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoInsTipoListaPrecios */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentoinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentoinstipolistaprecio = VtaPoliticaDescuentoInsTipoListaPrecio::hidratarObjeto($fila);			
                $vtapoliticadescuentoinstipolistaprecios[] = $vtapoliticadescuentoinstipolistaprecio;
            }

            return $vtapoliticadescuentoinstipolistaprecios;
	}	
	

	/* Método getVtaPoliticaDescuentoInsTipoListaPreciosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsTipoListaPrecios Habilitados */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoInsTipoListaPrecio relacionadas */ 	
	public function deleteVtaPoliticaDescuentoInsTipoListaPrecios(){
            $obs = $this->getVtaPoliticaDescuentoInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoInsTipoListaPreciosCmb() VtaPoliticaDescuentoInsTipoListaPrecio relacionadas */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsTipoListaPrecio::getVtaPoliticaDescuentoInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getInsTipoListaPreciosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getCantidadInsTipoListaPreciosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de VtaPoliticaDescuentoInsTipoListaPrecio */ 	
	public function getInsTipoListaPrecioXVtaPoliticaDescuentoInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXVtaPoliticaDescuentoInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsCategoria::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsCategoria::getVtaPoliticaDescuentoInsCategoriasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsCategorias (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getInsCategoriasXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsCategorias relacionados a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getCantidadInsCategoriasXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsCategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsCategoria::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID, InsCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsCategoria::getInsCategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsCategoria (Objeto) relacionado a traves de VtaPoliticaDescuentoInsCategoria */ 	
	public function getInsCategoriaXVtaPoliticaDescuentoInsCategoria($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsCategoriasXVtaPoliticaDescuentoInsCategoria($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoInsInsumos */ 	
	public function getVtaPoliticaDescuentoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoInsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoInsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoInsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentoinsinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentoinsinsumo = VtaPoliticaDescuentoInsInsumo::hidratarObjeto($fila);			
                $vtapoliticadescuentoinsinsumos[] = $vtapoliticadescuentoinsinsumo;
            }

            return $vtapoliticadescuentoinsinsumos;
	}	
	

	/* Método getVtaPoliticaDescuentoInsInsumosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsInsumos Habilitados */ 	
	public function getVtaPoliticaDescuentoInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsInsumo */ 	
	public function getVtaPoliticaDescuentoInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoInsInsumo relacionadas */ 	
	public function deleteVtaPoliticaDescuentoInsInsumos(){
            $obs = $this->getVtaPoliticaDescuentoInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoInsInsumosCmb() VtaPoliticaDescuentoInsInsumo relacionadas */ 	
	public function getVtaPoliticaDescuentoInsInsumosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsInsumo::getVtaPoliticaDescuentoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getInsInsumosXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getCantidadInsInsumosXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getInsInsumoXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXVtaPoliticaDescuentoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los InsTipoListaPrecios asignados a VtaPoliticaDescuento */ 	
	public function getVtaPoliticaDescuentoInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getInsTipoListaPrecioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsTipoListaPrecios asignados al VtaPoliticaDescuento */ 	
	public function setVtaPoliticaDescuentoInsTipoListaPrecios($ids){
            $this->deleteVtaPoliticaDescuentoInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsTipoListaPrecio();
                    $o->setInsTipoListaPrecioId($id);
                    $o->setVtaPoliticaDescuentoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsTipoListaPrecio en el alta de VtaPoliticaDescuento */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsCategorias asignados a VtaPoliticaDescuento */ 	
	public function getVtaPoliticaDescuentoInsCategoriasId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsCategorias() as $o){
            
                $ids[] = $o->getInsCategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsCategorias asignados al VtaPoliticaDescuento */ 	
	public function setVtaPoliticaDescuentoInsCategorias($ids){
            $this->deleteVtaPoliticaDescuentoInsCategorias();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsCategoria();
                    $o->setInsCategoriaId($id);
                    $o->setVtaPoliticaDescuentoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsCategoria en el alta de VtaPoliticaDescuento */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsCategoria(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsInsumos asignados a VtaPoliticaDescuento */ 	
	public function getVtaPoliticaDescuentoInsInsumosId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsInsumos() as $o){
            
                $ids[] = $o->getInsInsumoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsInsumos asignados al VtaPoliticaDescuento */ 	
	public function setVtaPoliticaDescuentoInsInsumos($ids){
            $this->deleteVtaPoliticaDescuentoInsInsumos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsInsumo();
                    $o->setInsInsumoId($id);
                    $o->setVtaPoliticaDescuentoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsInsumo en el alta de VtaPoliticaDescuento */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsInsumo(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_politica_descuento'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_politica_descuento';");
            
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

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos(null, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
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

            $obs = self::getVtaPoliticaDescuentos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_politica_descuento_adm');
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

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getVtaPoliticaDescuentoRangosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $vta_politica_descuento_rangos = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangos($paginador, $c);

            $arr['COLECCION'] = $vta_politica_descuento_rangos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
                $c->addOrden(VtaPoliticaDescuento::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_politica_descuentos = VtaPoliticaDescuento::getVtaPoliticaDescuentos(null, $c);

                $arr = array();
                foreach($vta_politica_descuentos as $vta_politica_descuento){
                    $descripcion = $vta_politica_descuento->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>