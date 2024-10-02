<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsVentaMlInfo
{ 
	
	const SES_PAGINACION = 'adm_insventamlinfo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insventamlinfo_paginas_registros';
	const SES_CRITERIOS = 'adm_insventamlinfo_criterios';
	
	const GEN_CLASE = 'InsVentaMlInfo';
	const GEN_TABLA = 'ins_venta_ml_info';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsVentaMlInfo */ 
	const GEN_ATTR_ID = 'ins_venta_ml_info.id';
	const GEN_ATTR_INS_INSUMO_ID = 'ins_venta_ml_info.ins_insumo_id';
	const GEN_ATTR_DESCRIPCION = 'ins_venta_ml_info.descripcion';
	const GEN_ATTR_DESCRIPCION_BREVE = 'ins_venta_ml_info.descripcion_breve';
	const GEN_ATTR_DESCRIPCION_EMPRESA = 'ins_venta_ml_info.descripcion_empresa';
	const GEN_ATTR_CANTIDAD = 'ins_venta_ml_info.cantidad';
	const GEN_ATTR_IMPORTE = 'ins_venta_ml_info.importe';
	const GEN_ATTR_CODIGO = 'ins_venta_ml_info.codigo';
	const GEN_ATTR_ML_IDENTIFICADOR = 'ins_venta_ml_info.ml_identificador';
	const GEN_ATTR_ML_CATEGORY_ID = 'ins_venta_ml_info.ml_category_id';
	const GEN_ATTR_ML_CATEGORY_DESC = 'ins_venta_ml_info.ml_category_desc';
	const GEN_ATTR_ML_CATEGORY_COD = 'ins_venta_ml_info.ml_category_cod';
	const GEN_ATTR_ML_LISTING_TYPE_ID = 'ins_venta_ml_info.ml_listing_type_id';
	const GEN_ATTR_ML_LISTING_TYPE_DESC = 'ins_venta_ml_info.ml_listing_type_desc';
	const GEN_ATTR_ML_CONDITION_ID = 'ins_venta_ml_info.ml_condition_id';
	const GEN_ATTR_ML_CONDITION_DESC = 'ins_venta_ml_info.ml_condition_desc';
	const GEN_ATTR_ML_SHIPPING_MODE_ID = 'ins_venta_ml_info.ml_shipping_mode_id';
	const GEN_ATTR_ML_SHIPPING_MODE_DESC = 'ins_venta_ml_info.ml_shipping_mode_desc';
	const GEN_ATTR_ML_PERMALINK = 'ins_venta_ml_info.ml_permalink';
	const GEN_ATTR_ML_START_TIME = 'ins_venta_ml_info.ml_start_time';
	const GEN_ATTR_ML_EXPIRATION_TIME = 'ins_venta_ml_info.ml_expiration_time';
	const GEN_ATTR_ML_SELLER = 'ins_venta_ml_info.ml_seller';
	const GEN_ATTR_ML_STATUS = 'ins_venta_ml_info.ml_status';
	const GEN_ATTR_ML_ITEM_STATUS_ID = 'ins_venta_ml_info.ml_item_status_id';
	const GEN_ATTR_ML_INITIAL_QUANTITY = 'ins_venta_ml_info.ml_initial_quantity';
	const GEN_ATTR_ML_AVAILABLE_QUANTITY = 'ins_venta_ml_info.ml_available_quantity';
	const GEN_ATTR_ML_SOLD_QUANTITY = 'ins_venta_ml_info.ml_sold_quantity';
	const GEN_ATTR_ML_PRICE = 'ins_venta_ml_info.ml_price';
	const GEN_ATTR_ML_ULTIMA_ACTUALIZACION = 'ins_venta_ml_info.ml_ultima_actualizacion';
	const GEN_ATTR_ML_FREE_SHIPPING = 'ins_venta_ml_info.ml_free_shipping';
	const GEN_ATTR_ML_LOCAL_PICKUP = 'ins_venta_ml_info.ml_local_pickup';
	const GEN_ATTR_OBSERVACION = 'ins_venta_ml_info.observacion';
	const GEN_ATTR_ORDEN = 'ins_venta_ml_info.orden';
	const GEN_ATTR_ESTADO = 'ins_venta_ml_info.estado';
	const GEN_ATTR_EDITADO = 'ins_venta_ml_info.editado';
	const GEN_ATTR_PUBLICADO = 'ins_venta_ml_info.publicado';
	const GEN_ATTR_CREADO = 'ins_venta_ml_info.creado';
	const GEN_ATTR_CREADO_POR = 'ins_venta_ml_info.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_venta_ml_info.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_venta_ml_info.modificado_por';

	/* Constantes de Atributos Min de BInsVentaMlInfo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_BREVE = 'descripcion_breve';
	const GEN_ATTR_MIN_DESCRIPCION_EMPRESA = 'descripcion_empresa';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_IMPORTE = 'importe';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_ML_IDENTIFICADOR = 'ml_identificador';
	const GEN_ATTR_MIN_ML_CATEGORY_ID = 'ml_category_id';
	const GEN_ATTR_MIN_ML_CATEGORY_DESC = 'ml_category_desc';
	const GEN_ATTR_MIN_ML_CATEGORY_COD = 'ml_category_cod';
	const GEN_ATTR_MIN_ML_LISTING_TYPE_ID = 'ml_listing_type_id';
	const GEN_ATTR_MIN_ML_LISTING_TYPE_DESC = 'ml_listing_type_desc';
	const GEN_ATTR_MIN_ML_CONDITION_ID = 'ml_condition_id';
	const GEN_ATTR_MIN_ML_CONDITION_DESC = 'ml_condition_desc';
	const GEN_ATTR_MIN_ML_SHIPPING_MODE_ID = 'ml_shipping_mode_id';
	const GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC = 'ml_shipping_mode_desc';
	const GEN_ATTR_MIN_ML_PERMALINK = 'ml_permalink';
	const GEN_ATTR_MIN_ML_START_TIME = 'ml_start_time';
	const GEN_ATTR_MIN_ML_EXPIRATION_TIME = 'ml_expiration_time';
	const GEN_ATTR_MIN_ML_SELLER = 'ml_seller';
	const GEN_ATTR_MIN_ML_STATUS = 'ml_status';
	const GEN_ATTR_MIN_ML_ITEM_STATUS_ID = 'ml_item_status_id';
	const GEN_ATTR_MIN_ML_INITIAL_QUANTITY = 'ml_initial_quantity';
	const GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY = 'ml_available_quantity';
	const GEN_ATTR_MIN_ML_SOLD_QUANTITY = 'ml_sold_quantity';
	const GEN_ATTR_MIN_ML_PRICE = 'ml_price';
	const GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION = 'ml_ultima_actualizacion';
	const GEN_ATTR_MIN_ML_FREE_SHIPPING = 'ml_free_shipping';
	const GEN_ATTR_MIN_ML_LOCAL_PICKUP = 'ml_local_pickup';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_ORDEN = 'orden';
	const GEN_ATTR_MIN_ESTADO = 'estado';
	const GEN_ATTR_MIN_EDITADO = 'editado';
	const GEN_ATTR_MIN_PUBLICADO = 'publicado';
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
	

	/* Atributos de BInsVentaMlInfo */ 
	private $id;
	private $ins_insumo_id;
	private $descripcion;
	private $descripcion_breve;
	private $descripcion_empresa;
	private $cantidad;
	private $importe;
	private $codigo;
	private $ml_identificador;
	private $ml_category_id;
	private $ml_category_desc;
	private $ml_category_cod;
	private $ml_listing_type_id;
	private $ml_listing_type_desc;
	private $ml_condition_id;
	private $ml_condition_desc;
	private $ml_shipping_mode_id;
	private $ml_shipping_mode_desc;
	private $ml_permalink;
	private $ml_start_time;
	private $ml_expiration_time;
	private $ml_seller;
	private $ml_status;
	private $ml_item_status_id;
	private $ml_initial_quantity;
	private $ml_available_quantity;
	private $ml_sold_quantity;
	private $ml_price;
	private $ml_ultima_actualizacion;
	private $ml_free_shipping;
	private $ml_local_pickup;
	private $observacion;
	private $orden;
	private $estado;
	private $editado;
	private $publicado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsVentaMlInfo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionBreve(){ if(isset($this->descripcion_breve)){ return $this->descripcion_breve; }else{ return ''; } }
	public function getDescripcionEmpresa(){ if(isset($this->descripcion_empresa)){ return $this->descripcion_empresa; }else{ return ''; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getImporte(){ if(isset($this->importe)){ return $this->importe; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getMlIdentificador(){ if(isset($this->ml_identificador)){ return $this->ml_identificador; }else{ return ''; } }
	public function getMlCategoryId(){ if(isset($this->ml_category_id)){ return $this->ml_category_id; }else{ return 'null'; } }
	public function getMlCategoryDesc(){ if(isset($this->ml_category_desc)){ return $this->ml_category_desc; }else{ return ''; } }
	public function getMlCategoryCod(){ if(isset($this->ml_category_cod)){ return $this->ml_category_cod; }else{ return ''; } }
	public function getMlListingTypeId(){ if(isset($this->ml_listing_type_id)){ return $this->ml_listing_type_id; }else{ return 'null'; } }
	public function getMlListingTypeDesc(){ if(isset($this->ml_listing_type_desc)){ return $this->ml_listing_type_desc; }else{ return ''; } }
	public function getMlConditionId(){ if(isset($this->ml_condition_id)){ return $this->ml_condition_id; }else{ return 'null'; } }
	public function getMlConditionDesc(){ if(isset($this->ml_condition_desc)){ return $this->ml_condition_desc; }else{ return ''; } }
	public function getMlShippingModeId(){ if(isset($this->ml_shipping_mode_id)){ return $this->ml_shipping_mode_id; }else{ return 'null'; } }
	public function getMlShippingModeDesc(){ if(isset($this->ml_shipping_mode_desc)){ return $this->ml_shipping_mode_desc; }else{ return ''; } }
	public function getMlPermalink(){ if(isset($this->ml_permalink)){ return $this->ml_permalink; }else{ return ''; } }
	public function getMlStartTime(){ if(isset($this->ml_start_time)){ return $this->ml_start_time; }else{ return ''; } }
	public function getMlExpirationTime(){ if(isset($this->ml_expiration_time)){ return $this->ml_expiration_time; }else{ return ''; } }
	public function getMlSeller(){ if(isset($this->ml_seller)){ return $this->ml_seller; }else{ return ''; } }
	public function getMlStatus(){ if(isset($this->ml_status)){ return $this->ml_status; }else{ return ''; } }
	public function getMlItemStatusId(){ if(isset($this->ml_item_status_id)){ return $this->ml_item_status_id; }else{ return 'null'; } }
	public function getMlInitialQuantity(){ if(isset($this->ml_initial_quantity)){ return $this->ml_initial_quantity; }else{ return 'null'; } }
	public function getMlAvailableQuantity(){ if(isset($this->ml_available_quantity)){ return $this->ml_available_quantity; }else{ return 'null'; } }
	public function getMlSoldQuantity(){ if(isset($this->ml_sold_quantity)){ return $this->ml_sold_quantity; }else{ return 'null'; } }
	public function getMlPrice(){ if(isset($this->ml_price)){ return $this->ml_price; }else{ return 0; } }
	public function getMlUltimaActualizacion(){ if(isset($this->ml_ultima_actualizacion)){ return $this->ml_ultima_actualizacion; }else{ return ''; } }
	public function getMlFreeShipping(){ if(isset($this->ml_free_shipping)){ return $this->ml_free_shipping; }else{ return 0; } }
	public function getMlLocalPickup(){ if(isset($this->ml_local_pickup)){ return $this->ml_local_pickup; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getEditado(){ if(isset($this->editado)){ return $this->editado; }else{ return 0; } }
	public function getPublicado(){ if(isset($this->publicado)){ return $this->publicado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsVentaMlInfo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_BREVE."
				, ".self::GEN_ATTR_DESCRIPCION_EMPRESA."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_IMPORTE."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_ML_IDENTIFICADOR."
				, ".self::GEN_ATTR_ML_CATEGORY_ID."
				, ".self::GEN_ATTR_ML_CATEGORY_DESC."
				, ".self::GEN_ATTR_ML_CATEGORY_COD."
				, ".self::GEN_ATTR_ML_LISTING_TYPE_ID."
				, ".self::GEN_ATTR_ML_LISTING_TYPE_DESC."
				, ".self::GEN_ATTR_ML_CONDITION_ID."
				, ".self::GEN_ATTR_ML_CONDITION_DESC."
				, ".self::GEN_ATTR_ML_SHIPPING_MODE_ID."
				, ".self::GEN_ATTR_ML_SHIPPING_MODE_DESC."
				, ".self::GEN_ATTR_ML_PERMALINK."
				, ".self::GEN_ATTR_ML_START_TIME."
				, ".self::GEN_ATTR_ML_EXPIRATION_TIME."
				, ".self::GEN_ATTR_ML_SELLER."
				, ".self::GEN_ATTR_ML_STATUS."
				, ".self::GEN_ATTR_ML_ITEM_STATUS_ID."
				, ".self::GEN_ATTR_ML_INITIAL_QUANTITY."
				, ".self::GEN_ATTR_ML_AVAILABLE_QUANTITY."
				, ".self::GEN_ATTR_ML_SOLD_QUANTITY."
				, ".self::GEN_ATTR_ML_PRICE."
				, ".self::GEN_ATTR_ML_ULTIMA_ACTUALIZACION."
				, ".self::GEN_ATTR_ML_FREE_SHIPPING."
				, ".self::GEN_ATTR_ML_LOCAL_PICKUP."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_ORDEN."
				, ".self::GEN_ATTR_ESTADO."
				, ".self::GEN_ATTR_EDITADO."
				, ".self::GEN_ATTR_PUBLICADO."
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
                    				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setDescripcionBreve($fila[self::GEN_ATTR_MIN_DESCRIPCION_BREVE]);
				$this->setDescripcionEmpresa($fila[self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setMlIdentificador($fila[self::GEN_ATTR_MIN_ML_IDENTIFICADOR]);
				$this->setMlCategoryId($fila[self::GEN_ATTR_MIN_ML_CATEGORY_ID]);
				$this->setMlCategoryDesc($fila[self::GEN_ATTR_MIN_ML_CATEGORY_DESC]);
				$this->setMlCategoryCod($fila[self::GEN_ATTR_MIN_ML_CATEGORY_COD]);
				$this->setMlListingTypeId($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID]);
				$this->setMlListingTypeDesc($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC]);
				$this->setMlConditionId($fila[self::GEN_ATTR_MIN_ML_CONDITION_ID]);
				$this->setMlConditionDesc($fila[self::GEN_ATTR_MIN_ML_CONDITION_DESC]);
				$this->setMlShippingModeId($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID]);
				$this->setMlShippingModeDesc($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC]);
				$this->setMlPermalink($fila[self::GEN_ATTR_MIN_ML_PERMALINK]);
				$this->setMlStartTime($fila[self::GEN_ATTR_MIN_ML_START_TIME]);
				$this->setMlExpirationTime($fila[self::GEN_ATTR_MIN_ML_EXPIRATION_TIME]);
				$this->setMlSeller($fila[self::GEN_ATTR_MIN_ML_SELLER]);
				$this->setMlStatus($fila[self::GEN_ATTR_MIN_ML_STATUS]);
				$this->setMlItemStatusId($fila[self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID]);
				$this->setMlInitialQuantity($fila[self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY]);
				$this->setMlAvailableQuantity($fila[self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY]);
				$this->setMlSoldQuantity($fila[self::GEN_ATTR_MIN_ML_SOLD_QUANTITY]);
				$this->setMlPrice($fila[self::GEN_ATTR_MIN_ML_PRICE]);
				$this->setMlUltimaActualizacion($fila[self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION]);
				$this->setMlFreeShipping($fila[self::GEN_ATTR_MIN_ML_FREE_SHIPPING]);
				$this->setMlLocalPickup($fila[self::GEN_ATTR_MIN_ML_LOCAL_PICKUP]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
				$this->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
				$this->setEditado($fila[self::GEN_ATTR_MIN_EDITADO]);
				$this->setPublicado($fila[self::GEN_ATTR_MIN_PUBLICADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setDescripcionBreve($v){ $this->descripcion_breve = $v; }
	public function setDescripcionEmpresa($v){ $this->descripcion_empresa = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setImporte($v){ $this->importe = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setMlIdentificador($v){ $this->ml_identificador = $v; }
	public function setMlCategoryId($v){ $this->ml_category_id = $v; }
	public function setMlCategoryDesc($v){ $this->ml_category_desc = $v; }
	public function setMlCategoryCod($v){ $this->ml_category_cod = $v; }
	public function setMlListingTypeId($v){ $this->ml_listing_type_id = $v; }
	public function setMlListingTypeDesc($v){ $this->ml_listing_type_desc = $v; }
	public function setMlConditionId($v){ $this->ml_condition_id = $v; }
	public function setMlConditionDesc($v){ $this->ml_condition_desc = $v; }
	public function setMlShippingModeId($v){ $this->ml_shipping_mode_id = $v; }
	public function setMlShippingModeDesc($v){ $this->ml_shipping_mode_desc = $v; }
	public function setMlPermalink($v){ $this->ml_permalink = $v; }
	public function setMlStartTime($v){ $this->ml_start_time = $v; }
	public function setMlExpirationTime($v){ $this->ml_expiration_time = $v; }
	public function setMlSeller($v){ $this->ml_seller = $v; }
	public function setMlStatus($v){ $this->ml_status = $v; }
	public function setMlItemStatusId($v){ $this->ml_item_status_id = $v; }
	public function setMlInitialQuantity($v){ $this->ml_initial_quantity = $v; }
	public function setMlAvailableQuantity($v){ $this->ml_available_quantity = $v; }
	public function setMlSoldQuantity($v){ $this->ml_sold_quantity = $v; }
	public function setMlPrice($v){ $this->ml_price = $v; }
	public function setMlUltimaActualizacion($v){ $this->ml_ultima_actualizacion = $v; }
	public function setMlFreeShipping($v){ $this->ml_free_shipping = $v; }
	public function setMlLocalPickup($v){ $this->ml_local_pickup = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setEditado($v){ $this->editado = $v; }
	public function setPublicado($v){ $this->publicado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsVentaMlInfo();
            $o->setId($fila[InsVentaMlInfo::GEN_ATTR_MIN_ID], false);
            
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionBreve($fila[self::GEN_ATTR_MIN_DESCRIPCION_BREVE]);
			$o->setDescripcionEmpresa($fila[self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setMlIdentificador($fila[self::GEN_ATTR_MIN_ML_IDENTIFICADOR]);
			$o->setMlCategoryId($fila[self::GEN_ATTR_MIN_ML_CATEGORY_ID]);
			$o->setMlCategoryDesc($fila[self::GEN_ATTR_MIN_ML_CATEGORY_DESC]);
			$o->setMlCategoryCod($fila[self::GEN_ATTR_MIN_ML_CATEGORY_COD]);
			$o->setMlListingTypeId($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID]);
			$o->setMlListingTypeDesc($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC]);
			$o->setMlConditionId($fila[self::GEN_ATTR_MIN_ML_CONDITION_ID]);
			$o->setMlConditionDesc($fila[self::GEN_ATTR_MIN_ML_CONDITION_DESC]);
			$o->setMlShippingModeId($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID]);
			$o->setMlShippingModeDesc($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC]);
			$o->setMlPermalink($fila[self::GEN_ATTR_MIN_ML_PERMALINK]);
			$o->setMlStartTime($fila[self::GEN_ATTR_MIN_ML_START_TIME]);
			$o->setMlExpirationTime($fila[self::GEN_ATTR_MIN_ML_EXPIRATION_TIME]);
			$o->setMlSeller($fila[self::GEN_ATTR_MIN_ML_SELLER]);
			$o->setMlStatus($fila[self::GEN_ATTR_MIN_ML_STATUS]);
			$o->setMlItemStatusId($fila[self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID]);
			$o->setMlInitialQuantity($fila[self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY]);
			$o->setMlAvailableQuantity($fila[self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY]);
			$o->setMlSoldQuantity($fila[self::GEN_ATTR_MIN_ML_SOLD_QUANTITY]);
			$o->setMlPrice($fila[self::GEN_ATTR_MIN_ML_PRICE]);
			$o->setMlUltimaActualizacion($fila[self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION]);
			$o->setMlFreeShipping($fila[self::GEN_ATTR_MIN_ML_FREE_SHIPPING]);
			$o->setMlLocalPickup($fila[self::GEN_ATTR_MIN_ML_LOCAL_PICKUP]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setEditado($fila[self::GEN_ATTR_MIN_EDITADO]);
			$o->setPublicado($fila[self::GEN_ATTR_MIN_PUBLICADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsVentaMlInfo */ 	
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

	/* Cambia el estado de BInsVentaMlInfo */ 	
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

	/* Save de BInsVentaMlInfo */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_BREVE."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ML_IDENTIFICADOR."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_ID."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_DESC."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_COD."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_ID."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_DESC."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC."
						, ".self::GEN_ATTR_MIN_ML_PERMALINK."
						, ".self::GEN_ATTR_MIN_ML_START_TIME."
						, ".self::GEN_ATTR_MIN_ML_EXPIRATION_TIME."
						, ".self::GEN_ATTR_MIN_ML_SELLER."
						, ".self::GEN_ATTR_MIN_ML_STATUS."
						, ".self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID."
						, ".self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_SOLD_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_PRICE."
						, ".self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_ML_FREE_SHIPPING."
						, ".self::GEN_ATTR_MIN_ML_LOCAL_PICKUP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_EDITADO."
						, ".self::GEN_ATTR_MIN_PUBLICADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_venta_ml_info_seq'), 
                ".$this->getInsInsumoId()."
						, '".$this->getDescripcion()."'
						, '".$this->getDescripcionBreve()."'
						, '".$this->getDescripcionEmpresa()."'
						, '".$this->getCantidad()."'
						, '".$this->getImporte()."'
						, '".$this->getCodigo()."'
						, '".$this->getMlIdentificador()."'
						, ".$this->getMlCategoryId()."
						, '".$this->getMlCategoryDesc()."'
						, '".$this->getMlCategoryCod()."'
						, ".$this->getMlListingTypeId()."
						, '".$this->getMlListingTypeDesc()."'
						, ".$this->getMlConditionId()."
						, '".$this->getMlConditionDesc()."'
						, ".$this->getMlShippingModeId()."
						, '".$this->getMlShippingModeDesc()."'
						, '".$this->getMlPermalink()."'
						, '".$this->getMlStartTime()."'
						, '".$this->getMlExpirationTime()."'
						, '".$this->getMlSeller()."'
						, '".$this->getMlStatus()."'
						, ".$this->getMlItemStatusId()."
						, ".$this->getMlInitialQuantity()."
						, ".$this->getMlAvailableQuantity()."
						, ".$this->getMlSoldQuantity()."
						, '".$this->getMlPrice()."'
						, '".$this->getMlUltimaActualizacion()."'
						, ".$this->getMlFreeShipping()."
						, ".$this->getMlLocalPickup()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, ".$this->getEditado()."
						, ".$this->getPublicado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_venta_ml_info_seq')";
            
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
                 
				 ".InsVentaMlInfo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_BREVE." = '".$this->getDescripcionBreve()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA." = '".$this->getDescripcionEmpresa()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ML_IDENTIFICADOR." = '".$this->getMlIdentificador()."'
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_ID." = ".$this->getMlCategoryId()."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_DESC." = '".$this->getMlCategoryDesc()."'
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_COD." = '".$this->getMlCategoryCod()."'
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID." = ".$this->getMlListingTypeId()."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC." = '".$this->getMlListingTypeDesc()."'
						, ".self::GEN_ATTR_MIN_ML_CONDITION_ID." = ".$this->getMlConditionId()."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_DESC." = '".$this->getMlConditionDesc()."'
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID." = ".$this->getMlShippingModeId()."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC." = '".$this->getMlShippingModeDesc()."'
						, ".self::GEN_ATTR_MIN_ML_PERMALINK." = '".$this->getMlPermalink()."'
						, ".self::GEN_ATTR_MIN_ML_START_TIME." = '".$this->getMlStartTime()."'
						, ".self::GEN_ATTR_MIN_ML_EXPIRATION_TIME." = '".$this->getMlExpirationTime()."'
						, ".self::GEN_ATTR_MIN_ML_SELLER." = '".$this->getMlSeller()."'
						, ".self::GEN_ATTR_MIN_ML_STATUS." = '".$this->getMlStatus()."'
						, ".self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID." = ".$this->getMlItemStatusId()."
						, ".self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY." = ".$this->getMlInitialQuantity()."
						, ".self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY." = ".$this->getMlAvailableQuantity()."
						, ".self::GEN_ATTR_MIN_ML_SOLD_QUANTITY." = ".$this->getMlSoldQuantity()."
						, ".self::GEN_ATTR_MIN_ML_PRICE." = '".$this->getMlPrice()."'
						, ".self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION." = '".$this->getMlUltimaActualizacion()."'
						, ".self::GEN_ATTR_MIN_ML_FREE_SHIPPING." = ".$this->getMlFreeShipping()."
						, ".self::GEN_ATTR_MIN_ML_LOCAL_PICKUP." = ".$this->getMlLocalPickup()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_EDITADO." = ".$this->getEditado()."
						, ".self::GEN_ATTR_MIN_PUBLICADO." = ".$this->getPublicado()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_BREVE."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ML_IDENTIFICADOR."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_ID."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_DESC."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_COD."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_ID."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_DESC."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC."
						, ".self::GEN_ATTR_MIN_ML_PERMALINK."
						, ".self::GEN_ATTR_MIN_ML_START_TIME."
						, ".self::GEN_ATTR_MIN_ML_EXPIRATION_TIME."
						, ".self::GEN_ATTR_MIN_ML_SELLER."
						, ".self::GEN_ATTR_MIN_ML_STATUS."
						, ".self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID."
						, ".self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_SOLD_QUANTITY."
						, ".self::GEN_ATTR_MIN_ML_PRICE."
						, ".self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION."
						, ".self::GEN_ATTR_MIN_ML_FREE_SHIPPING."
						, ".self::GEN_ATTR_MIN_ML_LOCAL_PICKUP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_EDITADO."
						, ".self::GEN_ATTR_MIN_PUBLICADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getInsInsumoId()."
						, '".$this->getDescripcion()."'
						, '".$this->getDescripcionBreve()."'
						, '".$this->getDescripcionEmpresa()."'
						, '".$this->getCantidad()."'
						, '".$this->getImporte()."'
						, '".$this->getCodigo()."'
						, '".$this->getMlIdentificador()."'
						, ".$this->getMlCategoryId()."
						, '".$this->getMlCategoryDesc()."'
						, '".$this->getMlCategoryCod()."'
						, ".$this->getMlListingTypeId()."
						, '".$this->getMlListingTypeDesc()."'
						, ".$this->getMlConditionId()."
						, '".$this->getMlConditionDesc()."'
						, ".$this->getMlShippingModeId()."
						, '".$this->getMlShippingModeDesc()."'
						, '".$this->getMlPermalink()."'
						, '".$this->getMlStartTime()."'
						, '".$this->getMlExpirationTime()."'
						, '".$this->getMlSeller()."'
						, '".$this->getMlStatus()."'
						, ".$this->getMlItemStatusId()."
						, ".$this->getMlInitialQuantity()."
						, ".$this->getMlAvailableQuantity()."
						, ".$this->getMlSoldQuantity()."
						, '".$this->getMlPrice()."'
						, '".$this->getMlUltimaActualizacion()."'
						, ".$this->getMlFreeShipping()."
						, ".$this->getMlLocalPickup()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, ".$this->getEditado()."
						, ".$this->getPublicado()."
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
                     
				 ".InsVentaMlInfo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_BREVE." = '".$this->getDescripcionBreve()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA." = '".$this->getDescripcionEmpresa()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ML_IDENTIFICADOR." = '".$this->getMlIdentificador()."'
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_ID." = ".$this->getMlCategoryId()."
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_DESC." = '".$this->getMlCategoryDesc()."'
						, ".self::GEN_ATTR_MIN_ML_CATEGORY_COD." = '".$this->getMlCategoryCod()."'
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID." = ".$this->getMlListingTypeId()."
						, ".self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC." = '".$this->getMlListingTypeDesc()."'
						, ".self::GEN_ATTR_MIN_ML_CONDITION_ID." = ".$this->getMlConditionId()."
						, ".self::GEN_ATTR_MIN_ML_CONDITION_DESC." = '".$this->getMlConditionDesc()."'
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID." = ".$this->getMlShippingModeId()."
						, ".self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC." = '".$this->getMlShippingModeDesc()."'
						, ".self::GEN_ATTR_MIN_ML_PERMALINK." = '".$this->getMlPermalink()."'
						, ".self::GEN_ATTR_MIN_ML_START_TIME." = '".$this->getMlStartTime()."'
						, ".self::GEN_ATTR_MIN_ML_EXPIRATION_TIME." = '".$this->getMlExpirationTime()."'
						, ".self::GEN_ATTR_MIN_ML_SELLER." = '".$this->getMlSeller()."'
						, ".self::GEN_ATTR_MIN_ML_STATUS." = '".$this->getMlStatus()."'
						, ".self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID." = ".$this->getMlItemStatusId()."
						, ".self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY." = ".$this->getMlInitialQuantity()."
						, ".self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY." = ".$this->getMlAvailableQuantity()."
						, ".self::GEN_ATTR_MIN_ML_SOLD_QUANTITY." = ".$this->getMlSoldQuantity()."
						, ".self::GEN_ATTR_MIN_ML_PRICE." = '".$this->getMlPrice()."'
						, ".self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION." = '".$this->getMlUltimaActualizacion()."'
						, ".self::GEN_ATTR_MIN_ML_FREE_SHIPPING." = ".$this->getMlFreeShipping()."
						, ".self::GEN_ATTR_MIN_ML_LOCAL_PICKUP." = ".$this->getMlLocalPickup()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_EDITADO." = ".$this->getEditado()."
						, ".self::GEN_ATTR_MIN_PUBLICADO." = ".$this->getPublicado()."
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
            $o = new InsVentaMlInfo();
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

	/* Delete de BInsVentaMlInfo */ 	
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
	
            // se elimina la coleccion de InsVentaMlInfoMlAttributes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsVentaMlInfoMlAttributes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsVentaMlInfo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsVentaMlInfos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsVentaMlInfo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$insventamlinfos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insventamlinfo = new InsVentaMlInfo();
                    $insventamlinfo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insventamlinfo->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$insventamlinfo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$insventamlinfo->setDescripcionBreve($fila[self::GEN_ATTR_MIN_DESCRIPCION_BREVE]);
			$insventamlinfo->setDescripcionEmpresa($fila[self::GEN_ATTR_MIN_DESCRIPCION_EMPRESA]);
			$insventamlinfo->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$insventamlinfo->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$insventamlinfo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$insventamlinfo->setMlIdentificador($fila[self::GEN_ATTR_MIN_ML_IDENTIFICADOR]);
			$insventamlinfo->setMlCategoryId($fila[self::GEN_ATTR_MIN_ML_CATEGORY_ID]);
			$insventamlinfo->setMlCategoryDesc($fila[self::GEN_ATTR_MIN_ML_CATEGORY_DESC]);
			$insventamlinfo->setMlCategoryCod($fila[self::GEN_ATTR_MIN_ML_CATEGORY_COD]);
			$insventamlinfo->setMlListingTypeId($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_ID]);
			$insventamlinfo->setMlListingTypeDesc($fila[self::GEN_ATTR_MIN_ML_LISTING_TYPE_DESC]);
			$insventamlinfo->setMlConditionId($fila[self::GEN_ATTR_MIN_ML_CONDITION_ID]);
			$insventamlinfo->setMlConditionDesc($fila[self::GEN_ATTR_MIN_ML_CONDITION_DESC]);
			$insventamlinfo->setMlShippingModeId($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_ID]);
			$insventamlinfo->setMlShippingModeDesc($fila[self::GEN_ATTR_MIN_ML_SHIPPING_MODE_DESC]);
			$insventamlinfo->setMlPermalink($fila[self::GEN_ATTR_MIN_ML_PERMALINK]);
			$insventamlinfo->setMlStartTime($fila[self::GEN_ATTR_MIN_ML_START_TIME]);
			$insventamlinfo->setMlExpirationTime($fila[self::GEN_ATTR_MIN_ML_EXPIRATION_TIME]);
			$insventamlinfo->setMlSeller($fila[self::GEN_ATTR_MIN_ML_SELLER]);
			$insventamlinfo->setMlStatus($fila[self::GEN_ATTR_MIN_ML_STATUS]);
			$insventamlinfo->setMlItemStatusId($fila[self::GEN_ATTR_MIN_ML_ITEM_STATUS_ID]);
			$insventamlinfo->setMlInitialQuantity($fila[self::GEN_ATTR_MIN_ML_INITIAL_QUANTITY]);
			$insventamlinfo->setMlAvailableQuantity($fila[self::GEN_ATTR_MIN_ML_AVAILABLE_QUANTITY]);
			$insventamlinfo->setMlSoldQuantity($fila[self::GEN_ATTR_MIN_ML_SOLD_QUANTITY]);
			$insventamlinfo->setMlPrice($fila[self::GEN_ATTR_MIN_ML_PRICE]);
			$insventamlinfo->setMlUltimaActualizacion($fila[self::GEN_ATTR_MIN_ML_ULTIMA_ACTUALIZACION]);
			$insventamlinfo->setMlFreeShipping($fila[self::GEN_ATTR_MIN_ML_FREE_SHIPPING]);
			$insventamlinfo->setMlLocalPickup($fila[self::GEN_ATTR_MIN_ML_LOCAL_PICKUP]);
			$insventamlinfo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insventamlinfo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$insventamlinfo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$insventamlinfo->setEditado($fila[self::GEN_ATTR_MIN_EDITADO]);
			$insventamlinfo->setPublicado($fila[self::GEN_ATTR_MIN_PUBLICADO]);
			$insventamlinfo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insventamlinfo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insventamlinfo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insventamlinfo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insventamlinfos[] = $insventamlinfo;
		}
		
		return $insventamlinfos;
	}	
	

	/* Método getInsVentaMlInfos Habilitados */ 	
	static function getInsVentaMlInfosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsVentaMlInfo::getInsVentaMlInfos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsVentaMlInfos para listado de Backend */ 	
	static function getInsVentaMlInfosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsVentaMlInfo::getInsVentaMlInfos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsVentaMlInfosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsVentaMlInfo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsVentaMlInfo::getInsVentaMlInfos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsVentaMlInfos filtrado para select */ 	
	static function getInsVentaMlInfosCmbF($paginador = null, $criterio = null){
            $col = InsVentaMlInfo::getInsVentaMlInfos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getInsVentaMlInfosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de MlCategory */ 	
	static function getInsVentaMlInfosXMlCategorys($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_ML_CATEGORY_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlCategoryId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de MlListingType */ 	
	static function getInsVentaMlInfosXMlListingTypes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_ML_LISTING_TYPE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlListingTypeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de MlCondition */ 	
	static function getInsVentaMlInfosXMlConditions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_ML_CONDITION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlConditionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de MlShippingMode */ 	
	static function getInsVentaMlInfosXMlShippingModes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_ML_SHIPPING_MODE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlShippingModeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsVentaMlInfos filtrado por una coleccion de objetos foraneos de MlItemStatus */ 	
	static function getInsVentaMlInfosXMlItemStatuss($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_ML_ITEM_STATUS_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getMlItemStatusId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_venta_ml_info_adm.php';
            $url_gestion = 'ins_venta_ml_info_gestion.php';
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
	

	/* Metodo getInsVentaMlInfoMlAttributes */ 	
	public function getInsVentaMlInfoMlAttributes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsVentaMlInfoMlAttribute::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsVentaMlInfoMlAttribute::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsVentaMlInfoMlAttribute::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insventamlinfomlattributes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insventamlinfomlattribute = InsVentaMlInfoMlAttribute::hidratarObjeto($fila);			
                $insventamlinfomlattributes[] = $insventamlinfomlattribute;
            }

            return $insventamlinfomlattributes;
	}	
	

	/* Método getInsVentaMlInfoMlAttributesBloque para MasInfo */ 	
	public function getInsVentaMlInfoMlAttributesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsVentaMlInfoMlAttributes Habilitados */ 	
	public function getInsVentaMlInfoMlAttributesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsVentaMlInfoMlAttribute */ 	
	public function getInsVentaMlInfoMlAttribute($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsVentaMlInfoMlAttributes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsVentaMlInfoMlAttribute relacionadas */ 	
	public function deleteInsVentaMlInfoMlAttributes(){
            $obs = $this->getInsVentaMlInfoMlAttributes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsVentaMlInfoMlAttributesCmb() InsVentaMlInfoMlAttribute relacionadas */ 	
	public function getInsVentaMlInfoMlAttributesCmb(){
            $c = new Criterio();
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);
            $c->setCriterios();

            $os = InsVentaMlInfoMlAttribute::getInsVentaMlInfoMlAttributesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener MlAttributes (Coleccion) relacionados a traves de InsVentaMlInfoMlAttribute */ 	
	public function getMlAttributesXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(MlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlAttribute::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfoMlAttribute::GEN_TABLA, InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, MlAttribute::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlAttribute::getMlAttributes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de MlAttributes relacionados a traves de InsVentaMlInfoMlAttribute */ 	
	public function getCantidadMlAttributesXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(MlAttribute::GEN_ATTR_ID);
            if($estado){
                $c->add(MlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlAttribute::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfoMlAttribute::GEN_TABLA, InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, MlAttribute::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlAttribute::getMlAttributes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener MlAttribute (Objeto) relacionado a traves de InsVentaMlInfoMlAttribute */ 	
	public function getMlAttributeXInsVentaMlInfoMlAttribute($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getMlAttributesXInsVentaMlInfoMlAttribute($paginador, $criterio, $estado, $arr_ordens);
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

	/* Metodo que retorna el MlCategory (Clave Foranea) */ 	
    public function getMlCategory(){
        $o = new MlCategory();
        $o->setId($this->getMlCategoryId());
        return $o;			
    }

	/* Metodo que retorna el MlCategory (Clave Foranea) en Array */ 	
    public function getMlCategoryEnArray(&$arr_os){
        if($this->getMlCategoryId() != 'null'){
            if(isset($arr_os[$this->getMlCategoryId()])){
                $o = $arr_os[$this->getMlCategoryId()];
            }else{
                $o = MlCategory::getOxId($this->getMlCategoryId());
                if($o){
                    $arr_os[$this->getMlCategoryId()] = $o;
                }
            }
        }else{
            $o = new MlCategory();
        }
        return $o;		
    }

	/* Metodo que retorna el MlListingType (Clave Foranea) */ 	
    public function getMlListingType(){
        $o = new MlListingType();
        $o->setId($this->getMlListingTypeId());
        return $o;			
    }

	/* Metodo que retorna el MlListingType (Clave Foranea) en Array */ 	
    public function getMlListingTypeEnArray(&$arr_os){
        if($this->getMlListingTypeId() != 'null'){
            if(isset($arr_os[$this->getMlListingTypeId()])){
                $o = $arr_os[$this->getMlListingTypeId()];
            }else{
                $o = MlListingType::getOxId($this->getMlListingTypeId());
                if($o){
                    $arr_os[$this->getMlListingTypeId()] = $o;
                }
            }
        }else{
            $o = new MlListingType();
        }
        return $o;		
    }

	/* Metodo que retorna el MlCondition (Clave Foranea) */ 	
    public function getMlCondition(){
        $o = new MlCondition();
        $o->setId($this->getMlConditionId());
        return $o;			
    }

	/* Metodo que retorna el MlCondition (Clave Foranea) en Array */ 	
    public function getMlConditionEnArray(&$arr_os){
        if($this->getMlConditionId() != 'null'){
            if(isset($arr_os[$this->getMlConditionId()])){
                $o = $arr_os[$this->getMlConditionId()];
            }else{
                $o = MlCondition::getOxId($this->getMlConditionId());
                if($o){
                    $arr_os[$this->getMlConditionId()] = $o;
                }
            }
        }else{
            $o = new MlCondition();
        }
        return $o;		
    }

	/* Metodo que retorna el MlShippingMode (Clave Foranea) */ 	
    public function getMlShippingMode(){
        $o = new MlShippingMode();
        $o->setId($this->getMlShippingModeId());
        return $o;			
    }

	/* Metodo que retorna el MlShippingMode (Clave Foranea) en Array */ 	
    public function getMlShippingModeEnArray(&$arr_os){
        if($this->getMlShippingModeId() != 'null'){
            if(isset($arr_os[$this->getMlShippingModeId()])){
                $o = $arr_os[$this->getMlShippingModeId()];
            }else{
                $o = MlShippingMode::getOxId($this->getMlShippingModeId());
                if($o){
                    $arr_os[$this->getMlShippingModeId()] = $o;
                }
            }
        }else{
            $o = new MlShippingMode();
        }
        return $o;		
    }

	/* Metodo que retorna el MlItemStatus (Clave Foranea) */ 	
    public function getMlItemStatus(){
        $o = new MlItemStatus();
        $o->setId($this->getMlItemStatusId());
        return $o;			
    }

	/* Metodo que retorna el MlItemStatus (Clave Foranea) en Array */ 	
    public function getMlItemStatusEnArray(&$arr_os){
        if($this->getMlItemStatusId() != 'null'){
            if(isset($arr_os[$this->getMlItemStatusId()])){
                $o = $arr_os[$this->getMlItemStatusId()];
            }else{
                $o = MlItemStatus::getOxId($this->getMlItemStatusId());
                if($o){
                    $arr_os[$this->getMlItemStatusId()] = $o;
                }
            }
        }else{
            $o = new MlItemStatus();
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
            		
        if($contexto_solicitante != MlCategory::GEN_CLASE){
            if($this->getMlCategory()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlCategory::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlCategory()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != MlListingType::GEN_CLASE){
            if($this->getMlListingType()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlListingType::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlListingType()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != MlCondition::GEN_CLASE){
            if($this->getMlCondition()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlCondition::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlCondition()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != MlShippingMode::GEN_CLASE){
            if($this->getMlShippingMode()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlShippingMode::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlShippingMode()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != MlItemStatus::GEN_CLASE){
            if($this->getMlItemStatus()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(MlItemStatus::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getMlItemStatus()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_venta_ml_info'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_venta_ml_info';");
            
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

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_breve' */ 	
	static function getOxDescripcionBreve($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_BREVE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_breve' */ 	
	static function getOsxDescripcionBreve($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_BREVE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_empresa' */ 	
	static function getOxDescripcionEmpresa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_EMPRESA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_empresa' */ 	
	static function getOsxDescripcionEmpresa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_EMPRESA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe' */ 	
	static function getOxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe' */ 	
	static function getOsxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_identificador' */ 	
	static function getOxMlIdentificador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_IDENTIFICADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_identificador' */ 	
	static function getOsxMlIdentificador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_IDENTIFICADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_category_id' */ 	
	static function getOxMlCategoryId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_category_id' */ 	
	static function getOsxMlCategoryId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_category_desc' */ 	
	static function getOxMlCategoryDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_category_desc' */ 	
	static function getOsxMlCategoryDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_category_cod' */ 	
	static function getOxMlCategoryCod($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_COD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_category_cod' */ 	
	static function getOsxMlCategoryCod($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CATEGORY_COD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_listing_type_id' */ 	
	static function getOxMlListingTypeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LISTING_TYPE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_listing_type_id' */ 	
	static function getOsxMlListingTypeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LISTING_TYPE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_listing_type_desc' */ 	
	static function getOxMlListingTypeDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LISTING_TYPE_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_listing_type_desc' */ 	
	static function getOsxMlListingTypeDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LISTING_TYPE_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_condition_id' */ 	
	static function getOxMlConditionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CONDITION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_condition_id' */ 	
	static function getOsxMlConditionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CONDITION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_condition_desc' */ 	
	static function getOxMlConditionDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CONDITION_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_condition_desc' */ 	
	static function getOsxMlConditionDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_CONDITION_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_shipping_mode_id' */ 	
	static function getOxMlShippingModeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SHIPPING_MODE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_shipping_mode_id' */ 	
	static function getOsxMlShippingModeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SHIPPING_MODE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_shipping_mode_desc' */ 	
	static function getOxMlShippingModeDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SHIPPING_MODE_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_shipping_mode_desc' */ 	
	static function getOsxMlShippingModeDesc($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SHIPPING_MODE_DESC, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_permalink' */ 	
	static function getOxMlPermalink($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_PERMALINK, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_permalink' */ 	
	static function getOsxMlPermalink($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_PERMALINK, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_start_time' */ 	
	static function getOxMlStartTime($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_START_TIME, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_start_time' */ 	
	static function getOsxMlStartTime($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_START_TIME, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_expiration_time' */ 	
	static function getOxMlExpirationTime($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_EXPIRATION_TIME, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_expiration_time' */ 	
	static function getOsxMlExpirationTime($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_EXPIRATION_TIME, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_seller' */ 	
	static function getOxMlSeller($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SELLER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_seller' */ 	
	static function getOsxMlSeller($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SELLER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_status' */ 	
	static function getOxMlStatus($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_STATUS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_status' */ 	
	static function getOsxMlStatus($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_STATUS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_item_status_id' */ 	
	static function getOxMlItemStatusId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ITEM_STATUS_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_item_status_id' */ 	
	static function getOsxMlItemStatusId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ITEM_STATUS_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_initial_quantity' */ 	
	static function getOxMlInitialQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_INITIAL_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_initial_quantity' */ 	
	static function getOsxMlInitialQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_INITIAL_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_available_quantity' */ 	
	static function getOxMlAvailableQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_AVAILABLE_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_available_quantity' */ 	
	static function getOsxMlAvailableQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_AVAILABLE_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_sold_quantity' */ 	
	static function getOxMlSoldQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SOLD_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_sold_quantity' */ 	
	static function getOsxMlSoldQuantity($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_SOLD_QUANTITY, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_price' */ 	
	static function getOxMlPrice($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_PRICE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_price' */ 	
	static function getOsxMlPrice($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_PRICE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_ultima_actualizacion' */ 	
	static function getOxMlUltimaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ULTIMA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_ultima_actualizacion' */ 	
	static function getOsxMlUltimaActualizacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_ULTIMA_ACTUALIZACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_free_shipping' */ 	
	static function getOxMlFreeShipping($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_FREE_SHIPPING, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_free_shipping' */ 	
	static function getOsxMlFreeShipping($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_FREE_SHIPPING, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ml_local_pickup' */ 	
	static function getOxMlLocalPickup($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LOCAL_PICKUP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ml_local_pickup' */ 	
	static function getOsxMlLocalPickup($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ML_LOCAL_PICKUP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'editado' */ 	
	static function getOxEditado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EDITADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'editado' */ 	
	static function getOsxEditado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EDITADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'publicado' */ 	
	static function getOxPublicado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUBLICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'publicado' */ 	
	static function getOsxPublicado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUBLICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos(null, $criterio);
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

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
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

            $obs = self::getInsVentaMlInfos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_venta_ml_info_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'ml_ultima_actualizacion' */ 	
	public function getMlUltimaActualizacionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getMlUltimaActualizacion(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getMlUltimaActualizacionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getMlUltimaActualizacionDiferenciaDias();
        
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
                $c->addTabla(InsVentaMlInfo::GEN_TABLA);
                $c->addOrden(InsVentaMlInfo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_venta_ml_infos = InsVentaMlInfo::getInsVentaMlInfos(null, $c);

                $arr = array();
                foreach($ins_venta_ml_infos as $ins_venta_ml_info){
                    $descripcion = $ins_venta_ml_info->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>