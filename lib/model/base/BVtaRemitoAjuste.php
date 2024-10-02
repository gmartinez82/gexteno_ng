<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaRemitoAjuste
{ 
	
	const SES_PAGINACION = 'adm_vtaremitoajuste_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaremitoajuste_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaremitoajuste_criterios';
	
	const GEN_CLASE = 'VtaRemitoAjuste';
	const GEN_TABLA = 'vta_remito_ajuste';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaRemitoAjuste */ 
	const GEN_ATTR_ID = 'vta_remito_ajuste.id';
	const GEN_ATTR_DESCRIPCION = 'vta_remito_ajuste.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_remito_ajuste.cli_cliente_id';
	const GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID = 'vta_remito_ajuste.vta_remito_ajuste_tipo_despacho_id';
	const GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID = 'vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_remito_ajuste.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_remito_ajuste.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_remito_ajuste.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_remito_ajuste.persona_email';
	const GEN_ATTR_FECHA = 'vta_remito_ajuste.fecha';
	const GEN_ATTR_CODIGO = 'vta_remito_ajuste.codigo';
	const GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID = 'vta_remito_ajuste.vta_tipo_remito_ajuste_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_remito_ajuste.gral_empresa_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_remito_ajuste.vta_punto_venta_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_remito_ajuste.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_remito_ajuste.numero_punto_venta';
	const GEN_ATTR_NUMERO_REMITO_AJUSTE = 'vta_remito_ajuste.numero_remito_ajuste';
	const GEN_ATTR_NUMERO_REMITO_AJUSTE_COMPLETO = 'vta_remito_ajuste.numero_remito_ajuste_completo';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_remito_ajuste.gral_sucursal_id';
	const GEN_ATTR_GRAL_SUCURSAL_RETIRO = 'vta_remito_ajuste.gral_sucursal_retiro';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_remito_ajuste.vta_presupuesto_id';
	const GEN_ATTR_CLI_CENTRO_RECEPCION_ID = 'vta_remito_ajuste.cli_centro_recepcion_id';
	const GEN_ATTR_PAN_PANOL_ID = 'vta_remito_ajuste.pan_panol_id';
	const GEN_ATTR_EN_DOMICILIO = 'vta_remito_ajuste.en_domicilio';
	const GEN_ATTR_RETIRADO_POR = 'vta_remito_ajuste.retirado_por';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_remito_ajuste.nota_publica';
	const GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID = 'vta_remito_ajuste.gral_empresa_transportadora_id';
	const GEN_ATTR_OBSERVACION = 'vta_remito_ajuste.observacion';
	const GEN_ATTR_ORDEN = 'vta_remito_ajuste.orden';
	const GEN_ATTR_ESTADO = 'vta_remito_ajuste.estado';
	const GEN_ATTR_CREADO = 'vta_remito_ajuste.creado';
	const GEN_ATTR_CREADO_POR = 'vta_remito_ajuste.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_remito_ajuste.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_remito_ajuste.modificado_por';

	/* Constantes de Atributos Min de BVtaRemitoAjuste */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID = 'vta_remito_ajuste_tipo_despacho_id';
	const GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID = 'vta_remito_ajuste_tipo_estado_id';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_PERSONA_DOCUMENTO = 'persona_documento';
	const GEN_ATTR_MIN_PERSONA_EMAIL = 'persona_email';
	const GEN_ATTR_MIN_FECHA = 'fecha';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID = 'vta_tipo_remito_ajuste_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID = 'vta_punto_venta_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE = 'numero_remito_ajuste';
	const GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO = 'numero_remito_ajuste_completo';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO = 'gral_sucursal_retiro';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID = 'cli_centro_recepcion_id';
	const GEN_ATTR_MIN_PAN_PANOL_ID = 'pan_panol_id';
	const GEN_ATTR_MIN_EN_DOMICILIO = 'en_domicilio';
	const GEN_ATTR_MIN_RETIRADO_POR = 'retirado_por';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID = 'gral_empresa_transportadora_id';
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
	

	/* Atributos de BVtaRemitoAjuste */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_remito_ajuste_tipo_despacho_id;
	private $vta_remito_ajuste_tipo_estado_id;
	private $gral_tipo_documento_id;
	private $persona_descripcion;
	private $persona_documento;
	private $persona_email;
	private $fecha;
	private $codigo;
	private $vta_tipo_remito_ajuste_id;
	private $gral_empresa_id;
	private $vta_punto_venta_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_remito_ajuste;
	private $numero_remito_ajuste_completo;
	private $gral_sucursal_id;
	private $gral_sucursal_retiro;
	private $vta_presupuesto_id;
	private $cli_centro_recepcion_id;
	private $pan_panol_id;
	private $en_domicilio;
	private $retirado_por;
	private $nota_publica;
	private $gral_empresa_transportadora_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaRemitoAjuste */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaRemitoAjusteTipoDespachoId(){ if(isset($this->vta_remito_ajuste_tipo_despacho_id)){ return $this->vta_remito_ajuste_tipo_despacho_id; }else{ return 'null'; } }
	public function getVtaRemitoAjusteTipoEstadoId(){ if(isset($this->vta_remito_ajuste_tipo_estado_id)){ return $this->vta_remito_ajuste_tipo_estado_id; }else{ return 'null'; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getPersonaDocumento(){ if(isset($this->persona_documento)){ return $this->persona_documento; }else{ return ''; } }
	public function getPersonaEmail(){ if(isset($this->persona_email)){ return $this->persona_email; }else{ return ''; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getVtaTipoRemitoAjusteId(){ if(isset($this->vta_tipo_remito_ajuste_id)){ return $this->vta_tipo_remito_ajuste_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getVtaPuntoVentaId(){ if(isset($this->vta_punto_venta_id)){ return $this->vta_punto_venta_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroRemitoAjuste(){ if(isset($this->numero_remito_ajuste)){ return $this->numero_remito_ajuste; }else{ return ''; } }
	public function getNumeroRemitoAjusteCompleto(){ if(isset($this->numero_remito_ajuste_completo)){ return $this->numero_remito_ajuste_completo; }else{ return ''; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getGralSucursalRetiro(){ if(isset($this->gral_sucursal_retiro)){ return $this->gral_sucursal_retiro; }else{ return 'null'; } }
	public function getGralSucursalRetiroObj(){ if(isset($this->gral_sucursal_retiro)){ return GralSucursal::getOxId($this->gral_sucursal_retiro); }else{ return new GralSucursal(); } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getCliCentroRecepcionId(){ if(isset($this->cli_centro_recepcion_id)){ return $this->cli_centro_recepcion_id; }else{ return 'null'; } }
	public function getPanPanolId(){ if(isset($this->pan_panol_id)){ return $this->pan_panol_id; }else{ return 'null'; } }
	public function getEnDomicilio(){ if(isset($this->en_domicilio)){ return $this->en_domicilio; }else{ return 0; } }
	public function getRetiradoPor(){ if(isset($this->retirado_por)){ return $this->retirado_por; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getGralEmpresaTransportadoraId(){ if(isset($this->gral_empresa_transportadora_id)){ return $this->gral_empresa_transportadora_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaRemitoAjuste */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID."
				, ".self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_PERSONA_DOCUMENTO."
				, ".self::GEN_ATTR_PERSONA_EMAIL."
				, ".self::GEN_ATTR_FECHA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_VTA_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_REMITO_AJUSTE."
				, ".self::GEN_ATTR_NUMERO_REMITO_AJUSTE_COMPLETO."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_RETIRO."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_PAN_PANOL_ID."
				, ".self::GEN_ATTR_EN_DOMICILIO."
				, ".self::GEN_ATTR_RETIRADO_POR."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setVtaRemitoAjusteTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID]);
				$this->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
				$this->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setVtaTipoRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroRemitoAjuste($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE]);
				$this->setNumeroRemitoAjusteCompleto($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
				$this->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
				$this->setEnDomicilio($fila[self::GEN_ATTR_MIN_EN_DOMICILIO]);
				$this->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setVtaRemitoAjusteTipoDespachoId($v){ $this->vta_remito_ajuste_tipo_despacho_id = $v; }
	public function setVtaRemitoAjusteTipoEstadoId($v){ $this->vta_remito_ajuste_tipo_estado_id = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setPersonaDocumento($v){ $this->persona_documento = $v; }
	public function setPersonaEmail($v){ $this->persona_email = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setVtaTipoRemitoAjusteId($v){ $this->vta_tipo_remito_ajuste_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setVtaPuntoVentaId($v){ $this->vta_punto_venta_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroRemitoAjuste($v){ $this->numero_remito_ajuste = $v; }
	public function setNumeroRemitoAjusteCompleto($v){ $this->numero_remito_ajuste_completo = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setGralSucursalRetiro($v){ $this->gral_sucursal_retiro = $v; }
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setCliCentroRecepcionId($v){ $this->cli_centro_recepcion_id = $v; }
	public function setPanPanolId($v){ $this->pan_panol_id = $v; }
	public function setEnDomicilio($v){ $this->en_domicilio = $v; }
	public function setRetiradoPor($v){ $this->retirado_por = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setGralEmpresaTransportadoraId($v){ $this->gral_empresa_transportadora_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaRemitoAjuste();
            $o->setId($fila[VtaRemitoAjuste::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaRemitoAjusteTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID]);
			$o->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$o->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setVtaTipoRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroRemitoAjuste($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE]);
			$o->setNumeroRemitoAjusteCompleto($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$o->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$o->setEnDomicilio($fila[self::GEN_ATTR_MIN_EN_DOMICILIO]);
			$o->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaRemitoAjuste */ 	
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

	/* Cambia el estado de BVtaRemitoAjuste */ 	
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

	/* Save de BVtaRemitoAjuste */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE."
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_EN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_remito_ajuste_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaRemitoAjusteTipoDespachoId()."
						, ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getFecha()."'
						, '".$this->getCodigo()."'
						, ".$this->getVtaTipoRemitoAjusteId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRemitoAjuste()."'
						, '".$this->getNumeroRemitoAjusteCompleto()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getGralSucursalRetiro()."
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getPanPanolId()."
						, ".$this->getEnDomicilio()."
						, '".$this->getRetiradoPor()."'
						, '".$this->getNotaPublica()."'
						, ".$this->getGralEmpresaTransportadoraId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_remito_ajuste_seq')";
            
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
                 
				 ".VtaRemitoAjuste::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID." = ".$this->getVtaRemitoAjusteTipoDespachoId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID." = ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID." = ".$this->getVtaTipoRemitoAjusteId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE." = '".$this->getNumeroRemitoAjuste()."'
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO." = '".$this->getNumeroRemitoAjusteCompleto()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO." = ".$this->getGralSucursalRetiro()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_EN_DOMICILIO." = ".$this->getEnDomicilio()."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR." = '".$this->getRetiradoPor()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE."
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_EN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaRemitoAjusteTipoDespachoId()."
						, ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getFecha()."'
						, '".$this->getCodigo()."'
						, ".$this->getVtaTipoRemitoAjusteId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRemitoAjuste()."'
						, '".$this->getNumeroRemitoAjusteCompleto()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getGralSucursalRetiro()."
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getPanPanolId()."
						, ".$this->getEnDomicilio()."
						, '".$this->getRetiradoPor()."'
						, '".$this->getNotaPublica()."'
						, ".$this->getGralEmpresaTransportadoraId()."
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
                     
				 ".VtaRemitoAjuste::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID." = ".$this->getVtaRemitoAjusteTipoDespachoId()."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID." = ".$this->getVtaRemitoAjusteTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID." = ".$this->getVtaTipoRemitoAjusteId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE." = '".$this->getNumeroRemitoAjuste()."'
						, ".self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO." = '".$this->getNumeroRemitoAjusteCompleto()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO." = ".$this->getGralSucursalRetiro()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_EN_DOMICILIO." = ".$this->getEnDomicilio()."
						, ".self::GEN_ATTR_MIN_RETIRADO_POR." = '".$this->getRetiradoPor()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
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
            $o = new VtaRemitoAjuste();
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

	/* Delete de BVtaRemitoAjuste */ 	
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
	
            // se elimina la coleccion de VtaRemitoAjusteEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjusteEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjusteEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjusteEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjusteEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjusteVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjusteVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaHojaRutaVtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaHojaRutaVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaRemitoAjuste(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaRemitoAjuste::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaremitoajustes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaremitoajuste = new VtaRemitoAjuste();
                    $vtaremitoajuste->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaremitoajuste->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaremitoajuste->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtaremitoajuste->setVtaRemitoAjusteTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID]);
			$vtaremitoajuste->setVtaRemitoAjusteTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID]);
			$vtaremitoajuste->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtaremitoajuste->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtaremitoajuste->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtaremitoajuste->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtaremitoajuste->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$vtaremitoajuste->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaremitoajuste->setVtaTipoRemitoAjusteId($fila[self::GEN_ATTR_MIN_VTA_TIPO_REMITO_AJUSTE_ID]);
			$vtaremitoajuste->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtaremitoajuste->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtaremitoajuste->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtaremitoajuste->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtaremitoajuste->setNumeroRemitoAjuste($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE]);
			$vtaremitoajuste->setNumeroRemitoAjusteCompleto($fila[self::GEN_ATTR_MIN_NUMERO_REMITO_AJUSTE_COMPLETO]);
			$vtaremitoajuste->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtaremitoajuste->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
			$vtaremitoajuste->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtaremitoajuste->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$vtaremitoajuste->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$vtaremitoajuste->setEnDomicilio($fila[self::GEN_ATTR_MIN_EN_DOMICILIO]);
			$vtaremitoajuste->setRetiradoPor($fila[self::GEN_ATTR_MIN_RETIRADO_POR]);
			$vtaremitoajuste->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtaremitoajuste->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$vtaremitoajuste->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaremitoajuste->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaremitoajuste->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaremitoajuste->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaremitoajuste->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaremitoajuste->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaremitoajuste->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaremitoajustes[] = $vtaremitoajuste;
		}
		
		return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustes Habilitados */ 	
	static function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaRemitoAjustes para listado de Backend */ 	
	static function getVtaRemitoAjustesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaRemitoAjustesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaRemitoAjuste::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRemitoAjustes filtrado para select */ 	
	static function getVtaRemitoAjustesCmbF($paginador = null, $criterio = null){
            $col = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaRemitoAjustesXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de VtaRemitoAjusteTipoDespacho */ 	
	static function getVtaRemitoAjustesXVtaRemitoAjusteTipoDespachos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaRemitoAjusteTipoDespachoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de VtaRemitoAjusteTipoEstado */ 	
	static function getVtaRemitoAjustesXVtaRemitoAjusteTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaRemitoAjusteTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaRemitoAjustesXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de VtaTipoRemitoAjuste */ 	
	static function getVtaRemitoAjustesXVtaTipoRemitoAjustes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoRemitoAjusteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaRemitoAjustesXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaRemitoAjustesXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaRemitoAjustesXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaRemitoAjustesXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de CliCentroRecepcion */ 	
	static function getVtaRemitoAjustesXCliCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de PanPanol */ 	
	static function getVtaRemitoAjustesXPanPanols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_PAN_PANOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanPanolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRemitoAjustes filtrado por una coleccion de objetos foraneos de GralEmpresaTransportadora */ 	
	static function getVtaRemitoAjustesXGralEmpresaTransportadoras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addOrden(VtaRemitoAjuste::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaTransportadoraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_remito_ajuste_adm.php';
            $url_gestion = 'vta_remito_ajuste_gestion.php';
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
	

	/* Metodo getVtaRemitoAjusteEstados */ 	
	public function getVtaRemitoAjusteEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjusteEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjusteEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjusteEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjusteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjusteEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjusteEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajusteestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajusteestado = VtaRemitoAjusteEstado::hidratarObjeto($fila);			
                $vtaremitoajusteestados[] = $vtaremitoajusteestado;
            }

            return $vtaremitoajusteestados;
	}	
	

	/* Método getVtaRemitoAjusteEstadosBloque para MasInfo */ 	
	public function getVtaRemitoAjusteEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjusteEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteEstados Habilitados */ 	
	public function getVtaRemitoAjusteEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjusteEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteEstado */ 	
	public function getVtaRemitoAjusteEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjusteEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjusteEstado relacionadas */ 	
	public function deleteVtaRemitoAjusteEstados(){
            $obs = $this->getVtaRemitoAjusteEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjusteEstadosCmb() VtaRemitoAjusteEstado relacionadas */ 	
	public function getVtaRemitoAjusteEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoAjusteTipoEstados (Coleccion) relacionados a traves de VtaRemitoAjusteEstado */ 	
	public function getVtaRemitoAjusteTipoEstadosXVtaRemitoAjusteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoAjusteTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteEstado::GEN_TABLA, VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, VtaRemitoAjusteTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjusteTipoEstado::getVtaRemitoAjusteTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoAjusteTipoEstados relacionados a traves de VtaRemitoAjusteEstado */ 	
	public function getCantidadVtaRemitoAjusteTipoEstadosXVtaRemitoAjusteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoAjusteTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoAjusteTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteEstado::GEN_TABLA, VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, VtaRemitoAjusteTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjusteTipoEstado::getVtaRemitoAjusteTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoAjusteTipoEstado (Objeto) relacionado a traves de VtaRemitoAjusteEstado */ 	
	public function getVtaRemitoAjusteTipoEstadoXVtaRemitoAjusteEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoAjusteTipoEstadosXVtaRemitoAjusteEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjusteEnviados */ 	
	public function getVtaRemitoAjusteEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjusteEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjusteEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjusteEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjusteEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjusteEnviado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjusteEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjusteEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjusteEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajusteenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajusteenviado = VtaRemitoAjusteEnviado::hidratarObjeto($fila);			
                $vtaremitoajusteenviados[] = $vtaremitoajusteenviado;
            }

            return $vtaremitoajusteenviados;
	}	
	

	/* Método getVtaRemitoAjusteEnviadosBloque para MasInfo */ 	
	public function getVtaRemitoAjusteEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjusteEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteEnviados Habilitados */ 	
	public function getVtaRemitoAjusteEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjusteEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteEnviado */ 	
	public function getVtaRemitoAjusteEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjusteEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjusteEnviado relacionadas */ 	
	public function deleteVtaRemitoAjusteEnviados(){
            $obs = $this->getVtaRemitoAjusteEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjusteEnviadosCmb() VtaRemitoAjusteEnviado relacionadas */ 	
	public function getVtaRemitoAjusteEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjusteEnviado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjusteEnviado::getVtaRemitoAjusteEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaRemitoAjusteVtaOrdenVentas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjusteVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjusteVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajustevtaordenventa = VtaRemitoAjusteVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaremitoajustevtaordenventas[] = $vtaremitoajustevtaordenventa;
            }

            return $vtaremitoajustevtaordenventas;
	}	
	

	/* Método getVtaRemitoAjusteVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVentas Habilitados */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjusteVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function deleteVtaRemitoAjusteVtaOrdenVentas(){
            $obs = $this->getVtaRemitoAjusteVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjusteVtaOrdenVentasCmb() VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjusteVtaOrdenVenta::getVtaRemitoAjusteVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaOrdenVentasXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getCantidadVtaOrdenVentasXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaOrdenVentaXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaRemitoAjusteVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaHojaRutaVtaRemitoAjustes */ 	
	public function getVtaHojaRutaVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaHojaRutaVtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaHojaRutaVtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaHojaRutaVtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtahojarutavtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtahojarutavtaremitoajuste = VtaHojaRutaVtaRemitoAjuste::hidratarObjeto($fila);			
                $vtahojarutavtaremitoajustes[] = $vtahojarutavtaremitoajuste;
            }

            return $vtahojarutavtaremitoajustes;
	}	
	

	/* Método getVtaHojaRutaVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaHojaRutaVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemitoAjustes Habilitados */ 	
	public function getVtaHojaRutaVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaHojaRutaVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaHojaRutaVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaHojaRutaVtaRemitoAjuste relacionadas */ 	
	public function deleteVtaHojaRutaVtaRemitoAjustes(){
            $obs = $this->getVtaHojaRutaVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaHojaRutaVtaRemitoAjustesCmb() VtaHojaRutaVtaRemitoAjuste relacionadas */ 	
	public function getVtaHojaRutaVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaHojaRutaVtaRemitoAjuste::getVtaHojaRutaVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaHojaRutas (Coleccion) relacionados a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaHojaRutasXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaHojaRuta::getVtaHojaRutas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaHojaRutas relacionados a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getCantidadVtaHojaRutasXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaHojaRuta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaHojaRuta::getVtaHojaRutas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaHojaRuta (Objeto) relacionado a traves de VtaHojaRutaVtaRemitoAjuste */ 	
	public function getVtaHojaRutaXVtaHojaRutaVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaHojaRutasXVtaHojaRutaVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaHojaRutas asignados a VtaRemitoAjuste */ 	
	public function getVtaHojaRutaVtaRemitoAjustesId(){
            $ids = array();
            foreach($this->getVtaHojaRutaVtaRemitoAjustes() as $o){
            
                $ids[] = $o->getVtaHojaRutaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaHojaRutas asignados al VtaRemitoAjuste */ 	
	public function setVtaHojaRutaVtaRemitoAjustes($ids){
            $this->deleteVtaHojaRutaVtaRemitoAjustes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaHojaRutaVtaRemitoAjuste();
                    $o->setVtaHojaRutaId($id);
                    $o->setVtaRemitoAjusteId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaHojaRuta en el alta de VtaRemitoAjuste */ 	
	public function getAltaMostrarBloqueRelacionVtaHojaRutaVtaRemitoAjuste(){
            return true;
	}
	

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoDespacho (Clave Foranea) */ 	
    public function getVtaRemitoAjusteTipoDespacho(){
        $o = new VtaRemitoAjusteTipoDespacho();
        $o->setId($this->getVtaRemitoAjusteTipoDespachoId());
        return $o;			
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoDespacho (Clave Foranea) en Array */ 	
    public function getVtaRemitoAjusteTipoDespachoEnArray(&$arr_os){
        if($this->getVtaRemitoAjusteTipoDespachoId() != 'null'){
            if(isset($arr_os[$this->getVtaRemitoAjusteTipoDespachoId()])){
                $o = $arr_os[$this->getVtaRemitoAjusteTipoDespachoId()];
            }else{
                $o = VtaRemitoAjusteTipoDespacho::getOxId($this->getVtaRemitoAjusteTipoDespachoId());
                if($o){
                    $arr_os[$this->getVtaRemitoAjusteTipoDespachoId()] = $o;
                }
            }
        }else{
            $o = new VtaRemitoAjusteTipoDespacho();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoEstado (Clave Foranea) */ 	
    public function getVtaRemitoAjusteTipoEstado(){
        $o = new VtaRemitoAjusteTipoEstado();
        $o->setId($this->getVtaRemitoAjusteTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaRemitoAjusteTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaRemitoAjusteTipoEstadoEnArray(&$arr_os){
        if($this->getVtaRemitoAjusteTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaRemitoAjusteTipoEstadoId()])){
                $o = $arr_os[$this->getVtaRemitoAjusteTipoEstadoId()];
            }else{
                $o = VtaRemitoAjusteTipoEstado::getOxId($this->getVtaRemitoAjusteTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaRemitoAjusteTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaRemitoAjusteTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) */ 	
    public function getGralTipoDocumento(){
        $o = new GralTipoDocumento();
        $o->setId($this->getGralTipoDocumentoId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) en Array */ 	
    public function getGralTipoDocumentoEnArray(&$arr_os){
        if($this->getGralTipoDocumentoId() != 'null'){
            if(isset($arr_os[$this->getGralTipoDocumentoId()])){
                $o = $arr_os[$this->getGralTipoDocumentoId()];
            }else{
                $o = GralTipoDocumento::getOxId($this->getGralTipoDocumentoId());
                if($o){
                    $arr_os[$this->getGralTipoDocumentoId()] = $o;
                }
            }
        }else{
            $o = new GralTipoDocumento();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoRemitoAjuste (Clave Foranea) */ 	
    public function getVtaTipoRemitoAjuste(){
        $o = new VtaTipoRemitoAjuste();
        $o->setId($this->getVtaTipoRemitoAjusteId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoRemitoAjuste (Clave Foranea) en Array */ 	
    public function getVtaTipoRemitoAjusteEnArray(&$arr_os){
        if($this->getVtaTipoRemitoAjusteId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoRemitoAjusteId()])){
                $o = $arr_os[$this->getVtaTipoRemitoAjusteId()];
            }else{
                $o = VtaTipoRemitoAjuste::getOxId($this->getVtaTipoRemitoAjusteId());
                if($o){
                    $arr_os[$this->getVtaTipoRemitoAjusteId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoRemitoAjuste();
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

	/* Metodo que retorna el VtaPuntoVenta (Clave Foranea) */ 	
    public function getVtaPuntoVenta(){
        $o = new VtaPuntoVenta();
        $o->setId($this->getVtaPuntoVentaId());
        return $o;			
    }

	/* Metodo que retorna el VtaPuntoVenta (Clave Foranea) en Array */ 	
    public function getVtaPuntoVentaEnArray(&$arr_os){
        if($this->getVtaPuntoVentaId() != 'null'){
            if(isset($arr_os[$this->getVtaPuntoVentaId()])){
                $o = $arr_os[$this->getVtaPuntoVentaId()];
            }else{
                $o = VtaPuntoVenta::getOxId($this->getVtaPuntoVentaId());
                if($o){
                    $arr_os[$this->getVtaPuntoVentaId()] = $o;
                }
            }
        }else{
            $o = new VtaPuntoVenta();
        }
        return $o;		
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) */ 	
    public function getGralSucursal(){
        $o = new GralSucursal();
        $o->setId($this->getGralSucursalId());
        return $o;			
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) en Array */ 	
    public function getGralSucursalEnArray(&$arr_os){
        if($this->getGralSucursalId() != 'null'){
            if(isset($arr_os[$this->getGralSucursalId()])){
                $o = $arr_os[$this->getGralSucursalId()];
            }else{
                $o = GralSucursal::getOxId($this->getGralSucursalId());
                if($o){
                    $arr_os[$this->getGralSucursalId()] = $o;
                }
            }
        }else{
            $o = new GralSucursal();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuesto (Clave Foranea) */ 	
    public function getVtaPresupuesto(){
        $o = new VtaPresupuesto();
        $o->setId($this->getVtaPresupuestoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuesto (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoEnArray(&$arr_os){
        if($this->getVtaPresupuestoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoId()])){
                $o = $arr_os[$this->getVtaPresupuestoId()];
            }else{
                $o = VtaPresupuesto::getOxId($this->getVtaPresupuestoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuesto();
        }
        return $o;		
    }

	/* Metodo que retorna el CliCentroRecepcion (Clave Foranea) */ 	
    public function getCliCentroRecepcion(){
        $o = new CliCentroRecepcion();
        $o->setId($this->getCliCentroRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el CliCentroRecepcion (Clave Foranea) en Array */ 	
    public function getCliCentroRecepcionEnArray(&$arr_os){
        if($this->getCliCentroRecepcionId() != 'null'){
            if(isset($arr_os[$this->getCliCentroRecepcionId()])){
                $o = $arr_os[$this->getCliCentroRecepcionId()];
            }else{
                $o = CliCentroRecepcion::getOxId($this->getCliCentroRecepcionId());
                if($o){
                    $arr_os[$this->getCliCentroRecepcionId()] = $o;
                }
            }
        }else{
            $o = new CliCentroRecepcion();
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

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) */ 	
    public function getGralEmpresaTransportadora(){
        $o = new GralEmpresaTransportadora();
        $o->setId($this->getGralEmpresaTransportadoraId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) en Array */ 	
    public function getGralEmpresaTransportadoraEnArray(&$arr_os){
        if($this->getGralEmpresaTransportadoraId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaTransportadoraId()])){
                $o = $arr_os[$this->getGralEmpresaTransportadoraId()];
            }else{
                $o = GralEmpresaTransportadora::getOxId($this->getGralEmpresaTransportadoraId());
                if($o){
                    $arr_os[$this->getGralEmpresaTransportadoraId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresaTransportadora();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaRemitoAjusteTipoDespacho::GEN_CLASE){
            if($this->getVtaRemitoAjusteTipoDespacho()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRemitoAjusteTipoDespacho::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRemitoAjusteTipoDespacho()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaRemitoAjusteTipoEstado::GEN_CLASE){
            if($this->getVtaRemitoAjusteTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRemitoAjusteTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRemitoAjusteTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoRemitoAjuste::GEN_CLASE){
            if($this->getVtaTipoRemitoAjuste()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoRemitoAjuste::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoRemitoAjuste()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaPuntoVenta::GEN_CLASE){
            if($this->getVtaPuntoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPuntoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPuntoVenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuesto::GEN_CLASE){
            if($this->getVtaPresupuesto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuesto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuesto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliCentroRecepcion::GEN_CLASE){
            if($this->getCliCentroRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCentroRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCentroRecepcion()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralEmpresaTransportadora::GEN_CLASE){
            if($this->getGralEmpresaTransportadora()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresaTransportadora::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresaTransportadora()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_remito_ajuste'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_remito_ajuste';");
            
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

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_remito_ajuste_tipo_despacho_id' */ 	
	static function getOxVtaRemitoAjusteTipoDespachoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_remito_ajuste_tipo_despacho_id' */ 	
	static function getOsxVtaRemitoAjusteTipoDespachoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_DESPACHO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_remito_ajuste_tipo_estado_id' */ 	
	static function getOxVtaRemitoAjusteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_remito_ajuste_tipo_estado_id' */ 	
	static function getOsxVtaRemitoAjusteTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOsxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_documento' */ 	
	static function getOsxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_email' */ 	
	static function getOsxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha' */ 	
	static function getOsxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_remito_ajuste_id' */ 	
	static function getOxVtaTipoRemitoAjusteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_remito_ajuste_id' */ 	
	static function getOsxVtaTipoRemitoAjusteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOsxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_sucursal' */ 	
	static function getOsxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_punto_venta' */ 	
	static function getOsxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_remito_ajuste' */ 	
	static function getOxNumeroRemitoAjuste($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_REMITO_AJUSTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_remito_ajuste' */ 	
	static function getOsxNumeroRemitoAjuste($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_REMITO_AJUSTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_remito_ajuste_completo' */ 	
	static function getOxNumeroRemitoAjusteCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_REMITO_AJUSTE_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_remito_ajuste_completo' */ 	
	static function getOsxNumeroRemitoAjusteCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_REMITO_AJUSTE_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_id' */ 	
	static function getOsxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_retiro' */ 	
	static function getOxGralSucursalRetiro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_retiro' */ 	
	static function getOsxGralSucursalRetiro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOsxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_centro_recepcion_id' */ 	
	static function getOxCliCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_centro_recepcion_id' */ 	
	static function getOsxCliCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_id' */ 	
	static function getOxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'en_domicilio' */ 	
	static function getOxEnDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EN_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'en_domicilio' */ 	
	static function getOsxEnDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EN_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'retirado_por' */ 	
	static function getOxRetiradoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETIRADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'retirado_por' */ 	
	static function getOsxRetiradoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETIRADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOsxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes(null, $criterio);
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

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
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

            $obs = self::getVtaRemitoAjustes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_remito_ajuste_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha' */ 	
	public function getFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDiferenciaDias();
        
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
                $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
                $c->addOrden(VtaRemitoAjuste::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustes(null, $c);

                $arr = array();
                foreach($vta_remito_ajustes as $vta_remito_ajuste){
                    $descripcion = $vta_remito_ajuste->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>