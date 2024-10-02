<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeOcAgrupacionItem
{ 
	
	const SES_PAGINACION = 'adm_pdeocagrupacionitem_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdeocagrupacionitem_paginas_registros';
	const SES_CRITERIOS = 'adm_pdeocagrupacionitem_criterios';
	
	const GEN_CLASE = 'PdeOcAgrupacionItem';
	const GEN_TABLA = 'pde_oc_agrupacion_item';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeOcAgrupacionItem */ 
	const GEN_ATTR_ID = 'pde_oc_agrupacion_item.id';
	const GEN_ATTR_DESCRIPCION = 'pde_oc_agrupacion_item.descripcion';
	const GEN_ATTR_CODIGO = 'pde_oc_agrupacion_item.codigo';
	const GEN_ATTR_PDE_OC_AGRUPACION_ID = 'pde_oc_agrupacion_item.pde_oc_agrupacion_id';
	const GEN_ATTR_INS_INSUMO_ID = 'pde_oc_agrupacion_item.ins_insumo_id';
	const GEN_ATTR_CANTIDAD = 'pde_oc_agrupacion_item.cantidad';
	const GEN_ATTR_IMPORTE_UNIDAD = 'pde_oc_agrupacion_item.importe_unidad';
	const GEN_ATTR_PRV_INSUMO_ID = 'pde_oc_agrupacion_item.prv_insumo_id';
	const GEN_ATTR_PRV_INSUMO_COSTO_ID = 'pde_oc_agrupacion_item.prv_insumo_costo_id';
	const GEN_ATTR_IMPORTE_ESPERADO = 'pde_oc_agrupacion_item.importe_esperado';
	const GEN_ATTR_AFECTA_COSTO = 'pde_oc_agrupacion_item.afecta_costo';
	const GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID = 'pde_oc_agrupacion_item.prv_descuento_financiero_id';
	const GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID = 'pde_oc_agrupacion_item.prv_descuento_comercial_id';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'pde_oc_agrupacion_item.gral_tipo_iva_id';
	const GEN_ATTR_IVA_INCLUIDO = 'pde_oc_agrupacion_item.iva_incluido';
	const GEN_ATTR_OBSERVACION = 'pde_oc_agrupacion_item.observacion';
	const GEN_ATTR_ORDEN = 'pde_oc_agrupacion_item.orden';
	const GEN_ATTR_ESTADO = 'pde_oc_agrupacion_item.estado';
	const GEN_ATTR_CREADO = 'pde_oc_agrupacion_item.creado';
	const GEN_ATTR_CREADO_POR = 'pde_oc_agrupacion_item.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_oc_agrupacion_item.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_oc_agrupacion_item.modificado_por';

	/* Constantes de Atributos Min de BPdeOcAgrupacionItem */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID = 'pde_oc_agrupacion_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_IMPORTE_UNIDAD = 'importe_unidad';
	const GEN_ATTR_MIN_PRV_INSUMO_ID = 'prv_insumo_id';
	const GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID = 'prv_insumo_costo_id';
	const GEN_ATTR_MIN_IMPORTE_ESPERADO = 'importe_esperado';
	const GEN_ATTR_MIN_AFECTA_COSTO = 'afecta_costo';
	const GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID = 'prv_descuento_financiero_id';
	const GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID = 'prv_descuento_comercial_id';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_IVA_INCLUIDO = 'iva_incluido';
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
	

	/* Atributos de BPdeOcAgrupacionItem */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $pde_oc_agrupacion_id;
	private $ins_insumo_id;
	private $cantidad;
	private $importe_unidad;
	private $prv_insumo_id;
	private $prv_insumo_costo_id;
	private $importe_esperado;
	private $afecta_costo;
	private $prv_descuento_financiero_id;
	private $prv_descuento_comercial_id;
	private $gral_tipo_iva_id;
	private $iva_incluido;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeOcAgrupacionItem */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPdeOcAgrupacionId(){ if(isset($this->pde_oc_agrupacion_id)){ return $this->pde_oc_agrupacion_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getImporteUnidad(){ if(isset($this->importe_unidad)){ return $this->importe_unidad; }else{ return 0; } }
	public function getPrvInsumoId(){ if(isset($this->prv_insumo_id)){ return $this->prv_insumo_id; }else{ return 'null'; } }
	public function getPrvInsumoCostoId(){ if(isset($this->prv_insumo_costo_id)){ return $this->prv_insumo_costo_id; }else{ return 'null'; } }
	public function getImporteEsperado(){ if(isset($this->importe_esperado)){ return $this->importe_esperado; }else{ return 0; } }
	public function getAfectaCosto(){ if(isset($this->afecta_costo)){ return $this->afecta_costo; }else{ return 0; } }
	public function getPrvDescuentoFinancieroId(){ if(isset($this->prv_descuento_financiero_id)){ return $this->prv_descuento_financiero_id; }else{ return 'null'; } }
	public function getPrvDescuentoComercialId(){ if(isset($this->prv_descuento_comercial_id)){ return $this->prv_descuento_comercial_id; }else{ return 'null'; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getIvaIncluido(){ if(isset($this->iva_incluido)){ return $this->iva_incluido; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdeOcAgrupacionItem */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PDE_OC_AGRUPACION_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_IMPORTE_UNIDAD."
				, ".self::GEN_ATTR_PRV_INSUMO_ID."
				, ".self::GEN_ATTR_PRV_INSUMO_COSTO_ID."
				, ".self::GEN_ATTR_IMPORTE_ESPERADO."
				, ".self::GEN_ATTR_AFECTA_COSTO."
				, ".self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID."
				, ".self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_IVA_INCLUIDO."
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
				$this->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
				$this->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
				$this->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
				$this->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
				$this->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
				$this->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
				$this->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
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
	public function setPdeOcAgrupacionId($v){ $this->pde_oc_agrupacion_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setImporteUnidad($v){ $this->importe_unidad = $v; }
	public function setPrvInsumoId($v){ $this->prv_insumo_id = $v; }
	public function setPrvInsumoCostoId($v){ $this->prv_insumo_costo_id = $v; }
	public function setImporteEsperado($v){ $this->importe_esperado = $v; }
	public function setAfectaCosto($v){ $this->afecta_costo = $v; }
	public function setPrvDescuentoFinancieroId($v){ $this->prv_descuento_financiero_id = $v; }
	public function setPrvDescuentoComercialId($v){ $this->prv_descuento_comercial_id = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setIvaIncluido($v){ $this->iva_incluido = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeOcAgrupacionItem();
            $o->setId($fila[PdeOcAgrupacionItem::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$o->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$o->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
			$o->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
			$o->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
			$o->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$o->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeOcAgrupacionItem */ 	
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

	/* Cambia el estado de BPdeOcAgrupacionItem */ 	
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

	/* Save de BPdeOcAgrupacionItem */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO."
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_oc_agrupacion_item_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getPdeOcAgrupacionId()."
						, ".$this->getInsInsumoId()."
						, '".$this->getCantidad()."'
						, '".$this->getImporteUnidad()."'
						, ".$this->getPrvInsumoId()."
						, ".$this->getPrvInsumoCostoId()."
						, '".$this->getImporteEsperado()."'
						, ".$this->getAfectaCosto()."
						, ".$this->getPrvDescuentoFinancieroId()."
						, ".$this->getPrvDescuentoComercialId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getIvaIncluido()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_oc_agrupacion_item_seq')";
            
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
                 
				 ".PdeOcAgrupacionItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID." = ".$this->getPdeOcAgrupacionId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID." = ".$this->getPrvInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO." = '".$this->getImporteEsperado()."'
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO." = ".$this->getAfectaCosto()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID." = ".$this->getPrvDescuentoComercialId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
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
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO."
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
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
						, ".$this->getPdeOcAgrupacionId()."
						, ".$this->getInsInsumoId()."
						, '".$this->getCantidad()."'
						, '".$this->getImporteUnidad()."'
						, ".$this->getPrvInsumoId()."
						, ".$this->getPrvInsumoCostoId()."
						, '".$this->getImporteEsperado()."'
						, ".$this->getAfectaCosto()."
						, ".$this->getPrvDescuentoFinancieroId()."
						, ".$this->getPrvDescuentoComercialId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getIvaIncluido()."
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
                     
				 ".PdeOcAgrupacionItem::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID." = ".$this->getPdeOcAgrupacionId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID." = ".$this->getPrvInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO." = '".$this->getImporteEsperado()."'
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO." = ".$this->getAfectaCosto()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID." = ".$this->getPrvDescuentoComercialId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
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
            $o = new PdeOcAgrupacionItem();
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

	/* Delete de BPdeOcAgrupacionItem */ 	
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
	
	public function duplicarPdeOcAgrupacionItem(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeOcAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeOcAgrupacionItem::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdeocagrupacionitems = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdeocagrupacionitem = new PdeOcAgrupacionItem();
                    $pdeocagrupacionitem->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdeocagrupacionitem->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdeocagrupacionitem->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdeocagrupacionitem->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
			$pdeocagrupacionitem->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$pdeocagrupacionitem->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$pdeocagrupacionitem->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$pdeocagrupacionitem->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$pdeocagrupacionitem->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
			$pdeocagrupacionitem->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
			$pdeocagrupacionitem->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
			$pdeocagrupacionitem->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$pdeocagrupacionitem->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
			$pdeocagrupacionitem->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$pdeocagrupacionitem->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$pdeocagrupacionitem->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdeocagrupacionitem->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdeocagrupacionitem->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdeocagrupacionitem->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdeocagrupacionitem->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdeocagrupacionitem->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdeocagrupacionitem->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdeocagrupacionitems[] = $pdeocagrupacionitem;
		}
		
		return $pdeocagrupacionitems;
	}	
	

	/* Método getPdeOcAgrupacionItems Habilitados */ 	
	static function getPdeOcAgrupacionItemsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeOcAgrupacionItem::getPdeOcAgrupacionItems($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeOcAgrupacionItems para listado de Backend */ 	
	static function getPdeOcAgrupacionItemsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeOcAgrupacionItem::getPdeOcAgrupacionItems($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeOcAgrupacionItemsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeOcAgrupacionItem::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado para select */ 	
	static function getPdeOcAgrupacionItemsCmbF($paginador = null, $criterio = null){
            $col = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de PdeOcAgrupacion */ 	
	static function getPdeOcAgrupacionItemsXPdeOcAgrupacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcAgrupacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPdeOcAgrupacionItemsXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de PrvInsumo */ 	
	static function getPdeOcAgrupacionItemsXPrvInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de PrvInsumoCosto */ 	
	static function getPdeOcAgrupacionItemsXPrvInsumoCostos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_INSUMO_COSTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvInsumoCostoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de PrvDescuentoFinanciero */ 	
	static function getPdeOcAgrupacionItemsXPrvDescuentoFinancieros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoFinancieroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de PrvDescuentoComercial */ 	
	static function getPdeOcAgrupacionItemsXPrvDescuentoComercials($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoComercialId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcAgrupacionItems filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getPdeOcAgrupacionItemsXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItems($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_oc_agrupacion_item_adm.php';
            $url_gestion = 'pde_oc_agrupacion_item_gestion.php';
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
	

	/* Metodo que retorna el PdeOcAgrupacion (Clave Foranea) */ 	
    public function getPdeOcAgrupacion(){
        $o = new PdeOcAgrupacion();
        $o->setId($this->getPdeOcAgrupacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcAgrupacion (Clave Foranea) en Array */ 	
    public function getPdeOcAgrupacionEnArray(&$arr_os){
        if($this->getPdeOcAgrupacionId() != 'null'){
            if(isset($arr_os[$this->getPdeOcAgrupacionId()])){
                $o = $arr_os[$this->getPdeOcAgrupacionId()];
            }else{
                $o = PdeOcAgrupacion::getOxId($this->getPdeOcAgrupacionId());
                if($o){
                    $arr_os[$this->getPdeOcAgrupacionId()] = $o;
                }
            }
        }else{
            $o = new PdeOcAgrupacion();
        }
        return $o;		
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

	/* Metodo que retorna el PrvInsumo (Clave Foranea) */ 	
    public function getPrvInsumo(){
        $o = new PrvInsumo();
        $o->setId($this->getPrvInsumoId());
        return $o;			
    }

	/* Metodo que retorna el PrvInsumo (Clave Foranea) en Array */ 	
    public function getPrvInsumoEnArray(&$arr_os){
        if($this->getPrvInsumoId() != 'null'){
            if(isset($arr_os[$this->getPrvInsumoId()])){
                $o = $arr_os[$this->getPrvInsumoId()];
            }else{
                $o = PrvInsumo::getOxId($this->getPrvInsumoId());
                if($o){
                    $arr_os[$this->getPrvInsumoId()] = $o;
                }
            }
        }else{
            $o = new PrvInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvInsumoCosto (Clave Foranea) */ 	
    public function getPrvInsumoCosto(){
        $o = new PrvInsumoCosto();
        $o->setId($this->getPrvInsumoCostoId());
        return $o;			
    }

	/* Metodo que retorna el PrvInsumoCosto (Clave Foranea) en Array */ 	
    public function getPrvInsumoCostoEnArray(&$arr_os){
        if($this->getPrvInsumoCostoId() != 'null'){
            if(isset($arr_os[$this->getPrvInsumoCostoId()])){
                $o = $arr_os[$this->getPrvInsumoCostoId()];
            }else{
                $o = PrvInsumoCosto::getOxId($this->getPrvInsumoCostoId());
                if($o){
                    $arr_os[$this->getPrvInsumoCostoId()] = $o;
                }
            }
        }else{
            $o = new PrvInsumoCosto();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvDescuentoFinanciero (Clave Foranea) */ 	
    public function getPrvDescuentoFinanciero(){
        $o = new PrvDescuentoFinanciero();
        $o->setId($this->getPrvDescuentoFinancieroId());
        return $o;			
    }

	/* Metodo que retorna el PrvDescuentoFinanciero (Clave Foranea) en Array */ 	
    public function getPrvDescuentoFinancieroEnArray(&$arr_os){
        if($this->getPrvDescuentoFinancieroId() != 'null'){
            if(isset($arr_os[$this->getPrvDescuentoFinancieroId()])){
                $o = $arr_os[$this->getPrvDescuentoFinancieroId()];
            }else{
                $o = PrvDescuentoFinanciero::getOxId($this->getPrvDescuentoFinancieroId());
                if($o){
                    $arr_os[$this->getPrvDescuentoFinancieroId()] = $o;
                }
            }
        }else{
            $o = new PrvDescuentoFinanciero();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvDescuentoComercial (Clave Foranea) */ 	
    public function getPrvDescuentoComercial(){
        $o = new PrvDescuentoComercial();
        $o->setId($this->getPrvDescuentoComercialId());
        return $o;			
    }

	/* Metodo que retorna el PrvDescuentoComercial (Clave Foranea) en Array */ 	
    public function getPrvDescuentoComercialEnArray(&$arr_os){
        if($this->getPrvDescuentoComercialId() != 'null'){
            if(isset($arr_os[$this->getPrvDescuentoComercialId()])){
                $o = $arr_os[$this->getPrvDescuentoComercialId()];
            }else{
                $o = PrvDescuentoComercial::getOxId($this->getPrvDescuentoComercialId());
                if($o){
                    $arr_os[$this->getPrvDescuentoComercialId()] = $o;
                }
            }
        }else{
            $o = new PrvDescuentoComercial();
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
            		
        if($contexto_solicitante != PdeOcAgrupacion::GEN_CLASE){
            if($this->getPdeOcAgrupacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcAgrupacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcAgrupacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsInsumo::GEN_CLASE){
            if($this->getInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvInsumo::GEN_CLASE){
            if($this->getPrvInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvInsumoCosto::GEN_CLASE){
            if($this->getPrvInsumoCosto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvInsumoCosto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvInsumoCosto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvDescuentoFinanciero::GEN_CLASE){
            if($this->getPrvDescuentoFinanciero()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvDescuentoFinanciero::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvDescuentoFinanciero()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvDescuentoComercial::GEN_CLASE){
            if($this->getPrvDescuentoComercial()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvDescuentoComercial::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvDescuentoComercial()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_oc_agrupacion_item'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_oc_agrupacion_item';");
            
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

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_agrupacion_id' */ 	
	static function getOxPdeOcAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_agrupacion_id' */ 	
	static function getOsxPdeOcAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unidad' */ 	
	static function getOxImporteUnidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_unidad' */ 	
	static function getOsxImporteUnidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_insumo_id' */ 	
	static function getOxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_insumo_id' */ 	
	static function getOsxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_insumo_costo_id' */ 	
	static function getOxPrvInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_insumo_costo_id' */ 	
	static function getOsxPrvInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_esperado' */ 	
	static function getOxImporteEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_esperado' */ 	
	static function getOsxImporteEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afecta_costo' */ 	
	static function getOxAfectaCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFECTA_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afecta_costo' */ 	
	static function getOsxAfectaCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFECTA_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOsxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_comercial_id' */ 	
	static function getOxPrvDescuentoComercialId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_descuento_comercial_id' */ 	
	static function getOsxPrvDescuentoComercialId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_incluido' */ 	
	static function getOxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_incluido' */ 	
	static function getOsxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems(null, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
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

            $obs = self::getPdeOcAgrupacionItems($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_oc_agrupacion_item_adm');
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

	/* retorna el total de acuerdo a criterio y paginador activos 'importe_unidad' */ 	
	static function getImporteUnidadAdmTotal(){
            $criterio = new Criterio(self::SES_CRITERIOS);
            $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $criterio->setCriteriosInicial();

            $paginador = new Paginador(self::getSesPagCantidad(), self::getSesPag());
            $os = self::getPdeOcAgrupacionItems($paginador, $criterio);

            $total = 0;
            foreach($os as $o){
                $total+= $o->getImporteUnidad();
            }
            return $total;
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
                $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
                $c->addOrden(PdeOcAgrupacionItem::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_oc_agrupacion_items = PdeOcAgrupacionItem::getPdeOcAgrupacionItems(null, $c);

                $arr = array();
                foreach($pde_oc_agrupacion_items as $pde_oc_agrupacion_item){
                    $descripcion = $pde_oc_agrupacion_item->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>