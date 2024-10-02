<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrvInsumo
{ 
	
	const SES_PAGINACION = 'adm_prvinsumo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prvinsumo_paginas_registros';
	const SES_CRITERIOS = 'adm_prvinsumo_criterios';
	
	const GEN_CLASE = 'PrvInsumo';
	const GEN_TABLA = 'prv_insumo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrvInsumo */ 
	const GEN_ATTR_ID = 'prv_insumo.id';
	const GEN_ATTR_DESCRIPCION = 'prv_insumo.descripcion';
	const GEN_ATTR_INS_INSUMO_ID = 'prv_insumo.ins_insumo_id';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'prv_insumo.prv_proveedor_id';
	const GEN_ATTR_CODIGO_PROVEEDOR = 'prv_insumo.codigo_proveedor';
	const GEN_ATTR_INS_MARCA_ID = 'prv_insumo.ins_marca_id';
	const GEN_ATTR_CODIGO_MARCA = 'prv_insumo.codigo_marca';
	const GEN_ATTR_INS_MATRIZ_ID = 'prv_insumo.ins_matriz_id';
	const GEN_ATTR_INS_MARCA_PIEZA = 'prv_insumo.ins_marca_pieza';
	const GEN_ATTR_CODIGO_PIEZA = 'prv_insumo.codigo_pieza';
	const GEN_ATTR_CODIGO = 'prv_insumo.codigo';
	const GEN_ATTR_CODIGO_BARRA = 'prv_insumo.codigo_barra';
	const GEN_ATTR_FECHA_ACTUALIZACION = 'prv_insumo.fecha_actualizacion';
	const GEN_ATTR_REFERENCIAL = 'prv_insumo.referencial';
	const GEN_ATTR_PORCENTAJE_INCREMENTO = 'prv_insumo.porcentaje_incremento';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'prv_insumo.gral_tipo_iva_id';
	const GEN_ATTR_CLAVES = 'prv_insumo.claves';
	const GEN_ATTR_OBSERVACION = 'prv_insumo.observacion';
	const GEN_ATTR_ORDEN = 'prv_insumo.orden';
	const GEN_ATTR_ESTADO = 'prv_insumo.estado';
	const GEN_ATTR_CREADO = 'prv_insumo.creado';
	const GEN_ATTR_CREADO_POR = 'prv_insumo.creado_por';
	const GEN_ATTR_MODIFICADO = 'prv_insumo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prv_insumo.modificado_por';

	/* Constantes de Atributos Min de BPrvInsumo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_CODIGO_PROVEEDOR = 'codigo_proveedor';
	const GEN_ATTR_MIN_INS_MARCA_ID = 'ins_marca_id';
	const GEN_ATTR_MIN_CODIGO_MARCA = 'codigo_marca';
	const GEN_ATTR_MIN_INS_MATRIZ_ID = 'ins_matriz_id';
	const GEN_ATTR_MIN_INS_MARCA_PIEZA = 'ins_marca_pieza';
	const GEN_ATTR_MIN_CODIGO_PIEZA = 'codigo_pieza';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_BARRA = 'codigo_barra';
	const GEN_ATTR_MIN_FECHA_ACTUALIZACION = 'fecha_actualizacion';
	const GEN_ATTR_MIN_REFERENCIAL = 'referencial';
	const GEN_ATTR_MIN_PORCENTAJE_INCREMENTO = 'porcentaje_incremento';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_CLAVES = 'claves';
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
	

	/* Atributos de BPrvInsumo */ 
	private $id;
	private $descripcion;
	private $ins_insumo_id;
	private $prv_proveedor_id;
	private $codigo_proveedor;
	private $ins_marca_id;
	private $codigo_marca;
	private $ins_matriz_id;
	private $ins_marca_pieza;
	private $codigo_pieza;
	private $codigo;
	private $codigo_barra;
	private $fecha_actualizacion;
	private $referencial;
	private $porcentaje_incremento;
	private $gral_tipo_iva_id;
	private $claves;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrvInsumo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getCodigoProveedor(){ if(isset($this->codigo_proveedor)){ return $this->codigo_proveedor; }else{ return ''; } }
	public function getInsMarcaId(){ if(isset($this->ins_marca_id)){ return $this->ins_marca_id; }else{ return 'null'; } }
	public function getCodigoMarca(){ if(isset($this->codigo_marca)){ return $this->codigo_marca; }else{ return ''; } }
	public function getInsMatrizId(){ if(isset($this->ins_matriz_id)){ return $this->ins_matriz_id; }else{ return 'null'; } }
	public function getInsMarcaPieza(){ if(isset($this->ins_marca_pieza)){ return $this->ins_marca_pieza; }else{ return 'null'; } }
	public function getInsMarcaPiezaObj(){ if(isset($this->ins_marca_pieza)){ return InsMarca::getOxId($this->ins_marca_pieza); }else{ return new InsMarca(); } }
	public function getCodigoPieza(){ if(isset($this->codigo_pieza)){ return $this->codigo_pieza; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoBarra(){ if(isset($this->codigo_barra)){ return $this->codigo_barra; }else{ return ''; } }
	public function getFechaActualizacion(){ if(isset($this->fecha_actualizacion)){ return $this->fecha_actualizacion; }else{ return ''; } }
	public function getReferencial(){ if(isset($this->referencial)){ return $this->referencial; }else{ return 0; } }
	public function getPorcentajeIncremento(){ if(isset($this->porcentaje_incremento)){ return $this->porcentaje_incremento; }else{ return 0; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getClaves(){ if(isset($this->claves)){ return $this->claves; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrvInsumo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_CODIGO_PROVEEDOR."
				, ".self::GEN_ATTR_INS_MARCA_ID."
				, ".self::GEN_ATTR_CODIGO_MARCA."
				, ".self::GEN_ATTR_INS_MATRIZ_ID."
				, ".self::GEN_ATTR_INS_MARCA_PIEZA."
				, ".self::GEN_ATTR_CODIGO_PIEZA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_BARRA."
				, ".self::GEN_ATTR_FECHA_ACTUALIZACION."
				, ".self::GEN_ATTR_REFERENCIAL."
				, ".self::GEN_ATTR_PORCENTAJE_INCREMENTO."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_CLAVES."
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
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setCodigoProveedor($fila[self::GEN_ATTR_MIN_CODIGO_PROVEEDOR]);
				$this->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
				$this->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
				$this->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
				$this->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
				$this->setCodigoPieza($fila[self::GEN_ATTR_MIN_CODIGO_PIEZA]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
				$this->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
				$this->setReferencial($fila[self::GEN_ATTR_MIN_REFERENCIAL]);
				$this->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
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
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setCodigoProveedor($v){ $this->codigo_proveedor = $v; }
	public function setInsMarcaId($v){ $this->ins_marca_id = $v; }
	public function setCodigoMarca($v){ $this->codigo_marca = $v; }
	public function setInsMatrizId($v){ $this->ins_matriz_id = $v; }
	public function setInsMarcaPieza($v){ $this->ins_marca_pieza = $v; }
	public function setCodigoPieza($v){ $this->codigo_pieza = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoBarra($v){ $this->codigo_barra = $v; }
	public function setFechaActualizacion($v){ $this->fecha_actualizacion = $v; }
	public function setReferencial($v){ $this->referencial = $v; }
	public function setPorcentajeIncremento($v){ $this->porcentaje_incremento = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setClaves($v){ $this->claves = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrvInsumo();
            $o->setId($fila[PrvInsumo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setCodigoProveedor($fila[self::GEN_ATTR_MIN_CODIGO_PROVEEDOR]);
			$o->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$o->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
			$o->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
			$o->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
			$o->setCodigoPieza($fila[self::GEN_ATTR_MIN_CODIGO_PIEZA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
			$o->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
			$o->setReferencial($fila[self::GEN_ATTR_MIN_REFERENCIAL]);
			$o->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPrvInsumo */ 	
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

	/* Cambia el estado de BPrvInsumo */ 	
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

	/* Save de BPrvInsumo */ 	
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
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_PROVEEDOR."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA."
						, ".self::GEN_ATTR_MIN_CODIGO_PIEZA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_REFERENCIAL."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prv_insumo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getInsInsumoId()."
						, ".$this->getPrvProveedorId()."
						, '".$this->getCodigoProveedor()."'
						, ".$this->getInsMarcaId()."
						, '".$this->getCodigoMarca()."'
						, ".$this->getInsMatrizId()."
						, ".$this->getInsMarcaPieza()."
						, '".$this->getCodigoPieza()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoBarra()."'
						, '".$this->getFechaActualizacion()."'
						, ".$this->getReferencial()."
						, '".$this->getPorcentajeIncremento()."'
						, ".$this->getGralTipoIvaId()."
						, '".$this->getClaves()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prv_insumo_seq')";
            
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
                 
				 ".PrvInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_CODIGO_PROVEEDOR." = '".$this->getCodigoProveedor()."'
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA." = '".$this->getCodigoMarca()."'
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID." = ".$this->getInsMatrizId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA." = ".$this->getInsMarcaPieza()."
						, ".self::GEN_ATTR_MIN_CODIGO_PIEZA." = '".$this->getCodigoPieza()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA." = '".$this->getCodigoBarra()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION." = '".$this->getFechaActualizacion()."'
						, ".self::GEN_ATTR_MIN_REFERENCIAL." = ".$this->getReferencial()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
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
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_PROVEEDOR."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA."
						, ".self::GEN_ATTR_MIN_CODIGO_PIEZA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA."
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_REFERENCIAL."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getInsInsumoId()."
						, ".$this->getPrvProveedorId()."
						, '".$this->getCodigoProveedor()."'
						, ".$this->getInsMarcaId()."
						, '".$this->getCodigoMarca()."'
						, ".$this->getInsMatrizId()."
						, ".$this->getInsMarcaPieza()."
						, '".$this->getCodigoPieza()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoBarra()."'
						, '".$this->getFechaActualizacion()."'
						, ".$this->getReferencial()."
						, '".$this->getPorcentajeIncremento()."'
						, ".$this->getGralTipoIvaId()."
						, '".$this->getClaves()."'
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
                     
				 ".PrvInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_CODIGO_PROVEEDOR." = '".$this->getCodigoProveedor()."'
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA." = '".$this->getCodigoMarca()."'
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID." = ".$this->getInsMatrizId()."
						, ".self::GEN_ATTR_MIN_INS_MARCA_PIEZA." = ".$this->getInsMarcaPieza()."
						, ".self::GEN_ATTR_MIN_CODIGO_PIEZA." = '".$this->getCodigoPieza()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA." = '".$this->getCodigoBarra()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACTUALIZACION." = '".$this->getFechaActualizacion()."'
						, ".self::GEN_ATTR_MIN_REFERENCIAL." = ".$this->getReferencial()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
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
            $o = new PrvInsumo();
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

	/* Delete de BPrvInsumo */ 	
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
	
            // se elimina la coleccion de PrvInsumoCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumoCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrvInsumo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrvInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrvInsumo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prvinsumos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prvinsumo = new PrvInsumo();
                    $prvinsumo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prvinsumo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prvinsumo->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$prvinsumo->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$prvinsumo->setCodigoProveedor($fila[self::GEN_ATTR_MIN_CODIGO_PROVEEDOR]);
			$prvinsumo->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$prvinsumo->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
			$prvinsumo->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
			$prvinsumo->setInsMarcaPieza($fila[self::GEN_ATTR_MIN_INS_MARCA_PIEZA]);
			$prvinsumo->setCodigoPieza($fila[self::GEN_ATTR_MIN_CODIGO_PIEZA]);
			$prvinsumo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prvinsumo->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
			$prvinsumo->setFechaActualizacion($fila[self::GEN_ATTR_MIN_FECHA_ACTUALIZACION]);
			$prvinsumo->setReferencial($fila[self::GEN_ATTR_MIN_REFERENCIAL]);
			$prvinsumo->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$prvinsumo->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$prvinsumo->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$prvinsumo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prvinsumo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prvinsumo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prvinsumo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prvinsumo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prvinsumo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prvinsumo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prvinsumos[] = $prvinsumo;
		}
		
		return $prvinsumos;
	}	
	

	/* Método getPrvInsumos Habilitados */ 	
	static function getPrvInsumosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrvInsumo::getPrvInsumos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrvInsumos para listado de Backend */ 	
	static function getPrvInsumosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrvInsumo::getPrvInsumos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrvInsumosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrvInsumo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrvInsumo::getPrvInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvInsumos filtrado para select */ 	
	static function getPrvInsumosCmbF($paginador = null, $criterio = null){
            $col = PrvInsumo::getPrvInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrvInsumos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPrvInsumosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumo::getPrvInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvInsumos filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPrvInsumosXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumo::getPrvInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvInsumos filtrado por una coleccion de objetos foraneos de InsMarca */ 	
	static function getPrvInsumosXInsMarcas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_INS_MARCA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumo::getPrvInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsMarcaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvInsumos filtrado por una coleccion de objetos foraneos de InsMatriz */ 	
	static function getPrvInsumosXInsMatrizs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_INS_MATRIZ_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumo::getPrvInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsMatrizId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrvInsumos filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getPrvInsumosXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrvInsumo::getPrvInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prv_insumo_adm.php';
            $url_gestion = 'prv_insumo_gestion.php';
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
                
            $criterio->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumoCosto::GEN_TABLA);
            $c->setCriterios();

            $os = PrvInsumoCosto::getPrvInsumoCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvImportacions (Coleccion) relacionados a traves de PrvInsumoCosto */ 	
	public function getPrvImportacionsXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addRealJoin(PrvInsumoCosto::GEN_TABLA, PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, PrvImportacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacion::getPrvImportacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvImportacions relacionados a traves de PrvInsumoCosto */ 	
	public function getCantidadPrvImportacionsXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvImportacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvImportacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvImportacion::GEN_TABLA);
            $c->addRealJoin(PrvInsumoCosto::GEN_TABLA, PrvInsumoCosto::GEN_ATTR_PRV_IMPORTACION_ID, PrvImportacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvImportacion::getPrvImportacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvImportacion (Objeto) relacionado a traves de PrvInsumoCosto */ 	
	public function getPrvImportacionXPrvInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvImportacionsXPrvInsumoCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcAgrupacionItems */ 	
	public function getPdeOcAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacionitem = PdeOcAgrupacionItem::hidratarObjeto($fila);			
                $pdeocagrupacionitems[] = $pdeocagrupacionitem;
            }

            return $pdeocagrupacionitems;
	}	
	

	/* Método getPdeOcAgrupacionItemsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItems Habilitados */ 	
	public function getPdeOcAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacionItem relacionadas */ 	
	public function deletePdeOcAgrupacionItems(){
            $obs = $this->getPdeOcAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionItemsCmb() PdeOcAgrupacionItem relacionadas */ 	
	public function getPdeOcAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcAgrupacions (Coleccion) relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcAgrupacions relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getCantidadPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcAgrupacion (Objeto) relacionado a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcs */ 	
	public function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOc::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeoc = PdeOc::hidratarObjeto($fila);			
                $pdeocs[] = $pdeoc;
            }

            return $pdeocs;
	}	
	

	/* Método getPdeOcsBloque para MasInfo */ 	
	public function getPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcs Habilitados */ 	
	public function getPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOc */ 	
	public function getPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOc relacionadas */ 	
	public function deletePdeOcs(){
            $obs = $this->getPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcsCmb() PdeOc relacionadas */ 	
	public function getPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeOc */ 	
	public function getCantidadPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdePedidoXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el InsInsumo (Clave Foranea) */ 	
    public function getInsInsumo(){
        $o = new InsInsumo();
        $o->setId($this->getInsInsumoId());
        return $o;			
    }

	/* Metodo que retorna el InsInsumo (Clave Foranea) en Array */ 	
    public function getInsInsumoEnArray(&$arr_os){
        if($this->getInsInsumoId() != 'null'){
            if(isset($arr_os[$this->getInsInsumoId()])){
                $o = $arr_os[$this->getInsInsumoId()];
            }else{
                $o = InsInsumo::getOxId($this->getInsInsumoId());
                if($o){
                    $arr_os[$this->getInsInsumoId()] = $o;
                }
            }
        }else{
            $o = new InsInsumo();
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

	/* Metodo que retorna el InsMatriz (Clave Foranea) */ 	
    public function getInsMatriz(){
        $o = new InsMatriz();
        $o->setId($this->getInsMatrizId());
        return $o;			
    }

	/* Metodo que retorna el InsMatriz (Clave Foranea) en Array */ 	
    public function getInsMatrizEnArray(&$arr_os){
        if($this->getInsMatrizId() != 'null'){
            if(isset($arr_os[$this->getInsMatrizId()])){
                $o = $arr_os[$this->getInsMatrizId()];
            }else{
                $o = InsMatriz::getOxId($this->getInsMatrizId());
                if($o){
                    $arr_os[$this->getInsMatrizId()] = $o;
                }
            }
        }else{
            $o = new InsMatriz();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoIva (Clave Foranea) */ 	
    public function getGralTipoIva(){
        $o = new GralTipoIva();
        $o->setId($this->getGralTipoIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoIva (Clave Foranea) en Array */ 	
    public function getGralTipoIvaEnArray(&$arr_os){
        if($this->getGralTipoIvaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoIvaId()])){
                $o = $arr_os[$this->getGralTipoIvaId()];
            }else{
                $o = GralTipoIva::getOxId($this->getGralTipoIvaId());
                if($o){
                    $arr_os[$this->getGralTipoIvaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoIva();
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
            		
        if($contexto_solicitante != InsInsumo::GEN_CLASE){
            if($this->getInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != InsMatriz::GEN_CLASE){
            if($this->getInsMatriz()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsMatriz::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsMatriz()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prv_insumo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prv_insumo';");
            
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

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_insumo_id' */ 	
	static function getOsxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_proveedor' */ 	
	static function getOxCodigoProveedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_PROVEEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_proveedor' */ 	
	static function getOsxCodigoProveedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_PROVEEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_marca_id' */ 	
	static function getOxInsMarcaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_marca' */ 	
	static function getOxCodigoMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_marca' */ 	
	static function getOsxCodigoMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_matriz_id' */ 	
	static function getOxInsMatrizId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MATRIZ_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_matriz_id' */ 	
	static function getOsxInsMatrizId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MATRIZ_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_marca_pieza' */ 	
	static function getOxInsMarcaPieza($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_PIEZA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_pieza' */ 	
	static function getOxCodigoPieza($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_PIEZA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_pieza' */ 	
	static function getOsxCodigoPieza($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_PIEZA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_barra' */ 	
	static function getOxCodigoBarra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_barra' */ 	
	static function getOsxCodigoBarra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_actualizacion' */ 	
	static function getOxFechaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_actualizacion' */ 	
	static function getOsxFechaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'referencial' */ 	
	static function getOxReferencial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REFERENCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'referencial' */ 	
	static function getOsxReferencial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REFERENCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_incremento' */ 	
	static function getOxPorcentajeIncremento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_INCREMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_incremento' */ 	
	static function getOsxPorcentajeIncremento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_INCREMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOsxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves' */ 	
	static function getOxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'claves' */ 	
	static function getOsxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos(null, $criterio);
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

            $obs = self::getPrvInsumos($paginador, $criterio);
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

            $obs = self::getPrvInsumos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prv_insumo_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_actualizacion' */ 	
	public function getFechaActualizacionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaActualizacion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaActualizacionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaActualizacionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
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
                $c->addTabla(PrvInsumo::GEN_TABLA);
                $c->addOrden(PrvInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prv_insumos = PrvInsumo::getPrvInsumos(null, $c);

                $arr = array();
                foreach($prv_insumos as $prv_insumo){
                    $descripcion = $prv_insumo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>