<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAfipCitiVentasAlicuotas
{ 
	
	const SES_PAGINACION = 'adm_afipcitiventasalicuotas_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_afipcitiventasalicuotas_paginas_registros';
	const SES_CRITERIOS = 'adm_afipcitiventasalicuotas_criterios';
	
	const GEN_CLASE = 'AfipCitiVentasAlicuotas';
	const GEN_TABLA = 'afip_citi_ventas_alicuotas';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAfipCitiVentasAlicuotas */ 
	const GEN_ATTR_ID = 'afip_citi_ventas_alicuotas.id';
	const GEN_ATTR_DESCRIPCION = 'afip_citi_ventas_alicuotas.descripcion';
	const GEN_ATTR_CODIGO = 'afip_citi_ventas_alicuotas.codigo';
	const GEN_ATTR_AFIP_CITI_PRC_ID = 'afip_citi_ventas_alicuotas.afip_citi_prc_id';
	const GEN_ATTR_AFIP_CITI_CABECERA_ID = 'afip_citi_ventas_alicuotas.afip_citi_cabecera_id';
	const GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_ventas_alicuotas.afip_citi_tipo_comprobante';
	const GEN_ATTR_AFIP_CITI_PUNTO_VENTA = 'afip_citi_ventas_alicuotas.afip_citi_punto_venta';
	const GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_ventas_alicuotas.afip_citi_numero_comprobante';
	const GEN_ATTR_AFIP_CITI_IMPORTE_NETO_GRAVADO = 'afip_citi_ventas_alicuotas.afip_citi_importe_neto_gravado';
	const GEN_ATTR_AFIP_CITI_ALICUOTA_IVA = 'afip_citi_ventas_alicuotas.afip_citi_alicuota_iva';
	const GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO = 'afip_citi_ventas_alicuotas.afip_citi_importe_impuesto_liquidado';
	const GEN_ATTR_VTA_FACTURA_ID = 'afip_citi_ventas_alicuotas.vta_factura_id';
	const GEN_ATTR_VTA_NOTA_CREDITO_ID = 'afip_citi_ventas_alicuotas.vta_nota_credito_id';
	const GEN_ATTR_VTA_NOTA_DEBITO_ID = 'afip_citi_ventas_alicuotas.vta_nota_debito_id';
	const GEN_ATTR_OBSERVACION = 'afip_citi_ventas_alicuotas.observacion';
	const GEN_ATTR_ORDEN = 'afip_citi_ventas_alicuotas.orden';
	const GEN_ATTR_ESTADO = 'afip_citi_ventas_alicuotas.estado';
	const GEN_ATTR_CREADO = 'afip_citi_ventas_alicuotas.creado';
	const GEN_ATTR_CREADO_POR = 'afip_citi_ventas_alicuotas.creado_por';
	const GEN_ATTR_MODIFICADO = 'afip_citi_ventas_alicuotas.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'afip_citi_ventas_alicuotas.modificado_por';

	/* Constantes de Atributos Min de BAfipCitiVentasAlicuotas */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_AFIP_CITI_PRC_ID = 'afip_citi_prc_id';
	const GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID = 'afip_citi_cabecera_id';
	const GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_tipo_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA = 'afip_citi_punto_venta';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_numero_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO = 'afip_citi_importe_neto_gravado';
	const GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA = 'afip_citi_alicuota_iva';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO = 'afip_citi_importe_impuesto_liquidado';
	const GEN_ATTR_MIN_VTA_FACTURA_ID = 'vta_factura_id';
	const GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID = 'vta_nota_credito_id';
	const GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID = 'vta_nota_debito_id';
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
	

	/* Atributos de BAfipCitiVentasAlicuotas */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $afip_citi_prc_id;
	private $afip_citi_cabecera_id;
	private $afip_citi_tipo_comprobante;
	private $afip_citi_punto_venta;
	private $afip_citi_numero_comprobante;
	private $afip_citi_importe_neto_gravado;
	private $afip_citi_alicuota_iva;
	private $afip_citi_importe_impuesto_liquidado;
	private $vta_factura_id;
	private $vta_nota_credito_id;
	private $vta_nota_debito_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAfipCitiVentasAlicuotas */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAfipCitiPrcId(){ if(isset($this->afip_citi_prc_id)){ return $this->afip_citi_prc_id; }else{ return 'null'; } }
	public function getAfipCitiCabeceraId(){ if(isset($this->afip_citi_cabecera_id)){ return $this->afip_citi_cabecera_id; }else{ return 'null'; } }
	public function getAfipCitiTipoComprobante(){ if(isset($this->afip_citi_tipo_comprobante)){ return $this->afip_citi_tipo_comprobante; }else{ return ''; } }
	public function getAfipCitiPuntoVenta(){ if(isset($this->afip_citi_punto_venta)){ return $this->afip_citi_punto_venta; }else{ return ''; } }
	public function getAfipCitiNumeroComprobante(){ if(isset($this->afip_citi_numero_comprobante)){ return $this->afip_citi_numero_comprobante; }else{ return ''; } }
	public function getAfipCitiImporteNetoGravado(){ if(isset($this->afip_citi_importe_neto_gravado)){ return $this->afip_citi_importe_neto_gravado; }else{ return ''; } }
	public function getAfipCitiAlicuotaIva(){ if(isset($this->afip_citi_alicuota_iva)){ return $this->afip_citi_alicuota_iva; }else{ return ''; } }
	public function getAfipCitiImporteImpuestoLiquidado(){ if(isset($this->afip_citi_importe_impuesto_liquidado)){ return $this->afip_citi_importe_impuesto_liquidado; }else{ return ''; } }
	public function getVtaFacturaId(){ if(isset($this->vta_factura_id)){ return $this->vta_factura_id; }else{ return 'null'; } }
	public function getVtaNotaCreditoId(){ if(isset($this->vta_nota_credito_id)){ return $this->vta_nota_credito_id; }else{ return 'null'; } }
	public function getVtaNotaDebitoId(){ if(isset($this->vta_nota_debito_id)){ return $this->vta_nota_debito_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BAfipCitiVentasAlicuotas */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_AFIP_CITI_PRC_ID."
				, ".self::GEN_ATTR_AFIP_CITI_CABECERA_ID."
				, ".self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA."
				, ".self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_NETO_GRAVADO."
				, ".self::GEN_ATTR_AFIP_CITI_ALICUOTA_IVA."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO."
				, ".self::GEN_ATTR_VTA_FACTURA_ID."
				, ".self::GEN_ATTR_VTA_NOTA_CREDITO_ID."
				, ".self::GEN_ATTR_VTA_NOTA_DEBITO_ID."
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
				$this->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
				$this->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
				$this->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
				$this->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
				$this->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
				$this->setAfipCitiImporteNetoGravado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO]);
				$this->setAfipCitiAlicuotaIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA]);
				$this->setAfipCitiImporteImpuestoLiquidado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO]);
				$this->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
				$this->setVtaNotaCreditoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID]);
				$this->setVtaNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID]);
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
	public function setAfipCitiPrcId($v){ $this->afip_citi_prc_id = $v; }
	public function setAfipCitiCabeceraId($v){ $this->afip_citi_cabecera_id = $v; }
	public function setAfipCitiTipoComprobante($v){ $this->afip_citi_tipo_comprobante = $v; }
	public function setAfipCitiPuntoVenta($v){ $this->afip_citi_punto_venta = $v; }
	public function setAfipCitiNumeroComprobante($v){ $this->afip_citi_numero_comprobante = $v; }
	public function setAfipCitiImporteNetoGravado($v){ $this->afip_citi_importe_neto_gravado = $v; }
	public function setAfipCitiAlicuotaIva($v){ $this->afip_citi_alicuota_iva = $v; }
	public function setAfipCitiImporteImpuestoLiquidado($v){ $this->afip_citi_importe_impuesto_liquidado = $v; }
	public function setVtaFacturaId($v){ $this->vta_factura_id = $v; }
	public function setVtaNotaCreditoId($v){ $this->vta_nota_credito_id = $v; }
	public function setVtaNotaDebitoId($v){ $this->vta_nota_debito_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AfipCitiVentasAlicuotas();
            $o->setId($fila[AfipCitiVentasAlicuotas::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$o->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$o->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$o->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$o->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$o->setAfipCitiImporteNetoGravado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO]);
			$o->setAfipCitiAlicuotaIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA]);
			$o->setAfipCitiImporteImpuestoLiquidado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO]);
			$o->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$o->setVtaNotaCreditoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID]);
			$o->setVtaNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAfipCitiVentasAlicuotas */ 	
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

	/* Cambia el estado de BAfipCitiVentasAlicuotas */ 	
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

	/* Save de BAfipCitiVentasAlicuotas */ 	
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO."
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('afip_citi_ventas_alicuotas_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getAfipCitiCabeceraId()."
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiImporteNetoGravado()."'
						, '".$this->getAfipCitiAlicuotaIva()."'
						, '".$this->getAfipCitiImporteImpuestoLiquidado()."'
						, ".$this->getVtaFacturaId()."
						, ".$this->getVtaNotaCreditoId()."
						, ".$this->getVtaNotaDebitoId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('afip_citi_ventas_alicuotas_seq')";
            
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
                 
				 ".AfipCitiVentasAlicuotas::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO." = '".$this->getAfipCitiImporteNetoGravado()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA." = '".$this->getAfipCitiAlicuotaIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO." = '".$this->getAfipCitiImporteImpuestoLiquidado()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID." = ".$this->getVtaNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID." = ".$this->getVtaNotaDebitoId()."
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO."
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID."
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
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getAfipCitiCabeceraId()."
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiImporteNetoGravado()."'
						, '".$this->getAfipCitiAlicuotaIva()."'
						, '".$this->getAfipCitiImporteImpuestoLiquidado()."'
						, ".$this->getVtaFacturaId()."
						, ".$this->getVtaNotaCreditoId()."
						, ".$this->getVtaNotaDebitoId()."
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
                     
				 ".AfipCitiVentasAlicuotas::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO." = '".$this->getAfipCitiImporteNetoGravado()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA." = '".$this->getAfipCitiAlicuotaIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO." = '".$this->getAfipCitiImporteImpuestoLiquidado()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID." = ".$this->getVtaNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID." = ".$this->getVtaNotaDebitoId()."
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
            $o = new AfipCitiVentasAlicuotas();
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

	/* Delete de BAfipCitiVentasAlicuotas */ 	
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
	
	public function duplicarAfipCitiVentasAlicuotas(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAfipCitiVentasAlicuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AfipCitiVentasAlicuotas::setAplicarFiltrosDeAlcance($criterio);

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
	
		$afipcitiventasalicuotass = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $afipcitiventasalicuotas = new AfipCitiVentasAlicuotas();
                    $afipcitiventasalicuotas->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $afipcitiventasalicuotas->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$afipcitiventasalicuotas->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$afipcitiventasalicuotas->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$afipcitiventasalicuotas->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$afipcitiventasalicuotas->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$afipcitiventasalicuotas->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$afipcitiventasalicuotas->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$afipcitiventasalicuotas->setAfipCitiImporteNetoGravado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_NETO_GRAVADO]);
			$afipcitiventasalicuotas->setAfipCitiAlicuotaIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_ALICUOTA_IVA]);
			$afipcitiventasalicuotas->setAfipCitiImporteImpuestoLiquidado($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO]);
			$afipcitiventasalicuotas->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$afipcitiventasalicuotas->setVtaNotaCreditoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID]);
			$afipcitiventasalicuotas->setVtaNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID]);
			$afipcitiventasalicuotas->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$afipcitiventasalicuotas->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$afipcitiventasalicuotas->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$afipcitiventasalicuotas->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$afipcitiventasalicuotas->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$afipcitiventasalicuotas->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$afipcitiventasalicuotas->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $afipcitiventasalicuotass[] = $afipcitiventasalicuotas;
		}
		
		return $afipcitiventasalicuotass;
	}	
	

	/* Método getAfipCitiVentasAlicuotass Habilitados */ 	
	static function getAfipCitiVentasAlicuotassHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAfipCitiVentasAlicuotass para listado de Backend */ 	
	static function getAfipCitiVentasAlicuotassDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAfipCitiVentasAlicuotassCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AfipCitiVentasAlicuotas::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado para select */ 	
	static function getAfipCitiVentasAlicuotassCmbF($paginador = null, $criterio = null){
            $col = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado por una coleccion de objetos foraneos de AfipCitiPrc */ 	
	static function getAfipCitiVentasAlicuotassXAfipCitiPrcs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiPrcId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado por una coleccion de objetos foraneos de AfipCitiCabecera */ 	
	static function getAfipCitiVentasAlicuotassXAfipCitiCabeceras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_CABECERA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiCabeceraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado por una coleccion de objetos foraneos de VtaFactura */ 	
	static function getAfipCitiVentasAlicuotassXVtaFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado por una coleccion de objetos foraneos de VtaNotaCredito */ 	
	static function getAfipCitiVentasAlicuotassXVtaNotaCreditos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_CREDITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaNotaCreditoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasAlicuotass filtrado por una coleccion de objetos foraneos de VtaNotaDebito */ 	
	static function getAfipCitiVentasAlicuotassXVtaNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'afip_citi_ventas_alicuotas_adm.php';
            $url_gestion = 'afip_citi_ventas_alicuotas_gestion.php';
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
	

	/* Metodo que retorna el AfipCitiPrc (Clave Foranea) */ 	
    public function getAfipCitiPrc(){
        $o = new AfipCitiPrc();
        $o->setId($this->getAfipCitiPrcId());
        return $o;			
    }

	/* Metodo que retorna el AfipCitiPrc (Clave Foranea) en Array */ 	
    public function getAfipCitiPrcEnArray(&$arr_os){
        if($this->getAfipCitiPrcId() != 'null'){
            if(isset($arr_os[$this->getAfipCitiPrcId()])){
                $o = $arr_os[$this->getAfipCitiPrcId()];
            }else{
                $o = AfipCitiPrc::getOxId($this->getAfipCitiPrcId());
                if($o){
                    $arr_os[$this->getAfipCitiPrcId()] = $o;
                }
            }
        }else{
            $o = new AfipCitiPrc();
        }
        return $o;		
    }

	/* Metodo que retorna el AfipCitiCabecera (Clave Foranea) */ 	
    public function getAfipCitiCabecera(){
        $o = new AfipCitiCabecera();
        $o->setId($this->getAfipCitiCabeceraId());
        return $o;			
    }

	/* Metodo que retorna el AfipCitiCabecera (Clave Foranea) en Array */ 	
    public function getAfipCitiCabeceraEnArray(&$arr_os){
        if($this->getAfipCitiCabeceraId() != 'null'){
            if(isset($arr_os[$this->getAfipCitiCabeceraId()])){
                $o = $arr_os[$this->getAfipCitiCabeceraId()];
            }else{
                $o = AfipCitiCabecera::getOxId($this->getAfipCitiCabeceraId());
                if($o){
                    $arr_os[$this->getAfipCitiCabeceraId()] = $o;
                }
            }
        }else{
            $o = new AfipCitiCabecera();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaFactura (Clave Foranea) */ 	
    public function getVtaFactura(){
        $o = new VtaFactura();
        $o->setId($this->getVtaFacturaId());
        return $o;			
    }

	/* Metodo que retorna el VtaFactura (Clave Foranea) en Array */ 	
    public function getVtaFacturaEnArray(&$arr_os){
        if($this->getVtaFacturaId() != 'null'){
            if(isset($arr_os[$this->getVtaFacturaId()])){
                $o = $arr_os[$this->getVtaFacturaId()];
            }else{
                $o = VtaFactura::getOxId($this->getVtaFacturaId());
                if($o){
                    $arr_os[$this->getVtaFacturaId()] = $o;
                }
            }
        }else{
            $o = new VtaFactura();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaNotaCredito (Clave Foranea) */ 	
    public function getVtaNotaCredito(){
        $o = new VtaNotaCredito();
        $o->setId($this->getVtaNotaCreditoId());
        return $o;			
    }

	/* Metodo que retorna el VtaNotaCredito (Clave Foranea) en Array */ 	
    public function getVtaNotaCreditoEnArray(&$arr_os){
        if($this->getVtaNotaCreditoId() != 'null'){
            if(isset($arr_os[$this->getVtaNotaCreditoId()])){
                $o = $arr_os[$this->getVtaNotaCreditoId()];
            }else{
                $o = VtaNotaCredito::getOxId($this->getVtaNotaCreditoId());
                if($o){
                    $arr_os[$this->getVtaNotaCreditoId()] = $o;
                }
            }
        }else{
            $o = new VtaNotaCredito();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaNotaDebito (Clave Foranea) */ 	
    public function getVtaNotaDebito(){
        $o = new VtaNotaDebito();
        $o->setId($this->getVtaNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el VtaNotaDebito (Clave Foranea) en Array */ 	
    public function getVtaNotaDebitoEnArray(&$arr_os){
        if($this->getVtaNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getVtaNotaDebitoId()])){
                $o = $arr_os[$this->getVtaNotaDebitoId()];
            }else{
                $o = VtaNotaDebito::getOxId($this->getVtaNotaDebitoId());
                if($o){
                    $arr_os[$this->getVtaNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new VtaNotaDebito();
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
            		
        if($contexto_solicitante != AfipCitiPrc::GEN_CLASE){
            if($this->getAfipCitiPrc()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AfipCitiPrc::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAfipCitiPrc()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AfipCitiCabecera::GEN_CLASE){
            if($this->getAfipCitiCabecera()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AfipCitiCabecera::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAfipCitiCabecera()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaFactura::GEN_CLASE){
            if($this->getVtaFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaFactura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaNotaCredito::GEN_CLASE){
            if($this->getVtaNotaCredito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaNotaCredito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaNotaCredito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaNotaDebito::GEN_CLASE){
            if($this->getVtaNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaNotaDebito()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM afip_citi_ventas_alicuotas'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'afip_citi_ventas_alicuotas';");
            
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

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOsxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cabecera_id' */ 	
	static function getOxAfipCitiCabeceraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CABECERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_cabecera_id' */ 	
	static function getOsxAfipCitiCabeceraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CABECERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_tipo_comprobante' */ 	
	static function getOxAfipCitiTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_tipo_comprobante' */ 	
	static function getOsxAfipCitiTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_punto_venta' */ 	
	static function getOxAfipCitiPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_punto_venta' */ 	
	static function getOsxAfipCitiPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_comprobante' */ 	
	static function getOxAfipCitiNumeroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_numero_comprobante' */ 	
	static function getOsxAfipCitiNumeroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_neto_gravado' */ 	
	static function getOxAfipCitiImporteNetoGravado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_NETO_GRAVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_neto_gravado' */ 	
	static function getOsxAfipCitiImporteNetoGravado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_NETO_GRAVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_alicuota_iva' */ 	
	static function getOxAfipCitiAlicuotaIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_ALICUOTA_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_alicuota_iva' */ 	
	static function getOsxAfipCitiAlicuotaIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_ALICUOTA_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_impuesto_liquidado' */ 	
	static function getOxAfipCitiImporteImpuestoLiquidado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_impuesto_liquidado' */ 	
	static function getOsxAfipCitiImporteImpuestoLiquidado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTO_LIQUIDADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_factura_id' */ 	
	static function getOxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_factura_id' */ 	
	static function getOsxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_nota_credito_id' */ 	
	static function getOxVtaNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_nota_credito_id' */ 	
	static function getOsxVtaNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_nota_debito_id' */ 	
	static function getOxVtaNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_nota_debito_id' */ 	
	static function getOsxVtaNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass(null, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasAlicuotass($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'afip_citi_ventas_alicuotas_adm');
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
                $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
                $c->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $afip_citi_ventas_alicuotass = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotass(null, $c);

                $arr = array();
                foreach($afip_citi_ventas_alicuotass as $afip_citi_ventas_alicuotas){
                    $descripcion = $afip_citi_ventas_alicuotas->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>