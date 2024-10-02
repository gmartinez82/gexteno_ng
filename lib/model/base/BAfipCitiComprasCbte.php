<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAfipCitiComprasCbte
{ 
	
	const SES_PAGINACION = 'adm_afipciticomprascbte_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_afipciticomprascbte_paginas_registros';
	const SES_CRITERIOS = 'adm_afipciticomprascbte_criterios';
	
	const GEN_CLASE = 'AfipCitiComprasCbte';
	const GEN_TABLA = 'afip_citi_compras_cbte';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAfipCitiComprasCbte */ 
	const GEN_ATTR_ID = 'afip_citi_compras_cbte.id';
	const GEN_ATTR_DESCRIPCION = 'afip_citi_compras_cbte.descripcion';
	const GEN_ATTR_CODIGO = 'afip_citi_compras_cbte.codigo';
	const GEN_ATTR_AFIP_CITI_PRC_ID = 'afip_citi_compras_cbte.afip_citi_prc_id';
	const GEN_ATTR_AFIP_CITI_CABECERA_ID = 'afip_citi_compras_cbte.afip_citi_cabecera_id';
	const GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE = 'afip_citi_compras_cbte.afip_citi_fecha_comprobante';
	const GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_compras_cbte.afip_citi_tipo_comprobante';
	const GEN_ATTR_AFIP_CITI_PUNTO_VENTA = 'afip_citi_compras_cbte.afip_citi_punto_venta';
	const GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_compras_cbte.afip_citi_numero_comprobante';
	const GEN_ATTR_AFIP_CITI_DESPACHO_IMPORTACION = 'afip_citi_compras_cbte.afip_citi_despacho_importacion';
	const GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR = 'afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor';
	const GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR = 'afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor';
	const GEN_ATTR_AFIP_CITI_DENOMINACION_VENDEDOR = 'afip_citi_compras_cbte.afip_citi_denominacion_vendedor';
	const GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION = 'afip_citi_compras_cbte.afip_citi_importe_total_operacion';
	const GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS = 'afip_citi_compras_cbte.afip_citi_importe_total_conceptos';
	const GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS = 'afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA = 'afip_citi_compras_cbte.afip_citi_importe_percepciones_iva';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES = 'afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS = 'afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES = 'afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales';
	const GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS = 'afip_citi_compras_cbte.afip_citi_importe_impuestos_internos';
	const GEN_ATTR_AFIP_CITI_CODIGO_MONEDA = 'afip_citi_compras_cbte.afip_citi_codigo_moneda';
	const GEN_ATTR_AFIP_CITI_TIPO_CAMBIO = 'afip_citi_compras_cbte.afip_citi_tipo_cambio';
	const GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA = 'afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva';
	const GEN_ATTR_AFIP_CITI_CODIGO_OPERACION = 'afip_citi_compras_cbte.afip_citi_codigo_operacion';
	const GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE = 'afip_citi_compras_cbte.afip_citi_importe_cf_computable';
	const GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS = 'afip_citi_compras_cbte.afip_citi_importe_otros_tributos';
	const GEN_ATTR_AFIP_CITI_CUIT_EMISOR = 'afip_citi_compras_cbte.afip_citi_cuit_emisor';
	const GEN_ATTR_AFIP_CITI_DENOMINACION_EMISOR = 'afip_citi_compras_cbte.afip_citi_denominacion_emisor';
	const GEN_ATTR_AFIP_CITI_IMPORTE_IVA_COMISION = 'afip_citi_compras_cbte.afip_citi_importe_iva_comision';
	const GEN_ATTR_PDE_FACTURA_ID = 'afip_citi_compras_cbte.pde_factura_id';
	const GEN_ATTR_PDE_NOTA_CREDITO_ID = 'afip_citi_compras_cbte.pde_nota_credito_id';
	const GEN_ATTR_PDE_NOTA_DEBITO_ID = 'afip_citi_compras_cbte.pde_nota_debito_id';
	const GEN_ATTR_OBSERVACION = 'afip_citi_compras_cbte.observacion';
	const GEN_ATTR_ORDEN = 'afip_citi_compras_cbte.orden';
	const GEN_ATTR_ESTADO = 'afip_citi_compras_cbte.estado';
	const GEN_ATTR_CREADO = 'afip_citi_compras_cbte.creado';
	const GEN_ATTR_CREADO_POR = 'afip_citi_compras_cbte.creado_por';
	const GEN_ATTR_MODIFICADO = 'afip_citi_compras_cbte.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'afip_citi_compras_cbte.modificado_por';

	/* Constantes de Atributos Min de BAfipCitiComprasCbte */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_AFIP_CITI_PRC_ID = 'afip_citi_prc_id';
	const GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID = 'afip_citi_cabecera_id';
	const GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE = 'afip_citi_fecha_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_tipo_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA = 'afip_citi_punto_venta';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_numero_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION = 'afip_citi_despacho_importacion';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR = 'afip_citi_codigo_documento_vendedor';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR = 'afip_citi_numero_identificacion_vendedor';
	const GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR = 'afip_citi_denominacion_vendedor';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION = 'afip_citi_importe_total_operacion';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS = 'afip_citi_importe_total_conceptos';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS = 'afip_citi_importe_operaciones_exentas';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA = 'afip_citi_importe_percepciones_iva';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES = 'afip_citi_importe_percepciones_impuestos_nacionales';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS = 'afip_citi_importe_percepciones_ingresos_brutos';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES = 'afip_citi_importe_percepciones_impuestos_municipales';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS = 'afip_citi_importe_impuestos_internos';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA = 'afip_citi_codigo_moneda';
	const GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO = 'afip_citi_tipo_cambio';
	const GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA = 'afip_citi_cantidad_alicuotas_iva';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION = 'afip_citi_codigo_operacion';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE = 'afip_citi_importe_cf_computable';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS = 'afip_citi_importe_otros_tributos';
	const GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR = 'afip_citi_cuit_emisor';
	const GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR = 'afip_citi_denominacion_emisor';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION = 'afip_citi_importe_iva_comision';
	const GEN_ATTR_MIN_PDE_FACTURA_ID = 'pde_factura_id';
	const GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID = 'pde_nota_credito_id';
	const GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID = 'pde_nota_debito_id';
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
	

	/* Atributos de BAfipCitiComprasCbte */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $afip_citi_prc_id;
	private $afip_citi_cabecera_id;
	private $afip_citi_fecha_comprobante;
	private $afip_citi_tipo_comprobante;
	private $afip_citi_punto_venta;
	private $afip_citi_numero_comprobante;
	private $afip_citi_despacho_importacion;
	private $afip_citi_codigo_documento_vendedor;
	private $afip_citi_numero_identificacion_vendedor;
	private $afip_citi_denominacion_vendedor;
	private $afip_citi_importe_total_operacion;
	private $afip_citi_importe_total_conceptos;
	private $afip_citi_importe_operaciones_exentas;
	private $afip_citi_importe_percepciones_iva;
	private $afip_citi_importe_percepciones_impuestos_nacionales;
	private $afip_citi_importe_percepciones_ingresos_brutos;
	private $afip_citi_importe_percepciones_impuestos_municipales;
	private $afip_citi_importe_impuestos_internos;
	private $afip_citi_codigo_moneda;
	private $afip_citi_tipo_cambio;
	private $afip_citi_cantidad_alicuotas_iva;
	private $afip_citi_codigo_operacion;
	private $afip_citi_importe_cf_computable;
	private $afip_citi_importe_otros_tributos;
	private $afip_citi_cuit_emisor;
	private $afip_citi_denominacion_emisor;
	private $afip_citi_importe_iva_comision;
	private $pde_factura_id;
	private $pde_nota_credito_id;
	private $pde_nota_debito_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAfipCitiComprasCbte */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAfipCitiPrcId(){ if(isset($this->afip_citi_prc_id)){ return $this->afip_citi_prc_id; }else{ return 'null'; } }
	public function getAfipCitiCabeceraId(){ if(isset($this->afip_citi_cabecera_id)){ return $this->afip_citi_cabecera_id; }else{ return 'null'; } }
	public function getAfipCitiFechaComprobante(){ if(isset($this->afip_citi_fecha_comprobante)){ return $this->afip_citi_fecha_comprobante; }else{ return ''; } }
	public function getAfipCitiTipoComprobante(){ if(isset($this->afip_citi_tipo_comprobante)){ return $this->afip_citi_tipo_comprobante; }else{ return ''; } }
	public function getAfipCitiPuntoVenta(){ if(isset($this->afip_citi_punto_venta)){ return $this->afip_citi_punto_venta; }else{ return ''; } }
	public function getAfipCitiNumeroComprobante(){ if(isset($this->afip_citi_numero_comprobante)){ return $this->afip_citi_numero_comprobante; }else{ return ''; } }
	public function getAfipCitiDespachoImportacion(){ if(isset($this->afip_citi_despacho_importacion)){ return $this->afip_citi_despacho_importacion; }else{ return ''; } }
	public function getAfipCitiCodigoDocumentoVendedor(){ if(isset($this->afip_citi_codigo_documento_vendedor)){ return $this->afip_citi_codigo_documento_vendedor; }else{ return ''; } }
	public function getAfipCitiNumeroIdentificacionVendedor(){ if(isset($this->afip_citi_numero_identificacion_vendedor)){ return $this->afip_citi_numero_identificacion_vendedor; }else{ return ''; } }
	public function getAfipCitiDenominacionVendedor(){ if(isset($this->afip_citi_denominacion_vendedor)){ return $this->afip_citi_denominacion_vendedor; }else{ return ''; } }
	public function getAfipCitiImporteTotalOperacion(){ if(isset($this->afip_citi_importe_total_operacion)){ return $this->afip_citi_importe_total_operacion; }else{ return ''; } }
	public function getAfipCitiImporteTotalConceptos(){ if(isset($this->afip_citi_importe_total_conceptos)){ return $this->afip_citi_importe_total_conceptos; }else{ return ''; } }
	public function getAfipCitiImporteOperacionesExentas(){ if(isset($this->afip_citi_importe_operaciones_exentas)){ return $this->afip_citi_importe_operaciones_exentas; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesIva(){ if(isset($this->afip_citi_importe_percepciones_iva)){ return $this->afip_citi_importe_percepciones_iva; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesImpuestosNacionales(){ if(isset($this->afip_citi_importe_percepciones_impuestos_nacionales)){ return $this->afip_citi_importe_percepciones_impuestos_nacionales; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesIngresosBrutos(){ if(isset($this->afip_citi_importe_percepciones_ingresos_brutos)){ return $this->afip_citi_importe_percepciones_ingresos_brutos; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesImpuestosMunicipales(){ if(isset($this->afip_citi_importe_percepciones_impuestos_municipales)){ return $this->afip_citi_importe_percepciones_impuestos_municipales; }else{ return ''; } }
	public function getAfipCitiImporteImpuestosInternos(){ if(isset($this->afip_citi_importe_impuestos_internos)){ return $this->afip_citi_importe_impuestos_internos; }else{ return ''; } }
	public function getAfipCitiCodigoMoneda(){ if(isset($this->afip_citi_codigo_moneda)){ return $this->afip_citi_codigo_moneda; }else{ return ''; } }
	public function getAfipCitiTipoCambio(){ if(isset($this->afip_citi_tipo_cambio)){ return $this->afip_citi_tipo_cambio; }else{ return ''; } }
	public function getAfipCitiCantidadAlicuotasIva(){ if(isset($this->afip_citi_cantidad_alicuotas_iva)){ return $this->afip_citi_cantidad_alicuotas_iva; }else{ return ''; } }
	public function getAfipCitiCodigoOperacion(){ if(isset($this->afip_citi_codigo_operacion)){ return $this->afip_citi_codigo_operacion; }else{ return ''; } }
	public function getAfipCitiImporteCfComputable(){ if(isset($this->afip_citi_importe_cf_computable)){ return $this->afip_citi_importe_cf_computable; }else{ return ''; } }
	public function getAfipCitiImporteOtrosTributos(){ if(isset($this->afip_citi_importe_otros_tributos)){ return $this->afip_citi_importe_otros_tributos; }else{ return ''; } }
	public function getAfipCitiCuitEmisor(){ if(isset($this->afip_citi_cuit_emisor)){ return $this->afip_citi_cuit_emisor; }else{ return ''; } }
	public function getAfipCitiDenominacionEmisor(){ if(isset($this->afip_citi_denominacion_emisor)){ return $this->afip_citi_denominacion_emisor; }else{ return ''; } }
	public function getAfipCitiImporteIvaComision(){ if(isset($this->afip_citi_importe_iva_comision)){ return $this->afip_citi_importe_iva_comision; }else{ return ''; } }
	public function getPdeFacturaId(){ if(isset($this->pde_factura_id)){ return $this->pde_factura_id; }else{ return 'null'; } }
	public function getPdeNotaCreditoId(){ if(isset($this->pde_nota_credito_id)){ return $this->pde_nota_credito_id; }else{ return 'null'; } }
	public function getPdeNotaDebitoId(){ if(isset($this->pde_nota_debito_id)){ return $this->pde_nota_debito_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BAfipCitiComprasCbte */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_AFIP_CITI_PRC_ID."
				, ".self::GEN_ATTR_AFIP_CITI_CABECERA_ID."
				, ".self::GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA."
				, ".self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE."
				, ".self::GEN_ATTR_AFIP_CITI_DESPACHO_IMPORTACION."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR."
				, ".self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR."
				, ".self::GEN_ATTR_AFIP_CITI_DENOMINACION_VENDEDOR."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_MONEDA."
				, ".self::GEN_ATTR_AFIP_CITI_TIPO_CAMBIO."
				, ".self::GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_OPERACION."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
				, ".self::GEN_ATTR_AFIP_CITI_CUIT_EMISOR."
				, ".self::GEN_ATTR_AFIP_CITI_DENOMINACION_EMISOR."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_IVA_COMISION."
				, ".self::GEN_ATTR_PDE_FACTURA_ID."
				, ".self::GEN_ATTR_PDE_NOTA_CREDITO_ID."
				, ".self::GEN_ATTR_PDE_NOTA_DEBITO_ID."
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
				$this->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
				$this->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
				$this->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
				$this->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
				$this->setAfipCitiDespachoImportacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION]);
				$this->setAfipCitiCodigoDocumentoVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR]);
				$this->setAfipCitiNumeroIdentificacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR]);
				$this->setAfipCitiDenominacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR]);
				$this->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
				$this->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
				$this->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
				$this->setAfipCitiImportePercepcionesIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA]);
				$this->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
				$this->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
				$this->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
				$this->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
				$this->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
				$this->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
				$this->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
				$this->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
				$this->setAfipCitiImporteCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE]);
				$this->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
				$this->setAfipCitiCuitEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR]);
				$this->setAfipCitiDenominacionEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR]);
				$this->setAfipCitiImporteIvaComision($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION]);
				$this->setPdeFacturaId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_ID]);
				$this->setPdeNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID]);
				$this->setPdeNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID]);
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
	public function setAfipCitiFechaComprobante($v){ $this->afip_citi_fecha_comprobante = $v; }
	public function setAfipCitiTipoComprobante($v){ $this->afip_citi_tipo_comprobante = $v; }
	public function setAfipCitiPuntoVenta($v){ $this->afip_citi_punto_venta = $v; }
	public function setAfipCitiNumeroComprobante($v){ $this->afip_citi_numero_comprobante = $v; }
	public function setAfipCitiDespachoImportacion($v){ $this->afip_citi_despacho_importacion = $v; }
	public function setAfipCitiCodigoDocumentoVendedor($v){ $this->afip_citi_codigo_documento_vendedor = $v; }
	public function setAfipCitiNumeroIdentificacionVendedor($v){ $this->afip_citi_numero_identificacion_vendedor = $v; }
	public function setAfipCitiDenominacionVendedor($v){ $this->afip_citi_denominacion_vendedor = $v; }
	public function setAfipCitiImporteTotalOperacion($v){ $this->afip_citi_importe_total_operacion = $v; }
	public function setAfipCitiImporteTotalConceptos($v){ $this->afip_citi_importe_total_conceptos = $v; }
	public function setAfipCitiImporteOperacionesExentas($v){ $this->afip_citi_importe_operaciones_exentas = $v; }
	public function setAfipCitiImportePercepcionesIva($v){ $this->afip_citi_importe_percepciones_iva = $v; }
	public function setAfipCitiImportePercepcionesImpuestosNacionales($v){ $this->afip_citi_importe_percepciones_impuestos_nacionales = $v; }
	public function setAfipCitiImportePercepcionesIngresosBrutos($v){ $this->afip_citi_importe_percepciones_ingresos_brutos = $v; }
	public function setAfipCitiImportePercepcionesImpuestosMunicipales($v){ $this->afip_citi_importe_percepciones_impuestos_municipales = $v; }
	public function setAfipCitiImporteImpuestosInternos($v){ $this->afip_citi_importe_impuestos_internos = $v; }
	public function setAfipCitiCodigoMoneda($v){ $this->afip_citi_codigo_moneda = $v; }
	public function setAfipCitiTipoCambio($v){ $this->afip_citi_tipo_cambio = $v; }
	public function setAfipCitiCantidadAlicuotasIva($v){ $this->afip_citi_cantidad_alicuotas_iva = $v; }
	public function setAfipCitiCodigoOperacion($v){ $this->afip_citi_codigo_operacion = $v; }
	public function setAfipCitiImporteCfComputable($v){ $this->afip_citi_importe_cf_computable = $v; }
	public function setAfipCitiImporteOtrosTributos($v){ $this->afip_citi_importe_otros_tributos = $v; }
	public function setAfipCitiCuitEmisor($v){ $this->afip_citi_cuit_emisor = $v; }
	public function setAfipCitiDenominacionEmisor($v){ $this->afip_citi_denominacion_emisor = $v; }
	public function setAfipCitiImporteIvaComision($v){ $this->afip_citi_importe_iva_comision = $v; }
	public function setPdeFacturaId($v){ $this->pde_factura_id = $v; }
	public function setPdeNotaCreditoId($v){ $this->pde_nota_credito_id = $v; }
	public function setPdeNotaDebitoId($v){ $this->pde_nota_debito_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AfipCitiComprasCbte();
            $o->setId($fila[AfipCitiComprasCbte::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$o->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$o->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
			$o->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$o->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$o->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$o->setAfipCitiDespachoImportacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION]);
			$o->setAfipCitiCodigoDocumentoVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR]);
			$o->setAfipCitiNumeroIdentificacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR]);
			$o->setAfipCitiDenominacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR]);
			$o->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
			$o->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
			$o->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
			$o->setAfipCitiImportePercepcionesIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA]);
			$o->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
			$o->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
			$o->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
			$o->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
			$o->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
			$o->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
			$o->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
			$o->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
			$o->setAfipCitiImporteCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE]);
			$o->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
			$o->setAfipCitiCuitEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR]);
			$o->setAfipCitiDenominacionEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR]);
			$o->setAfipCitiImporteIvaComision($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION]);
			$o->setPdeFacturaId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_ID]);
			$o->setPdeNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID]);
			$o->setPdeNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAfipCitiComprasCbte */ 	
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

	/* Cambia el estado de BAfipCitiComprasCbte */ 	
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

	/* Save de BAfipCitiComprasCbte */ 	
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION."
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('afip_citi_compras_cbte_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getAfipCitiCabeceraId()."
						, '".$this->getAfipCitiFechaComprobante()."'
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiDespachoImportacion()."'
						, '".$this->getAfipCitiCodigoDocumentoVendedor()."'
						, '".$this->getAfipCitiNumeroIdentificacionVendedor()."'
						, '".$this->getAfipCitiDenominacionVendedor()."'
						, '".$this->getAfipCitiImporteTotalOperacion()."'
						, '".$this->getAfipCitiImporteTotalConceptos()."'
						, '".$this->getAfipCitiImporteOperacionesExentas()."'
						, '".$this->getAfipCitiImportePercepcionesIva()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, '".$this->getAfipCitiImporteImpuestosInternos()."'
						, '".$this->getAfipCitiCodigoMoneda()."'
						, '".$this->getAfipCitiTipoCambio()."'
						, '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, '".$this->getAfipCitiCodigoOperacion()."'
						, '".$this->getAfipCitiImporteCfComputable()."'
						, '".$this->getAfipCitiImporteOtrosTributos()."'
						, '".$this->getAfipCitiCuitEmisor()."'
						, '".$this->getAfipCitiDenominacionEmisor()."'
						, '".$this->getAfipCitiImporteIvaComision()."'
						, ".$this->getPdeFacturaId()."
						, ".$this->getPdeNotaCreditoId()."
						, ".$this->getPdeNotaDebitoId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('afip_citi_compras_cbte_seq')";
            
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
                 
				 ".AfipCitiComprasCbte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE." = '".$this->getAfipCitiFechaComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION." = '".$this->getAfipCitiDespachoImportacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR." = '".$this->getAfipCitiCodigoDocumentoVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR." = '".$this->getAfipCitiNumeroIdentificacionVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR." = '".$this->getAfipCitiDenominacionVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION." = '".$this->getAfipCitiImporteTotalOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS." = '".$this->getAfipCitiImporteTotalConceptos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS." = '".$this->getAfipCitiImporteOperacionesExentas()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA." = '".$this->getAfipCitiImportePercepcionesIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES." = '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS." = '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES." = '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS." = '".$this->getAfipCitiImporteImpuestosInternos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA." = '".$this->getAfipCitiCodigoMoneda()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO." = '".$this->getAfipCitiTipoCambio()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA." = '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION." = '".$this->getAfipCitiCodigoOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE." = '".$this->getAfipCitiImporteCfComputable()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS." = '".$this->getAfipCitiImporteOtrosTributos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR." = '".$this->getAfipCitiCuitEmisor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR." = '".$this->getAfipCitiDenominacionEmisor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION." = '".$this->getAfipCitiImporteIvaComision()."'
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_ID." = ".$this->getPdeFacturaId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID." = ".$this->getPdeNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID." = ".$this->getPdeNotaDebitoId()."
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION."
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID."
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
						, '".$this->getAfipCitiFechaComprobante()."'
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiDespachoImportacion()."'
						, '".$this->getAfipCitiCodigoDocumentoVendedor()."'
						, '".$this->getAfipCitiNumeroIdentificacionVendedor()."'
						, '".$this->getAfipCitiDenominacionVendedor()."'
						, '".$this->getAfipCitiImporteTotalOperacion()."'
						, '".$this->getAfipCitiImporteTotalConceptos()."'
						, '".$this->getAfipCitiImporteOperacionesExentas()."'
						, '".$this->getAfipCitiImportePercepcionesIva()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, '".$this->getAfipCitiImporteImpuestosInternos()."'
						, '".$this->getAfipCitiCodigoMoneda()."'
						, '".$this->getAfipCitiTipoCambio()."'
						, '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, '".$this->getAfipCitiCodigoOperacion()."'
						, '".$this->getAfipCitiImporteCfComputable()."'
						, '".$this->getAfipCitiImporteOtrosTributos()."'
						, '".$this->getAfipCitiCuitEmisor()."'
						, '".$this->getAfipCitiDenominacionEmisor()."'
						, '".$this->getAfipCitiImporteIvaComision()."'
						, ".$this->getPdeFacturaId()."
						, ".$this->getPdeNotaCreditoId()."
						, ".$this->getPdeNotaDebitoId()."
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
                     
				 ".AfipCitiComprasCbte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE." = '".$this->getAfipCitiFechaComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION." = '".$this->getAfipCitiDespachoImportacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR." = '".$this->getAfipCitiCodigoDocumentoVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR." = '".$this->getAfipCitiNumeroIdentificacionVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR." = '".$this->getAfipCitiDenominacionVendedor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION." = '".$this->getAfipCitiImporteTotalOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS." = '".$this->getAfipCitiImporteTotalConceptos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS." = '".$this->getAfipCitiImporteOperacionesExentas()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA." = '".$this->getAfipCitiImportePercepcionesIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES." = '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS." = '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES." = '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS." = '".$this->getAfipCitiImporteImpuestosInternos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA." = '".$this->getAfipCitiCodigoMoneda()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO." = '".$this->getAfipCitiTipoCambio()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA." = '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION." = '".$this->getAfipCitiCodigoOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE." = '".$this->getAfipCitiImporteCfComputable()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS." = '".$this->getAfipCitiImporteOtrosTributos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR." = '".$this->getAfipCitiCuitEmisor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR." = '".$this->getAfipCitiDenominacionEmisor()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION." = '".$this->getAfipCitiImporteIvaComision()."'
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_ID." = ".$this->getPdeFacturaId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID." = ".$this->getPdeNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID." = ".$this->getPdeNotaDebitoId()."
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
            $o = new AfipCitiComprasCbte();
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

	/* Delete de BAfipCitiComprasCbte */ 	
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
	
	public function duplicarAfipCitiComprasCbte(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAfipCitiComprasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AfipCitiComprasCbte::setAplicarFiltrosDeAlcance($criterio);

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
	
		$afipciticomprascbtes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $afipciticomprascbte = new AfipCitiComprasCbte();
                    $afipciticomprascbte->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $afipciticomprascbte->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$afipciticomprascbte->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$afipciticomprascbte->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$afipciticomprascbte->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$afipciticomprascbte->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
			$afipciticomprascbte->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$afipciticomprascbte->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$afipciticomprascbte->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$afipciticomprascbte->setAfipCitiDespachoImportacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_DESPACHO_IMPORTACION]);
			$afipciticomprascbte->setAfipCitiCodigoDocumentoVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR]);
			$afipciticomprascbte->setAfipCitiNumeroIdentificacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR]);
			$afipciticomprascbte->setAfipCitiDenominacionVendedor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_VENDEDOR]);
			$afipciticomprascbte->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
			$afipciticomprascbte->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
			$afipciticomprascbte->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
			$afipciticomprascbte->setAfipCitiImportePercepcionesIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA]);
			$afipciticomprascbte->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
			$afipciticomprascbte->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
			$afipciticomprascbte->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
			$afipciticomprascbte->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
			$afipciticomprascbte->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
			$afipciticomprascbte->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
			$afipciticomprascbte->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
			$afipciticomprascbte->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
			$afipciticomprascbte->setAfipCitiImporteCfComputable($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_CF_COMPUTABLE]);
			$afipciticomprascbte->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
			$afipciticomprascbte->setAfipCitiCuitEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_CUIT_EMISOR]);
			$afipciticomprascbte->setAfipCitiDenominacionEmisor($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_EMISOR]);
			$afipciticomprascbte->setAfipCitiImporteIvaComision($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IVA_COMISION]);
			$afipciticomprascbte->setPdeFacturaId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_ID]);
			$afipciticomprascbte->setPdeNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_ID]);
			$afipciticomprascbte->setPdeNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_ID]);
			$afipciticomprascbte->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$afipciticomprascbte->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$afipciticomprascbte->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$afipciticomprascbte->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$afipciticomprascbte->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$afipciticomprascbte->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$afipciticomprascbte->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $afipciticomprascbtes[] = $afipciticomprascbte;
		}
		
		return $afipciticomprascbtes;
	}	
	

	/* Método getAfipCitiComprasCbtes Habilitados */ 	
	static function getAfipCitiComprasCbtesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AfipCitiComprasCbte::getAfipCitiComprasCbtes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAfipCitiComprasCbtes para listado de Backend */ 	
	static function getAfipCitiComprasCbtesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AfipCitiComprasCbte::getAfipCitiComprasCbtes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAfipCitiComprasCbtesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AfipCitiComprasCbte::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AfipCitiComprasCbte::getAfipCitiComprasCbtes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado para select */ 	
	static function getAfipCitiComprasCbtesCmbF($paginador = null, $criterio = null){
            $col = AfipCitiComprasCbte::getAfipCitiComprasCbtes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado por una coleccion de objetos foraneos de AfipCitiPrc */ 	
	static function getAfipCitiComprasCbtesXAfipCitiPrcs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiPrcId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado por una coleccion de objetos foraneos de AfipCitiCabecera */ 	
	static function getAfipCitiComprasCbtesXAfipCitiCabeceras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiCabeceraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado por una coleccion de objetos foraneos de PdeFactura */ 	
	static function getAfipCitiComprasCbtesXPdeFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado por una coleccion de objetos foraneos de PdeNotaCredito */ 	
	static function getAfipCitiComprasCbtesXPdeNotaCreditos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeNotaCreditoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiComprasCbtes filtrado por una coleccion de objetos foraneos de PdeNotaDebito */ 	
	static function getAfipCitiComprasCbtesXPdeNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'afip_citi_compras_cbte_adm.php';
            $url_gestion = 'afip_citi_compras_cbte_gestion.php';
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

	/* Metodo que retorna el PdeFactura (Clave Foranea) */ 	
    public function getPdeFactura(){
        $o = new PdeFactura();
        $o->setId($this->getPdeFacturaId());
        return $o;			
    }

	/* Metodo que retorna el PdeFactura (Clave Foranea) en Array */ 	
    public function getPdeFacturaEnArray(&$arr_os){
        if($this->getPdeFacturaId() != 'null'){
            if(isset($arr_os[$this->getPdeFacturaId()])){
                $o = $arr_os[$this->getPdeFacturaId()];
            }else{
                $o = PdeFactura::getOxId($this->getPdeFacturaId());
                if($o){
                    $arr_os[$this->getPdeFacturaId()] = $o;
                }
            }
        }else{
            $o = new PdeFactura();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeNotaCredito (Clave Foranea) */ 	
    public function getPdeNotaCredito(){
        $o = new PdeNotaCredito();
        $o->setId($this->getPdeNotaCreditoId());
        return $o;			
    }

	/* Metodo que retorna el PdeNotaCredito (Clave Foranea) en Array */ 	
    public function getPdeNotaCreditoEnArray(&$arr_os){
        if($this->getPdeNotaCreditoId() != 'null'){
            if(isset($arr_os[$this->getPdeNotaCreditoId()])){
                $o = $arr_os[$this->getPdeNotaCreditoId()];
            }else{
                $o = PdeNotaCredito::getOxId($this->getPdeNotaCreditoId());
                if($o){
                    $arr_os[$this->getPdeNotaCreditoId()] = $o;
                }
            }
        }else{
            $o = new PdeNotaCredito();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeNotaDebito (Clave Foranea) */ 	
    public function getPdeNotaDebito(){
        $o = new PdeNotaDebito();
        $o->setId($this->getPdeNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el PdeNotaDebito (Clave Foranea) en Array */ 	
    public function getPdeNotaDebitoEnArray(&$arr_os){
        if($this->getPdeNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getPdeNotaDebitoId()])){
                $o = $arr_os[$this->getPdeNotaDebitoId()];
            }else{
                $o = PdeNotaDebito::getOxId($this->getPdeNotaDebitoId());
                if($o){
                    $arr_os[$this->getPdeNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new PdeNotaDebito();
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
            		
        if($contexto_solicitante != PdeFactura::GEN_CLASE){
            if($this->getPdeFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeFactura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeNotaCredito::GEN_CLASE){
            if($this->getPdeNotaCredito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeNotaCredito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeNotaCredito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeNotaDebito::GEN_CLASE){
            if($this->getPdeNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeNotaDebito()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM afip_citi_compras_cbte'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'afip_citi_compras_cbte';");
            
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

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cabecera_id' */ 	
	static function getOxAfipCitiCabeceraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CABECERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_fecha_comprobante' */ 	
	static function getOxAfipCitiFechaComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_fecha_comprobante' */ 	
	static function getOsxAfipCitiFechaComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_tipo_comprobante' */ 	
	static function getOxAfipCitiTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_punto_venta' */ 	
	static function getOxAfipCitiPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_comprobante' */ 	
	static function getOxAfipCitiNumeroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_despacho_importacion' */ 	
	static function getOxAfipCitiDespachoImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DESPACHO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_despacho_importacion' */ 	
	static function getOsxAfipCitiDespachoImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DESPACHO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_documento_vendedor' */ 	
	static function getOxAfipCitiCodigoDocumentoVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_codigo_documento_vendedor' */ 	
	static function getOsxAfipCitiCodigoDocumentoVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_identificacion_vendedor' */ 	
	static function getOxAfipCitiNumeroIdentificacionVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_numero_identificacion_vendedor' */ 	
	static function getOsxAfipCitiNumeroIdentificacionVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_denominacion_vendedor' */ 	
	static function getOxAfipCitiDenominacionVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_denominacion_vendedor' */ 	
	static function getOsxAfipCitiDenominacionVendedor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_VENDEDOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_total_operacion' */ 	
	static function getOxAfipCitiImporteTotalOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_total_operacion' */ 	
	static function getOsxAfipCitiImporteTotalOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_total_conceptos' */ 	
	static function getOxAfipCitiImporteTotalConceptos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_total_conceptos' */ 	
	static function getOsxAfipCitiImporteTotalConceptos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_operaciones_exentas' */ 	
	static function getOxAfipCitiImporteOperacionesExentas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_operaciones_exentas' */ 	
	static function getOsxAfipCitiImporteOperacionesExentas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_iva' */ 	
	static function getOxAfipCitiImportePercepcionesIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_percepciones_iva' */ 	
	static function getOsxAfipCitiImportePercepcionesIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_impuestos_nacionales' */ 	
	static function getOxAfipCitiImportePercepcionesImpuestosNacionales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_percepciones_impuestos_nacionales' */ 	
	static function getOsxAfipCitiImportePercepcionesImpuestosNacionales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_ingresos_brutos' */ 	
	static function getOxAfipCitiImportePercepcionesIngresosBrutos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_percepciones_ingresos_brutos' */ 	
	static function getOsxAfipCitiImportePercepcionesIngresosBrutos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_impuestos_municipales' */ 	
	static function getOxAfipCitiImportePercepcionesImpuestosMunicipales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_percepciones_impuestos_municipales' */ 	
	static function getOsxAfipCitiImportePercepcionesImpuestosMunicipales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_impuestos_internos' */ 	
	static function getOxAfipCitiImporteImpuestosInternos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_impuestos_internos' */ 	
	static function getOsxAfipCitiImporteImpuestosInternos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_moneda' */ 	
	static function getOxAfipCitiCodigoMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_codigo_moneda' */ 	
	static function getOsxAfipCitiCodigoMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_tipo_cambio' */ 	
	static function getOxAfipCitiTipoCambio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_CAMBIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_tipo_cambio' */ 	
	static function getOsxAfipCitiTipoCambio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_CAMBIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cantidad_alicuotas_iva' */ 	
	static function getOxAfipCitiCantidadAlicuotasIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_cantidad_alicuotas_iva' */ 	
	static function getOsxAfipCitiCantidadAlicuotasIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_operacion' */ 	
	static function getOxAfipCitiCodigoOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_codigo_operacion' */ 	
	static function getOsxAfipCitiCodigoOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_cf_computable' */ 	
	static function getOxAfipCitiImporteCfComputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_cf_computable' */ 	
	static function getOsxAfipCitiImporteCfComputable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_CF_COMPUTABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_otros_tributos' */ 	
	static function getOxAfipCitiImporteOtrosTributos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_otros_tributos' */ 	
	static function getOsxAfipCitiImporteOtrosTributos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cuit_emisor' */ 	
	static function getOxAfipCitiCuitEmisor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CUIT_EMISOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_cuit_emisor' */ 	
	static function getOsxAfipCitiCuitEmisor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CUIT_EMISOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_denominacion_emisor' */ 	
	static function getOxAfipCitiDenominacionEmisor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_EMISOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_denominacion_emisor' */ 	
	static function getOsxAfipCitiDenominacionEmisor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_EMISOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_iva_comision' */ 	
	static function getOxAfipCitiImporteIvaComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IVA_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_iva_comision' */ 	
	static function getOsxAfipCitiImporteIvaComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IVA_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_factura_id' */ 	
	static function getOxPdeFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_factura_id' */ 	
	static function getOsxPdeFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_nota_credito_id' */ 	
	static function getOxPdeNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_nota_credito_id' */ 	
	static function getOsxPdeNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_nota_debito_id' */ 	
	static function getOxPdeNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_nota_debito_id' */ 	
	static function getOsxPdeNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes(null, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiComprasCbtes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'afip_citi_compras_cbte_adm');
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
                $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
                $c->addOrden(AfipCitiComprasCbte::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $afip_citi_compras_cbtes = AfipCitiComprasCbte::getAfipCitiComprasCbtes(null, $c);

                $arr = array();
                foreach($afip_citi_compras_cbtes as $afip_citi_compras_cbte){
                    $descripcion = $afip_citi_compras_cbte->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>