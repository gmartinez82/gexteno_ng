<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAfipCitiVentasCbte
{ 
	
	const SES_PAGINACION = 'adm_afipcitiventascbte_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_afipcitiventascbte_paginas_registros';
	const SES_CRITERIOS = 'adm_afipcitiventascbte_criterios';
	
	const GEN_CLASE = 'AfipCitiVentasCbte';
	const GEN_TABLA = 'afip_citi_ventas_cbte';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAfipCitiVentasCbte */ 
	const GEN_ATTR_ID = 'afip_citi_ventas_cbte.id';
	const GEN_ATTR_DESCRIPCION = 'afip_citi_ventas_cbte.descripcion';
	const GEN_ATTR_CODIGO = 'afip_citi_ventas_cbte.codigo';
	const GEN_ATTR_AFIP_CITI_PRC_ID = 'afip_citi_ventas_cbte.afip_citi_prc_id';
	const GEN_ATTR_AFIP_CITI_CABECERA_ID = 'afip_citi_ventas_cbte.afip_citi_cabecera_id';
	const GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE = 'afip_citi_ventas_cbte.afip_citi_fecha_comprobante';
	const GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_ventas_cbte.afip_citi_tipo_comprobante';
	const GEN_ATTR_AFIP_CITI_PUNTO_VENTA = 'afip_citi_ventas_cbte.afip_citi_punto_venta';
	const GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_ventas_cbte.afip_citi_numero_comprobante';
	const GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE_HASTA = 'afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta';
	const GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR = 'afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador';
	const GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR = 'afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador';
	const GEN_ATTR_AFIP_CITI_DENOMINACION_COMPRADOR = 'afip_citi_ventas_cbte.afip_citi_denominacion_comprador';
	const GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION = 'afip_citi_ventas_cbte.afip_citi_importe_total_operacion';
	const GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS = 'afip_citi_ventas_cbte.afip_citi_importe_total_conceptos';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS = 'afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados';
	const GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS = 'afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES = 'afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS = 'afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos';
	const GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES = 'afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales';
	const GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS = 'afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos';
	const GEN_ATTR_AFIP_CITI_CODIGO_MONEDA = 'afip_citi_ventas_cbte.afip_citi_codigo_moneda';
	const GEN_ATTR_AFIP_CITI_TIPO_CAMBIO = 'afip_citi_ventas_cbte.afip_citi_tipo_cambio';
	const GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA = 'afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva';
	const GEN_ATTR_AFIP_CITI_CODIGO_OPERACION = 'afip_citi_ventas_cbte.afip_citi_codigo_operacion';
	const GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS = 'afip_citi_ventas_cbte.afip_citi_importe_otros_tributos';
	const GEN_ATTR_AFIP_CITI_FECHA_VENCIMIENTO_PAGO = 'afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago';
	const GEN_ATTR_VTA_FACTURA_ID = 'afip_citi_ventas_cbte.vta_factura_id';
	const GEN_ATTR_VTA_NOTA_CREDITO_ID = 'afip_citi_ventas_cbte.vta_nota_credito_id';
	const GEN_ATTR_VTA_NOTA_DEBITO_ID = 'afip_citi_ventas_cbte.vta_nota_debito_id';
	const GEN_ATTR_OBSERVACION = 'afip_citi_ventas_cbte.observacion';
	const GEN_ATTR_ORDEN = 'afip_citi_ventas_cbte.orden';
	const GEN_ATTR_ESTADO = 'afip_citi_ventas_cbte.estado';
	const GEN_ATTR_CREADO = 'afip_citi_ventas_cbte.creado';
	const GEN_ATTR_CREADO_POR = 'afip_citi_ventas_cbte.creado_por';
	const GEN_ATTR_MODIFICADO = 'afip_citi_ventas_cbte.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'afip_citi_ventas_cbte.modificado_por';

	/* Constantes de Atributos Min de BAfipCitiVentasCbte */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_AFIP_CITI_PRC_ID = 'afip_citi_prc_id';
	const GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID = 'afip_citi_cabecera_id';
	const GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE = 'afip_citi_fecha_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE = 'afip_citi_tipo_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA = 'afip_citi_punto_venta';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE = 'afip_citi_numero_comprobante';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA = 'afip_citi_numero_comprobante_hasta';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR = 'afip_citi_codigo_documento_comprador';
	const GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR = 'afip_citi_numero_identificacion_comprador';
	const GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR = 'afip_citi_denominacion_comprador';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION = 'afip_citi_importe_total_operacion';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS = 'afip_citi_importe_total_conceptos';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS = 'afip_citi_importe_percepcion_no_categorizados';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS = 'afip_citi_importe_operaciones_exentas';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES = 'afip_citi_importe_percepciones_impuestos_nacionales';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS = 'afip_citi_importe_percepciones_ingresos_brutos';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES = 'afip_citi_importe_percepciones_impuestos_municipales';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS = 'afip_citi_importe_impuestos_internos';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA = 'afip_citi_codigo_moneda';
	const GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO = 'afip_citi_tipo_cambio';
	const GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA = 'afip_citi_cantidad_alicuotas_iva';
	const GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION = 'afip_citi_codigo_operacion';
	const GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS = 'afip_citi_importe_otros_tributos';
	const GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO = 'afip_citi_fecha_vencimiento_pago';
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
	

	/* Atributos de BAfipCitiVentasCbte */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $afip_citi_prc_id;
	private $afip_citi_cabecera_id;
	private $afip_citi_fecha_comprobante;
	private $afip_citi_tipo_comprobante;
	private $afip_citi_punto_venta;
	private $afip_citi_numero_comprobante;
	private $afip_citi_numero_comprobante_hasta;
	private $afip_citi_codigo_documento_comprador;
	private $afip_citi_numero_identificacion_comprador;
	private $afip_citi_denominacion_comprador;
	private $afip_citi_importe_total_operacion;
	private $afip_citi_importe_total_conceptos;
	private $afip_citi_importe_percepcion_no_categorizados;
	private $afip_citi_importe_operaciones_exentas;
	private $afip_citi_importe_percepciones_impuestos_nacionales;
	private $afip_citi_importe_percepciones_ingresos_brutos;
	private $afip_citi_importe_percepciones_impuestos_municipales;
	private $afip_citi_importe_impuestos_internos;
	private $afip_citi_codigo_moneda;
	private $afip_citi_tipo_cambio;
	private $afip_citi_cantidad_alicuotas_iva;
	private $afip_citi_codigo_operacion;
	private $afip_citi_importe_otros_tributos;
	private $afip_citi_fecha_vencimiento_pago;
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

	/* Getters de BAfipCitiVentasCbte */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAfipCitiPrcId(){ if(isset($this->afip_citi_prc_id)){ return $this->afip_citi_prc_id; }else{ return 'null'; } }
	public function getAfipCitiCabeceraId(){ if(isset($this->afip_citi_cabecera_id)){ return $this->afip_citi_cabecera_id; }else{ return 'null'; } }
	public function getAfipCitiFechaComprobante(){ if(isset($this->afip_citi_fecha_comprobante)){ return $this->afip_citi_fecha_comprobante; }else{ return ''; } }
	public function getAfipCitiTipoComprobante(){ if(isset($this->afip_citi_tipo_comprobante)){ return $this->afip_citi_tipo_comprobante; }else{ return ''; } }
	public function getAfipCitiPuntoVenta(){ if(isset($this->afip_citi_punto_venta)){ return $this->afip_citi_punto_venta; }else{ return ''; } }
	public function getAfipCitiNumeroComprobante(){ if(isset($this->afip_citi_numero_comprobante)){ return $this->afip_citi_numero_comprobante; }else{ return ''; } }
	public function getAfipCitiNumeroComprobanteHasta(){ if(isset($this->afip_citi_numero_comprobante_hasta)){ return $this->afip_citi_numero_comprobante_hasta; }else{ return ''; } }
	public function getAfipCitiCodigoDocumentoComprador(){ if(isset($this->afip_citi_codigo_documento_comprador)){ return $this->afip_citi_codigo_documento_comprador; }else{ return ''; } }
	public function getAfipCitiNumeroIdentificacionComprador(){ if(isset($this->afip_citi_numero_identificacion_comprador)){ return $this->afip_citi_numero_identificacion_comprador; }else{ return ''; } }
	public function getAfipCitiDenominacionComprador(){ if(isset($this->afip_citi_denominacion_comprador)){ return $this->afip_citi_denominacion_comprador; }else{ return ''; } }
	public function getAfipCitiImporteTotalOperacion(){ if(isset($this->afip_citi_importe_total_operacion)){ return $this->afip_citi_importe_total_operacion; }else{ return ''; } }
	public function getAfipCitiImporteTotalConceptos(){ if(isset($this->afip_citi_importe_total_conceptos)){ return $this->afip_citi_importe_total_conceptos; }else{ return ''; } }
	public function getAfipCitiImportePercepcionNoCategorizados(){ if(isset($this->afip_citi_importe_percepcion_no_categorizados)){ return $this->afip_citi_importe_percepcion_no_categorizados; }else{ return ''; } }
	public function getAfipCitiImporteOperacionesExentas(){ if(isset($this->afip_citi_importe_operaciones_exentas)){ return $this->afip_citi_importe_operaciones_exentas; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesImpuestosNacionales(){ if(isset($this->afip_citi_importe_percepciones_impuestos_nacionales)){ return $this->afip_citi_importe_percepciones_impuestos_nacionales; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesIngresosBrutos(){ if(isset($this->afip_citi_importe_percepciones_ingresos_brutos)){ return $this->afip_citi_importe_percepciones_ingresos_brutos; }else{ return ''; } }
	public function getAfipCitiImportePercepcionesImpuestosMunicipales(){ if(isset($this->afip_citi_importe_percepciones_impuestos_municipales)){ return $this->afip_citi_importe_percepciones_impuestos_municipales; }else{ return ''; } }
	public function getAfipCitiImporteImpuestosInternos(){ if(isset($this->afip_citi_importe_impuestos_internos)){ return $this->afip_citi_importe_impuestos_internos; }else{ return ''; } }
	public function getAfipCitiCodigoMoneda(){ if(isset($this->afip_citi_codigo_moneda)){ return $this->afip_citi_codigo_moneda; }else{ return ''; } }
	public function getAfipCitiTipoCambio(){ if(isset($this->afip_citi_tipo_cambio)){ return $this->afip_citi_tipo_cambio; }else{ return ''; } }
	public function getAfipCitiCantidadAlicuotasIva(){ if(isset($this->afip_citi_cantidad_alicuotas_iva)){ return $this->afip_citi_cantidad_alicuotas_iva; }else{ return ''; } }
	public function getAfipCitiCodigoOperacion(){ if(isset($this->afip_citi_codigo_operacion)){ return $this->afip_citi_codigo_operacion; }else{ return ''; } }
	public function getAfipCitiImporteOtrosTributos(){ if(isset($this->afip_citi_importe_otros_tributos)){ return $this->afip_citi_importe_otros_tributos; }else{ return ''; } }
	public function getAfipCitiFechaVencimientoPago(){ if(isset($this->afip_citi_fecha_vencimiento_pago)){ return $this->afip_citi_fecha_vencimiento_pago; }else{ return ''; } }
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

	/* Setters de BAfipCitiVentasCbte */ 	
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
				, ".self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE_HASTA."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR."
				, ".self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR."
				, ".self::GEN_ATTR_AFIP_CITI_DENOMINACION_COMPRADOR."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_MONEDA."
				, ".self::GEN_ATTR_AFIP_CITI_TIPO_CAMBIO."
				, ".self::GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
				, ".self::GEN_ATTR_AFIP_CITI_CODIGO_OPERACION."
				, ".self::GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
				, ".self::GEN_ATTR_AFIP_CITI_FECHA_VENCIMIENTO_PAGO."
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
				$this->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
				$this->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
				$this->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
				$this->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
				$this->setAfipCitiNumeroComprobanteHasta($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA]);
				$this->setAfipCitiCodigoDocumentoComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR]);
				$this->setAfipCitiNumeroIdentificacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR]);
				$this->setAfipCitiDenominacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR]);
				$this->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
				$this->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
				$this->setAfipCitiImportePercepcionNoCategorizados($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS]);
				$this->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
				$this->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
				$this->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
				$this->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
				$this->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
				$this->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
				$this->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
				$this->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
				$this->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
				$this->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
				$this->setAfipCitiFechaVencimientoPago($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO]);
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
	public function setAfipCitiFechaComprobante($v){ $this->afip_citi_fecha_comprobante = $v; }
	public function setAfipCitiTipoComprobante($v){ $this->afip_citi_tipo_comprobante = $v; }
	public function setAfipCitiPuntoVenta($v){ $this->afip_citi_punto_venta = $v; }
	public function setAfipCitiNumeroComprobante($v){ $this->afip_citi_numero_comprobante = $v; }
	public function setAfipCitiNumeroComprobanteHasta($v){ $this->afip_citi_numero_comprobante_hasta = $v; }
	public function setAfipCitiCodigoDocumentoComprador($v){ $this->afip_citi_codigo_documento_comprador = $v; }
	public function setAfipCitiNumeroIdentificacionComprador($v){ $this->afip_citi_numero_identificacion_comprador = $v; }
	public function setAfipCitiDenominacionComprador($v){ $this->afip_citi_denominacion_comprador = $v; }
	public function setAfipCitiImporteTotalOperacion($v){ $this->afip_citi_importe_total_operacion = $v; }
	public function setAfipCitiImporteTotalConceptos($v){ $this->afip_citi_importe_total_conceptos = $v; }
	public function setAfipCitiImportePercepcionNoCategorizados($v){ $this->afip_citi_importe_percepcion_no_categorizados = $v; }
	public function setAfipCitiImporteOperacionesExentas($v){ $this->afip_citi_importe_operaciones_exentas = $v; }
	public function setAfipCitiImportePercepcionesImpuestosNacionales($v){ $this->afip_citi_importe_percepciones_impuestos_nacionales = $v; }
	public function setAfipCitiImportePercepcionesIngresosBrutos($v){ $this->afip_citi_importe_percepciones_ingresos_brutos = $v; }
	public function setAfipCitiImportePercepcionesImpuestosMunicipales($v){ $this->afip_citi_importe_percepciones_impuestos_municipales = $v; }
	public function setAfipCitiImporteImpuestosInternos($v){ $this->afip_citi_importe_impuestos_internos = $v; }
	public function setAfipCitiCodigoMoneda($v){ $this->afip_citi_codigo_moneda = $v; }
	public function setAfipCitiTipoCambio($v){ $this->afip_citi_tipo_cambio = $v; }
	public function setAfipCitiCantidadAlicuotasIva($v){ $this->afip_citi_cantidad_alicuotas_iva = $v; }
	public function setAfipCitiCodigoOperacion($v){ $this->afip_citi_codigo_operacion = $v; }
	public function setAfipCitiImporteOtrosTributos($v){ $this->afip_citi_importe_otros_tributos = $v; }
	public function setAfipCitiFechaVencimientoPago($v){ $this->afip_citi_fecha_vencimiento_pago = $v; }
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
            $o = new AfipCitiVentasCbte();
            $o->setId($fila[AfipCitiVentasCbte::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$o->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$o->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
			$o->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$o->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$o->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$o->setAfipCitiNumeroComprobanteHasta($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA]);
			$o->setAfipCitiCodigoDocumentoComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR]);
			$o->setAfipCitiNumeroIdentificacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR]);
			$o->setAfipCitiDenominacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR]);
			$o->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
			$o->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
			$o->setAfipCitiImportePercepcionNoCategorizados($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS]);
			$o->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
			$o->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
			$o->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
			$o->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
			$o->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
			$o->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
			$o->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
			$o->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
			$o->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
			$o->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
			$o->setAfipCitiFechaVencimientoPago($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO]);
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

	/* Control de BAfipCitiVentasCbte */ 	
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

	/* Cambia el estado de BAfipCitiVentasCbte */ 	
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

	/* Save de BAfipCitiVentasCbte */ 	
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO."
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
                nextval('afip_citi_ventas_cbte_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getAfipCitiPrcId()."
						, ".$this->getAfipCitiCabeceraId()."
						, '".$this->getAfipCitiFechaComprobante()."'
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiNumeroComprobanteHasta()."'
						, '".$this->getAfipCitiCodigoDocumentoComprador()."'
						, '".$this->getAfipCitiNumeroIdentificacionComprador()."'
						, '".$this->getAfipCitiDenominacionComprador()."'
						, '".$this->getAfipCitiImporteTotalOperacion()."'
						, '".$this->getAfipCitiImporteTotalConceptos()."'
						, '".$this->getAfipCitiImportePercepcionNoCategorizados()."'
						, '".$this->getAfipCitiImporteOperacionesExentas()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, '".$this->getAfipCitiImporteImpuestosInternos()."'
						, '".$this->getAfipCitiCodigoMoneda()."'
						, '".$this->getAfipCitiTipoCambio()."'
						, '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, '".$this->getAfipCitiCodigoOperacion()."'
						, '".$this->getAfipCitiImporteOtrosTributos()."'
						, '".$this->getAfipCitiFechaVencimientoPago()."'
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
                    ) RETURNING currval('afip_citi_ventas_cbte_seq')";
            
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
                 
				 ".AfipCitiVentasCbte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE." = '".$this->getAfipCitiFechaComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA." = '".$this->getAfipCitiNumeroComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR." = '".$this->getAfipCitiCodigoDocumentoComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR." = '".$this->getAfipCitiNumeroIdentificacionComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR." = '".$this->getAfipCitiDenominacionComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION." = '".$this->getAfipCitiImporteTotalOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS." = '".$this->getAfipCitiImporteTotalConceptos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS." = '".$this->getAfipCitiImportePercepcionNoCategorizados()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS." = '".$this->getAfipCitiImporteOperacionesExentas()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES." = '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS." = '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES." = '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS." = '".$this->getAfipCitiImporteImpuestosInternos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA." = '".$this->getAfipCitiCodigoMoneda()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO." = '".$this->getAfipCitiTipoCambio()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA." = '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION." = '".$this->getAfipCitiCodigoOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS." = '".$this->getAfipCitiImporteOtrosTributos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO." = '".$this->getAfipCitiFechaVencimientoPago()."'
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
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO."
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
						, '".$this->getAfipCitiFechaComprobante()."'
						, '".$this->getAfipCitiTipoComprobante()."'
						, '".$this->getAfipCitiPuntoVenta()."'
						, '".$this->getAfipCitiNumeroComprobante()."'
						, '".$this->getAfipCitiNumeroComprobanteHasta()."'
						, '".$this->getAfipCitiCodigoDocumentoComprador()."'
						, '".$this->getAfipCitiNumeroIdentificacionComprador()."'
						, '".$this->getAfipCitiDenominacionComprador()."'
						, '".$this->getAfipCitiImporteTotalOperacion()."'
						, '".$this->getAfipCitiImporteTotalConceptos()."'
						, '".$this->getAfipCitiImportePercepcionNoCategorizados()."'
						, '".$this->getAfipCitiImporteOperacionesExentas()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, '".$this->getAfipCitiImporteImpuestosInternos()."'
						, '".$this->getAfipCitiCodigoMoneda()."'
						, '".$this->getAfipCitiTipoCambio()."'
						, '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, '".$this->getAfipCitiCodigoOperacion()."'
						, '".$this->getAfipCitiImporteOtrosTributos()."'
						, '".$this->getAfipCitiFechaVencimientoPago()."'
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
                     
				 ".AfipCitiVentasCbte::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID." = ".$this->getAfipCitiPrcId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID." = ".$this->getAfipCitiCabeceraId()."
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE." = '".$this->getAfipCitiFechaComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE." = '".$this->getAfipCitiTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA." = '".$this->getAfipCitiPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE." = '".$this->getAfipCitiNumeroComprobante()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA." = '".$this->getAfipCitiNumeroComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR." = '".$this->getAfipCitiCodigoDocumentoComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR." = '".$this->getAfipCitiNumeroIdentificacionComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR." = '".$this->getAfipCitiDenominacionComprador()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION." = '".$this->getAfipCitiImporteTotalOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS." = '".$this->getAfipCitiImporteTotalConceptos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS." = '".$this->getAfipCitiImportePercepcionNoCategorizados()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS." = '".$this->getAfipCitiImporteOperacionesExentas()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES." = '".$this->getAfipCitiImportePercepcionesImpuestosNacionales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS." = '".$this->getAfipCitiImportePercepcionesIngresosBrutos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES." = '".$this->getAfipCitiImportePercepcionesImpuestosMunicipales()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS." = '".$this->getAfipCitiImporteImpuestosInternos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA." = '".$this->getAfipCitiCodigoMoneda()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO." = '".$this->getAfipCitiTipoCambio()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA." = '".$this->getAfipCitiCantidadAlicuotasIva()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION." = '".$this->getAfipCitiCodigoOperacion()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS." = '".$this->getAfipCitiImporteOtrosTributos()."'
						, ".self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO." = '".$this->getAfipCitiFechaVencimientoPago()."'
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
            $o = new AfipCitiVentasCbte();
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

	/* Delete de BAfipCitiVentasCbte */ 	
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
	
	public function duplicarAfipCitiVentasCbte(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAfipCitiVentasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AfipCitiVentasCbte::setAplicarFiltrosDeAlcance($criterio);

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
	
		$afipcitiventascbtes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $afipcitiventascbte = new AfipCitiVentasCbte();
                    $afipcitiventascbte->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $afipcitiventascbte->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$afipcitiventascbte->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$afipcitiventascbte->setAfipCitiPrcId($fila[self::GEN_ATTR_MIN_AFIP_CITI_PRC_ID]);
			$afipcitiventascbte->setAfipCitiCabeceraId($fila[self::GEN_ATTR_MIN_AFIP_CITI_CABECERA_ID]);
			$afipcitiventascbte->setAfipCitiFechaComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_COMPROBANTE]);
			$afipcitiventascbte->setAfipCitiTipoComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_COMPROBANTE]);
			$afipcitiventascbte->setAfipCitiPuntoVenta($fila[self::GEN_ATTR_MIN_AFIP_CITI_PUNTO_VENTA]);
			$afipcitiventascbte->setAfipCitiNumeroComprobante($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE]);
			$afipcitiventascbte->setAfipCitiNumeroComprobanteHasta($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_COMPROBANTE_HASTA]);
			$afipcitiventascbte->setAfipCitiCodigoDocumentoComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR]);
			$afipcitiventascbte->setAfipCitiNumeroIdentificacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR]);
			$afipcitiventascbte->setAfipCitiDenominacionComprador($fila[self::GEN_ATTR_MIN_AFIP_CITI_DENOMINACION_COMPRADOR]);
			$afipcitiventascbte->setAfipCitiImporteTotalOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_OPERACION]);
			$afipcitiventascbte->setAfipCitiImporteTotalConceptos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS]);
			$afipcitiventascbte->setAfipCitiImportePercepcionNoCategorizados($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS]);
			$afipcitiventascbte->setAfipCitiImporteOperacionesExentas($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS]);
			$afipcitiventascbte->setAfipCitiImportePercepcionesImpuestosNacionales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES]);
			$afipcitiventascbte->setAfipCitiImportePercepcionesIngresosBrutos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS]);
			$afipcitiventascbte->setAfipCitiImportePercepcionesImpuestosMunicipales($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES]);
			$afipcitiventascbte->setAfipCitiImporteImpuestosInternos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS]);
			$afipcitiventascbte->setAfipCitiCodigoMoneda($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_MONEDA]);
			$afipcitiventascbte->setAfipCitiTipoCambio($fila[self::GEN_ATTR_MIN_AFIP_CITI_TIPO_CAMBIO]);
			$afipcitiventascbte->setAfipCitiCantidadAlicuotasIva($fila[self::GEN_ATTR_MIN_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA]);
			$afipcitiventascbte->setAfipCitiCodigoOperacion($fila[self::GEN_ATTR_MIN_AFIP_CITI_CODIGO_OPERACION]);
			$afipcitiventascbte->setAfipCitiImporteOtrosTributos($fila[self::GEN_ATTR_MIN_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS]);
			$afipcitiventascbte->setAfipCitiFechaVencimientoPago($fila[self::GEN_ATTR_MIN_AFIP_CITI_FECHA_VENCIMIENTO_PAGO]);
			$afipcitiventascbte->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$afipcitiventascbte->setVtaNotaCreditoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID]);
			$afipcitiventascbte->setVtaNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_ID]);
			$afipcitiventascbte->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$afipcitiventascbte->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$afipcitiventascbte->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$afipcitiventascbte->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$afipcitiventascbte->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$afipcitiventascbte->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$afipcitiventascbte->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $afipcitiventascbtes[] = $afipcitiventascbte;
		}
		
		return $afipcitiventascbtes;
	}	
	

	/* Método getAfipCitiVentasCbtes Habilitados */ 	
	static function getAfipCitiVentasCbtesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AfipCitiVentasCbte::getAfipCitiVentasCbtes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAfipCitiVentasCbtes para listado de Backend */ 	
	static function getAfipCitiVentasCbtesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AfipCitiVentasCbte::getAfipCitiVentasCbtes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAfipCitiVentasCbtesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AfipCitiVentasCbte::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AfipCitiVentasCbte::getAfipCitiVentasCbtes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado para select */ 	
	static function getAfipCitiVentasCbtesCmbF($paginador = null, $criterio = null){
            $col = AfipCitiVentasCbte::getAfipCitiVentasCbtes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado por una coleccion de objetos foraneos de AfipCitiPrc */ 	
	static function getAfipCitiVentasCbtesXAfipCitiPrcs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiPrcId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado por una coleccion de objetos foraneos de AfipCitiCabecera */ 	
	static function getAfipCitiVentasCbtesXAfipCitiCabeceras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_CABECERA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAfipCitiCabeceraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado por una coleccion de objetos foraneos de VtaFactura */ 	
	static function getAfipCitiVentasCbtesXVtaFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado por una coleccion de objetos foraneos de VtaNotaCredito */ 	
	static function getAfipCitiVentasCbtesXVtaNotaCreditos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_CREDITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaNotaCreditoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAfipCitiVentasCbtes filtrado por una coleccion de objetos foraneos de VtaNotaDebito */ 	
	static function getAfipCitiVentasCbtesXVtaNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'afip_citi_ventas_cbte_adm.php';
            $url_gestion = 'afip_citi_ventas_cbte_gestion.php';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM afip_citi_ventas_cbte'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'afip_citi_ventas_cbte';");
            
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

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_prc_id' */ 	
	static function getOxAfipCitiPrcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PRC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cabecera_id' */ 	
	static function getOxAfipCitiCabeceraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CABECERA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_fecha_comprobante' */ 	
	static function getOxAfipCitiFechaComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_FECHA_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_tipo_comprobante' */ 	
	static function getOxAfipCitiTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_punto_venta' */ 	
	static function getOxAfipCitiPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_comprobante' */ 	
	static function getOxAfipCitiNumeroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_comprobante_hasta' */ 	
	static function getOxAfipCitiNumeroComprobanteHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_numero_comprobante_hasta' */ 	
	static function getOsxAfipCitiNumeroComprobanteHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_COMPROBANTE_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_documento_comprador' */ 	
	static function getOxAfipCitiCodigoDocumentoComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_codigo_documento_comprador' */ 	
	static function getOsxAfipCitiCodigoDocumentoComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_DOCUMENTO_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_numero_identificacion_comprador' */ 	
	static function getOxAfipCitiNumeroIdentificacionComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_numero_identificacion_comprador' */ 	
	static function getOsxAfipCitiNumeroIdentificacionComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_NUMERO_IDENTIFICACION_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_denominacion_comprador' */ 	
	static function getOxAfipCitiDenominacionComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_denominacion_comprador' */ 	
	static function getOsxAfipCitiDenominacionComprador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_DENOMINACION_COMPRADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_total_operacion' */ 	
	static function getOxAfipCitiImporteTotalOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_total_conceptos' */ 	
	static function getOxAfipCitiImporteTotalConceptos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_TOTAL_CONCEPTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepcion_no_categorizados' */ 	
	static function getOxAfipCitiImportePercepcionNoCategorizados($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_importe_percepcion_no_categorizados' */ 	
	static function getOsxAfipCitiImportePercepcionNoCategorizados($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCION_NO_CATEGORIZADOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_operaciones_exentas' */ 	
	static function getOxAfipCitiImporteOperacionesExentas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OPERACIONES_EXENTAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_impuestos_nacionales' */ 	
	static function getOxAfipCitiImportePercepcionesImpuestosNacionales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_NACIONALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_ingresos_brutos' */ 	
	static function getOxAfipCitiImportePercepcionesIngresosBrutos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_INGRESOS_BRUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_percepciones_impuestos_municipales' */ 	
	static function getOxAfipCitiImportePercepcionesImpuestosMunicipales($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_PERCEPCIONES_IMPUESTOS_MUNICIPALES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_impuestos_internos' */ 	
	static function getOxAfipCitiImporteImpuestosInternos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_IMPUESTOS_INTERNOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_moneda' */ 	
	static function getOxAfipCitiCodigoMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_tipo_cambio' */ 	
	static function getOxAfipCitiTipoCambio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_TIPO_CAMBIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_cantidad_alicuotas_iva' */ 	
	static function getOxAfipCitiCantidadAlicuotasIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CANTIDAD_ALICUOTAS_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_codigo_operacion' */ 	
	static function getOxAfipCitiCodigoOperacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_CODIGO_OPERACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_importe_otros_tributos' */ 	
	static function getOxAfipCitiImporteOtrosTributos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_IMPORTE_OTROS_TRIBUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afip_citi_fecha_vencimiento_pago' */ 	
	static function getOxAfipCitiFechaVencimientoPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_FECHA_VENCIMIENTO_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afip_citi_fecha_vencimiento_pago' */ 	
	static function getOsxAfipCitiFechaVencimientoPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFIP_CITI_FECHA_VENCIMIENTO_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_factura_id' */ 	
	static function getOxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_nota_credito_id' */ 	
	static function getOxVtaNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_nota_debito_id' */ 	
	static function getOxVtaNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes(null, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
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

            $obs = self::getAfipCitiVentasCbtes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'afip_citi_ventas_cbte_adm');
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
                $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
                $c->addOrden(AfipCitiVentasCbte::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $afip_citi_ventas_cbtes = AfipCitiVentasCbte::getAfipCitiVentasCbtes(null, $c);

                $arr = array();
                foreach($afip_citi_ventas_cbtes as $afip_citi_ventas_cbte){
                    $descripcion = $afip_citi_ventas_cbte->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>