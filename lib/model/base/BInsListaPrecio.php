<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsListaPrecio
{ 
	
	const SES_PAGINACION = 'adm_inslistaprecio_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_inslistaprecio_paginas_registros';
	const SES_CRITERIOS = 'adm_inslistaprecio_criterios';
	
	const GEN_CLASE = 'InsListaPrecio';
	const GEN_TABLA = 'ins_lista_precio';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BInsListaPrecio */ 
	const GEN_ATTR_ID = 'ins_lista_precio.id';
	const GEN_ATTR_INS_INSUMO_ID = 'ins_lista_precio.ins_insumo_id';
	const GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID = 'ins_lista_precio.ins_tipo_lista_precio_id';
	const GEN_ATTR_IMPORTE_CALCULADO = 'ins_lista_precio.importe_calculado';
	const GEN_ATTR_IMPORTE_MANUAL = 'ins_lista_precio.importe_manual';
	const GEN_ATTR_IMPORTE_VENTA = 'ins_lista_precio.importe_venta';
	const GEN_ATTR_PORCENTAJE_INCREMENTO = 'ins_lista_precio.porcentaje_incremento';
	const GEN_ATTR_PORCENTAJE_DESCUENTO = 'ins_lista_precio.porcentaje_descuento';
	const GEN_ATTR_PORCENTAJE_DESCUENTO_FIJO = 'ins_lista_precio.porcentaje_descuento_fijo';
	const GEN_ATTR_CANTIDAD_MINIMA_VENTA = 'ins_lista_precio.cantidad_minima_venta';
	const GEN_ATTR_HABILITADO = 'ins_lista_precio.habilitado';
	const GEN_ATTR_CREADO = 'ins_lista_precio.creado';
	const GEN_ATTR_CREADO_POR = 'ins_lista_precio.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_lista_precio.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_lista_precio.modificado_por';

	/* Constantes de Atributos Min de BInsListaPrecio */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID = 'ins_tipo_lista_precio_id';
	const GEN_ATTR_MIN_IMPORTE_CALCULADO = 'importe_calculado';
	const GEN_ATTR_MIN_IMPORTE_MANUAL = 'importe_manual';
	const GEN_ATTR_MIN_IMPORTE_VENTA = 'importe_venta';
	const GEN_ATTR_MIN_PORCENTAJE_INCREMENTO = 'porcentaje_incremento';
	const GEN_ATTR_MIN_PORCENTAJE_DESCUENTO = 'porcentaje_descuento';
	const GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO = 'porcentaje_descuento_fijo';
	const GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA = 'cantidad_minima_venta';
	const GEN_ATTR_MIN_HABILITADO = 'habilitado';
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
	

	/* Atributos de BInsListaPrecio */ 
	private $id;
	private $ins_insumo_id;
	private $ins_tipo_lista_precio_id;
	private $importe_calculado;
	private $importe_manual;
	private $importe_venta;
	private $porcentaje_incremento;
	private $porcentaje_descuento;
	private $porcentaje_descuento_fijo;
	private $cantidad_minima_venta;
	private $habilitado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsListaPrecio */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getInsTipoListaPrecioId(){ if(isset($this->ins_tipo_lista_precio_id)){ return $this->ins_tipo_lista_precio_id; }else{ return 'null'; } }
	public function getImporteCalculado(){ if(isset($this->importe_calculado)){ return $this->importe_calculado; }else{ return 0; } }
	public function getImporteManual(){ if(isset($this->importe_manual)){ return $this->importe_manual; }else{ return 0; } }
	public function getImporteVenta(){ if(isset($this->importe_venta)){ return $this->importe_venta; }else{ return 0; } }
	public function getPorcentajeIncremento(){ if(isset($this->porcentaje_incremento)){ return $this->porcentaje_incremento; }else{ return 0; } }
	public function getPorcentajeDescuento(){ if(isset($this->porcentaje_descuento)){ return $this->porcentaje_descuento; }else{ return 0; } }
	public function getPorcentajeDescuentoFijo(){ if(isset($this->porcentaje_descuento_fijo)){ return $this->porcentaje_descuento_fijo; }else{ return 0; } }
	public function getCantidadMinimaVenta(){ if(isset($this->cantidad_minima_venta)){ return $this->cantidad_minima_venta; }else{ return 0; } }
	public function getHabilitado(){ if(isset($this->habilitado)){ return $this->habilitado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsListaPrecio */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID."
				, ".self::GEN_ATTR_IMPORTE_CALCULADO."
				, ".self::GEN_ATTR_IMPORTE_MANUAL."
				, ".self::GEN_ATTR_IMPORTE_VENTA."
				, ".self::GEN_ATTR_PORCENTAJE_INCREMENTO."
				, ".self::GEN_ATTR_PORCENTAJE_DESCUENTO."
				, ".self::GEN_ATTR_PORCENTAJE_DESCUENTO_FIJO."
				, ".self::GEN_ATTR_CANTIDAD_MINIMA_VENTA."
				, ".self::GEN_ATTR_HABILITADO."
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
				$this->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
				$this->setImporteCalculado($fila[self::GEN_ATTR_MIN_IMPORTE_CALCULADO]);
				$this->setImporteManual($fila[self::GEN_ATTR_MIN_IMPORTE_MANUAL]);
				$this->setImporteVenta($fila[self::GEN_ATTR_MIN_IMPORTE_VENTA]);
				$this->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
				$this->setPorcentajeDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO]);
				$this->setPorcentajeDescuentoFijo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO]);
				$this->setCantidadMinimaVenta($fila[self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA]);
				$this->setHabilitado($fila[self::GEN_ATTR_MIN_HABILITADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setInsTipoListaPrecioId($v){ $this->ins_tipo_lista_precio_id = $v; }
	public function setImporteCalculado($v){ $this->importe_calculado = $v; }
	public function setImporteManual($v){ $this->importe_manual = $v; }
	public function setImporteVenta($v){ $this->importe_venta = $v; }
	public function setPorcentajeIncremento($v){ $this->porcentaje_incremento = $v; }
	public function setPorcentajeDescuento($v){ $this->porcentaje_descuento = $v; }
	public function setPorcentajeDescuentoFijo($v){ $this->porcentaje_descuento_fijo = $v; }
	public function setCantidadMinimaVenta($v){ $this->cantidad_minima_venta = $v; }
	public function setHabilitado($v){ $this->habilitado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsListaPrecio();
            $o->setId($fila[InsListaPrecio::GEN_ATTR_MIN_ID], false);
            
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$o->setImporteCalculado($fila[self::GEN_ATTR_MIN_IMPORTE_CALCULADO]);
			$o->setImporteManual($fila[self::GEN_ATTR_MIN_IMPORTE_MANUAL]);
			$o->setImporteVenta($fila[self::GEN_ATTR_MIN_IMPORTE_VENTA]);
			$o->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$o->setPorcentajeDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO]);
			$o->setPorcentajeDescuentoFijo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO]);
			$o->setCantidadMinimaVenta($fila[self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA]);
			$o->setHabilitado($fila[self::GEN_ATTR_MIN_HABILITADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsListaPrecio */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BInsListaPrecio */ 	
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

	/* Save de BInsListaPrecio */ 	
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
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_CALCULADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_MANUAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_VENTA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA."
						, ".self::GEN_ATTR_MIN_HABILITADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_lista_precio_seq'), 
                ".$this->getInsInsumoId()."
						, ".$this->getInsTipoListaPrecioId()."
						, '".$this->getImporteCalculado()."'
						, '".$this->getImporteManual()."'
						, '".$this->getImporteVenta()."'
						, '".$this->getPorcentajeIncremento()."'
						, '".$this->getPorcentajeDescuento()."'
						, ".$this->getPorcentajeDescuentoFijo()."
						, '".$this->getCantidadMinimaVenta()."'
						, ".$this->getHabilitado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_lista_precio_seq')";
            
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
                 
				 ".InsListaPrecio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_CALCULADO." = '".$this->getImporteCalculado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_MANUAL." = '".$this->getImporteManual()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_VENTA." = '".$this->getImporteVenta()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO." = '".$this->getPorcentajeDescuento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO." = ".$this->getPorcentajeDescuentoFijo()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA." = '".$this->getCantidadMinimaVenta()."'
						, ".self::GEN_ATTR_MIN_HABILITADO." = ".$this->getHabilitado()."
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
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_CALCULADO."
						, ".self::GEN_ATTR_MIN_IMPORTE_MANUAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_VENTA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA."
						, ".self::GEN_ATTR_MIN_HABILITADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getInsInsumoId()."
						, ".$this->getInsTipoListaPrecioId()."
						, '".$this->getImporteCalculado()."'
						, '".$this->getImporteManual()."'
						, '".$this->getImporteVenta()."'
						, '".$this->getPorcentajeIncremento()."'
						, '".$this->getPorcentajeDescuento()."'
						, ".$this->getPorcentajeDescuentoFijo()."
						, '".$this->getCantidadMinimaVenta()."'
						, ".$this->getHabilitado()."
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
                     
				 ".InsListaPrecio::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_CALCULADO." = '".$this->getImporteCalculado()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_MANUAL." = '".$this->getImporteManual()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_VENTA." = '".$this->getImporteVenta()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO." = '".$this->getPorcentajeIncremento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO." = '".$this->getPorcentajeDescuento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO." = ".$this->getPorcentajeDescuentoFijo()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA." = '".$this->getCantidadMinimaVenta()."'
						, ".self::GEN_ATTR_MIN_HABILITADO." = ".$this->getHabilitado()."
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
            $o = new InsListaPrecio();
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

	/* Delete de BInsListaPrecio */ 	
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
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsListaPrecio(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsListaPrecio::setAplicarFiltrosDeAlcance($criterio);

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
	
		$inslistaprecios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $inslistaprecio = new InsListaPrecio();
                    $inslistaprecio->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $inslistaprecio->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$inslistaprecio->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$inslistaprecio->setImporteCalculado($fila[self::GEN_ATTR_MIN_IMPORTE_CALCULADO]);
			$inslistaprecio->setImporteManual($fila[self::GEN_ATTR_MIN_IMPORTE_MANUAL]);
			$inslistaprecio->setImporteVenta($fila[self::GEN_ATTR_MIN_IMPORTE_VENTA]);
			$inslistaprecio->setPorcentajeIncremento($fila[self::GEN_ATTR_MIN_PORCENTAJE_INCREMENTO]);
			$inslistaprecio->setPorcentajeDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO]);
			$inslistaprecio->setPorcentajeDescuentoFijo($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_FIJO]);
			$inslistaprecio->setCantidadMinimaVenta($fila[self::GEN_ATTR_MIN_CANTIDAD_MINIMA_VENTA]);
			$inslistaprecio->setHabilitado($fila[self::GEN_ATTR_MIN_HABILITADO]);
			$inslistaprecio->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$inslistaprecio->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$inslistaprecio->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$inslistaprecio->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $inslistaprecios[] = $inslistaprecio;
		}
		
		return $inslistaprecios;
	}	
	

	/* Método getInsListaPrecios Habilitados */ 	
	static function getInsListaPreciosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsListaPrecio::getInsListaPrecios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsListaPrecios para listado de Backend */ 	
	static function getInsListaPreciosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsListaPrecio::getInsListaPrecios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsListaPreciosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsListaPrecio::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsListaPrecio::getInsListaPrecios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsListaPrecios filtrado para select */ 	
	static function getInsListaPreciosCmbF($paginador = null, $criterio = null){
            $col = InsListaPrecio::getInsListaPrecios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsListaPrecios filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getInsListaPreciosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->addOrden(InsListaPrecio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsListaPrecio::getInsListaPrecios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsListaPrecios filtrado por una coleccion de objetos foraneos de InsTipoListaPrecio */ 	
	static function getInsListaPreciosXInsTipoListaPrecios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->addOrden(InsListaPrecio::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsListaPrecio::getInsListaPrecios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoListaPrecioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_lista_precio_adm.php';
            $url_gestion = 'ins_lista_precio_gestion.php';
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
                
            $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_LISTA_PRECIO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) */ 	
    public function getInsTipoListaPrecio(){
        $o = new InsTipoListaPrecio();
        $o->setId($this->getInsTipoListaPrecioId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) en Array */ 	
    public function getInsTipoListaPrecioEnArray(&$arr_os){
        if($this->getInsTipoListaPrecioId() != 'null'){
            if(isset($arr_os[$this->getInsTipoListaPrecioId()])){
                $o = $arr_os[$this->getInsTipoListaPrecioId()];
            }else{
                $o = InsTipoListaPrecio::getOxId($this->getInsTipoListaPrecioId());
                if($o){
                    $arr_os[$this->getInsTipoListaPrecioId()] = $o;
                }
            }
        }else{
            $o = new InsTipoListaPrecio();
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
            		
        if($contexto_solicitante != InsInsumo::GEN_CLASE){
            if($this->getInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoListaPrecio::GEN_CLASE){
            if($this->getInsTipoListaPrecio()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoListaPrecio::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoListaPrecio()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_lista_precio'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_lista_precio';");
            
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

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOsxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_calculado' */ 	
	static function getOxImporteCalculado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_CALCULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_calculado' */ 	
	static function getOsxImporteCalculado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_CALCULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_manual' */ 	
	static function getOxImporteManual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_MANUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_manual' */ 	
	static function getOsxImporteManual($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_MANUAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_venta' */ 	
	static function getOxImporteVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_venta' */ 	
	static function getOsxImporteVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_incremento' */ 	
	static function getOxPorcentajeIncremento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_INCREMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_descuento' */ 	
	static function getOxPorcentajeDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_descuento' */ 	
	static function getOsxPorcentajeDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_descuento_fijo' */ 	
	static function getOxPorcentajeDescuentoFijo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_FIJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_descuento_fijo' */ 	
	static function getOsxPorcentajeDescuentoFijo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_FIJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_minima_venta' */ 	
	static function getOxCantidadMinimaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_MINIMA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_minima_venta' */ 	
	static function getOsxCantidadMinimaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_MINIMA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'habilitado' */ 	
	static function getOxHabilitado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HABILITADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'habilitado' */ 	
	static function getOsxHabilitado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HABILITADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios(null, $criterio);
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

            $obs = self::getInsListaPrecios($paginador, $criterio);
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

            $obs = self::getInsListaPrecios($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_lista_precio_adm');
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