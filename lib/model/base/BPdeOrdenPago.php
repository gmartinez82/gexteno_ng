<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeOrdenPago
{ 
	
	const SES_PAGINACION = 'adm_pdeordenpago_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdeordenpago_paginas_registros';
	const SES_CRITERIOS = 'adm_pdeordenpago_criterios';
	
	const GEN_CLASE = 'PdeOrdenPago';
	const GEN_TABLA = 'pde_orden_pago';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeOrdenPago */ 
	const GEN_ATTR_ID = 'pde_orden_pago.id';
	const GEN_ATTR_DESCRIPCION = 'pde_orden_pago.descripcion';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_orden_pago.prv_proveedor_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID = 'pde_orden_pago.pde_orden_pago_tipo_estado_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'pde_orden_pago.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'pde_orden_pago.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'pde_orden_pago.gral_empresa_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_orden_pago.pde_centro_pedido_id';
	const GEN_ATTR_FECHA_EMISION = 'pde_orden_pago.fecha_emision';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'pde_orden_pago.persona_descripcion';
	const GEN_ATTR_RAZON_SOCIAL = 'pde_orden_pago.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'pde_orden_pago.domicilio_legal';
	const GEN_ATTR_CUIT = 'pde_orden_pago.cuit';
	const GEN_ATTR_CODIGO = 'pde_orden_pago.codigo';
	const GEN_ATTR_ANIO = 'pde_orden_pago.anio';
	const GEN_ATTR_GRAL_MES_ID = 'pde_orden_pago.gral_mes_id';
	const GEN_ATTR_FND_CAJA_ID = 'pde_orden_pago.fnd_caja_id';
	const GEN_ATTR_OBSERVACION = 'pde_orden_pago.observacion';
	const GEN_ATTR_NOTA_PUBLICA = 'pde_orden_pago.nota_publica';
	const GEN_ATTR_ORDEN = 'pde_orden_pago.orden';
	const GEN_ATTR_ESTADO = 'pde_orden_pago.estado';
	const GEN_ATTR_CREADO = 'pde_orden_pago.creado';
	const GEN_ATTR_CREADO_POR = 'pde_orden_pago.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_orden_pago.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_orden_pago.modificado_por';

	/* Constantes de Atributos Min de BPdeOrdenPago */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID = 'pde_orden_pago_tipo_estado_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_FND_CAJA_ID = 'fnd_caja_id';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
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
	

	/* Atributos de BPdeOrdenPago */ 
	private $id;
	private $descripcion;
	private $prv_proveedor_id;
	private $pde_orden_pago_tipo_estado_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $pde_centro_pedido_id;
	private $fecha_emision;
	private $persona_descripcion;
	private $razon_social;
	private $domicilio_legal;
	private $cuit;
	private $codigo;
	private $anio;
	private $gral_mes_id;
	private $fnd_caja_id;
	private $observacion;
	private $nota_publica;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeOrdenPago */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoTipoEstadoId(){ if(isset($this->pde_orden_pago_tipo_estado_id)){ return $this->pde_orden_pago_tipo_estado_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getFndCajaId(){ if(isset($this->fnd_caja_id)){ return $this->fnd_caja_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeOrdenPago */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_FND_CAJA_ID."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
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
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
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
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setPdeOrdenPagoTipoEstadoId($v){ $this->pde_orden_pago_tipo_estado_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setFndCajaId($v){ $this->fnd_caja_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeOrdenPago();
            $o->setId($fila[PdeOrdenPago::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeOrdenPago */ 	
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

	/* Cambia el estado de BPdeOrdenPago */ 	
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

	/* Save de BPdeOrdenPago */ 	
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_orden_pago_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getFndCajaId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaPublica()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_orden_pago_seq')";
            
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
                 
				 ".PdeOrdenPago::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID." = ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getFndCajaId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaPublica()."'
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
                     
				 ".PdeOrdenPago::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID." = ".$this->getPdeOrdenPagoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
            $o = new PdeOrdenPago();
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

	/* Delete de BPdeOrdenPago */ 	
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
	
            // se elimina la coleccion de PdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoGralFpFormaPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoGralFpFormaPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoGralFpFormaPagoCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoGralFpFormaPagoCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeOrdenPago(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeOrdenPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeOrdenPago::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdeordenpagos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdeordenpago = new PdeOrdenPago();
                    $pdeordenpago->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdeordenpago->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdeordenpago->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdeordenpago->setPdeOrdenPagoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_TIPO_ESTADO_ID]);
			$pdeordenpago->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$pdeordenpago->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$pdeordenpago->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$pdeordenpago->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdeordenpago->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pdeordenpago->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$pdeordenpago->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$pdeordenpago->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$pdeordenpago->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$pdeordenpago->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdeordenpago->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$pdeordenpago->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$pdeordenpago->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$pdeordenpago->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdeordenpago->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$pdeordenpago->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdeordenpago->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdeordenpago->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdeordenpago->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdeordenpago->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdeordenpago->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdeordenpagos[] = $pdeordenpago;
		}
		
		return $pdeordenpagos;
	}	
	

	/* Método getPdeOrdenPagos Habilitados */ 	
	static function getPdeOrdenPagosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeOrdenPago::getPdeOrdenPagos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeOrdenPagos para listado de Backend */ 	
	static function getPdeOrdenPagosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeOrdenPago::getPdeOrdenPagos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeOrdenPagosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeOrdenPago::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeOrdenPago::getPdeOrdenPagos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagos filtrado para select */ 	
	static function getPdeOrdenPagosCmbF($paginador = null, $criterio = null){
            $col = PdeOrdenPago::getPdeOrdenPagos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeOrdenPagosXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de PdeOrdenPagoTipoEstado */ 	
	static function getPdeOrdenPagosXPdeOrdenPagoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPdeOrdenPagosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPdeOrdenPagosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPdeOrdenPagosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeOrdenPagosXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getPdeOrdenPagosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOrdenPagos filtrado por una coleccion de objetos foraneos de FndCaja */ 	
	static function getPdeOrdenPagosXFndCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_FND_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOrdenPago::getPdeOrdenPagos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_orden_pago_adm.php';
            $url_gestion = 'pde_orden_pago_gestion.php';
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
	

	/* Metodo getPdeRecibos */ 	
	public function getPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecibo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibo = PdeRecibo::hidratarObjeto($fila);			
                $pderecibos[] = $pderecibo;
            }

            return $pderecibos;
	}	
	

	/* Método getPdeRecibosBloque para MasInfo */ 	
	public function getPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecibos Habilitados */ 	
	public function getPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecibo */ 	
	public function getPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecibo relacionadas */ 	
	public function deletePdeRecibos(){
            $obs = $this->getPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecibosCmb() PdeRecibo relacionadas */ 	
	public function getPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeRecibo */ 	
	public function getPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeRecibo */ 	
	public function getCantidadPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeRecibo */ 	
	public function getPrvProveedorXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoImportes */ 	
	public function getPdeOrdenPagoImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoImporte::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagoimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagoimporte = PdeOrdenPagoImporte::hidratarObjeto($fila);			
                $pdeordenpagoimportes[] = $pdeordenpagoimporte;
            }

            return $pdeordenpagoimportes;
	}	
	

	/* Método getPdeOrdenPagoImportesBloque para MasInfo */ 	
	public function getPdeOrdenPagoImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoImportes Habilitados */ 	
	public function getPdeOrdenPagoImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoImporte */ 	
	public function getPdeOrdenPagoImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoImporte relacionadas */ 	
	public function deletePdeOrdenPagoImportes(){
            $obs = $this->getPdeOrdenPagoImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoImportesCmb() PdeOrdenPagoImporte relacionadas */ 	
	public function getPdeOrdenPagoImportesCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoImporte::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoImporte::getPdeOrdenPagoImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeOrdenPagoEstados */ 	
	public function getPdeOrdenPagoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagoestado = PdeOrdenPagoEstado::hidratarObjeto($fila);			
                $pdeordenpagoestados[] = $pdeordenpagoestado;
            }

            return $pdeordenpagoestados;
	}	
	

	/* Método getPdeOrdenPagoEstadosBloque para MasInfo */ 	
	public function getPdeOrdenPagoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoEstados Habilitados */ 	
	public function getPdeOrdenPagoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoEstado */ 	
	public function getPdeOrdenPagoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoEstado relacionadas */ 	
	public function deletePdeOrdenPagoEstados(){
            $obs = $this->getPdeOrdenPagoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoEstadosCmb() PdeOrdenPagoEstado relacionadas */ 	
	public function getPdeOrdenPagoEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoEstado::getPdeOrdenPagoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagoTipoEstados (Coleccion) relacionados a traves de PdeOrdenPagoEstado */ 	
	public function getPdeOrdenPagoTipoEstadosXPdeOrdenPagoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoEstado::GEN_TABLA, PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagoTipoEstados relacionados a traves de PdeOrdenPagoEstado */ 	
	public function getCantidadPdeOrdenPagoTipoEstadosXPdeOrdenPagoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoEstado::GEN_TABLA, PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, PdeOrdenPagoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPagoTipoEstado (Objeto) relacionado a traves de PdeOrdenPagoEstado */ 	
	public function getPdeOrdenPagoTipoEstadoXPdeOrdenPagoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagoTipoEstadosXPdeOrdenPagoEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoEnviados */ 	
	public function getPdeOrdenPagoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoEnviado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagoenviado = PdeOrdenPagoEnviado::hidratarObjeto($fila);			
                $pdeordenpagoenviados[] = $pdeordenpagoenviado;
            }

            return $pdeordenpagoenviados;
	}	
	

	/* Método getPdeOrdenPagoEnviadosBloque para MasInfo */ 	
	public function getPdeOrdenPagoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoEnviados Habilitados */ 	
	public function getPdeOrdenPagoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoEnviado */ 	
	public function getPdeOrdenPagoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoEnviado relacionadas */ 	
	public function deletePdeOrdenPagoEnviados(){
            $obs = $this->getPdeOrdenPagoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoEnviadosCmb() PdeOrdenPagoEnviado relacionadas */ 	
	public function getPdeOrdenPagoEnviadosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoEnviado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoEnviado::getPdeOrdenPagoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeOrdenPagoPdeFacturas */ 	
	public function getPdeOrdenPagoPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdefactura = PdeOrdenPagoPdeFactura::hidratarObjeto($fila);			
                $pdeordenpagopdefacturas[] = $pdeordenpagopdefactura;
            }

            return $pdeordenpagopdefacturas;
	}	
	

	/* Método getPdeOrdenPagoPdeFacturasBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeFacturas Habilitados */ 	
	public function getPdeOrdenPagoPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeFactura */ 	
	public function getPdeOrdenPagoPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeFactura relacionadas */ 	
	public function deletePdeOrdenPagoPdeFacturas(){
            $obs = $this->getPdeOrdenPagoPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeFacturasCmb() PdeOrdenPagoPdeFactura relacionadas */ 	
	public function getPdeOrdenPagoPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeFactura::getPdeOrdenPagoPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeOrdenPagoPdeFactura */ 	
	public function getPdeFacturasXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeFactura::GEN_TABLA, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeOrdenPagoPdeFactura */ 	
	public function getCantidadPdeFacturasXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeFactura::GEN_TABLA, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeOrdenPagoPdeFactura */ 	
	public function getPdeFacturaXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeOrdenPagoPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoPdeNotaDebitos */ 	
	public function getPdeOrdenPagoPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdenotadebito = PdeOrdenPagoPdeNotaDebito::hidratarObjeto($fila);			
                $pdeordenpagopdenotadebitos[] = $pdeordenpagopdenotadebito;
            }

            return $pdeordenpagopdenotadebitos;
	}	
	

	/* Método getPdeOrdenPagoPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeNotaDebitos Habilitados */ 	
	public function getPdeOrdenPagoPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeOrdenPagoPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeNotaDebito relacionadas */ 	
	public function deletePdeOrdenPagoPdeNotaDebitos(){
            $obs = $this->getPdeOrdenPagoPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeNotaDebitosCmb() PdeOrdenPagoPdeNotaDebito relacionadas */ 	
	public function getPdeOrdenPagoPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeNotaDebito::getPdeOrdenPagoPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitos (Coleccion) relacionados a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeNotaDebitosXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeNotaDebito::GEN_TABLA, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitos relacionados a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getCantidadPdeNotaDebitosXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeNotaDebito::GEN_TABLA, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebito (Objeto) relacionado a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeNotaDebitoXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitosXPdeOrdenPagoPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getGralFpFormaPagosXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPago::GEN_TABLA, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getCantidadGralFpFormaPagosXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPago::GEN_TABLA, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de PdeOrdenPagoGralFpFormaPago */ 	
	public function getGralFpFormaPagoXPdeOrdenPagoGralFpFormaPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXPdeOrdenPagoGralFpFormaPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoGralFpFormaPagoCheques */ 	
	public function getPdeOrdenPagoGralFpFormaPagoCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoGralFpFormaPagoCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoGralFpFormaPagoCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagogralfpformapagocheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagogralfpformapagocheque = PdeOrdenPagoGralFpFormaPagoCheque::hidratarObjeto($fila);			
                $pdeordenpagogralfpformapagocheques[] = $pdeordenpagogralfpformapagocheque;
            }

            return $pdeordenpagogralfpformapagocheques;
	}	
	

	/* Método getPdeOrdenPagoGralFpFormaPagoChequesBloque para MasInfo */ 	
	public function getPdeOrdenPagoGralFpFormaPagoChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoGralFpFormaPagoCheques Habilitados */ 	
	public function getPdeOrdenPagoGralFpFormaPagoChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoGralFpFormaPagoCheque */ 	
	public function getPdeOrdenPagoGralFpFormaPagoCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoGralFpFormaPagoCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoGralFpFormaPagoCheque relacionadas */ 	
	public function deletePdeOrdenPagoGralFpFormaPagoCheques(){
            $obs = $this->getPdeOrdenPagoGralFpFormaPagoCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoGralFpFormaPagoChequesCmb() PdeOrdenPagoGralFpFormaPagoCheque relacionadas */ 	
	public function getPdeOrdenPagoGralFpFormaPagoChequesCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagoGralFpFormaPagos (Coleccion) relacionados a traves de PdeOrdenPagoGralFpFormaPagoCheque */ 	
	public function getPdeOrdenPagoGralFpFormaPagosXPdeOrdenPagoGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA, PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagoGralFpFormaPagos relacionados a traves de PdeOrdenPagoGralFpFormaPagoCheque */ 	
	public function getCantidadPdeOrdenPagoGralFpFormaPagosXPdeOrdenPagoGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoGralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoGralFpFormaPagoCheque::GEN_TABLA, PdeOrdenPagoGralFpFormaPagoCheque::GEN_ATTR_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ID, PdeOrdenPagoGralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPagoGralFpFormaPago (Objeto) relacionado a traves de PdeOrdenPagoGralFpFormaPagoCheque */ 	
	public function getPdeOrdenPagoGralFpFormaPagoXPdeOrdenPagoGralFpFormaPagoCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagoGralFpFormaPagosXPdeOrdenPagoGralFpFormaPagoCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoPdeTributos */ 	
	public function getPdeOrdenPagoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdetributo = PdeOrdenPagoPdeTributo::hidratarObjeto($fila);			
                $pdeordenpagopdetributos[] = $pdeordenpagopdetributo;
            }

            return $pdeordenpagopdetributos;
	}	
	

	/* Método getPdeOrdenPagoPdeTributosBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeTributos Habilitados */ 	
	public function getPdeOrdenPagoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeTributo */ 	
	public function getPdeOrdenPagoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeTributo relacionadas */ 	
	public function deletePdeOrdenPagoPdeTributos(){
            $obs = $this->getPdeOrdenPagoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeTributosCmb() PdeOrdenPagoPdeTributo relacionadas */ 	
	public function getPdeOrdenPagoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeTributo::getPdeOrdenPagoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeOrdenPagoPdeTributo */ 	
	public function getPdeTributosXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeTributo::GEN_TABLA, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeOrdenPagoPdeTributo */ 	
	public function getCantidadPdeTributosXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeTributo::GEN_TABLA, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeOrdenPagoPdeTributo */ 	
	public function getPdeTributoXPdeOrdenPagoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeOrdenPagoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los PdeTributos asignados a PdeOrdenPago */ 	
	public function getPdeOrdenPagoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeOrdenPagoPdeTributos() as $o){
            
                $ids[] = $o->getPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTributos asignados al PdeOrdenPago */ 	
	public function setPdeOrdenPagoPdeTributos($ids){
            $this->deletePdeOrdenPagoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeOrdenPagoPdeTributo();
                    $o->setPdeTributoId($id);
                    $o->setPdeOrdenPagoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTributo en el alta de PdeOrdenPago */ 	
	public function getAltaMostrarBloqueRelacionPdeOrdenPagoPdeTributo(){
            return true;
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

	/* Metodo que retorna el PdeOrdenPagoTipoEstado (Clave Foranea) */ 	
    public function getPdeOrdenPagoTipoEstado(){
        $o = new PdeOrdenPagoTipoEstado();
        $o->setId($this->getPdeOrdenPagoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPagoTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoTipoEstadoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoTipoEstadoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoTipoEstadoId()];
            }else{
                $o = PdeOrdenPagoTipoEstado::getOxId($this->getPdeOrdenPagoTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPagoTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) */ 	
    public function getGralCondicionIva(){
        $o = new GralCondicionIva();
        $o->setId($this->getGralCondicionIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) en Array */ 	
    public function getGralCondicionIvaEnArray(&$arr_os){
        if($this->getGralCondicionIvaId() != 'null'){
            if(isset($arr_os[$this->getGralCondicionIvaId()])){
                $o = $arr_os[$this->getGralCondicionIvaId()];
            }else{
                $o = GralCondicionIva::getOxId($this->getGralCondicionIvaId());
                if($o){
                    $arr_os[$this->getGralCondicionIvaId()] = $o;
                }
            }
        }else{
            $o = new GralCondicionIva();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) */ 	
    public function getGralTipoPersoneria(){
        $o = new GralTipoPersoneria();
        $o->setId($this->getGralTipoPersoneriaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) en Array */ 	
    public function getGralTipoPersoneriaEnArray(&$arr_os){
        if($this->getGralTipoPersoneriaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoPersoneriaId()])){
                $o = $arr_os[$this->getGralTipoPersoneriaId()];
            }else{
                $o = GralTipoPersoneria::getOxId($this->getGralTipoPersoneriaId());
                if($o){
                    $arr_os[$this->getGralTipoPersoneriaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoPersoneria();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) */ 	
    public function getGralEmpresa(){
        $o = new GralEmpresa();
        $o->setId($this->getGralEmpresaId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) en Array */ 	
    public function getGralEmpresaEnArray(&$arr_os){
        if($this->getGralEmpresaId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaId()])){
                $o = $arr_os[$this->getGralEmpresaId()];
            }else{
                $o = GralEmpresa::getOxId($this->getGralEmpresaId());
                if($o){
                    $arr_os[$this->getGralEmpresaId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresa();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) */ 	
    public function getPdeCentroPedido(){
        $o = new PdeCentroPedido();
        $o->setId($this->getPdeCentroPedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) en Array */ 	
    public function getPdeCentroPedidoEnArray(&$arr_os){
        if($this->getPdeCentroPedidoId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroPedidoId()])){
                $o = $arr_os[$this->getPdeCentroPedidoId()];
            }else{
                $o = PdeCentroPedido::getOxId($this->getPdeCentroPedidoId());
                if($o){
                    $arr_os[$this->getPdeCentroPedidoId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el GralMes (Clave Foranea) */ 	
    public function getGralMes(){
        $o = new GralMes();
        $o->setId($this->getGralMesId());
        return $o;			
    }

	/* Metodo que retorna el GralMes (Clave Foranea) en Array */ 	
    public function getGralMesEnArray(&$arr_os){
        if($this->getGralMesId() != 'null'){
            if(isset($arr_os[$this->getGralMesId()])){
                $o = $arr_os[$this->getGralMesId()];
            }else{
                $o = GralMes::getOxId($this->getGralMesId());
                if($o){
                    $arr_os[$this->getGralMesId()] = $o;
                }
            }
        }else{
            $o = new GralMes();
        }
        return $o;		
    }

	/* Metodo que retorna el FndCaja (Clave Foranea) */ 	
    public function getFndCaja(){
        $o = new FndCaja();
        $o->setId($this->getFndCajaId());
        return $o;			
    }

	/* Metodo que retorna el FndCaja (Clave Foranea) en Array */ 	
    public function getFndCajaEnArray(&$arr_os){
        if($this->getFndCajaId() != 'null'){
            if(isset($arr_os[$this->getFndCajaId()])){
                $o = $arr_os[$this->getFndCajaId()];
            }else{
                $o = FndCaja::getOxId($this->getFndCajaId());
                if($o){
                    $arr_os[$this->getFndCajaId()] = $o;
                }
            }
        }else{
            $o = new FndCaja();
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
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOrdenPagoTipoEstado::GEN_CLASE){
            if($this->getPdeOrdenPagoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPagoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPagoTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCondicionIva::GEN_CLASE){
            if($this->getGralCondicionIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCondicionIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCondicionIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoPersoneria::GEN_CLASE){
            if($this->getGralTipoPersoneria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoPersoneria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoPersoneria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeCentroPedido::GEN_CLASE){
            if($this->getPdeCentroPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralMes::GEN_CLASE){
            if($this->getGralMes()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralMes::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralMes()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != FndCaja::GEN_CLASE){
            if($this->getFndCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCaja()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_orden_pago'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_orden_pago';");
            
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

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_tipo_estado_id' */ 	
	static function getOxPdeOrdenPagoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_tipo_estado_id' */ 	
	static function getOsxPdeOrdenPagoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOsxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOsxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_id' */ 	
	static function getOsxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOsxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_descripcion' */ 	
	static function getOsxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'razon_social' */ 	
	static function getOsxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio_legal' */ 	
	static function getOsxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuit' */ 	
	static function getOsxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anio' */ 	
	static function getOsxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_mes_id' */ 	
	static function getOsxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_id' */ 	
	static function getOxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_id' */ 	
	static function getOsxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_publica' */ 	
	static function getOsxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos(null, $criterio);
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

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
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

            $obs = self::getPdeOrdenPagos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_orden_pago_adm');
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
                $c->addTabla(PdeOrdenPago::GEN_TABLA);
                $c->addOrden(PdeOrdenPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_orden_pagos = PdeOrdenPago::getPdeOrdenPagos(null, $c);

                $arr = array();
                foreach($pde_orden_pagos as $pde_orden_pago){
                    $descripcion = $pde_orden_pago->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>