<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdePedidoPrvProveedor
{ 
	
	const SES_PAGINACION = 'adm_pdepedidoprvproveedor_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdepedidoprvproveedor_paginas_registros';
	const SES_CRITERIOS = 'adm_pdepedidoprvproveedor_criterios';
	
	const GEN_CLASE = 'PdePedidoPrvProveedor';
	const GEN_TABLA = 'pde_pedido_prv_proveedor';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BPdePedidoPrvProveedor */ 
	const GEN_ATTR_ID = 'pde_pedido_prv_proveedor.id';
	const GEN_ATTR_PDE_PEDIDO_ID = 'pde_pedido_prv_proveedor.pde_pedido_id';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_pedido_prv_proveedor.prv_proveedor_id';
	const GEN_ATTR_CREADO = 'pde_pedido_prv_proveedor.creado';
	const GEN_ATTR_CREADO_POR = 'pde_pedido_prv_proveedor.creado_por';

	/* Constantes de Atributos Min de BPdePedidoPrvProveedor */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_PDE_PEDIDO_ID = 'pde_pedido_id';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
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
	

	/* Atributos de BPdePedidoPrvProveedor */ 
	private $id;
	private $pde_pedido_id;
	private $prv_proveedor_id;
	private $creado;
	private $creado_por;

	/* Getters de BPdePedidoPrvProveedor */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getPdePedidoId(){ if(isset($this->pde_pedido_id)){ return $this->pde_pedido_id; }else{ return 'null'; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }

	/* Setters de BPdePedidoPrvProveedor */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_PDE_PEDIDO_ID."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_CREADO."
				, ".self::GEN_ATTR_CREADO_POR."
			 FROM ".self::GEN_TABLA."
			 WHERE ". self::GEN_ATTR_ID." = ".$this->getId();

                $cons = new Consulta();
                $cons->setSQL($sql);
                $cons->execute();

                while($fila = pg_fetch_array($cons->getResultado())){
                    				$this->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
    
                }
            }
	}
	public function setPdePedidoId($v){ $this->pde_pedido_id = $v; }
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdePedidoPrvProveedor();
            $o->setId($fila[PdePedidoPrvProveedor::GEN_ATTR_MIN_ID], false);
            
			$o->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
            return $o;
	}

	/* Control de BPdePedidoPrvProveedor */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BPdePedidoPrvProveedor */ 	
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

	/* Save de BPdePedidoPrvProveedor */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                nextval('pde_pedido_prv_proveedor_seq'), 
                ".$this->getPdePedidoId()."
						, ".$this->getPrvProveedorId()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    ) RETURNING currval('pde_pedido_prv_proveedor_seq')";
            
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
                 
				 ".PdePedidoPrvProveedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getPdePedidoId()."
						, ".$this->getPrvProveedorId()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    )";
		}else{
                    if(!$mantener_datos_creado){                
                        
                        
                    }
                    
                    $sql = "
				 UPDATE 
                     
				 ".PdePedidoPrvProveedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
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
            $o = new PdePedidoPrvProveedor();
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

	/* Delete de BPdePedidoPrvProveedor */ 	
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
	
	public function duplicarPdePedidoPrvProveedor(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdePedidoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdePedidoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdepedidoprvproveedors = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdepedidoprvproveedor = new PdePedidoPrvProveedor();
                    $pdepedidoprvproveedor->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdepedidoprvproveedor->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$pdepedidoprvproveedor->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdepedidoprvproveedor->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdepedidoprvproveedor->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				

                    $pdepedidoprvproveedors[] = $pdepedidoprvproveedor;
		}
		
		return $pdepedidoprvproveedors;
	}	
	

	/* Método getPdePedidoPrvProveedors Habilitados */ 	
	static function getPdePedidoPrvProveedorsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdePedidoPrvProveedor::getPdePedidoPrvProveedors($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdePedidoPrvProveedors para listado de Backend */ 	
	static function getPdePedidoPrvProveedorsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdePedidoPrvProveedor::getPdePedidoPrvProveedors($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdePedidoPrvProveedorsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdePedidoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdePedidoPrvProveedor::getPdePedidoPrvProveedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidoPrvProveedors filtrado para select */ 	
	static function getPdePedidoPrvProveedorsCmbF($paginador = null, $criterio = null){
            $col = PdePedidoPrvProveedor::getPdePedidoPrvProveedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdePedidoPrvProveedors filtrado por una coleccion de objetos foraneos de PdePedido */ 	
	static function getPdePedidoPrvProveedorsXPdePedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->addOrden(PdePedidoPrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedidoPrvProveedor::getPdePedidoPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdePedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdePedidoPrvProveedors filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdePedidoPrvProveedorsXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdePedidoPrvProveedor::GEN_TABLA);
            $c->addOrden(PdePedidoPrvProveedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdePedidoPrvProveedor::getPdePedidoPrvProveedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_pedido_prv_proveedor_adm.php';
            $url_gestion = 'pde_pedido_prv_proveedor_gestion.php';
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
	

	/* Metodo que retorna el PdePedido (Clave Foranea) */ 	
    public function getPdePedido(){
        $o = new PdePedido();
        $o->setId($this->getPdePedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdePedido (Clave Foranea) en Array */ 	
    public function getPdePedidoEnArray(&$arr_os){
        if($this->getPdePedidoId() != 'null'){
            if(isset($arr_os[$this->getPdePedidoId()])){
                $o = $arr_os[$this->getPdePedidoId()];
            }else{
                $o = PdePedido::getOxId($this->getPdePedidoId());
                if($o){
                    $arr_os[$this->getPdePedidoId()] = $o;
                }
            }
        }else{
            $o = new PdePedido();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvProveedor (Clave Foranea) */ 	
    public function getPrvProveedor(){
        $o = new PrvProveedor();
        $o->setId($this->getPrvProveedorId());
        return $o;			
    }

	/* Metodo que retorna el PrvProveedor (Clave Foranea) en Array */ 	
    public function getPrvProveedorEnArray(&$arr_os){
        if($this->getPrvProveedorId() != 'null'){
            if(isset($arr_os[$this->getPrvProveedorId()])){
                $o = $arr_os[$this->getPrvProveedorId()];
            }else{
                $o = PrvProveedor::getOxId($this->getPrvProveedorId());
                if($o){
                    $arr_os[$this->getPrvProveedorId()] = $o;
                }
            }
        }else{
            $o = new PrvProveedor();
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
            		
        if($contexto_solicitante != PdePedido::GEN_CLASE){
            if($this->getPdePedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdePedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdePedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_pedido_prv_proveedor'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_pedido_prv_proveedor';");
            
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

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
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

            $obs = self::getPdePedidoPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_pedido_id' */ 	
	static function getOxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_pedido_id' */ 	
	static function getOsxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_proveedor_id' */ 	
	static function getOsxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdePedidoPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
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

            $obs = self::getPdePedidoPrvProveedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
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

            $obs = self::getPdePedidoPrvProveedors(null, $criterio);
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

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
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

            $obs = self::getPdePedidoPrvProveedors($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_pedido_prv_proveedor_adm');
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