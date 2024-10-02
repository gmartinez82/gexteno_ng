<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralFpFormaPago
{ 
	
	const SES_PAGINACION = 'adm_gralfpformapago_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_gralfpformapago_paginas_registros';
	const SES_CRITERIOS = 'adm_gralfpformapago_criterios';
	
	const GEN_CLASE = 'GralFpFormaPago';
	const GEN_TABLA = 'gral_fp_forma_pago';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralFpFormaPago */ 
	const GEN_ATTR_ID = 'gral_fp_forma_pago.id';
	const GEN_ATTR_DESCRIPCION = 'gral_fp_forma_pago.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'gral_fp_forma_pago.descripcion_corta';
	const GEN_ATTR_CODIGO = 'gral_fp_forma_pago.codigo';
	const GEN_ATTR_CONTADO = 'gral_fp_forma_pago.contado';
	const GEN_ATTR_CREDITO = 'gral_fp_forma_pago.credito';
	const GEN_ATTR_INMEDIATO = 'gral_fp_forma_pago.inmediato';
	const GEN_ATTR_RECIBO_AUTOMATICO = 'gral_fp_forma_pago.recibo_automatico';
	const GEN_ATTR_PARA_COMPRA = 'gral_fp_forma_pago.para_compra';
	const GEN_ATTR_PARA_VENTA = 'gral_fp_forma_pago.para_venta';
	const GEN_ATTR_PARA_COBRO = 'gral_fp_forma_pago.para_cobro';
	const GEN_ATTR_PARA_PAGO = 'gral_fp_forma_pago.para_pago';
	const GEN_ATTR_CNTB_CUENTA_COMPRA = 'gral_fp_forma_pago.cntb_cuenta_compra';
	const GEN_ATTR_CNTB_CUENTA_VENTA = 'gral_fp_forma_pago.cntb_cuenta_venta';
	const GEN_ATTR_REQUIERE_REFERENCIA = 'gral_fp_forma_pago.requiere_referencia';
	const GEN_ATTR_REQUIERE_INFO_EXTENDIDA = 'gral_fp_forma_pago.requiere_info_extendida';
	const GEN_ATTR_REQUIERE_CONCILIACION = 'gral_fp_forma_pago.requiere_conciliacion';
	const GEN_ATTR_OBSERVACION = 'gral_fp_forma_pago.observacion';
	const GEN_ATTR_ORDEN = 'gral_fp_forma_pago.orden';
	const GEN_ATTR_ESTADO = 'gral_fp_forma_pago.estado';
	const GEN_ATTR_CREADO = 'gral_fp_forma_pago.creado';
	const GEN_ATTR_CREADO_POR = 'gral_fp_forma_pago.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_fp_forma_pago.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_fp_forma_pago.modificado_por';

	/* Constantes de Atributos Min de BGralFpFormaPago */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CONTADO = 'contado';
	const GEN_ATTR_MIN_CREDITO = 'credito';
	const GEN_ATTR_MIN_INMEDIATO = 'inmediato';
	const GEN_ATTR_MIN_RECIBO_AUTOMATICO = 'recibo_automatico';
	const GEN_ATTR_MIN_PARA_COMPRA = 'para_compra';
	const GEN_ATTR_MIN_PARA_VENTA = 'para_venta';
	const GEN_ATTR_MIN_PARA_COBRO = 'para_cobro';
	const GEN_ATTR_MIN_PARA_PAGO = 'para_pago';
	const GEN_ATTR_MIN_CNTB_CUENTA_COMPRA = 'cntb_cuenta_compra';
	const GEN_ATTR_MIN_CNTB_CUENTA_VENTA = 'cntb_cuenta_venta';
	const GEN_ATTR_MIN_REQUIERE_REFERENCIA = 'requiere_referencia';
	const GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA = 'requiere_info_extendida';
	const GEN_ATTR_MIN_REQUIERE_CONCILIACION = 'requiere_conciliacion';
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
	

	/* Atributos de BGralFpFormaPago */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $codigo;
	private $contado;
	private $credito;
	private $inmediato;
	private $recibo_automatico;
	private $para_compra;
	private $para_venta;
	private $para_cobro;
	private $para_pago;
	private $cntb_cuenta_compra;
	private $cntb_cuenta_venta;
	private $requiere_referencia;
	private $requiere_info_extendida;
	private $requiere_conciliacion;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralFpFormaPago */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getContado(){ if(isset($this->contado)){ return $this->contado; }else{ return 0; } }
	public function getCredito(){ if(isset($this->credito)){ return $this->credito; }else{ return 0; } }
	public function getInmediato(){ if(isset($this->inmediato)){ return $this->inmediato; }else{ return 0; } }
	public function getReciboAutomatico(){ if(isset($this->recibo_automatico)){ return $this->recibo_automatico; }else{ return 0; } }
	public function getParaCompra(){ if(isset($this->para_compra)){ return $this->para_compra; }else{ return 0; } }
	public function getParaVenta(){ if(isset($this->para_venta)){ return $this->para_venta; }else{ return 0; } }
	public function getParaCobro(){ if(isset($this->para_cobro)){ return $this->para_cobro; }else{ return 0; } }
	public function getParaPago(){ if(isset($this->para_pago)){ return $this->para_pago; }else{ return 0; } }
	public function getCntbCuentaCompra(){ if(isset($this->cntb_cuenta_compra)){ return $this->cntb_cuenta_compra; }else{ return 'null'; } }
	public function getCntbCuentaCompraObj(){ if(isset($this->cntb_cuenta_compra)){ return CntbCuenta::getOxId($this->cntb_cuenta_compra); }else{ return new CntbCuenta(); } }
	public function getCntbCuentaVenta(){ if(isset($this->cntb_cuenta_venta)){ return $this->cntb_cuenta_venta; }else{ return 'null'; } }
	public function getCntbCuentaVentaObj(){ if(isset($this->cntb_cuenta_venta)){ return CntbCuenta::getOxId($this->cntb_cuenta_venta); }else{ return new CntbCuenta(); } }
	public function getRequiereReferencia(){ if(isset($this->requiere_referencia)){ return $this->requiere_referencia; }else{ return 0; } }
	public function getRequiereInfoExtendida(){ if(isset($this->requiere_info_extendida)){ return $this->requiere_info_extendida; }else{ return 0; } }
	public function getRequiereConciliacion(){ if(isset($this->requiere_conciliacion)){ return $this->requiere_conciliacion; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralFpFormaPago */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CONTADO."
				, ".self::GEN_ATTR_CREDITO."
				, ".self::GEN_ATTR_INMEDIATO."
				, ".self::GEN_ATTR_RECIBO_AUTOMATICO."
				, ".self::GEN_ATTR_PARA_COMPRA."
				, ".self::GEN_ATTR_PARA_VENTA."
				, ".self::GEN_ATTR_PARA_COBRO."
				, ".self::GEN_ATTR_PARA_PAGO."
				, ".self::GEN_ATTR_CNTB_CUENTA_COMPRA."
				, ".self::GEN_ATTR_CNTB_CUENTA_VENTA."
				, ".self::GEN_ATTR_REQUIERE_REFERENCIA."
				, ".self::GEN_ATTR_REQUIERE_INFO_EXTENDIDA."
				, ".self::GEN_ATTR_REQUIERE_CONCILIACION."
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
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setContado($fila[self::GEN_ATTR_MIN_CONTADO]);
				$this->setCredito($fila[self::GEN_ATTR_MIN_CREDITO]);
				$this->setInmediato($fila[self::GEN_ATTR_MIN_INMEDIATO]);
				$this->setReciboAutomatico($fila[self::GEN_ATTR_MIN_RECIBO_AUTOMATICO]);
				$this->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
				$this->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
				$this->setParaCobro($fila[self::GEN_ATTR_MIN_PARA_COBRO]);
				$this->setParaPago($fila[self::GEN_ATTR_MIN_PARA_PAGO]);
				$this->setCntbCuentaCompra($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA]);
				$this->setCntbCuentaVenta($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA]);
				$this->setRequiereReferencia($fila[self::GEN_ATTR_MIN_REQUIERE_REFERENCIA]);
				$this->setRequiereInfoExtendida($fila[self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA]);
				$this->setRequiereConciliacion($fila[self::GEN_ATTR_MIN_REQUIERE_CONCILIACION]);
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
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setContado($v){ $this->contado = $v; }
	public function setCredito($v){ $this->credito = $v; }
	public function setInmediato($v){ $this->inmediato = $v; }
	public function setReciboAutomatico($v){ $this->recibo_automatico = $v; }
	public function setParaCompra($v){ $this->para_compra = $v; }
	public function setParaVenta($v){ $this->para_venta = $v; }
	public function setParaCobro($v){ $this->para_cobro = $v; }
	public function setParaPago($v){ $this->para_pago = $v; }
	public function setCntbCuentaCompra($v){ $this->cntb_cuenta_compra = $v; }
	public function setCntbCuentaVenta($v){ $this->cntb_cuenta_venta = $v; }
	public function setRequiereReferencia($v){ $this->requiere_referencia = $v; }
	public function setRequiereInfoExtendida($v){ $this->requiere_info_extendida = $v; }
	public function setRequiereConciliacion($v){ $this->requiere_conciliacion = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralFpFormaPago();
            $o->setId($fila[GralFpFormaPago::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setContado($fila[self::GEN_ATTR_MIN_CONTADO]);
			$o->setCredito($fila[self::GEN_ATTR_MIN_CREDITO]);
			$o->setInmediato($fila[self::GEN_ATTR_MIN_INMEDIATO]);
			$o->setReciboAutomatico($fila[self::GEN_ATTR_MIN_RECIBO_AUTOMATICO]);
			$o->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
			$o->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
			$o->setParaCobro($fila[self::GEN_ATTR_MIN_PARA_COBRO]);
			$o->setParaPago($fila[self::GEN_ATTR_MIN_PARA_PAGO]);
			$o->setCntbCuentaCompra($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA]);
			$o->setCntbCuentaVenta($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA]);
			$o->setRequiereReferencia($fila[self::GEN_ATTR_MIN_REQUIERE_REFERENCIA]);
			$o->setRequiereInfoExtendida($fila[self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA]);
			$o->setRequiereConciliacion($fila[self::GEN_ATTR_MIN_REQUIERE_CONCILIACION]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralFpFormaPago */ 	
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

	/* Cambia el estado de BGralFpFormaPago */ 	
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

	/* Save de BGralFpFormaPago */ 	
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CONTADO."
						, ".self::GEN_ATTR_MIN_CREDITO."
						, ".self::GEN_ATTR_MIN_INMEDIATO."
						, ".self::GEN_ATTR_MIN_RECIBO_AUTOMATICO."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA."
						, ".self::GEN_ATTR_MIN_PARA_VENTA."
						, ".self::GEN_ATTR_MIN_PARA_COBRO."
						, ".self::GEN_ATTR_MIN_PARA_PAGO."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA."
						, ".self::GEN_ATTR_MIN_REQUIERE_REFERENCIA."
						, ".self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA."
						, ".self::GEN_ATTR_MIN_REQUIERE_CONCILIACION."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_fp_forma_pago_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getCodigo()."'
						, ".$this->getContado()."
						, ".$this->getCredito()."
						, ".$this->getInmediato()."
						, ".$this->getReciboAutomatico()."
						, ".$this->getParaCompra()."
						, ".$this->getParaVenta()."
						, ".$this->getParaCobro()."
						, ".$this->getParaPago()."
						, ".$this->getCntbCuentaCompra()."
						, ".$this->getCntbCuentaVenta()."
						, ".$this->getRequiereReferencia()."
						, ".$this->getRequiereInfoExtendida()."
						, ".$this->getRequiereConciliacion()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_fp_forma_pago_seq')";
            
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
                 
				 ".GralFpFormaPago::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CONTADO." = ".$this->getContado()."
						, ".self::GEN_ATTR_MIN_CREDITO." = ".$this->getCredito()."
						, ".self::GEN_ATTR_MIN_INMEDIATO." = ".$this->getInmediato()."
						, ".self::GEN_ATTR_MIN_RECIBO_AUTOMATICO." = ".$this->getReciboAutomatico()."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA." = ".$this->getParaCompra()."
						, ".self::GEN_ATTR_MIN_PARA_VENTA." = ".$this->getParaVenta()."
						, ".self::GEN_ATTR_MIN_PARA_COBRO." = ".$this->getParaCobro()."
						, ".self::GEN_ATTR_MIN_PARA_PAGO." = ".$this->getParaPago()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA." = ".$this->getCntbCuentaCompra()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA." = ".$this->getCntbCuentaVenta()."
						, ".self::GEN_ATTR_MIN_REQUIERE_REFERENCIA." = ".$this->getRequiereReferencia()."
						, ".self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA." = ".$this->getRequiereInfoExtendida()."
						, ".self::GEN_ATTR_MIN_REQUIERE_CONCILIACION." = ".$this->getRequiereConciliacion()."
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CONTADO."
						, ".self::GEN_ATTR_MIN_CREDITO."
						, ".self::GEN_ATTR_MIN_INMEDIATO."
						, ".self::GEN_ATTR_MIN_RECIBO_AUTOMATICO."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA."
						, ".self::GEN_ATTR_MIN_PARA_VENTA."
						, ".self::GEN_ATTR_MIN_PARA_COBRO."
						, ".self::GEN_ATTR_MIN_PARA_PAGO."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA."
						, ".self::GEN_ATTR_MIN_REQUIERE_REFERENCIA."
						, ".self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA."
						, ".self::GEN_ATTR_MIN_REQUIERE_CONCILIACION."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getCodigo()."'
						, ".$this->getContado()."
						, ".$this->getCredito()."
						, ".$this->getInmediato()."
						, ".$this->getReciboAutomatico()."
						, ".$this->getParaCompra()."
						, ".$this->getParaVenta()."
						, ".$this->getParaCobro()."
						, ".$this->getParaPago()."
						, ".$this->getCntbCuentaCompra()."
						, ".$this->getCntbCuentaVenta()."
						, ".$this->getRequiereReferencia()."
						, ".$this->getRequiereInfoExtendida()."
						, ".$this->getRequiereConciliacion()."
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
                     
				 ".GralFpFormaPago::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CONTADO." = ".$this->getContado()."
						, ".self::GEN_ATTR_MIN_CREDITO." = ".$this->getCredito()."
						, ".self::GEN_ATTR_MIN_INMEDIATO." = ".$this->getInmediato()."
						, ".self::GEN_ATTR_MIN_RECIBO_AUTOMATICO." = ".$this->getReciboAutomatico()."
						, ".self::GEN_ATTR_MIN_PARA_COMPRA." = ".$this->getParaCompra()."
						, ".self::GEN_ATTR_MIN_PARA_VENTA." = ".$this->getParaVenta()."
						, ".self::GEN_ATTR_MIN_PARA_COBRO." = ".$this->getParaCobro()."
						, ".self::GEN_ATTR_MIN_PARA_PAGO." = ".$this->getParaPago()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA." = ".$this->getCntbCuentaCompra()."
						, ".self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA." = ".$this->getCntbCuentaVenta()."
						, ".self::GEN_ATTR_MIN_REQUIERE_REFERENCIA." = ".$this->getRequiereReferencia()."
						, ".self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA." = ".$this->getRequiereInfoExtendida()."
						, ".self::GEN_ATTR_MIN_REQUIERE_CONCILIACION." = ".$this->getRequiereConciliacion()."
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
            $o = new GralFpFormaPago();
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

	/* Delete de BGralFpFormaPago */ 	
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
	
            // se elimina la coleccion de GralFpMedioPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralFpMedioPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralFpMedioPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCategoriaGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCategoriaGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliSubcategoriaGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliSubcategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliSubcategoriaGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaIngresos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaIngreso::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaIngresos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaEgresos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaEgreso::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaEgresos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajaMovimientoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajaMovimientoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajaMovimientoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamTipoCondicionOperacionGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamTipoCondicionOperacionGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamTipoPagoGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamTipoPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamTipoPagoGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralFpFormaPago(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);

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
	
		$gralfpformapagos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $gralfpformapago = new GralFpFormaPago();
                    $gralfpformapago->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $gralfpformapago->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$gralfpformapago->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$gralfpformapago->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$gralfpformapago->setContado($fila[self::GEN_ATTR_MIN_CONTADO]);
			$gralfpformapago->setCredito($fila[self::GEN_ATTR_MIN_CREDITO]);
			$gralfpformapago->setInmediato($fila[self::GEN_ATTR_MIN_INMEDIATO]);
			$gralfpformapago->setReciboAutomatico($fila[self::GEN_ATTR_MIN_RECIBO_AUTOMATICO]);
			$gralfpformapago->setParaCompra($fila[self::GEN_ATTR_MIN_PARA_COMPRA]);
			$gralfpformapago->setParaVenta($fila[self::GEN_ATTR_MIN_PARA_VENTA]);
			$gralfpformapago->setParaCobro($fila[self::GEN_ATTR_MIN_PARA_COBRO]);
			$gralfpformapago->setParaPago($fila[self::GEN_ATTR_MIN_PARA_PAGO]);
			$gralfpformapago->setCntbCuentaCompra($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_COMPRA]);
			$gralfpformapago->setCntbCuentaVenta($fila[self::GEN_ATTR_MIN_CNTB_CUENTA_VENTA]);
			$gralfpformapago->setRequiereReferencia($fila[self::GEN_ATTR_MIN_REQUIERE_REFERENCIA]);
			$gralfpformapago->setRequiereInfoExtendida($fila[self::GEN_ATTR_MIN_REQUIERE_INFO_EXTENDIDA]);
			$gralfpformapago->setRequiereConciliacion($fila[self::GEN_ATTR_MIN_REQUIERE_CONCILIACION]);
			$gralfpformapago->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$gralfpformapago->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$gralfpformapago->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$gralfpformapago->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$gralfpformapago->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$gralfpformapago->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$gralfpformapago->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $gralfpformapagos[] = $gralfpformapago;
		}
		
		return $gralfpformapagos;
	}	
	

	/* Método getGralFpFormaPagos Habilitados */ 	
	static function getGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralFpFormaPago::getGralFpFormaPagos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralFpFormaPagos para listado de Backend */ 	
	static function getGralFpFormaPagosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralFpFormaPago::getGralFpFormaPagos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralFpFormaPagosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralFpFormaPago::getGralFpFormaPagos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralFpFormaPagos filtrado para select */ 	
	static function getGralFpFormaPagosCmbF($paginador = null, $criterio = null){
            $col = GralFpFormaPago::getGralFpFormaPagos($paginador, $criterio);

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
            $url = 'gral_fp_forma_pago_adm.php';
            $url_gestion = 'gral_fp_forma_pago_gestion.php';
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
	

	/* Metodo getGralFpMedioPagos */ 	
	public function getGralFpMedioPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralFpMedioPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralFpMedioPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralFpMedioPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralFpMedioPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralFpMedioPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralFpMedioPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralFpMedioPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralFpMedioPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralfpmediopagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralfpmediopago = GralFpMedioPago::hidratarObjeto($fila);			
                $gralfpmediopagos[] = $gralfpmediopago;
            }

            return $gralfpmediopagos;
	}	
	

	/* Método getGralFpMedioPagosBloque para MasInfo */ 	
	public function getGralFpMedioPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralFpMedioPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralFpMedioPagos Habilitados */ 	
	public function getGralFpMedioPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralFpMedioPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralFpMedioPago */ 	
	public function getGralFpMedioPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralFpMedioPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralFpMedioPago relacionadas */ 	
	public function deleteGralFpMedioPagos(){
            $obs = $this->getGralFpMedioPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralFpMedioPagosCmb() GralFpMedioPago relacionadas */ 	
	public function getGralFpMedioPagosCmb(){
            $c = new Criterio();
            $c->add(GralFpMedioPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpMedioPago::GEN_TABLA);
            $c->setCriterios();

            $os = GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c);
            return $os;
	}

	/* Metodo getCliCategoriaGralFpFormaPagos */ 	
	public function getCliCategoriaGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCategoriaGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCategoriaGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCategoriaGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCategoriaGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicategoriagralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicategoriagralfpformapago = CliCategoriaGralFpFormaPago::hidratarObjeto($fila);			
                $clicategoriagralfpformapagos[] = $clicategoriagralfpformapago;
            }

            return $clicategoriagralfpformapagos;
	}	
	

	/* Método getCliCategoriaGralFpFormaPagosBloque para MasInfo */ 	
	public function getCliCategoriaGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCategoriaGralFpFormaPagos Habilitados */ 	
	public function getCliCategoriaGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCategoriaGralFpFormaPago */ 	
	public function getCliCategoriaGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCategoriaGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCategoriaGralFpFormaPago relacionadas */ 	
	public function deleteCliCategoriaGralFpFormaPagos(){
            $obs = $this->getCliCategoriaGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCategoriaGralFpFormaPagosCmb() CliCategoriaGralFpFormaPago relacionadas */ 	
	public function getCliCategoriaGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = CliCategoriaGralFpFormaPago::getCliCategoriaGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliCategorias (Coleccion) relacionados a traves de CliCategoriaGralFpFormaPago */ 	
	public function getCliCategoriasXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoria::GEN_TABLA);
            $c->addRealJoin(CliCategoriaGralFpFormaPago::GEN_TABLA, CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, CliCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCategoria::getCliCategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliCategorias relacionados a traves de CliCategoriaGralFpFormaPago */ 	
	public function getCantidadCliCategoriasXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCategoria::GEN_TABLA);
            $c->addRealJoin(CliCategoriaGralFpFormaPago::GEN_TABLA, CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID, CliCategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCategoria::getCliCategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCategoria (Objeto) relacionado a traves de CliCategoriaGralFpFormaPago */ 	
	public function getCliCategoriaXCliCategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliCategoriasXCliCategoriaGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliSubcategoriaGralFpFormaPagos */ 	
	public function getCliSubcategoriaGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliSubcategoriaGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliSubcategoriaGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliSubcategoriaGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliSubcategoriaGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliSubcategoriaGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clisubcategoriagralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clisubcategoriagralfpformapago = CliSubcategoriaGralFpFormaPago::hidratarObjeto($fila);			
                $clisubcategoriagralfpformapagos[] = $clisubcategoriagralfpformapago;
            }

            return $clisubcategoriagralfpformapagos;
	}	
	

	/* Método getCliSubcategoriaGralFpFormaPagosBloque para MasInfo */ 	
	public function getCliSubcategoriaGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliSubcategoriaGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliSubcategoriaGralFpFormaPagos Habilitados */ 	
	public function getCliSubcategoriaGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliSubcategoriaGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliSubcategoriaGralFpFormaPago */ 	
	public function getCliSubcategoriaGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliSubcategoriaGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliSubcategoriaGralFpFormaPago relacionadas */ 	
	public function deleteCliSubcategoriaGralFpFormaPagos(){
            $obs = $this->getCliSubcategoriaGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliSubcategoriaGralFpFormaPagosCmb() CliSubcategoriaGralFpFormaPago relacionadas */ 	
	public function getCliSubcategoriaGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoriaGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = CliSubcategoriaGralFpFormaPago::getCliSubcategoriaGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliSubcategorias (Coleccion) relacionados a traves de CliSubcategoriaGralFpFormaPago */ 	
	public function getCliSubcategoriasXCliSubcategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliSubcategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->addRealJoin(CliSubcategoriaGralFpFormaPago::GEN_TABLA, CliSubcategoriaGralFpFormaPago::GEN_ATTR_CLI_SUBCATEGORIA_ID, CliSubcategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliSubcategoria::getCliSubcategorias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliSubcategorias relacionados a traves de CliSubcategoriaGralFpFormaPago */ 	
	public function getCantidadCliSubcategoriasXCliSubcategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliSubcategoria::GEN_ATTR_ID);
            if($estado){
                $c->add(CliSubcategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliSubcategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliSubcategoria::GEN_TABLA);
            $c->addRealJoin(CliSubcategoriaGralFpFormaPago::GEN_TABLA, CliSubcategoriaGralFpFormaPago::GEN_ATTR_CLI_SUBCATEGORIA_ID, CliSubcategoria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliSubcategoria::getCliSubcategorias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliSubcategoria (Objeto) relacionado a traves de CliSubcategoriaGralFpFormaPago */ 	
	public function getCliSubcategoriaXCliSubcategoriaGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliSubcategoriasXCliSubcategoriaGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestos */ 	
	public function getVtaPresupuestos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuesto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuesto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuesto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuesto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuesto = VtaPresupuesto::hidratarObjeto($fila);			
                $vtapresupuestos[] = $vtapresupuesto;
            }

            return $vtapresupuestos;
	}	
	

	/* Método getVtaPresupuestosBloque para MasInfo */ 	
	public function getVtaPresupuestosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestos Habilitados */ 	
	public function getVtaPresupuestosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuesto */ 	
	public function getVtaPresupuesto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuesto relacionadas */ 	
	public function deleteVtaPresupuestos(){
            $obs = $this->getVtaPresupuestos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestosCmb() VtaPresupuesto relacionadas */ 	
	public function getVtaPresupuestosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaPresupuesto */ 	
	public function getCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaPresupuesto */ 	
	public function getCantidadCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaPresupuesto */ 	
	public function getCliClienteXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaPresupuesto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditos */ 	
	public function getVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacredito = VtaNotaCredito::hidratarObjeto($fila);			
                $vtanotacreditos[] = $vtanotacredito;
            }

            return $vtanotacreditos;
	}	
	

	/* Método getVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditos Habilitados */ 	
	public function getVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCredito */ 	
	public function getVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCredito relacionadas */ 	
	public function deleteVtaNotaCreditos(){
            $obs = $this->getVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditosCmb() VtaNotaCredito relacionadas */ 	
	public function getVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaCredito */ 	
	public function getCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaCredito */ 	
	public function getCantidadCliClientesXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaCredito */ 	
	public function getCliClienteXVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitos */ 	
	public function getVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebito = VtaNotaDebito::hidratarObjeto($fila);			
                $vtanotadebitos[] = $vtanotadebito;
            }

            return $vtanotadebitos;
	}	
	

	/* Método getVtaNotaDebitosBloque para MasInfo */ 	
	public function getVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitos Habilitados */ 	
	public function getVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebito */ 	
	public function getVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebito relacionadas */ 	
	public function deleteVtaNotaDebitos(){
            $obs = $this->getVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitosCmb() VtaNotaDebito relacionadas */ 	
	public function getVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaNotaDebito */ 	
	public function getCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaNotaDebito */ 	
	public function getCantidadCliClientesXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaNotaDebito */ 	
	public function getCliClienteXVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboItems */ 	
	public function getVtaReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboitem = VtaReciboItem::hidratarObjeto($fila);			
                $vtareciboitems[] = $vtareciboitem;
            }

            return $vtareciboitems;
	}	
	

	/* Método getVtaReciboItemsBloque para MasInfo */ 	
	public function getVtaReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboItems Habilitados */ 	
	public function getVtaReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboItem */ 	
	public function getVtaReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboItem relacionadas */ 	
	public function deleteVtaReciboItems(){
            $obs = $this->getVtaReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboItemsCmb() VtaReciboItem relacionadas */ 	
	public function getVtaReciboItemsCmb(){
            $c = new Criterio();
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaReciboItem */ 	
	public function getVtaRecibosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaReciboItem */ 	
	public function getCantidadVtaRecibosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaReciboItem */ 	
	public function getVtaReciboXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaFactura */ 	
	public function getCantidadCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaFactura */ 	
	public function getCliClienteXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionGralFpFormaPagos */ 	
	public function getVtaComisionGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisiongralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisiongralfpformapago = VtaComisionGralFpFormaPago::hidratarObjeto($fila);			
                $vtacomisiongralfpformapagos[] = $vtacomisiongralfpformapago;
            }

            return $vtacomisiongralfpformapagos;
	}	
	

	/* Método getVtaComisionGralFpFormaPagosBloque para MasInfo */ 	
	public function getVtaComisionGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPagos Habilitados */ 	
	public function getVtaComisionGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionGralFpFormaPago */ 	
	public function getVtaComisionGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionGralFpFormaPago relacionadas */ 	
	public function deleteVtaComisionGralFpFormaPagos(){
            $obs = $this->getVtaComisionGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionGralFpFormaPagosCmb() VtaComisionGralFpFormaPago relacionadas */ 	
	public function getVtaComisionGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaComisions (Coleccion) relacionados a traves de VtaComisionGralFpFormaPago */ 	
	public function getVtaComisionsXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPago::GEN_TABLA, VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaComisions relacionados a traves de VtaComisionGralFpFormaPago */ 	
	public function getCantidadVtaComisionsXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComision::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionGralFpFormaPago::GEN_TABLA, VtaComisionGralFpFormaPago::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComision (Objeto) relacionado a traves de VtaComisionGralFpFormaPago */ 	
	public function getVtaComisionXVtaComisionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaComisionsXVtaComisionGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturas */ 	
	public function getPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefactura = PdeFactura::hidratarObjeto($fila);			
                $pdefacturas[] = $pdefactura;
            }

            return $pdefacturas;
	}	
	

	/* Método getPdeFacturasBloque para MasInfo */ 	
	public function getPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturas Habilitados */ 	
	public function getPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFactura */ 	
	public function getPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFactura relacionadas */ 	
	public function deletePdeFacturas(){
            $obs = $this->getPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturasCmb() PdeFactura relacionadas */ 	
	public function getPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeFactura */ 	
	public function getPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeFactura */ 	
	public function getCantidadPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeFactura */ 	
	public function getPrvProveedorXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditos */ 	
	public function getPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacredito = PdeNotaCredito::hidratarObjeto($fila);			
                $pdenotacreditos[] = $pdenotacredito;
            }

            return $pdenotacreditos;
	}	
	

	/* Método getPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditos Habilitados */ 	
	public function getPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCredito */ 	
	public function getPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCredito relacionadas */ 	
	public function deletePdeNotaCreditos(){
            $obs = $this->getPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditosCmb() PdeNotaCredito relacionadas */ 	
	public function getPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaCredito */ 	
	public function getPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaCredito */ 	
	public function getCantidadPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaCredito */ 	
	public function getPrvProveedorXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitos */ 	
	public function getPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebito = PdeNotaDebito::hidratarObjeto($fila);			
                $pdenotadebitos[] = $pdenotadebito;
            }

            return $pdenotadebitos;
	}	
	

	/* Método getPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitos Habilitados */ 	
	public function getPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebito */ 	
	public function getPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebito relacionadas */ 	
	public function deletePdeNotaDebitos(){
            $obs = $this->getPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitosCmb() PdeNotaDebito relacionadas */ 	
	public function getPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaDebito */ 	
	public function getPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaDebito */ 	
	public function getCantidadPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaDebito */ 	
	public function getPrvProveedorXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboItems */ 	
	public function getPdeReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboitem = PdeReciboItem::hidratarObjeto($fila);			
                $pdereciboitems[] = $pdereciboitem;
            }

            return $pdereciboitems;
	}	
	

	/* Método getPdeReciboItemsBloque para MasInfo */ 	
	public function getPdeReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboItems Habilitados */ 	
	public function getPdeReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboItem */ 	
	public function getPdeReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboItem relacionadas */ 	
	public function deletePdeReciboItems(){
            $obs = $this->getPdeReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboItemsCmb() PdeReciboItem relacionadas */ 	
	public function getPdeReciboItemsCmb(){
            $c = new Criterio();
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboItem::getPdeReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecibos (Coleccion) relacionados a traves de PdeReciboItem */ 	
	public function getPdeRecibosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecibos relacionados a traves de PdeReciboItem */ 	
	public function getCantidadPdeRecibosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecibo (Objeto) relacionado a traves de PdeReciboItem */ 	
	public function getPdeReciboXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecibosXPdeReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoGralFpFormaPagos */ 	
	public function getPdeOrdenPagoGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagogralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagogralfpformapago = PdeOrdenPagoGralFpFormaPago::hidratarObjeto($fila);			
                $pdeordenpagogralfpformapagos[] = $pdeordenpagogralfpformapago;
            }

            return $pdeordenpagogralfpformapagos;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagosBloque para MasInfo */ 	
	public function getPdeOrdenPagoGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoGralFpFormaPagos Habilitados */ 	
	public function getPdeOrdenPagoGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoGralFpFormaPago */ 	
	public function getPdeOrdenPagoGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoGralFpFormaPago relacionadas */ 	
	public function deletePdeOrdenPagoGralFpFormaPagos(){
            $obs = $this->getPdeOrdenPagoGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoGralFpFormaPagosCmb() PdeOrdenPagoGralFpFormaPago relacionadas */ 	
	public function getPdeOrdenPagoGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagos (Coleccion) relacionados a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getPdeOrdenPagosXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPago::GEN_TABLA, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagos relacionados a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getCantidadPdeOrdenPagosXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPago::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPago::GEN_TABLA, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPago (Objeto) relacionado a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getPdeOrdenPagoXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagosXPdeOrdenPagoGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaIngresos */ 	
	public function getFndCajaIngresos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaIngreso::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaIngreso::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaIngreso::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaIngreso::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaIngreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaIngreso::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaIngreso::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajaingresos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajaingreso = FndCajaIngreso::hidratarObjeto($fila);			
                $fndcajaingresos[] = $fndcajaingreso;
            }

            return $fndcajaingresos;
	}	
	

	/* Método getFndCajaIngresosBloque para MasInfo */ 	
	public function getFndCajaIngresosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaIngresos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaIngresos Habilitados */ 	
	public function getFndCajaIngresosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaIngresos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaIngreso */ 	
	public function getFndCajaIngreso($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaIngresos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaIngreso relacionadas */ 	
	public function deleteFndCajaIngresos(){
            $obs = $this->getFndCajaIngresos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaIngresosCmb() FndCajaIngreso relacionadas */ 	
	public function getFndCajaIngresosCmb(){
            $c = new Criterio();
            $c->add(FndCajaIngreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaIngreso::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaIngreso::getFndCajaIngresosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajas (Coleccion) relacionados a traves de FndCajaIngreso */ 	
	public function getFndCajasXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaIngreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addRealJoin(FndCajaIngreso::GEN_TABLA, FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCaja::getFndCajas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajas relacionados a traves de FndCajaIngreso */ 	
	public function getCantidadFndCajasXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCaja::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaIngreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaIngreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addRealJoin(FndCajaIngreso::GEN_TABLA, FndCajaIngreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCaja::getFndCajas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCaja (Objeto) relacionado a traves de FndCajaIngreso */ 	
	public function getFndCajaXFndCajaIngreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajasXFndCajaIngreso($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaEgresos */ 	
	public function getFndCajaEgresos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaEgreso::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaEgreso::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaEgreso::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaEgreso::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaEgreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaEgreso::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaEgreso::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajaegresos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajaegreso = FndCajaEgreso::hidratarObjeto($fila);			
                $fndcajaegresos[] = $fndcajaegreso;
            }

            return $fndcajaegresos;
	}	
	

	/* Método getFndCajaEgresosBloque para MasInfo */ 	
	public function getFndCajaEgresosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaEgresos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaEgresos Habilitados */ 	
	public function getFndCajaEgresosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaEgresos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaEgreso */ 	
	public function getFndCajaEgreso($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaEgresos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaEgreso relacionadas */ 	
	public function deleteFndCajaEgresos(){
            $obs = $this->getFndCajaEgresos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaEgresosCmb() FndCajaEgreso relacionadas */ 	
	public function getFndCajaEgresosCmb(){
            $c = new Criterio();
            $c->add(FndCajaEgreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaEgreso::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaEgreso::getFndCajaEgresosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajas (Coleccion) relacionados a traves de FndCajaEgreso */ 	
	public function getFndCajasXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEgreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addRealJoin(FndCajaEgreso::GEN_TABLA, FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCaja::getFndCajas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajas relacionados a traves de FndCajaEgreso */ 	
	public function getCantidadFndCajasXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCaja::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaEgreso::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaEgreso::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addRealJoin(FndCajaEgreso::GEN_TABLA, FndCajaEgreso::GEN_ATTR_FND_CAJA_ID, FndCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCaja::getFndCajas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCaja (Objeto) relacionado a traves de FndCajaEgreso */ 	
	public function getFndCajaXFndCajaEgreso($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajasXFndCajaEgreso($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajaMovimientoItems */ 	
	public function getFndCajaMovimientoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajaMovimientoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajaMovimientoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajaMovimientoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndCajaMovimientoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajaMovimientoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajamovimientoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajamovimientoitem = FndCajaMovimientoItem::hidratarObjeto($fila);			
                $fndcajamovimientoitems[] = $fndcajamovimientoitem;
            }

            return $fndcajamovimientoitems;
	}	
	

	/* Método getFndCajaMovimientoItemsBloque para MasInfo */ 	
	public function getFndCajaMovimientoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajaMovimientoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajaMovimientoItems Habilitados */ 	
	public function getFndCajaMovimientoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajaMovimientoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajaMovimientoItem */ 	
	public function getFndCajaMovimientoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajaMovimientoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajaMovimientoItem relacionadas */ 	
	public function deleteFndCajaMovimientoItems(){
            $obs = $this->getFndCajaMovimientoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajaMovimientoItemsCmb() FndCajaMovimientoItem relacionadas */ 	
	public function getFndCajaMovimientoItemsCmb(){
            $c = new Criterio();
            $c->add(FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimientoItem::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajaMovimientoItem::getFndCajaMovimientoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajaMovimientos (Coleccion) relacionados a traves de FndCajaMovimientoItem */ 	
	public function getFndCajaMovimientosXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajaMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimiento::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoItem::GEN_TABLA, FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, FndCajaMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaMovimiento::getFndCajaMovimientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajaMovimientos relacionados a traves de FndCajaMovimientoItem */ 	
	public function getCantidadFndCajaMovimientosXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajaMovimiento::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajaMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajaMovimientoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajaMovimientoItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajaMovimiento::GEN_TABLA);
            $c->addRealJoin(FndCajaMovimientoItem::GEN_TABLA, FndCajaMovimientoItem::GEN_ATTR_FND_CAJA_MOVIMIENTO_ID, FndCajaMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajaMovimiento::getFndCajaMovimientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajaMovimiento (Objeto) relacionado a traves de FndCajaMovimientoItem */ 	
	public function getFndCajaMovimientoXFndCajaMovimientoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajaMovimientosXFndCajaMovimientoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getCliClienteXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeItems */ 	
	public function getVtaAjusteDebeItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeitem = VtaAjusteDebeItem::hidratarObjeto($fila);			
                $vtaajustedebeitems[] = $vtaajustedebeitem;
            }

            return $vtaajustedebeitems;
	}	
	

	/* Método getVtaAjusteDebeItemsBloque para MasInfo */ 	
	public function getVtaAjusteDebeItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItems Habilitados */ 	
	public function getVtaAjusteDebeItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItem */ 	
	public function getVtaAjusteDebeItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeItem relacionadas */ 	
	public function deleteVtaAjusteDebeItems(){
            $obs = $this->getVtaAjusteDebeItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeItemsCmb() VtaAjusteDebeItem relacionadas */ 	
	public function getVtaAjusteDebeItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeItem */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeItem */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeItem */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItems */ 	
	public function getVtaAjusteHaberItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitem = VtaAjusteHaberItem::hidratarObjeto($fila);			
                $vtaajustehaberitems[] = $vtaajustehaberitem;
            }

            return $vtaajustehaberitems;
	}	
	

	/* Método getVtaAjusteHaberItemsBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItems Habilitados */ 	
	public function getVtaAjusteHaberItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItem */ 	
	public function getVtaAjusteHaberItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItem relacionadas */ 	
	public function deleteVtaAjusteHaberItems(){
            $obs = $this->getVtaAjusteHaberItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemsCmb() VtaAjusteHaberItem relacionadas */ 	
	public function getVtaAjusteHaberItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberItem */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberItem */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberItem */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamTipoCondicionOperacionGralFpFormaPagos */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamTipoCondicionOperacionGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamTipoCondicionOperacionGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamtipocondicionoperaciongralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamtipocondicionoperaciongralfpformapago = EkuParamTipoCondicionOperacionGralFpFormaPago::hidratarObjeto($fila);			
                $ekuparamtipocondicionoperaciongralfpformapagos[] = $ekuparamtipocondicionoperaciongralfpformapago;
            }

            return $ekuparamtipocondicionoperaciongralfpformapagos;
	}	
	

	/* Método getEkuParamTipoCondicionOperacionGralFpFormaPagosBloque para MasInfo */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamTipoCondicionOperacionGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamTipoCondicionOperacionGralFpFormaPagos Habilitados */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamTipoCondicionOperacionGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamTipoCondicionOperacionGralFpFormaPago */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamTipoCondicionOperacionGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamTipoCondicionOperacionGralFpFormaPago relacionadas */ 	
	public function deleteEkuParamTipoCondicionOperacionGralFpFormaPagos(){
            $obs = $this->getEkuParamTipoCondicionOperacionGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamTipoCondicionOperacionGralFpFormaPagosCmb() EkuParamTipoCondicionOperacionGralFpFormaPago relacionadas */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamTipoCondicionOperacionGralFpFormaPago::getEkuParamTipoCondicionOperacionGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamTipoCondicionOperacions (Coleccion) relacionados a traves de EkuParamTipoCondicionOperacionGralFpFormaPago */ 	
	public function getEkuParamTipoCondicionOperacionsXEkuParamTipoCondicionOperacionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamTipoCondicionOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoCondicionOperacion::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA, EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_EKU_PARAM_TIPO_CONDICION_OPERACION_ID, EkuParamTipoCondicionOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoCondicionOperacion::getEkuParamTipoCondicionOperacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamTipoCondicionOperacions relacionados a traves de EkuParamTipoCondicionOperacionGralFpFormaPago */ 	
	public function getCantidadEkuParamTipoCondicionOperacionsXEkuParamTipoCondicionOperacionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamTipoCondicionOperacion::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamTipoCondicionOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoCondicionOperacion::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA, EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_ATTR_EKU_PARAM_TIPO_CONDICION_OPERACION_ID, EkuParamTipoCondicionOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoCondicionOperacion::getEkuParamTipoCondicionOperacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamTipoCondicionOperacion (Objeto) relacionado a traves de EkuParamTipoCondicionOperacionGralFpFormaPago */ 	
	public function getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamTipoCondicionOperacionsXEkuParamTipoCondicionOperacionGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamTipoPagoGralFpFormaPagos */ 	
	public function getEkuParamTipoPagoGralFpFormaPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamTipoPagoGralFpFormaPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamTipoPagoGralFpFormaPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamTipoPagoGralFpFormaPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamTipoPagoGralFpFormaPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamtipopagogralfpformapagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamtipopagogralfpformapago = EkuParamTipoPagoGralFpFormaPago::hidratarObjeto($fila);			
                $ekuparamtipopagogralfpformapagos[] = $ekuparamtipopagogralfpformapago;
            }

            return $ekuparamtipopagogralfpformapagos;
	}	
	

	/* Método getEkuParamTipoPagoGralFpFormaPagosBloque para MasInfo */ 	
	public function getEkuParamTipoPagoGralFpFormaPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamTipoPagoGralFpFormaPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamTipoPagoGralFpFormaPagos Habilitados */ 	
	public function getEkuParamTipoPagoGralFpFormaPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamTipoPagoGralFpFormaPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamTipoPagoGralFpFormaPago */ 	
	public function getEkuParamTipoPagoGralFpFormaPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamTipoPagoGralFpFormaPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamTipoPagoGralFpFormaPago relacionadas */ 	
	public function deleteEkuParamTipoPagoGralFpFormaPagos(){
            $obs = $this->getEkuParamTipoPagoGralFpFormaPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamTipoPagoGralFpFormaPagosCmb() EkuParamTipoPagoGralFpFormaPago relacionadas */ 	
	public function getEkuParamTipoPagoGralFpFormaPagosCmb(){
            $c = new Criterio();
            $c->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamTipoPagoGralFpFormaPago::getEkuParamTipoPagoGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamTipoPagos (Coleccion) relacionados a traves de EkuParamTipoPagoGralFpFormaPago */ 	
	public function getEkuParamTipoPagosXEkuParamTipoPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamTipoPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoPago::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoPagoGralFpFormaPago::GEN_TABLA, EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_EKU_PARAM_TIPO_PAGO_ID, EkuParamTipoPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoPago::getEkuParamTipoPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamTipoPagos relacionados a traves de EkuParamTipoPagoGralFpFormaPago */ 	
	public function getCantidadEkuParamTipoPagosXEkuParamTipoPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamTipoPago::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamTipoPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamTipoPago::GEN_TABLA);
            $c->addRealJoin(EkuParamTipoPagoGralFpFormaPago::GEN_TABLA, EkuParamTipoPagoGralFpFormaPago::GEN_ATTR_EKU_PARAM_TIPO_PAGO_ID, EkuParamTipoPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamTipoPago::getEkuParamTipoPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamTipoPago (Objeto) relacionado a traves de EkuParamTipoPagoGralFpFormaPago */ 	
	public function getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamTipoPagosXEkuParamTipoPagoGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los CliCategorias asignados a GralFpFormaPago */ 	
	public function getCliCategoriaGralFpFormaPagosId(){
            $ids = array();
            foreach($this->getCliCategoriaGralFpFormaPagos() as $o){
            
                $ids[] = $o->getCliCategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliCategorias asignados al GralFpFormaPago */ 	
	public function setCliCategoriaGralFpFormaPagos($ids){
            $this->deleteCliCategoriaGralFpFormaPagos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliCategoriaGralFpFormaPago();
                    $o->setCliCategoriaId($id);
                    $o->setGralFpFormaPagoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCategoria en el alta de GralFpFormaPago */ 	
	public function getAltaMostrarBloqueRelacionCliCategoriaGralFpFormaPago(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliSubcategorias asignados a GralFpFormaPago */ 	
	public function getCliSubcategoriaGralFpFormaPagosId(){
            $ids = array();
            foreach($this->getCliSubcategoriaGralFpFormaPagos() as $o){
            
                $ids[] = $o->getCliSubcategoriaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliSubcategorias asignados al GralFpFormaPago */ 	
	public function setCliSubcategoriaGralFpFormaPagos($ids){
            $this->deleteCliSubcategoriaGralFpFormaPagos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliSubcategoriaGralFpFormaPago();
                    $o->setCliSubcategoriaId($id);
                    $o->setGralFpFormaPagoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliSubcategoria en el alta de GralFpFormaPago */ 	
	public function getAltaMostrarBloqueRelacionCliSubcategoriaGralFpFormaPago(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamTipoCondicionOperacions asignados a GralFpFormaPago */ 	
	public function getEkuParamTipoCondicionOperacionGralFpFormaPagosId(){
            $ids = array();
            foreach($this->getEkuParamTipoCondicionOperacionGralFpFormaPagos() as $o){
            
                $ids[] = $o->getEkuParamTipoCondicionOperacionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamTipoCondicionOperacions asignados al GralFpFormaPago */ 	
	public function setEkuParamTipoCondicionOperacionGralFpFormaPagos($ids){
            $this->deleteEkuParamTipoCondicionOperacionGralFpFormaPagos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamTipoCondicionOperacionGralFpFormaPago();
                    $o->setEkuParamTipoCondicionOperacionId($id);
                    $o->setGralFpFormaPagoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamTipoCondicionOperacion en el alta de GralFpFormaPago */ 	
	public function getAltaMostrarBloqueRelacionEkuParamTipoCondicionOperacionGralFpFormaPago(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamTipoPagos asignados a GralFpFormaPago */ 	
	public function getEkuParamTipoPagoGralFpFormaPagosId(){
            $ids = array();
            foreach($this->getEkuParamTipoPagoGralFpFormaPagos() as $o){
            
                $ids[] = $o->getEkuParamTipoPagoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamTipoPagos asignados al GralFpFormaPago */ 	
	public function setEkuParamTipoPagoGralFpFormaPagos($ids){
            $this->deleteEkuParamTipoPagoGralFpFormaPagos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamTipoPagoGralFpFormaPago();
                    $o->setEkuParamTipoPagoId($id);
                    $o->setGralFpFormaPagoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamTipoPago en el alta de GralFpFormaPago */ 	
	public function getAltaMostrarBloqueRelacionEkuParamTipoPagoGralFpFormaPago(){
            return true;
	}
	

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
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
            		
        if($contexto_solicitante != CntbCuenta::GEN_CLASE){
            if($this->getCntbCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbCuenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CntbCuenta::GEN_CLASE){
            if($this->getCntbCuenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbCuenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbCuenta()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_fp_forma_pago'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_fp_forma_pago';");
            
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

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_corta' */ 	
	static function getOsxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'contado' */ 	
	static function getOxContado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'contado' */ 	
	static function getOsxContado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'credito' */ 	
	static function getOxCredito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREDITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'credito' */ 	
	static function getOsxCredito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREDITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'inmediato' */ 	
	static function getOxInmediato($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INMEDIATO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'inmediato' */ 	
	static function getOsxInmediato($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INMEDIATO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'recibo_automatico' */ 	
	static function getOxReciboAutomatico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RECIBO_AUTOMATICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'recibo_automatico' */ 	
	static function getOsxReciboAutomatico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RECIBO_AUTOMATICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_compra' */ 	
	static function getOxParaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_compra' */ 	
	static function getOsxParaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_venta' */ 	
	static function getOxParaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_venta' */ 	
	static function getOsxParaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_cobro' */ 	
	static function getOxParaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_cobro' */ 	
	static function getOsxParaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'para_pago' */ 	
	static function getOxParaPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'para_pago' */ 	
	static function getOsxParaPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PARA_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_compra' */ 	
	static function getOxCntbCuentaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_cuenta_compra' */ 	
	static function getOsxCntbCuentaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_cuenta_venta' */ 	
	static function getOxCntbCuentaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_cuenta_venta' */ 	
	static function getOsxCntbCuentaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_CUENTA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'requiere_referencia' */ 	
	static function getOxRequiereReferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_REFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'requiere_referencia' */ 	
	static function getOsxRequiereReferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_REFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'requiere_info_extendida' */ 	
	static function getOxRequiereInfoExtendida($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_INFO_EXTENDIDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'requiere_info_extendida' */ 	
	static function getOsxRequiereInfoExtendida($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_INFO_EXTENDIDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'requiere_conciliacion' */ 	
	static function getOxRequiereConciliacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_CONCILIACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'requiere_conciliacion' */ 	
	static function getOsxRequiereConciliacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_CONCILIACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos(null, $criterio);
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

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
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

            $obs = self::getGralFpFormaPagos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_fp_forma_pago_adm');
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
                $c->addTabla(GralFpFormaPago::GEN_TABLA);
                $c->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_fp_forma_pagos = GralFpFormaPago::getGralFpFormaPagos(null, $c);

                $arr = array();
                foreach($gral_fp_forma_pagos as $gral_fp_forma_pago){
                    $descripcion = $gral_fp_forma_pago->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>