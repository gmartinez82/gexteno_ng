<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaAjusteHaberItem
{ 
	
	const SES_PAGINACION = 'adm_vtaajustehaberitem_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaajustehaberitem_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaajustehaberitem_criterios';
	
	const GEN_CLASE = 'VtaAjusteHaberItem';
	const GEN_TABLA = 'vta_ajuste_haber_item';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaAjusteHaberItem */ 
	const GEN_ATTR_ID = 'vta_ajuste_haber_item.id';
	const GEN_ATTR_DESCRIPCION = 'vta_ajuste_haber_item.descripcion';
	const GEN_ATTR_VTA_AJUSTE_HABER_ID = 'vta_ajuste_haber_item.vta_ajuste_haber_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'vta_ajuste_haber_item.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'vta_ajuste_haber_item.gral_tipo_iva_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_CONCEPTO_ID = 'vta_ajuste_haber_item.vta_ajuste_haber_concepto_id';
	const GEN_ATTR_GRAL_MONEDA_ID = 'vta_ajuste_haber_item.gral_moneda_id';
	const GEN_ATTR_TIPO_CAMBIO = 'vta_ajuste_haber_item.tipo_cambio';
	const GEN_ATTR_TIPO_CAMBIO_REAL = 'vta_ajuste_haber_item.tipo_cambio_real';
	const GEN_ATTR_IMPORTE_UNITARIO_REAL = 'vta_ajuste_haber_item.importe_unitario_real';
	const GEN_ATTR_IMPORTE_UNITARIO = 'vta_ajuste_haber_item.importe_unitario';
	const GEN_ATTR_CANTIDAD = 'vta_ajuste_haber_item.cantidad';
	const GEN_ATTR_CONCILIADO = 'vta_ajuste_haber_item.conciliado';
	const GEN_ATTR_CODIGO = 'vta_ajuste_haber_item.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_ajuste_haber_item.observacion';
	const GEN_ATTR_ORDEN = 'vta_ajuste_haber_item.orden';
	const GEN_ATTR_ESTADO = 'vta_ajuste_haber_item.estado';
	const GEN_ATTR_CREADO = 'vta_ajuste_haber_item.creado';
	const GEN_ATTR_CREADO_POR = 'vta_ajuste_haber_item.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_ajuste_haber_item.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_ajuste_haber_item.modificado_por';

	/* Constantes de Atributos Min de BVtaAjusteHaberItem */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID = 'vta_ajuste_haber_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID = 'vta_ajuste_haber_concepto_id';
	const GEN_ATTR_MIN_GRAL_MONEDA_ID = 'gral_moneda_id';
	const GEN_ATTR_MIN_TIPO_CAMBIO = 'tipo_cambio';
	const GEN_ATTR_MIN_TIPO_CAMBIO_REAL = 'tipo_cambio_real';
	const GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL = 'importe_unitario_real';
	const GEN_ATTR_MIN_IMPORTE_UNITARIO = 'importe_unitario';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_CONCILIADO = 'conciliado';
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
	

	/* Atributos de BVtaAjusteHaberItem */ 
	private $id;
	private $descripcion;
	private $vta_ajuste_haber_id;
	private $gral_fp_forma_pago_id;
	private $gral_tipo_iva_id;
	private $vta_ajuste_haber_concepto_id;
	private $gral_moneda_id;
	private $tipo_cambio;
	private $tipo_cambio_real;
	private $importe_unitario_real;
	private $importe_unitario;
	private $cantidad;
	private $conciliado;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaAjusteHaberItem */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaAjusteHaberId(){ if(isset($this->vta_ajuste_haber_id)){ return $this->vta_ajuste_haber_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberConceptoId(){ if(isset($this->vta_ajuste_haber_concepto_id)){ return $this->vta_ajuste_haber_concepto_id; }else{ return 'null'; } }
	public function getGralMonedaId(){ if(isset($this->gral_moneda_id)){ return $this->gral_moneda_id; }else{ return 'null'; } }
	public function getTipoCambio(){ if(isset($this->tipo_cambio)){ return $this->tipo_cambio; }else{ return 0; } }
	public function getTipoCambioReal(){ if(isset($this->tipo_cambio_real)){ return $this->tipo_cambio_real; }else{ return 0; } }
	public function getImporteUnitarioReal(){ if(isset($this->importe_unitario_real)){ return $this->importe_unitario_real; }else{ return 0; } }
	public function getImporteUnitario(){ if(isset($this->importe_unitario)){ return $this->importe_unitario; }else{ return 0; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getConciliado(){ if(isset($this->conciliado)){ return $this->conciliado; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaAjusteHaberItem */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_CONCEPTO_ID."
				, ".self::GEN_ATTR_GRAL_MONEDA_ID."
				, ".self::GEN_ATTR_TIPO_CAMBIO."
				, ".self::GEN_ATTR_TIPO_CAMBIO_REAL."
				, ".self::GEN_ATTR_IMPORTE_UNITARIO_REAL."
				, ".self::GEN_ATTR_IMPORTE_UNITARIO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_CONCILIADO."
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
				$this->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setVtaAjusteHaberConceptoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID]);
				$this->setGralMonedaId($fila[self::GEN_ATTR_MIN_GRAL_MONEDA_ID]);
				$this->setTipoCambio($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO]);
				$this->setTipoCambioReal($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL]);
				$this->setImporteUnitarioReal($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL]);
				$this->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setConciliado($fila[self::GEN_ATTR_MIN_CONCILIADO]);
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
	public function setVtaAjusteHaberId($v){ $this->vta_ajuste_haber_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setVtaAjusteHaberConceptoId($v){ $this->vta_ajuste_haber_concepto_id = $v; }
	public function setGralMonedaId($v){ $this->gral_moneda_id = $v; }
	public function setTipoCambio($v){ $this->tipo_cambio = $v; }
	public function setTipoCambioReal($v){ $this->tipo_cambio_real = $v; }
	public function setImporteUnitarioReal($v){ $this->importe_unitario_real = $v; }
	public function setImporteUnitario($v){ $this->importe_unitario = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setConciliado($v){ $this->conciliado = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaAjusteHaberItem();
            $o->setId($fila[VtaAjusteHaberItem::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setVtaAjusteHaberConceptoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID]);
			$o->setGralMonedaId($fila[self::GEN_ATTR_MIN_GRAL_MONEDA_ID]);
			$o->setTipoCambio($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO]);
			$o->setTipoCambioReal($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL]);
			$o->setImporteUnitarioReal($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL]);
			$o->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setConciliado($fila[self::GEN_ATTR_MIN_CONCILIADO]);
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

	/* Control de BVtaAjusteHaberItem */ 	
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

	/* Cambia el estado de BVtaAjusteHaberItem */ 	
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

	/* Save de BVtaAjusteHaberItem */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_MONEDA_ID."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CONCILIADO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_ajuste_haber_item_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getVtaAjusteHaberConceptoId()."
						, ".$this->getGralMonedaId()."
						, '".$this->getTipoCambio()."'
						, '".$this->getTipoCambioReal()."'
						, '".$this->getImporteUnitarioReal()."'
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, ".$this->getConciliado()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_ajuste_haber_item_seq')";
            
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
                 
				 ".VtaAjusteHaberItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID." = ".$this->getVtaAjusteHaberConceptoId()."
						, ".self::GEN_ATTR_MIN_GRAL_MONEDA_ID." = ".$this->getGralMonedaId()."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO." = '".$this->getTipoCambio()."'
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL." = '".$this->getTipoCambioReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL." = '".$this->getImporteUnitarioReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_CONCILIADO." = ".$this->getConciliado()."
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_MONEDA_ID."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CONCILIADO."
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
						, ".$this->getVtaAjusteHaberId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getVtaAjusteHaberConceptoId()."
						, ".$this->getGralMonedaId()."
						, '".$this->getTipoCambio()."'
						, '".$this->getTipoCambioReal()."'
						, '".$this->getImporteUnitarioReal()."'
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, ".$this->getConciliado()."
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
                     
				 ".VtaAjusteHaberItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID." = ".$this->getVtaAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID." = ".$this->getVtaAjusteHaberConceptoId()."
						, ".self::GEN_ATTR_MIN_GRAL_MONEDA_ID." = ".$this->getGralMonedaId()."
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO." = '".$this->getTipoCambio()."'
						, ".self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL." = '".$this->getTipoCambioReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL." = '".$this->getImporteUnitarioReal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_CONCILIADO." = ".$this->getConciliado()."
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
            $o = new VtaAjusteHaberItem();
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

	/* Delete de BVtaAjusteHaberItem */ 	
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
	
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItemConciliados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItemConciliado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItemConciliados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItemCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItemCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItemRetencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItemRetencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaAjusteHaberItem(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaAjusteHaberItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaAjusteHaberItem::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaajustehaberitems = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaajustehaberitem = new VtaAjusteHaberItem();
                    $vtaajustehaberitem->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaajustehaberitem->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaajustehaberitem->setVtaAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_ID]);
			$vtaajustehaberitem->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$vtaajustehaberitem->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$vtaajustehaberitem->setVtaAjusteHaberConceptoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONCEPTO_ID]);
			$vtaajustehaberitem->setGralMonedaId($fila[self::GEN_ATTR_MIN_GRAL_MONEDA_ID]);
			$vtaajustehaberitem->setTipoCambio($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO]);
			$vtaajustehaberitem->setTipoCambioReal($fila[self::GEN_ATTR_MIN_TIPO_CAMBIO_REAL]);
			$vtaajustehaberitem->setImporteUnitarioReal($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO_REAL]);
			$vtaajustehaberitem->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$vtaajustehaberitem->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$vtaajustehaberitem->setConciliado($fila[self::GEN_ATTR_MIN_CONCILIADO]);
			$vtaajustehaberitem->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaajustehaberitem->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaajustehaberitem->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaajustehaberitem->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaajustehaberitem->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaajustehaberitem->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaajustehaberitem->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaajustehaberitem->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaajustehaberitems[] = $vtaajustehaberitem;
		}
		
		return $vtaajustehaberitems;
	}	
	

	/* Método getVtaAjusteHaberItems Habilitados */ 	
	static function getVtaAjusteHaberItemsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaAjusteHaberItems para listado de Backend */ 	
	static function getVtaAjusteHaberItemsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaAjusteHaberItemsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaAjusteHaberItem::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado para select */ 	
	static function getVtaAjusteHaberItemsCmbF($paginador = null, $criterio = null){
            $col = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado por una coleccion de objetos foraneos de VtaAjusteHaber */ 	
	static function getVtaAjusteHaberItemsXVtaAjusteHabers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getVtaAjusteHaberItemsXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getVtaAjusteHaberItemsXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado por una coleccion de objetos foraneos de VtaAjusteHaberConcepto */ 	
	static function getVtaAjusteHaberItemsXVtaAjusteHaberConceptos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_CONCEPTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberConceptoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHaberItems filtrado por una coleccion de objetos foraneos de GralMoneda */ 	
	static function getVtaAjusteHaberItemsXGralMonedas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_MONEDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMonedaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_ajuste_haber_item_adm.php';
            $url_gestion = 'vta_ajuste_haber_item_gestion.php';
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
	

	/* Metodo getFndChqCheques */ 	
	public function getFndChqCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqcheque = FndChqCheque::hidratarObjeto($fila);			
                $fndchqcheques[] = $fndchqcheque;
            }

            return $fndchqcheques;
	}	
	

	/* Método getFndChqChequesBloque para MasInfo */ 	
	public function getFndChqChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqCheques Habilitados */ 	
	public function getFndChqChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqCheque */ 	
	public function getFndChqCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqCheque relacionadas */ 	
	public function deleteFndChqCheques(){
            $obs = $this->getFndChqCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqChequesCmb() FndChqCheque relacionadas */ 	
	public function getFndChqChequesCmb(){
            $c = new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqChequeras (Coleccion) relacionados a traves de FndChqCheque */ 	
	public function getFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqChequeras relacionados a traves de FndChqCheque */ 	
	public function getCantidadFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqChequera::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqChequera (Objeto) relacionado a traves de FndChqCheque */ 	
	public function getFndChqChequeraXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqChequerasXFndChqCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItemConciliados */ 	
	public function getVtaAjusteHaberItemConciliados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItemConciliado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItemConciliado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItemConciliado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItemConciliado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItemConciliado::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItemConciliado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItemConciliado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItemConciliado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitemconciliados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitemconciliado = VtaAjusteHaberItemConciliado::hidratarObjeto($fila);			
                $vtaajustehaberitemconciliados[] = $vtaajustehaberitemconciliado;
            }

            return $vtaajustehaberitemconciliados;
	}	
	

	/* Método getVtaAjusteHaberItemConciliadosBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemConciliadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItemConciliados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemConciliados Habilitados */ 	
	public function getVtaAjusteHaberItemConciliadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItemConciliados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemConciliado */ 	
	public function getVtaAjusteHaberItemConciliado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItemConciliados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItemConciliado relacionadas */ 	
	public function deleteVtaAjusteHaberItemConciliados(){
            $obs = $this->getVtaAjusteHaberItemConciliados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemConciliadosCmb() VtaAjusteHaberItemConciliado relacionadas */ 	
	public function getVtaAjusteHaberItemConciliadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItemConciliado::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItemConciliado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItemConciliado::getVtaAjusteHaberItemConciliadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteHaberItemCheques */ 	
	public function getVtaAjusteHaberItemCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItemCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItemCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItemCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItemCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitemcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitemcheque = VtaAjusteHaberItemCheque::hidratarObjeto($fila);			
                $vtaajustehaberitemcheques[] = $vtaajustehaberitemcheque;
            }

            return $vtaajustehaberitemcheques;
	}	
	

	/* Método getVtaAjusteHaberItemChequesBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemCheques Habilitados */ 	
	public function getVtaAjusteHaberItemChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHaberItemCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItemCheque relacionadas */ 	
	public function deleteVtaAjusteHaberItemCheques(){
            $obs = $this->getVtaAjusteHaberItemCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemChequesCmb() VtaAjusteHaberItemCheque relacionadas */ 	
	public function getVtaAjusteHaberItemChequesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItemCheque::getVtaAjusteHaberItemChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemCheque::GEN_TABLA, VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberItemCheque */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemCheque::GEN_TABLA, VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberItemCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItemRetencions */ 	
	public function getVtaAjusteHaberItemRetencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItemRetencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItemRetencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItemRetencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItemRetencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitemretencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitemretencion = VtaAjusteHaberItemRetencion::hidratarObjeto($fila);			
                $vtaajustehaberitemretencions[] = $vtaajustehaberitemretencion;
            }

            return $vtaajustehaberitemretencions;
	}	
	

	/* Método getVtaAjusteHaberItemRetencionsBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemRetencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemRetencions Habilitados */ 	
	public function getVtaAjusteHaberItemRetencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHaberItemRetencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItemRetencion relacionadas */ 	
	public function deleteVtaAjusteHaberItemRetencions(){
            $obs = $this->getVtaAjusteHaberItemRetencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemRetencionsCmb() VtaAjusteHaberItemRetencion relacionadas */ 	
	public function getVtaAjusteHaberItemRetencionsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItemRetencion::getVtaAjusteHaberItemRetencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemRetencion::GEN_TABLA, VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberItemRetencion */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemRetencion::GEN_TABLA, VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberItemRetencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) */ 	
    public function getVtaAjusteHaber(){
        $o = new VtaAjusteHaber();
        $o->setId($this->getVtaAjusteHaberId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaber (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberEnArray(&$arr_os){
        if($this->getVtaAjusteHaberId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberId()])){
                $o = $arr_os[$this->getVtaAjusteHaberId()];
            }else{
                $o = VtaAjusteHaber::getOxId($this->getVtaAjusteHaberId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaber();
        }
        return $o;		
    }

	/* Metodo que retorna el GralFpFormaPago (Clave Foranea) */ 	
    public function getGralFpFormaPago(){
        $o = new GralFpFormaPago();
        $o->setId($this->getGralFpFormaPagoId());
        return $o;			
    }

	/* Metodo que retorna el GralFpFormaPago (Clave Foranea) en Array */ 	
    public function getGralFpFormaPagoEnArray(&$arr_os){
        if($this->getGralFpFormaPagoId() != 'null'){
            if(isset($arr_os[$this->getGralFpFormaPagoId()])){
                $o = $arr_os[$this->getGralFpFormaPagoId()];
            }else{
                $o = GralFpFormaPago::getOxId($this->getGralFpFormaPagoId());
                if($o){
                    $arr_os[$this->getGralFpFormaPagoId()] = $o;
                }
            }
        }else{
            $o = new GralFpFormaPago();
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

	/* Metodo que retorna el VtaAjusteHaberConcepto (Clave Foranea) */ 	
    public function getVtaAjusteHaberConcepto(){
        $o = new VtaAjusteHaberConcepto();
        $o->setId($this->getVtaAjusteHaberConceptoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaberConcepto (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberConceptoEnArray(&$arr_os){
        if($this->getVtaAjusteHaberConceptoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberConceptoId()])){
                $o = $arr_os[$this->getVtaAjusteHaberConceptoId()];
            }else{
                $o = VtaAjusteHaberConcepto::getOxId($this->getVtaAjusteHaberConceptoId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberConceptoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaberConcepto();
        }
        return $o;		
    }

	/* Metodo que retorna el GralMoneda (Clave Foranea) */ 	
    public function getGralMoneda(){
        $o = new GralMoneda();
        $o->setId($this->getGralMonedaId());
        return $o;			
    }

	/* Metodo que retorna el GralMoneda (Clave Foranea) en Array */ 	
    public function getGralMonedaEnArray(&$arr_os){
        if($this->getGralMonedaId() != 'null'){
            if(isset($arr_os[$this->getGralMonedaId()])){
                $o = $arr_os[$this->getGralMonedaId()];
            }else{
                $o = GralMoneda::getOxId($this->getGralMonedaId());
                if($o){
                    $arr_os[$this->getGralMonedaId()] = $o;
                }
            }
        }else{
            $o = new GralMoneda();
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
            		
        if($contexto_solicitante != VtaAjusteHaber::GEN_CLASE){
            if($this->getVtaAjusteHaber()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaber::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaber()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralFpFormaPago::GEN_CLASE){
            if($this->getGralFpFormaPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralFpFormaPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralFpFormaPago()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaAjusteHaberConcepto::GEN_CLASE){
            if($this->getVtaAjusteHaberConcepto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaberConcepto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaberConcepto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralMoneda::GEN_CLASE){
            if($this->getGralMoneda()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralMoneda::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralMoneda()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_ajuste_haber_item'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_ajuste_haber_item';");
            
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

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_id' */ 	
	static function getOsxVtaAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOsxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_concepto_id' */ 	
	static function getOxVtaAjusteHaberConceptoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_CONCEPTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_concepto_id' */ 	
	static function getOsxVtaAjusteHaberConceptoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_CONCEPTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_moneda_id' */ 	
	static function getOxGralMonedaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MONEDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_moneda_id' */ 	
	static function getOsxGralMonedaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MONEDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'tipo_cambio' */ 	
	static function getOxTipoCambio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_CAMBIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'tipo_cambio' */ 	
	static function getOsxTipoCambio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_CAMBIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'tipo_cambio_real' */ 	
	static function getOxTipoCambioReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_CAMBIO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'tipo_cambio_real' */ 	
	static function getOsxTipoCambioReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TIPO_CAMBIO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unitario_real' */ 	
	static function getOxImporteUnitarioReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_unitario_real' */ 	
	static function getOsxImporteUnitarioReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unitario' */ 	
	static function getOxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_unitario' */ 	
	static function getOsxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad' */ 	
	static function getOsxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'conciliado' */ 	
	static function getOxConciliado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONCILIADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'conciliado' */ 	
	static function getOsxConciliado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONCILIADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems(null, $criterio);
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

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
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

            $obs = self::getVtaAjusteHaberItems($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_ajuste_haber_item_adm');
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
                $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
                $c->addOrden(VtaAjusteHaberItem::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_ajuste_haber_items = VtaAjusteHaberItem::getVtaAjusteHaberItems(null, $c);

                $arr = array();
                foreach($vta_ajuste_haber_items as $vta_ajuste_haber_item){
                    $descripcion = $vta_ajuste_haber_item->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>