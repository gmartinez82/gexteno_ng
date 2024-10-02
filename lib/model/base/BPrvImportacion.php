<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrvImportacion
{ 
	
	const SES_PAGINACION = 'adm_prvimportacion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prvimportacion_paginas_registros';
	const SES_CRITERIOS = 'adm_prvimportacion_criterios';
	
	const GEN_CLASE = 'PrvImportacion';
	const GEN_TABLA = 'prv_importacion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrvImportacion */ 
	const GEN_ATTR_ID = 'prv_importacion.id';
	const GEN_ATTR_DESCRIPCION = 'prv_importacion.descripcion';
	const GEN_ATTR_CODIGO = 'prv_importacion.codigo';
	const GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID = 'prv_importacion.prv_importacion_tipo_estado_id';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'prv_importacion.prv_proveedor_id';
	const GEN_ATTR_INS_MARCA_ID = 'prv_importacion.ins_marca_id';
	const GEN_ATTR_INS_MARCA_PIEZA = 'prv_importacion.ins_marca_pieza';
	const GEN_ATTR_PRV_CONVENIO_DESCUENTO_ID = 'prv_importacion.prv_convenio_descuento_id';
	const GEN_ATTR_DESCUENTO = 'prv_importacion.descuento';
	const GEN_ATTR_CANTIDAD_TAB1 = 'prv_importacion.cantidad_tab1';
	const GEN_ATTR_CANTIDAD_TAB2 = 'prv_importacion.cantidad_tab2';
	const GEN_ATTR_CANTIDAD_TAB3 = 'prv_importacion.cantidad_tab3';
	const GEN_ATTR_CANTIDAD_TAB4 = 'prv_importacion.cantidad_tab4';
	const GEN_ATTR_SELECCIONAR_TODOS = 'prv_importacion.seleccionar_todos';
	const GEN_ATTR_SELECCIONAR_TODOS_DESCRIPCION = 'prv_importacion.seleccionar_todos_descripcion';
	const GEN_ATTR_OBSERVACION = 'prv_importacion.observacion';
	const GEN_ATTR_ORDEN = 'prv_importacion.orden';
	const GEN_ATTR_ESTADO = 'prv_importacion.estado';
	const GEN_ATTR_CREADO = 'prv_importacion.creado';
	const GEN_ATTR_CREADO_POR = 'prv_importacion.creado_por';
	const GEN_ATTR_MODIFICADO = 'prv_importacion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prv_importacion.modificado_por';

	/* Constantes de Atributos Min de BPrvImportacion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID = 'prv_importacion_tipo_estado_id';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_INS_MARCA_ID = 'ins_marca_id';
	const GEN_ATTR_MIN_INS_MARCA_PIEZA = 'ins_marca_pieza';
	const GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID = 'prv_convenio_descuento_id';
	const GEN_ATTR_MIN_DESCUENTO = 'descuento';
	const GEN_ATTR_MIN_CANTIDAD_TAB1 = 'cantidad_tab1';
	const GEN_ATTR_MIN_CANTIDAD_TAB2 = 'cantidad_tab2';
	const GEN_ATTR_MIN_CANTIDAD_TAB3 = 'cantidad_tab3';
	const GEN_ATTR_MIN_CANTIDAD_TAB4 = 'cantidad_tab4';
	const GEN_ATTR_MIN_SELECCIONAR_TODOS = 'seleccionar_todos';
	const GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION = 'seleccionar_todos_descripcion';
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
	

	/* Atributos de BPrvImportacion */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $prv_importacion_tipo_estado_id;
	private $prv_proveedor_id;
	private $ins_marca_id;
	private $ins_marca_pieza;
	private $prv_convenio_descuento_id;
	private $descuento;
	private $cantidad_tab1;
	private $cantidad_tab2;
	private $cantidad_tab3;
	private $cantidad_tab4;
	private $seleccionar_todos;
	private $seleccionar_todos_descripcion;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrvImportacion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPrvImportacionTipoEstadoId(){ if(isset($this->prv_importacion_tipo_estado_id)){ return $this->prv_importacion_tipo_estado_id; }else{ return 'null'; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getInsMarcaId(){ if(isset($this->ins_marca_id)){ return $this->ins_marca_id; }else{ return 'null'; } }
	public function getInsMarcaPieza(){ if(isset($this->ins_marca_pieza)){ return $this->ins_marca_pieza; }else{ return 'null'; } }
	public function getInsMarcaPiezaObj(){ if(isset($this->ins_marca_pieza)){ return InsMarca::getOxId($this->ins_marca_pieza); }else{ return new InsMarca(); } }
	public function getPrvConvenioDescuentoId(){ if(isset($this->prv_convenio_descuento_id)){ return $this->prv_convenio_descuento_id; }else{ return 'null'; } }
	public function getDescuento(){ if(isset($this->descuento)){ return $this->descuento; }else{ return 0; } }
	public function getCantidadTab1(){ if(isset($this->cantidad_tab1)){ return $this->cantidad_tab1; }else{ return 0; } }
	public function getCantidadTab2(){ if(isset($this->cantidad_tab2)){ return $this->cantidad_tab2; }else{ return 0; } }
	public function getCantidadTab3(){ if(isset($this->cantidad_tab3)){ return $this->cantidad_tab3; }else{ return 0; } }
	public function getCantidadTab4(){ if(isset($this->cantidad_tab4)){ return $this->cantidad_tab4; }else{ return 0; } }
	public function getSeleccionarTodos(){ if(isset($this->seleccionar_todos)){ return $this->seleccionar_todos; }else{ return 0; } }
	public function getSeleccionarTodosDescripcion(){ if(isset($this->seleccionar_todos_descripcion)){ return $this->seleccionar_todos_descripcion; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPrvImportacion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_INS_MARCA_ID."
				, ".self::GEN_ATTR_INS_MARCA_PIEZA."
				, ".self::GEN_ATTR_PRV_CONVENIO_DESCUENTO_ID."
				, ".self::GEN_ATTR_DESCUENTO."
				, ".self::GEN_ATTR_CANTIDAD_TAB1."
				, ".self::GEN_ATTR_CANTIDAD_TAB2."
				, ".self::GEN_ATTR_CANTIDAD_TAB3."
				, ".self::GEN_ATTR_CANTIDAD_TAB4."
				, ".self::GEN_ATTR_SELECCIONAR_TODOS."
				, ".self::GEN_ATTR_SELECCIONAR_TODOS_DESCRIPCION."
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
				$this->setPrvImportacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID]);
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
				$this->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
				$this->setPrvConvenioDescuentoId($fila[self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID]);
				$this->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
				$this->setCantidadTab1($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB1]);
				$this->setCantidadTab2($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB2]);
				$this->setCantidadTab3($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB3]);
				$this->setCantidadTab4($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB4]);
				$this->setSeleccionarTodos($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS]);
				$this->setSeleccionarTodosDescripcion($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION]);
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
	public function setPrvImportacionTipoEstadoId($v){ $this->prv_importacion_tipo_estado_id = $v; }
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setInsMarcaId($v){ $this->ins_marca_id = $v; }
	public function setInsMarcaPieza($v){ $this->ins_marca_pieza = $v; }
	public function setPrvConvenioDescuentoId($v){ $this->prv_convenio_descuento_id = $v; }
	public function setDescuento($v){ $this->descuento = $v; }
	public function setCantidadTab1($v){ $this->cantidad_tab1 = $v; }
	public function setCantidadTab2($v){ $this->cantidad_tab2 = $v; }
	public function setCantidadTab3($v){ $this->cantidad_tab3 = $v; }
	public function setCantidadTab4($v){ $this->cantidad_tab4 = $v; }
	public function setSeleccionarTodos($v){ $this->seleccionar_todos = $v; }
	public function setSeleccionarTodosDescripcion($v){ $this->seleccionar_todos_descripcion = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrvImportacion();
            $o->setId($fila[PrvImportacion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPrvImportacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$o->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
			$o->setPrvConvenioDescuentoId($fila[self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID]);
			$o->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$o->setCantidadTab1($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB1]);
			$o->setCantidadTab2($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB2]);
			$o->setCantidadTab3($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB3]);
			$o->setCantidadTab4($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB4]);
			$o->setSeleccionarTodos($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS]);
			$o->setSeleccionarTodosDescripcion($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPrvImportacion */ 	
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

	/* Cambia el estado de BPrvImportacion */ 	
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

	/* Save de BPrvImportacion */ 	
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
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA."
						, ".self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB1."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB2."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB3."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB4."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prv_importacion_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getPrvImportacionTipoEstadoId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getInsMarcaId()."
						, ".$this->getInsMarcaPieza()."
						, ".$this->getPrvConvenioDescuentoId()."
						, '".$this->getDescuento()."'
						, ".$this->getCantidadTab1()."
						, ".$this->getCantidadTab2()."
						, ".$this->getCantidadTab3()."
						, ".$this->getCantidadTab4()."
						, ".$this->getSeleccionarTodos()."
						, ".$this->getSeleccionarTodosDescripcion()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prv_importacion_seq')";
            
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
                 
				 ".PrvImportacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID." = ".$this->getPrvImportacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA." = ".$this->getInsMarcaPieza()."
						, ".self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID." = ".$this->getPrvConvenioDescuentoId()."
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB1." = ".$this->getCantidadTab1()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB2." = ".$this->getCantidadTab2()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB3." = ".$this->getCantidadTab3()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB4." = ".$this->getCantidadTab4()."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS." = ".$this->getSeleccionarTodos()."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION." = ".$this->getSeleccionarTodosDescripcion()."
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
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA."
						, ".self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB1."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB2."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB3."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB4."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION."
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
						, ".$this->getPrvImportacionTipoEstadoId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getInsMarcaId()."
						, ".$this->getInsMarcaPieza()."
						, ".$this->getPrvConvenioDescuentoId()."
						, '".$this->getDescuento()."'
						, ".$this->getCantidadTab1()."
						, ".$this->getCantidadTab2()."
						, ".$this->getCantidadTab3()."
						, ".$this->getCantidadTab4()."
						, ".$this->getSeleccionarTodos()."
						, ".$this->getSeleccionarTodosDescripcion()."
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
                     
				 ".PrvImportacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID." = ".$this->getPrvImportacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA." = ".$this->getInsMarcaPieza()."
						, ".self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID." = ".$this->getPrvConvenioDescuentoId()."
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB1." = ".$this->getCantidadTab1()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB2." = ".$this->getCantidadTab2()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB3." = ".$this->getCantidadTab3()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_TAB4." = ".$this->getCantidadTab4()."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS." = ".$this->getSeleccionarTodos()."
						, ".self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION." = ".$this->getSeleccionarTodosDescripcion()."
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
            $o = new PrvImportacion();
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

	/* Delete de BPrvImportacion */ 	
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
	
            // se elimina la coleccion de InsInsumoCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvInsumoCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumoCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvImportacionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvImportacionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvImportacionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvImportacionResultados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvImportacionResultado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvImportacionResultados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrvImportacion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrvImportacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrvImportacion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prvimportacions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prvimportacion = new PrvImportacion();
                    $prvimportacion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prvimportacion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prvimportacion->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prvimportacion->setPrvImportacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRV_IMPORTACION_TIPO_ESTADO_ID]);
			$prvimportacion->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$prvimportacion->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$prvimportacion->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
			$prvimportacion->setPrvConvenioDescuentoId($fila[self::GEN_ATTR_MIN_PRV_CONVENIO_DESCUENTO_ID]);
			$prvimportacion->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$prvimportacion->setCantidadTab1($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB1]);
			$prvimportacion->setCantidadTab2($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB2]);
			$prvimportacion->setCantidadTab3($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB3]);
			$prvimportacion->setCantidadTab4($fila[self::GEN_ATTR_MIN_CANTIDAD_TAB4]);
			$prvimportacion->setSeleccionarTodos($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS]);
			$prvimportacion->setSeleccionarTodosDescripcion($fila[self::GEN_ATTR_MIN_SELECCIONAR_TODOS_DESCRIPCION]);
			$prvimportacion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prvimportacion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prvimportacion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prvimportacion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prvimportacion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prvimportacion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prvimportacion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prvimportacions[] = $prvimportacion;
		}
		
		return $prvimportacions;
	}	
	

	/* Método getPrvImportacions Habilitados */ 	
	static function getPrvImportacionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrvImportacion::getPrvImportacions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrvImportacions para listado de Backend */ 	
	static function getPrvImportacionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrvImportacion::getPrvImportacions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrvImportacionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrvImportacion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrvImportacion::getPrvImportacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvImportacions filtrado para select */ 	
	static function getPrvImportacionsCmbF($paginador = null, $criterio = null){
            $col = PrvImportacion::getPrvImportacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvImportacions filtrado por una coleccion de objetos foraneos de PrvImportacionTipoEstado */ 	
	static function getPrvImportacionsXPrvImportacionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvImportacion::getPrvImportacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvImportacionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvImportacions filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPrvImportacionsXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvImportacion::getPrvImportacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvImportacions filtrado por una coleccion de objetos foraneos de InsMarca */ 	
	static function getPrvImportacionsXInsMarcas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_INS_MARCA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvImportacion::getPrvImportacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsMarcaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvImportacions filtrado por una coleccion de objetos foraneos de PrvConvenioDescuento */ 	
	static function getPrvImportacionsXPrvConvenioDescuentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvImportacion::GEN_ATTR_PRV_CONVENIO_DESCUENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvImportacion::getPrvImportacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvConvenioDescuentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prv_importacion_adm.php';
            $url_gestion = 'prv_importacion_gestion.php';
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
	

	/* Metodo getInsInsumoCostos */ 	
	public function getInsInsumoCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumocosto = InsInsumoCosto::hidratarObjeto($fila);			
                $insinsumocostos[] = $insinsumocosto;
            }

            return $insinsumocostos;
	}	
	

	/* Método getInsInsumoCostosBloque para MasInfo */ 	
	public function getInsInsumoCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoCostos Habilitados */ 	
	public function getInsInsumoCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoCosto */ 	
	public function getInsInsumoCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoCosto relacionadas */ 	
	public function deleteInsInsumoCostos(){
            $obs = $this->getInsInsumoCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoCostosCmb() InsInsumoCosto relacionadas */ 	
	public function getInsInsumoCostosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoCosto::getInsInsumoCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoCosto */ 	
	public function getInsInsumosXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoCosto */ 	
	public function getCantidadInsInsumosXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoCosto */ 	
	public function getInsInsumoXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvInsumoCostos */ 	
	public function getPrvInsumoCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvInsumoCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvInsumoCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvInsumoCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvInsumoCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvInsumoCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvinsumocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvinsumocosto = PrvInsumoCosto::hidratarObjeto($fila);			
                $prvinsumocostos[] = $prvinsumocosto;
            }

            return $prvinsumocostos;
	}	
	

	/* Método getPrvInsumoCostosBloque para MasInfo */ 	
	public function getPrvInsumoCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvInsumoCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvInsumoCostos Habilitados */ 	
	public function getPrvInsumoCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvInsumoCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvInsumoCosto */ 	
	public function getPrvInsumoCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvInsumoCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvInsumoCosto relacionadas */ 	
	public function deletePrvInsumoCostos(){
            $obs = $this->getPrvInsumoCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvInsumoCostosCmb() PrvInsumoCosto relacionadas */ 	
	public function getPrvInsumoCostosCmb(){
            $c = new Criterio();
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->setCriterios();

            $os = PrvInsumoCosto::getPrvInsumoCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvInsumos (Coleccion) relacionados a traves de PrvInsumoCosto */ 	
	public function getPrvInsumosXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumoCosto::GEN_TABLA, PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, PrvInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvInsumo::getPrvInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvInsumos relacionados a traves de PrvInsumoCosto */ 	
	public function getCantidadPrvInsumosXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addRealJoin(PrvInsumoCosto::GEN_TABLA, PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, PrvInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvInsumo::getPrvInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvInsumo (Objeto) relacionado a traves de PrvInsumoCosto */ 	
	public function getPrvInsumoXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvInsumosXPrvInsumoCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvImportacionEstados */ 	
	public function getPrvImportacionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvImportacionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvImportacionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvImportacionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvImportacionEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvImportacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvImportacionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvImportacionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvimportacionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvimportacionestado = PrvImportacionEstado::hidratarObjeto($fila);			
                $prvimportacionestados[] = $prvimportacionestado;
            }

            return $prvimportacionestados;
	}	
	

	/* Método getPrvImportacionEstadosBloque para MasInfo */ 	
	public function getPrvImportacionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvImportacionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvImportacionEstados Habilitados */ 	
	public function getPrvImportacionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvImportacionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvImportacionEstado */ 	
	public function getPrvImportacionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvImportacionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvImportacionEstado relacionadas */ 	
	public function deletePrvImportacionEstados(){
            $obs = $this->getPrvImportacionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvImportacionEstadosCmb() PrvImportacionEstado relacionadas */ 	
	public function getPrvImportacionEstadosCmb(){
            $c = new Criterio();
            $c->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PrvImportacionEstado::getPrvImportacionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvImportacionTipoEstados (Coleccion) relacionados a traves de PrvImportacionEstado */ 	
	public function getPrvImportacionTipoEstadosXPrvImportacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacionEstado::GEN_TABLA, PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvImportacionTipoEstados relacionados a traves de PrvImportacionEstado */ 	
	public function getCantidadPrvImportacionTipoEstadosXPrvImportacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvImportacionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvImportacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrvImportacionEstado::GEN_TABLA, PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, PrvImportacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacionTipoEstado::getPrvImportacionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvImportacionTipoEstado (Objeto) relacionado a traves de PrvImportacionEstado */ 	
	public function getPrvImportacionTipoEstadoXPrvImportacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvImportacionTipoEstadosXPrvImportacionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvImportacionResultados */ 	
	public function getPrvImportacionResultados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvImportacionResultado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvImportacionResultado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvImportacionResultado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvImportacionResultado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvImportacionResultado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvImportacionResultado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvImportacionResultado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvImportacionResultado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvimportacionresultados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvimportacionresultado = PrvImportacionResultado::hidratarObjeto($fila);			
                $prvimportacionresultados[] = $prvimportacionresultado;
            }

            return $prvimportacionresultados;
	}	
	

	/* Método getPrvImportacionResultadosBloque para MasInfo */ 	
	public function getPrvImportacionResultadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvImportacionResultados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvImportacionResultados Habilitados */ 	
	public function getPrvImportacionResultadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvImportacionResultados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvImportacionResultado */ 	
	public function getPrvImportacionResultado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvImportacionResultados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvImportacionResultado relacionadas */ 	
	public function deletePrvImportacionResultados(){
            $obs = $this->getPrvImportacionResultados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvImportacionResultadosCmb() PrvImportacionResultado relacionadas */ 	
	public function getPrvImportacionResultadosCmb(){
            $c = new Criterio();
            $c->add(PrvImportacionResultado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacionResultado::GEN_TABLA);
            $c->setCriterios();

            $os = PrvImportacionResultado::getPrvImportacionResultadosCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna el PrvImportacionTipoEstado (Clave Foranea) */ 	
    public function getPrvImportacionTipoEstado(){
        $o = new PrvImportacionTipoEstado();
        $o->setId($this->getPrvImportacionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PrvImportacionTipoEstado (Clave Foranea) en Array */ 	
    public function getPrvImportacionTipoEstadoEnArray(&$arr_os){
        if($this->getPrvImportacionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPrvImportacionTipoEstadoId()])){
                $o = $arr_os[$this->getPrvImportacionTipoEstadoId()];
            }else{
                $o = PrvImportacionTipoEstado::getOxId($this->getPrvImportacionTipoEstadoId());
                if($o){
                    $arr_os[$this->getPrvImportacionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PrvImportacionTipoEstado();
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

	/* Metodo que retorna el InsMarca (Clave Foranea) */ 	
    public function getInsMarca(){
        $o = new InsMarca();
        $o->setId($this->getInsMarcaId());
        return $o;			
    }

	/* Metodo que retorna el InsMarca (Clave Foranea) en Array */ 	
    public function getInsMarcaEnArray(&$arr_os){
        if($this->getInsMarcaId() != 'null'){
            if(isset($arr_os[$this->getInsMarcaId()])){
                $o = $arr_os[$this->getInsMarcaId()];
            }else{
                $o = InsMarca::getOxId($this->getInsMarcaId());
                if($o){
                    $arr_os[$this->getInsMarcaId()] = $o;
                }
            }
        }else{
            $o = new InsMarca();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvConvenioDescuento (Clave Foranea) */ 	
    public function getPrvConvenioDescuento(){
        $o = new PrvConvenioDescuento();
        $o->setId($this->getPrvConvenioDescuentoId());
        return $o;			
    }

	/* Metodo que retorna el PrvConvenioDescuento (Clave Foranea) en Array */ 	
    public function getPrvConvenioDescuentoEnArray(&$arr_os){
        if($this->getPrvConvenioDescuentoId() != 'null'){
            if(isset($arr_os[$this->getPrvConvenioDescuentoId()])){
                $o = $arr_os[$this->getPrvConvenioDescuentoId()];
            }else{
                $o = PrvConvenioDescuento::getOxId($this->getPrvConvenioDescuentoId());
                if($o){
                    $arr_os[$this->getPrvConvenioDescuentoId()] = $o;
                }
            }
        }else{
            $o = new PrvConvenioDescuento();
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
            		
        if($contexto_solicitante != PrvImportacionTipoEstado::GEN_CLASE){
            if($this->getPrvImportacionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvImportacionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvImportacionTipoEstado()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != InsMarca::GEN_CLASE){
            if($this->getInsMarca()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsMarca::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsMarca()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsMarca::GEN_CLASE){
            if($this->getInsMarca()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsMarca::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsMarca()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvConvenioDescuento::GEN_CLASE){
            if($this->getPrvConvenioDescuento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvConvenioDescuento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvConvenioDescuento()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prv_importacion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prv_importacion';");
            
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

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_importacion_tipo_estado_id' */ 	
	static function getOxPrvImportacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_importacion_tipo_estado_id' */ 	
	static function getOsxPrvImportacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_marca_id' */ 	
	static function getOxInsMarcaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_marca_id' */ 	
	static function getOsxInsMarcaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_marca_pieza' */ 	
	static function getOxInsMarcaPieza($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_PIEZA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_marca_pieza' */ 	
	static function getOsxInsMarcaPieza($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_PIEZA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_convenio_descuento_id' */ 	
	static function getOxPrvConvenioDescuentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_CONVENIO_DESCUENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_convenio_descuento_id' */ 	
	static function getOsxPrvConvenioDescuentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_CONVENIO_DESCUENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descuento' */ 	
	static function getOxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descuento' */ 	
	static function getOsxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_tab1' */ 	
	static function getOxCantidadTab1($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB1, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_tab1' */ 	
	static function getOsxCantidadTab1($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB1, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_tab2' */ 	
	static function getOxCantidadTab2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_tab2' */ 	
	static function getOsxCantidadTab2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_tab3' */ 	
	static function getOxCantidadTab3($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB3, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_tab3' */ 	
	static function getOsxCantidadTab3($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB3, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_tab4' */ 	
	static function getOxCantidadTab4($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB4, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_tab4' */ 	
	static function getOsxCantidadTab4($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_TAB4, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'seleccionar_todos' */ 	
	static function getOxSeleccionarTodos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SELECCIONAR_TODOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'seleccionar_todos' */ 	
	static function getOsxSeleccionarTodos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SELECCIONAR_TODOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'seleccionar_todos_descripcion' */ 	
	static function getOxSeleccionarTodosDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SELECCIONAR_TODOS_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'seleccionar_todos_descripcion' */ 	
	static function getOsxSeleccionarTodosDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SELECCIONAR_TODOS_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions(null, $criterio);
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

            $obs = self::getPrvImportacions($paginador, $criterio);
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

            $obs = self::getPrvImportacions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prv_importacion_adm');
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
                $c->addTabla(PrvImportacion::GEN_TABLA);
                $c->addOrden(PrvImportacion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prv_importacions = PrvImportacion::getPrvImportacions(null, $c);

                $arr = array();
                foreach($prv_importacions as $prv_importacion){
                    $descripcion = $prv_importacion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>