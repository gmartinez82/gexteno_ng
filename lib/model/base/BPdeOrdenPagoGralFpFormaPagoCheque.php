<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeOrdenPagoGralFpFormaPagoCheque
{ 
	
	const SES_PAGINACION = 'adm_pdeordenpagogralfpformapagocheque_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdeordenpagogralfpformapagocheque_paginas_registros';
	const SES_CRITERIOS = 'adm_pdeordenpagogralfpformapagocheque_criterios';
	
	const GEN_CLASE = 'PdeOrdenPagoGralFpFormaPagoCheque';
	const GEN_TABLA = 'pde_orden_pago_gral_fp_forma_pago_cheque';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeOrdenPagoGralFpFormaPagoCheque */ 
	const GEN_ATTR_ID = 'pde_orden_pago_gral_fp_forma_pago_cheque.id';
	const GEN_ATTR_DESCRIPCION = 'pde_orden_pago_gral_fp_forma_pago_cheque.descripcion';
	const GEN_ATTR_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_gral_fp_forma_pago_cheque.pde_orden_pago_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID = 'pde_orden_pago_gral_fp_forma_pago_cheque.pde_orden_pago_gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_BANCO_ID = 'pde_orden_pago_gral_fp_forma_pago_cheque.gral_banco_id';
	const GEN_ATTR_NUMERO_CHEQUE = 'pde_orden_pago_gral_fp_forma_pago_cheque.numero_cheque';
	const GEN_ATTR_FECHA_EMISION = 'pde_orden_pago_gral_fp_forma_pago_cheque.fecha_emision';
	const GEN_ATTR_FECHA_COBRO = 'pde_orden_pago_gral_fp_forma_pago_cheque.fecha_cobro';
	const GEN_ATTR_FIRMANTE = 'pde_orden_pago_gral_fp_forma_pago_cheque.firmante';
	const GEN_ATTR_ENTREGADOR = 'pde_orden_pago_gral_fp_forma_pago_cheque.entregador';
	const GEN_ATTR_CODIGO = 'pde_orden_pago_gral_fp_forma_pago_cheque.codigo';
	const GEN_ATTR_OBSERVACION = 'pde_orden_pago_gral_fp_forma_pago_cheque.observacion';
	const GEN_ATTR_ORDEN = 'pde_orden_pago_gral_fp_forma_pago_cheque.orden';
	const GEN_ATTR_ESTADO = 'pde_orden_pago_gral_fp_forma_pago_cheque.estado';
	const GEN_ATTR_CREADO = 'pde_orden_pago_gral_fp_forma_pago_cheque.creado';
	const GEN_ATTR_CREADO_POR = 'pde_orden_pago_gral_fp_forma_pago_cheque.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_orden_pago_gral_fp_forma_pago_cheque.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_orden_pago_gral_fp_forma_pago_cheque.modificado_por';

	/* Constantes de Atributos Min de BPdeOrdenPagoGralFpFormaPagoCheque */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID = 'pde_orden_pago_gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_BANCO_ID = 'gral_banco_id';
	const GEN_ATTR_MIN_NUMERO_CHEQUE = 'numero_cheque';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_FECHA_COBRO = 'fecha_cobro';
	const GEN_ATTR_MIN_FIRMANTE = 'firmante';
	const GEN_ATTR_MIN_ENTREGADOR = 'entregador';
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
	

	/* Atributos de BPdeOrdenPagoGralFpFormaPagoCheque */ 
	private $id;
	private $descripcion;
	private $pde_orden_pago_id;
	private $pde_orden_pago_gral_fp_forma_pago_id;
	private $gral_banco_id;
	private $numero_cheque;
	private $fecha_emision;
	private $fecha_cobro;
	private $firmante;
	private $entregador;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeOrdenPagoGralFpFormaPagoCheque */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPdeOrdenPagoId(){ if(isset($this->pde_orden_pago_id)){ return $this->pde_orden_pago_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoGralFpFormaPagoId(){ if(isset($this->pde_orden_pago_gral_fp_forma_pago_id)){ return $this->pde_orden_pago_gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralBancoId(){ if(isset($this->gral_banco_id)){ return $this->gral_banco_id; }else{ return 'null'; } }
	public function getNumeroCheque(){ if(isset($this->numero_cheque)){ return $this->numero_cheque; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getFechaCobro(){ if(isset($this->fecha_cobro)){ return $this->fecha_cobro; }else{ return ''; } }
	public function getFirmante(){ if(isset($this->firmante)){ return $this->firmante; }else{ return ''; } }
	public function getEntregador(){ if(isset($this->entregador)){ return $this->entregador; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeOrdenPagoGralFpFormaPagoCheque */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_BANCO_ID."
				, ".self::GEN_ATTR_NUMERO_CHEQUE."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_FECHA_COBRO."
				, ".self::GEN_ATTR_FIRMANTE."
				, ".self::GEN_ATTR_ENTREGADOR."
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
				$this->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
				$this->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
				$this->setNumeroCheque($fila[self::GEN_ATTR_MIN_NUMERO_CHEQUE]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
				$this->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
				$this->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
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
	public function setPdeOrdenPagoId($v){ $this->pde_orden_pago_id = $v; }
	public function setPdeOrdenPagoGralFpFormaPagoId($v){ $this->pde_orden_pago_gral_fp_forma_pago_id = $v; }
	public function setGralBancoId($v){ $this->gral_banco_id = $v; }
	public function setNumeroCheque($v){ $this->numero_cheque = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setFechaCobro($v){ $this->fecha_cobro = $v; }
	public function setFirmante($v){ $this->firmante = $v; }
	public function setEntregador($v){ $this->entregador = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeOrdenPagoGralFpFormaPagoCheque();
            $o->setId($fila[PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$o->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
			$o->setNumeroCheque($fila[self::GEN_ATTR_MIN_NUMERO_CHEQUE]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
			$o->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
			$o->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
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

	/* Control de BPdeOrdenPagoGralFpFormaPagoCheque */ 	
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

	/* Cambia el estado de BPdeOrdenPagoGralFpFormaPagoCheque */ 	
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

	/* Save de BPdeOrdenPagoGralFpFormaPagoCheque */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_CHEQUE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_COBRO."
						, ".self::GEN_ATTR_MIN_FIRMANTE."
						, ".self::GEN_ATTR_MIN_ENTREGADOR."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_orden_pago_gral_fp_forma_pago_cheque_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".$this->getGralBancoId()."
						, '".$this->getNumeroCheque()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaCobro()."'
						, '".$this->getFirmante()."'
						, '".$this->getEntregador()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_orden_pago_gral_fp_forma_pago_cheque_seq')";
            
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
                 
				 ".PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID." = ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID." = ".$this->getGralBancoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_CHEQUE." = '".$this->getNumeroCheque()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_COBRO." = '".$this->getFechaCobro()."'
						, ".self::GEN_ATTR_MIN_FIRMANTE." = '".$this->getFirmante()."'
						, ".self::GEN_ATTR_MIN_ENTREGADOR." = '".$this->getEntregador()."'
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
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_CHEQUE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_COBRO."
						, ".self::GEN_ATTR_MIN_FIRMANTE."
						, ".self::GEN_ATTR_MIN_ENTREGADOR."
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
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".$this->getGralBancoId()."
						, '".$this->getNumeroCheque()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaCobro()."'
						, '".$this->getFirmante()."'
						, '".$this->getEntregador()."'
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
                     
				 ".PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID." = ".$this->getPdeOrdenPagoGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_BANCO_ID." = ".$this->getGralBancoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_CHEQUE." = '".$this->getNumeroCheque()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_COBRO." = '".$this->getFechaCobro()."'
						, ".self::GEN_ATTR_MIN_FIRMANTE." = '".$this->getFirmante()."'
						, ".self::GEN_ATTR_MIN_ENTREGADOR." = '".$this->getEntregador()."'
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
            $o = new PdeOrdenPagoGralFpFormaPagoCheque();
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

	/* Delete de BPdeOrdenPagoGralFpFormaPagoCheque */ 	
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
	
	public function duplicarPdeOrdenPagoGralFpFormaPagoCheque(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeOrdenPagoGralFpFormaPagoCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeOrdenPagoGralFpFormaPagoCheque::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdeordenpagogralfpformapagocheques = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdeordenpagogralfpformapagocheque = new PdeOrdenPagoGralFpFormaPagoCheque();
                    $pdeordenpagogralfpformapagocheque->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdeordenpagogralfpformapagocheque->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdeordenpagogralfpformapagocheque->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$pdeordenpagogralfpformapagocheque->setPdeOrdenPagoGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID]);
			$pdeordenpagogralfpformapagocheque->setGralBancoId($fila[self::GEN_ATTR_MIN_GRAL_BANCO_ID]);
			$pdeordenpagogralfpformapagocheque->setNumeroCheque($fila[self::GEN_ATTR_MIN_NUMERO_CHEQUE]);
			$pdeordenpagogralfpformapagocheque->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pdeordenpagogralfpformapagocheque->setFechaCobro($fila[self::GEN_ATTR_MIN_FECHA_COBRO]);
			$pdeordenpagogralfpformapagocheque->setFirmante($fila[self::GEN_ATTR_MIN_FIRMANTE]);
			$pdeordenpagogralfpformapagocheque->setEntregador($fila[self::GEN_ATTR_MIN_ENTREGADOR]);
			$pdeordenpagogralfpformapagocheque->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdeordenpagogralfpformapagocheque->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdeordenpagogralfpformapagocheque->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdeordenpagogralfpformapagocheque->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdeordenpagogralfpformapagocheque->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdeordenpagogralfpformapagocheque->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdeordenpagogralfpformapagocheque->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdeordenpagogralfpformapagocheque->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdeordenpagogralfpformapagocheques[] = $pdeordenpagogralfpformapagocheque;
		}
		
		return $pdeordenpagogralfpformapagocheques;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques Habilitados */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques para listado de Backend */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeOrdenPagoGralFpFormaPagoCheque::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques filtrado para select */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesCmbF($paginador = null, $criterio = null){
            $col = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques filtrado por una coleccion de objetos foraneos de PdeOrdenPago */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesXPdeOrdenPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques filtrado por una coleccion de objetos foraneos de PdeOrdenPagoGralFpFormaPago */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesXPdeOrdenPagoGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques filtrado por una coleccion de objetos foraneos de GralBanco */ 	
	static function getPdeOrdenPagoGralFpFormaPagoChequesXGralBancos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_GRAL_BANCO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
            $c->addOrden(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralBancoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_orden_pago_gral_fp_forma_pago_cheque_adm.php';
            $url_gestion = 'pde_orden_pago_gral_fp_forma_pago_cheque_gestion.php';
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
	

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) */ 	
    public function getPdeOrdenPago(){
        $o = new PdeOrdenPago();
        $o->setId($this->getPdeOrdenPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoId()];
            }else{
                $o = PdeOrdenPago::getOxId($this->getPdeOrdenPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOrdenPagoGralFpFormaPago (Clave Foranea) */ 	
    public function getPdeOrdenPagoGralFpFormaPago(){
        $o = new PdeOrdenPagoGralFpFormaPago();
        $o->setId($this->getPdeOrdenPagoGralFpFormaPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPagoGralFpFormaPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoGralFpFormaPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoGralFpFormaPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()];
            }else{
                $o = PdeOrdenPagoGralFpFormaPago::getOxId($this->getPdeOrdenPagoGralFpFormaPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoGralFpFormaPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPagoGralFpFormaPago();
        }
        return $o;		
    }

	/* Metodo que retorna el GralBanco (Clave Foranea) */ 	
    public function getGralBanco(){
        $o = new GralBanco();
        $o->setId($this->getGralBancoId());
        return $o;			
    }

	/* Metodo que retorna el GralBanco (Clave Foranea) en Array */ 	
    public function getGralBancoEnArray(&$arr_os){
        if($this->getGralBancoId() != 'null'){
            if(isset($arr_os[$this->getGralBancoId()])){
                $o = $arr_os[$this->getGralBancoId()];
            }else{
                $o = GralBanco::getOxId($this->getGralBancoId());
                if($o){
                    $arr_os[$this->getGralBancoId()] = $o;
                }
            }
        }else{
            $o = new GralBanco();
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
            		
        if($contexto_solicitante != PdeOrdenPago::GEN_CLASE){
            if($this->getPdeOrdenPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOrdenPagoGralFpFormaPago::GEN_CLASE){
            if($this->getPdeOrdenPagoGralFpFormaPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPagoGralFpFormaPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPagoGralFpFormaPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralBanco::GEN_CLASE){
            if($this->getGralBanco()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralBanco::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralBanco()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_orden_pago_gral_fp_forma_pago_cheque'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_orden_pago_gral_fp_forma_pago_cheque';");
            
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOsxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_gral_fp_forma_pago_id' */ 	
	static function getOxPdeOrdenPagoGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_gral_fp_forma_pago_id' */ 	
	static function getOsxPdeOrdenPagoGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_banco_id' */ 	
	static function getOxGralBancoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_BANCO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_banco_id' */ 	
	static function getOsxGralBancoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_BANCO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_cheque' */ 	
	static function getOxNumeroCheque($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_CHEQUE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_cheque' */ 	
	static function getOsxNumeroCheque($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_CHEQUE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_emision' */ 	
	static function getOsxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_cobro' */ 	
	static function getOxFechaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_cobro' */ 	
	static function getOsxFechaCobro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_COBRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'firmante' */ 	
	static function getOxFirmante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FIRMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'firmante' */ 	
	static function getOsxFirmante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FIRMANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'entregador' */ 	
	static function getOxEntregador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ENTREGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'entregador' */ 	
	static function getOsxEntregador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ENTREGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques(null, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_orden_pago_gral_fp_forma_pago_cheque_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_emision' */ 	
	public function getFechaEmisionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaEmision(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaEmisionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaEmisionDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_cobro' */ 	
	public function getFechaCobroDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaCobro(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaCobroDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaCobroDiferenciaDias();
        
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
                $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
                $c->addOrden(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_orden_pago_gral_fp_forma_pago_cheques = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoCheques(null, $c);

                $arr = array();
                foreach($pde_orden_pago_gral_fp_forma_pago_cheques as $pde_orden_pago_gral_fp_forma_pago_cheque){
                    $descripcion = $pde_orden_pago_gral_fp_forma_pago_cheque->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>