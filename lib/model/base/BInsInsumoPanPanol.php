<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsInsumoPanPanol
{ 
	
	const SES_PAGINACION = 'adm_insinsumopanpanol_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insinsumopanpanol_paginas_registros';
	const SES_CRITERIOS = 'adm_insinsumopanpanol_criterios';
	
	const GEN_CLASE = 'InsInsumoPanPanol';
	const GEN_TABLA = 'ins_insumo_pan_panol';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsInsumoPanPanol */ 
	const GEN_ATTR_ID = 'ins_insumo_pan_panol.id';
	const GEN_ATTR_INS_INSUMO_ID = 'ins_insumo_pan_panol.ins_insumo_id';
	const GEN_ATTR_PAN_PANOL_ID = 'ins_insumo_pan_panol.pan_panol_id';
	const GEN_ATTR_PAN_UBI_PISO_ID = 'ins_insumo_pan_panol.pan_ubi_piso_id';
	const GEN_ATTR_PAN_UBI_PASILLO_ID = 'ins_insumo_pan_panol.pan_ubi_pasillo_id';
	const GEN_ATTR_PAN_UBI_ESTANTE_ID = 'ins_insumo_pan_panol.pan_ubi_estante_id';
	const GEN_ATTR_PAN_UBI_ALTURA_ID = 'ins_insumo_pan_panol.pan_ubi_altura_id';
	const GEN_ATTR_PAN_UBI_CASILLERO_ID = 'ins_insumo_pan_panol.pan_ubi_casillero_id';
	const GEN_ATTR_PAN_UBI_CELDA_ID = 'ins_insumo_pan_panol.pan_ubi_celda_id';
	const GEN_ATTR_INS_CLASIFICACION_ID = 'ins_insumo_pan_panol.ins_clasificacion_id';
	const GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID = 'ins_insumo_pan_panol.ins_stock_tipo_configuracion_id';
	const GEN_ATTR_PUNTO_MINIMO = 'ins_insumo_pan_panol.punto_minimo';
	const GEN_ATTR_PUNTO_PEDIDO = 'ins_insumo_pan_panol.punto_pedido';
	const GEN_ATTR_PUNTO_MAXIMO = 'ins_insumo_pan_panol.punto_maximo';
	const GEN_ATTR_PUNTO_MINIMO_SUGERIDO = 'ins_insumo_pan_panol.punto_minimo_sugerido';
	const GEN_ATTR_PUNTO_PEDIDO_SUGERIDO = 'ins_insumo_pan_panol.punto_pedido_sugerido';
	const GEN_ATTR_PUNTO_MAXIMO_SUGERIDO = 'ins_insumo_pan_panol.punto_maximo_sugerido';
	const GEN_ATTR_OBSERVACION = 'ins_insumo_pan_panol.observacion';
	const GEN_ATTR_CREADO = 'ins_insumo_pan_panol.creado';
	const GEN_ATTR_CREADO_POR = 'ins_insumo_pan_panol.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_insumo_pan_panol.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_insumo_pan_panol.modificado_por';

	/* Constantes de Atributos Min de BInsInsumoPanPanol */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PAN_PANOL_ID = 'pan_panol_id';
	const GEN_ATTR_MIN_PAN_UBI_PISO_ID = 'pan_ubi_piso_id';
	const GEN_ATTR_MIN_PAN_UBI_PASILLO_ID = 'pan_ubi_pasillo_id';
	const GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID = 'pan_ubi_estante_id';
	const GEN_ATTR_MIN_PAN_UBI_ALTURA_ID = 'pan_ubi_altura_id';
	const GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID = 'pan_ubi_casillero_id';
	const GEN_ATTR_MIN_PAN_UBI_CELDA_ID = 'pan_ubi_celda_id';
	const GEN_ATTR_MIN_INS_CLASIFICACION_ID = 'ins_clasificacion_id';
	const GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID = 'ins_stock_tipo_configuracion_id';
	const GEN_ATTR_MIN_PUNTO_MINIMO = 'punto_minimo';
	const GEN_ATTR_MIN_PUNTO_PEDIDO = 'punto_pedido';
	const GEN_ATTR_MIN_PUNTO_MAXIMO = 'punto_maximo';
	const GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO = 'punto_minimo_sugerido';
	const GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO = 'punto_pedido_sugerido';
	const GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO = 'punto_maximo_sugerido';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
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
	

	/* Atributos de BInsInsumoPanPanol */ 
	private $id;
	private $ins_insumo_id;
	private $pan_panol_id;
	private $pan_ubi_piso_id;
	private $pan_ubi_pasillo_id;
	private $pan_ubi_estante_id;
	private $pan_ubi_altura_id;
	private $pan_ubi_casillero_id;
	private $pan_ubi_celda_id;
	private $ins_clasificacion_id;
	private $ins_stock_tipo_configuracion_id;
	private $punto_minimo;
	private $punto_pedido;
	private $punto_maximo;
	private $punto_minimo_sugerido;
	private $punto_pedido_sugerido;
	private $punto_maximo_sugerido;
	private $observacion;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsInsumoPanPanol */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPanPanolId(){ if(isset($this->pan_panol_id)){ return $this->pan_panol_id; }else{ return 'null'; } }
	public function getPanUbiPisoId(){ if(isset($this->pan_ubi_piso_id)){ return $this->pan_ubi_piso_id; }else{ return 'null'; } }
	public function getPanUbiPasilloId(){ if(isset($this->pan_ubi_pasillo_id)){ return $this->pan_ubi_pasillo_id; }else{ return 'null'; } }
	public function getPanUbiEstanteId(){ if(isset($this->pan_ubi_estante_id)){ return $this->pan_ubi_estante_id; }else{ return 'null'; } }
	public function getPanUbiAlturaId(){ if(isset($this->pan_ubi_altura_id)){ return $this->pan_ubi_altura_id; }else{ return 'null'; } }
	public function getPanUbiCasilleroId(){ if(isset($this->pan_ubi_casillero_id)){ return $this->pan_ubi_casillero_id; }else{ return 'null'; } }
	public function getPanUbiCeldaId(){ if(isset($this->pan_ubi_celda_id)){ return $this->pan_ubi_celda_id; }else{ return 'null'; } }
	public function getInsClasificacionId(){ if(isset($this->ins_clasificacion_id)){ return $this->ins_clasificacion_id; }else{ return 'null'; } }
	public function getInsStockTipoConfiguracionId(){ if(isset($this->ins_stock_tipo_configuracion_id)){ return $this->ins_stock_tipo_configuracion_id; }else{ return 'null'; } }
	public function getPuntoMinimo(){ if(isset($this->punto_minimo)){ return $this->punto_minimo; }else{ return 0; } }
	public function getPuntoPedido(){ if(isset($this->punto_pedido)){ return $this->punto_pedido; }else{ return 0; } }
	public function getPuntoMaximo(){ if(isset($this->punto_maximo)){ return $this->punto_maximo; }else{ return 0; } }
	public function getPuntoMinimoSugerido(){ if(isset($this->punto_minimo_sugerido)){ return $this->punto_minimo_sugerido; }else{ return 0; } }
	public function getPuntoPedidoSugerido(){ if(isset($this->punto_pedido_sugerido)){ return $this->punto_pedido_sugerido; }else{ return 0; } }
	public function getPuntoMaximoSugerido(){ if(isset($this->punto_maximo_sugerido)){ return $this->punto_maximo_sugerido; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsInsumoPanPanol */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PAN_PANOL_ID."
				, ".self::GEN_ATTR_PAN_UBI_PISO_ID."
				, ".self::GEN_ATTR_PAN_UBI_PASILLO_ID."
				, ".self::GEN_ATTR_PAN_UBI_ESTANTE_ID."
				, ".self::GEN_ATTR_PAN_UBI_ALTURA_ID."
				, ".self::GEN_ATTR_PAN_UBI_CASILLERO_ID."
				, ".self::GEN_ATTR_PAN_UBI_CELDA_ID."
				, ".self::GEN_ATTR_INS_CLASIFICACION_ID."
				, ".self::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID."
				, ".self::GEN_ATTR_PUNTO_MINIMO."
				, ".self::GEN_ATTR_PUNTO_PEDIDO."
				, ".self::GEN_ATTR_PUNTO_MAXIMO."
				, ".self::GEN_ATTR_PUNTO_MINIMO_SUGERIDO."
				, ".self::GEN_ATTR_PUNTO_PEDIDO_SUGERIDO."
				, ".self::GEN_ATTR_PUNTO_MAXIMO_SUGERIDO."
				, ".self::GEN_ATTR_OBSERVACION."
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
				$this->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
				$this->setPanUbiPisoId($fila[self::GEN_ATTR_MIN_PAN_UBI_PISO_ID]);
				$this->setPanUbiPasilloId($fila[self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID]);
				$this->setPanUbiEstanteId($fila[self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID]);
				$this->setPanUbiAlturaId($fila[self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID]);
				$this->setPanUbiCasilleroId($fila[self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID]);
				$this->setPanUbiCeldaId($fila[self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID]);
				$this->setInsClasificacionId($fila[self::GEN_ATTR_MIN_INS_CLASIFICACION_ID]);
				$this->setInsStockTipoConfiguracionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID]);
				$this->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
				$this->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
				$this->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
				$this->setPuntoMinimoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO]);
				$this->setPuntoPedidoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO]);
				$this->setPuntoMaximoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPanPanolId($v){ $this->pan_panol_id = $v; }
	public function setPanUbiPisoId($v){ $this->pan_ubi_piso_id = $v; }
	public function setPanUbiPasilloId($v){ $this->pan_ubi_pasillo_id = $v; }
	public function setPanUbiEstanteId($v){ $this->pan_ubi_estante_id = $v; }
	public function setPanUbiAlturaId($v){ $this->pan_ubi_altura_id = $v; }
	public function setPanUbiCasilleroId($v){ $this->pan_ubi_casillero_id = $v; }
	public function setPanUbiCeldaId($v){ $this->pan_ubi_celda_id = $v; }
	public function setInsClasificacionId($v){ $this->ins_clasificacion_id = $v; }
	public function setInsStockTipoConfiguracionId($v){ $this->ins_stock_tipo_configuracion_id = $v; }
	public function setPuntoMinimo($v){ $this->punto_minimo = $v; }
	public function setPuntoPedido($v){ $this->punto_pedido = $v; }
	public function setPuntoMaximo($v){ $this->punto_maximo = $v; }
	public function setPuntoMinimoSugerido($v){ $this->punto_minimo_sugerido = $v; }
	public function setPuntoPedidoSugerido($v){ $this->punto_pedido_sugerido = $v; }
	public function setPuntoMaximoSugerido($v){ $this->punto_maximo_sugerido = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsInsumoPanPanol();
            $o->setId($fila[InsInsumoPanPanol::GEN_ATTR_MIN_ID], false);
            
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$o->setPanUbiPisoId($fila[self::GEN_ATTR_MIN_PAN_UBI_PISO_ID]);
			$o->setPanUbiPasilloId($fila[self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID]);
			$o->setPanUbiEstanteId($fila[self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID]);
			$o->setPanUbiAlturaId($fila[self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID]);
			$o->setPanUbiCasilleroId($fila[self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID]);
			$o->setPanUbiCeldaId($fila[self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID]);
			$o->setInsClasificacionId($fila[self::GEN_ATTR_MIN_INS_CLASIFICACION_ID]);
			$o->setInsStockTipoConfiguracionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID]);
			$o->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
			$o->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
			$o->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
			$o->setPuntoMinimoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO]);
			$o->setPuntoPedidoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO]);
			$o->setPuntoMaximoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsInsumoPanPanol */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BInsInsumoPanPanol */ 	
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

	/* Save de BInsInsumoPanPanol */ 	
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
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PISO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID."
						, ".self::GEN_ATTR_MIN_INS_CLASIFICACION_ID."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_insumo_pan_panol_seq'), 
                ".$this->getInsInsumoId()."
						, ".$this->getPanPanolId()."
						, ".$this->getPanUbiPisoId()."
						, ".$this->getPanUbiPasilloId()."
						, ".$this->getPanUbiEstanteId()."
						, ".$this->getPanUbiAlturaId()."
						, ".$this->getPanUbiCasilleroId()."
						, ".$this->getPanUbiCeldaId()."
						, ".$this->getInsClasificacionId()."
						, ".$this->getInsStockTipoConfiguracionId()."
						, '".$this->getPuntoMinimo()."'
						, '".$this->getPuntoPedido()."'
						, '".$this->getPuntoMaximo()."'
						, '".$this->getPuntoMinimoSugerido()."'
						, '".$this->getPuntoPedidoSugerido()."'
						, '".$this->getPuntoMaximoSugerido()."'
						, '".$this->getObservacion()."'
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_insumo_pan_panol_seq')";
            
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
                 
				 ".InsInsumoPanPanol::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PISO_ID." = ".$this->getPanUbiPisoId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID." = ".$this->getPanUbiPasilloId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID." = ".$this->getPanUbiEstanteId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID." = ".$this->getPanUbiAlturaId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID." = ".$this->getPanUbiCasilleroId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID." = ".$this->getPanUbiCeldaId()."
						, ".self::GEN_ATTR_MIN_INS_CLASIFICACION_ID." = ".$this->getInsClasificacionId()."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID." = ".$this->getInsStockTipoConfiguracionId()."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO." = '".$this->getPuntoMinimo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO." = '".$this->getPuntoPedido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO." = '".$this->getPuntoMaximo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO." = '".$this->getPuntoMinimoSugerido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO." = '".$this->getPuntoPedidoSugerido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO." = '".$this->getPuntoMaximoSugerido()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PISO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID."
						, ".self::GEN_ATTR_MIN_INS_CLASIFICACION_ID."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getInsInsumoId()."
						, ".$this->getPanPanolId()."
						, ".$this->getPanUbiPisoId()."
						, ".$this->getPanUbiPasilloId()."
						, ".$this->getPanUbiEstanteId()."
						, ".$this->getPanUbiAlturaId()."
						, ".$this->getPanUbiCasilleroId()."
						, ".$this->getPanUbiCeldaId()."
						, ".$this->getInsClasificacionId()."
						, ".$this->getInsStockTipoConfiguracionId()."
						, '".$this->getPuntoMinimo()."'
						, '".$this->getPuntoPedido()."'
						, '".$this->getPuntoMaximo()."'
						, '".$this->getPuntoMinimoSugerido()."'
						, '".$this->getPuntoPedidoSugerido()."'
						, '".$this->getPuntoMaximoSugerido()."'
						, '".$this->getObservacion()."'
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
                     
				 ".InsInsumoPanPanol::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PISO_ID." = ".$this->getPanUbiPisoId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID." = ".$this->getPanUbiPasilloId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID." = ".$this->getPanUbiEstanteId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID." = ".$this->getPanUbiAlturaId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID." = ".$this->getPanUbiCasilleroId()."
						, ".self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID." = ".$this->getPanUbiCeldaId()."
						, ".self::GEN_ATTR_MIN_INS_CLASIFICACION_ID." = ".$this->getInsClasificacionId()."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID." = ".$this->getInsStockTipoConfiguracionId()."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO." = '".$this->getPuntoMinimo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO." = '".$this->getPuntoPedido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO." = '".$this->getPuntoMaximo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO." = '".$this->getPuntoMinimoSugerido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO." = '".$this->getPuntoPedidoSugerido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO." = '".$this->getPuntoMaximoSugerido()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
            $o = new InsInsumoPanPanol();
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

	/* Delete de BInsInsumoPanPanol */ 	
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
	
	public function duplicarInsInsumoPanPanol(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsInsumoPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsInsumoPanPanol::setAplicarFiltrosDeAlcance($criterio);

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
	
		$insinsumopanpanols = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insinsumopanpanol = new InsInsumoPanPanol();
                    $insinsumopanpanol->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insinsumopanpanol->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$insinsumopanpanol->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$insinsumopanpanol->setPanUbiPisoId($fila[self::GEN_ATTR_MIN_PAN_UBI_PISO_ID]);
			$insinsumopanpanol->setPanUbiPasilloId($fila[self::GEN_ATTR_MIN_PAN_UBI_PASILLO_ID]);
			$insinsumopanpanol->setPanUbiEstanteId($fila[self::GEN_ATTR_MIN_PAN_UBI_ESTANTE_ID]);
			$insinsumopanpanol->setPanUbiAlturaId($fila[self::GEN_ATTR_MIN_PAN_UBI_ALTURA_ID]);
			$insinsumopanpanol->setPanUbiCasilleroId($fila[self::GEN_ATTR_MIN_PAN_UBI_CASILLERO_ID]);
			$insinsumopanpanol->setPanUbiCeldaId($fila[self::GEN_ATTR_MIN_PAN_UBI_CELDA_ID]);
			$insinsumopanpanol->setInsClasificacionId($fila[self::GEN_ATTR_MIN_INS_CLASIFICACION_ID]);
			$insinsumopanpanol->setInsStockTipoConfiguracionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_CONFIGURACION_ID]);
			$insinsumopanpanol->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
			$insinsumopanpanol->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
			$insinsumopanpanol->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
			$insinsumopanpanol->setPuntoMinimoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO_SUGERIDO]);
			$insinsumopanpanol->setPuntoPedidoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO_SUGERIDO]);
			$insinsumopanpanol->setPuntoMaximoSugerido($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO_SUGERIDO]);
			$insinsumopanpanol->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insinsumopanpanol->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insinsumopanpanol->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insinsumopanpanol->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insinsumopanpanol->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insinsumopanpanols[] = $insinsumopanpanol;
		}
		
		return $insinsumopanpanols;
	}	
	

	/* Método getInsInsumoPanPanols Habilitados */ 	
	static function getInsInsumoPanPanolsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsInsumoPanPanol::getInsInsumoPanPanols($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsInsumoPanPanols para listado de Backend */ 	
	static function getInsInsumoPanPanolsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsInsumoPanPanol::getInsInsumoPanPanols($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsInsumoPanPanolsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsInsumoPanPanol::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsInsumoPanPanol::getInsInsumoPanPanols($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsInsumoPanPanols filtrado para select */ 	
	static function getInsInsumoPanPanolsCmbF($paginador = null, $criterio = null){
            $col = InsInsumoPanPanol::getInsInsumoPanPanols($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getInsInsumoPanPanolsXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanPanol */ 	
	static function getInsInsumoPanPanolsXPanPanols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanPanolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiPiso */ 	
	static function getInsInsumoPanPanolsXPanUbiPisos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_PISO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiPisoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiPasillo */ 	
	static function getInsInsumoPanPanolsXPanUbiPasillos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_PASILLO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiPasilloId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiEstante */ 	
	static function getInsInsumoPanPanolsXPanUbiEstantes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_ESTANTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiEstanteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiAltura */ 	
	static function getInsInsumoPanPanolsXPanUbiAlturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_ALTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiAlturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiCasillero */ 	
	static function getInsInsumoPanPanolsXPanUbiCasilleros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_CASILLERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiCasilleroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de PanUbiCelda */ 	
	static function getInsInsumoPanPanolsXPanUbiCeldas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_UBI_CELDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanUbiCeldaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de InsClasificacion */ 	
	static function getInsInsumoPanPanolsXInsClasificacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_CLASIFICACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsClasificacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumoPanPanols filtrado por una coleccion de objetos foraneos de InsStockTipoConfiguracion */ 	
	static function getInsInsumoPanPanolsXInsStockTipoConfiguracions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsStockTipoConfiguracionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_insumo_pan_panol_adm.php';
            $url_gestion = 'ins_insumo_pan_panol_gestion.php';
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

	/* Metodo que retorna el PanPanol (Clave Foranea) */ 	
    public function getPanPanol(){
        $o = new PanPanol();
        $o->setId($this->getPanPanolId());
        return $o;			
    }

	/* Metodo que retorna el PanPanol (Clave Foranea) en Array */ 	
    public function getPanPanolEnArray(&$arr_os){
        if($this->getPanPanolId() != 'null'){
            if(isset($arr_os[$this->getPanPanolId()])){
                $o = $arr_os[$this->getPanPanolId()];
            }else{
                $o = PanPanol::getOxId($this->getPanPanolId());
                if($o){
                    $arr_os[$this->getPanPanolId()] = $o;
                }
            }
        }else{
            $o = new PanPanol();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiPiso (Clave Foranea) */ 	
    public function getPanUbiPiso(){
        $o = new PanUbiPiso();
        $o->setId($this->getPanUbiPisoId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiPiso (Clave Foranea) en Array */ 	
    public function getPanUbiPisoEnArray(&$arr_os){
        if($this->getPanUbiPisoId() != 'null'){
            if(isset($arr_os[$this->getPanUbiPisoId()])){
                $o = $arr_os[$this->getPanUbiPisoId()];
            }else{
                $o = PanUbiPiso::getOxId($this->getPanUbiPisoId());
                if($o){
                    $arr_os[$this->getPanUbiPisoId()] = $o;
                }
            }
        }else{
            $o = new PanUbiPiso();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiPasillo (Clave Foranea) */ 	
    public function getPanUbiPasillo(){
        $o = new PanUbiPasillo();
        $o->setId($this->getPanUbiPasilloId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiPasillo (Clave Foranea) en Array */ 	
    public function getPanUbiPasilloEnArray(&$arr_os){
        if($this->getPanUbiPasilloId() != 'null'){
            if(isset($arr_os[$this->getPanUbiPasilloId()])){
                $o = $arr_os[$this->getPanUbiPasilloId()];
            }else{
                $o = PanUbiPasillo::getOxId($this->getPanUbiPasilloId());
                if($o){
                    $arr_os[$this->getPanUbiPasilloId()] = $o;
                }
            }
        }else{
            $o = new PanUbiPasillo();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiEstante (Clave Foranea) */ 	
    public function getPanUbiEstante(){
        $o = new PanUbiEstante();
        $o->setId($this->getPanUbiEstanteId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiEstante (Clave Foranea) en Array */ 	
    public function getPanUbiEstanteEnArray(&$arr_os){
        if($this->getPanUbiEstanteId() != 'null'){
            if(isset($arr_os[$this->getPanUbiEstanteId()])){
                $o = $arr_os[$this->getPanUbiEstanteId()];
            }else{
                $o = PanUbiEstante::getOxId($this->getPanUbiEstanteId());
                if($o){
                    $arr_os[$this->getPanUbiEstanteId()] = $o;
                }
            }
        }else{
            $o = new PanUbiEstante();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiAltura (Clave Foranea) */ 	
    public function getPanUbiAltura(){
        $o = new PanUbiAltura();
        $o->setId($this->getPanUbiAlturaId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiAltura (Clave Foranea) en Array */ 	
    public function getPanUbiAlturaEnArray(&$arr_os){
        if($this->getPanUbiAlturaId() != 'null'){
            if(isset($arr_os[$this->getPanUbiAlturaId()])){
                $o = $arr_os[$this->getPanUbiAlturaId()];
            }else{
                $o = PanUbiAltura::getOxId($this->getPanUbiAlturaId());
                if($o){
                    $arr_os[$this->getPanUbiAlturaId()] = $o;
                }
            }
        }else{
            $o = new PanUbiAltura();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiCasillero (Clave Foranea) */ 	
    public function getPanUbiCasillero(){
        $o = new PanUbiCasillero();
        $o->setId($this->getPanUbiCasilleroId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiCasillero (Clave Foranea) en Array */ 	
    public function getPanUbiCasilleroEnArray(&$arr_os){
        if($this->getPanUbiCasilleroId() != 'null'){
            if(isset($arr_os[$this->getPanUbiCasilleroId()])){
                $o = $arr_os[$this->getPanUbiCasilleroId()];
            }else{
                $o = PanUbiCasillero::getOxId($this->getPanUbiCasilleroId());
                if($o){
                    $arr_os[$this->getPanUbiCasilleroId()] = $o;
                }
            }
        }else{
            $o = new PanUbiCasillero();
        }
        return $o;		
    }

	/* Metodo que retorna el PanUbiCelda (Clave Foranea) */ 	
    public function getPanUbiCelda(){
        $o = new PanUbiCelda();
        $o->setId($this->getPanUbiCeldaId());
        return $o;			
    }

	/* Metodo que retorna el PanUbiCelda (Clave Foranea) en Array */ 	
    public function getPanUbiCeldaEnArray(&$arr_os){
        if($this->getPanUbiCeldaId() != 'null'){
            if(isset($arr_os[$this->getPanUbiCeldaId()])){
                $o = $arr_os[$this->getPanUbiCeldaId()];
            }else{
                $o = PanUbiCelda::getOxId($this->getPanUbiCeldaId());
                if($o){
                    $arr_os[$this->getPanUbiCeldaId()] = $o;
                }
            }
        }else{
            $o = new PanUbiCelda();
        }
        return $o;		
    }

	/* Metodo que retorna el InsClasificacion (Clave Foranea) */ 	
    public function getInsClasificacion(){
        $o = new InsClasificacion();
        $o->setId($this->getInsClasificacionId());
        return $o;			
    }

	/* Metodo que retorna el InsClasificacion (Clave Foranea) en Array */ 	
    public function getInsClasificacionEnArray(&$arr_os){
        if($this->getInsClasificacionId() != 'null'){
            if(isset($arr_os[$this->getInsClasificacionId()])){
                $o = $arr_os[$this->getInsClasificacionId()];
            }else{
                $o = InsClasificacion::getOxId($this->getInsClasificacionId());
                if($o){
                    $arr_os[$this->getInsClasificacionId()] = $o;
                }
            }
        }else{
            $o = new InsClasificacion();
        }
        return $o;		
    }

	/* Metodo que retorna el InsStockTipoConfiguracion (Clave Foranea) */ 	
    public function getInsStockTipoConfiguracion(){
        $o = new InsStockTipoConfiguracion();
        $o->setId($this->getInsStockTipoConfiguracionId());
        return $o;			
    }

	/* Metodo que retorna el InsStockTipoConfiguracion (Clave Foranea) en Array */ 	
    public function getInsStockTipoConfiguracionEnArray(&$arr_os){
        if($this->getInsStockTipoConfiguracionId() != 'null'){
            if(isset($arr_os[$this->getInsStockTipoConfiguracionId()])){
                $o = $arr_os[$this->getInsStockTipoConfiguracionId()];
            }else{
                $o = InsStockTipoConfiguracion::getOxId($this->getInsStockTipoConfiguracionId());
                if($o){
                    $arr_os[$this->getInsStockTipoConfiguracionId()] = $o;
                }
            }
        }else{
            $o = new InsStockTipoConfiguracion();
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
            		
        if($contexto_solicitante != PanPanol::GEN_CLASE){
            if($this->getPanPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanPanol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiPiso::GEN_CLASE){
            if($this->getPanUbiPiso()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiPiso::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiPiso()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiPasillo::GEN_CLASE){
            if($this->getPanUbiPasillo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiPasillo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiPasillo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiEstante::GEN_CLASE){
            if($this->getPanUbiEstante()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiEstante::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiEstante()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiAltura::GEN_CLASE){
            if($this->getPanUbiAltura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiAltura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiAltura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiCasillero::GEN_CLASE){
            if($this->getPanUbiCasillero()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiCasillero::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiCasillero()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanUbiCelda::GEN_CLASE){
            if($this->getPanUbiCelda()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanUbiCelda::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanUbiCelda()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsClasificacion::GEN_CLASE){
            if($this->getInsClasificacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsClasificacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsClasificacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsStockTipoConfiguracion::GEN_CLASE){
            if($this->getInsStockTipoConfiguracion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsStockTipoConfiguracion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsStockTipoConfiguracion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_insumo_pan_panol'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_insumo_pan_panol';");
            
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

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_id' */ 	
	static function getOxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_panol_id' */ 	
	static function getOsxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_piso_id' */ 	
	static function getOxPanUbiPisoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_PISO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_piso_id' */ 	
	static function getOsxPanUbiPisoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_PISO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_pasillo_id' */ 	
	static function getOxPanUbiPasilloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_PASILLO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_pasillo_id' */ 	
	static function getOsxPanUbiPasilloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_PASILLO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_estante_id' */ 	
	static function getOxPanUbiEstanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_ESTANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_estante_id' */ 	
	static function getOsxPanUbiEstanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_ESTANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_altura_id' */ 	
	static function getOxPanUbiAlturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_ALTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_altura_id' */ 	
	static function getOsxPanUbiAlturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_ALTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_casillero_id' */ 	
	static function getOxPanUbiCasilleroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_CASILLERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_casillero_id' */ 	
	static function getOsxPanUbiCasilleroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_CASILLERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_ubi_celda_id' */ 	
	static function getOxPanUbiCeldaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_CELDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_ubi_celda_id' */ 	
	static function getOsxPanUbiCeldaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_UBI_CELDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_clasificacion_id' */ 	
	static function getOxInsClasificacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CLASIFICACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_clasificacion_id' */ 	
	static function getOsxInsClasificacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CLASIFICACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_stock_tipo_configuracion_id' */ 	
	static function getOxInsStockTipoConfiguracionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_stock_tipo_configuracion_id' */ 	
	static function getOsxInsStockTipoConfiguracionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_minimo' */ 	
	static function getOxPuntoMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_minimo' */ 	
	static function getOsxPuntoMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_pedido' */ 	
	static function getOxPuntoPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_pedido' */ 	
	static function getOsxPuntoPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_maximo' */ 	
	static function getOxPuntoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_maximo' */ 	
	static function getOsxPuntoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_minimo_sugerido' */ 	
	static function getOxPuntoMinimoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_minimo_sugerido' */ 	
	static function getOsxPuntoMinimoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_pedido_sugerido' */ 	
	static function getOxPuntoPedidoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_pedido_sugerido' */ 	
	static function getOsxPuntoPedidoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_maximo_sugerido' */ 	
	static function getOxPuntoMaximoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_maximo_sugerido' */ 	
	static function getOsxPuntoMaximoSugerido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO_SUGERIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols(null, $criterio);
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

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
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

            $obs = self::getInsInsumoPanPanols($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_insumo_pan_panol_adm');
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
}
?>