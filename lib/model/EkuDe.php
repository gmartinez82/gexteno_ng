<?php 

//require(__DIR__.'/../../vendor/autoload.php');
//use RobRichards\XMLSecLibs\XMLSecurityDSig;
//use RobRichards\XMLSecLibs\XMLSecurityKey;

require_once "base/BEkuDe.php"; 
class EkuDe extends BEkuDe
{
    const VERSION = '150';
    
    /**
     * 
     */
    static function setInicializarDEDesdeComprobante($eku_param_tipo_de_codigo, $vta_comprobante){
        
        $eku_de = self::setInicializarDEGrupoA001(); // Campos firmados del Documento Electrónico
        
        switch ($eku_param_tipo_de_codigo){
            
            // -----------------------------------------------------------------
            case EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA:
                    $eku_de->setGenerarVinculoConFactura($vta_comprobante);
                break;
            
            // -----------------------------------------------------------------
            case EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA:
                    $eku_de->setGenerarVinculoConNotaCredito($vta_comprobante);
                break;
        }
        
        $eku_de->setInicializarDEGrupoB001(); // Campos inherentes a la operación de Documentos Electrónicos
        $eku_de->setInicializarDEGrupoC001($eku_param_tipo_de_codigo); // Campos de datos del Timbrado
        $eku_de->setInicializarDEGrupoD001(); // Campos Generales del Documento Electrónico DE        
        $eku_de->setInicializarDEGrupoD010($eku_param_tipo_de_codigo); // Campos inherentes a la operación comercial
        $eku_de->setInicializarDEGrupoD100(); // Campos que identifican al emisor del Documento Electrónico DE
        $eku_de->setInicializarDEGrupoD130(); // Campos que describen la actividad económica del emisor
        //$eku_de->setInicializarDEGrupoD140(); // Campos que identifican al responsable de la generación del DE
        $eku_de->setInicializarDEGrupoD200(); // Campos que identifican al receptor del Documento Electrónico DE
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA){
            $eku_de->setInicializarDEGrupoE010(); // Campos que componen la Factura Electrónica FE        
        }
        
        //$eku_de->setInicializarDEGrupoE020(); // Campos de informaciones de Compras Públicas
        //$eku_de->setInicializarDEGrupoE300(); // Campos que componen la Autofactura Electrónica
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA){
            $eku_de->setInicializarDEGrupoE400(); // Campos que componen la Nota de Crédito/Débito Electrónica NCE-NDE
        }
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_NOTA_DE_REMISION_ELECTRONICA){
            $eku_de->setInicializarDEGrupoE500(); // Campos que componen la Nota de Remisión Electrónica
        }
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA){
            $eku_de->setInicializarDEGrupoE600(); // Campos que describen la condición de la operación
            $eku_de->setInicializarDEGrupoE605(); // Campos que describen la forma de pago de la operación al contado o del monto de la entrega inicial
            $eku_de->setInicializarDEGrupoE620(); // Campos que describen el pago o entrega inicial de la operación con tarjeta de crédito/débito
            $eku_de->setInicializarDEGrupoE630(); // Campos que describen el pago o entrega inicial de la operación con cheque
            $eku_de->setInicializarDEGrupoE640(); // Campos que describen la operación a crédito
            $eku_de->setInicializarDEGrupoE650(); // Campos que describen las cuotas
        }        
        
        $eku_de->setInicializarDEGrupoE700Full(); // Items  
        
        //$eku_de->setInicializarDEGrupoE791(); // Sector Energía Eléctrica
        //$eku_de->setInicializarDEGrupoE800(); // Sector Seguros
        //$eku_de->setInicializarDEGrupoEA790(); // Polizas de Seguro
        //$eku_de->setInicializarDEGrupoE810(); // Sector de Supermercados
        //$eku_de->setInicializarDEGrupoE820(); // Grupo de datos adicionales de uso comercial
        
        //$eku_de->setInicializarDEGrupoE900(); // Transporte de Mercaderia
        //$eku_de->setInicializarDEGrupoE920(); // Local de Salida de Mercaderia
        //$eku_de->setInicializarDEGrupoE940(); // Local de Entrega de Mercaderia
        //$eku_de->setInicializarDEGrupoE960(); // Vehiculo Traslado Mercaderia
        //$eku_de->setInicializarDEGrupoE980(); // Transportista
        
        $eku_de->setInicializarDEGrupoF001(); // Totales y Subtotales del Comprobante
        //$eku_de->setInicializarDEGrupoG001(); // Datos de Uso General
        //$eku_de->setInicializarDEGrupoG050(); // Campos Generales de la Carga
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA){
            $eku_de->setInicializarDEGrupoH001($eku_param_tipo_de_codigo); // Documento Asociado
        }
                   
        // ---------------------------------------------------------------------
        // se registran campos finales del comprobante
        // ---------------------------------------------------------------------
        $cdc_codigo_de_control = $eku_de->getCodigoDeControlCDC();
        $cdc_dv = substr($cdc_codigo_de_control, -1);
        
        $eku_de->setEkuA002IdCdc($cdc_codigo_de_control);
        $eku_de->setEkuA003Ddvid($cdc_dv);
        $eku_de->setEkuA004Dfecfirma(date('Y-m-d')."T".date('H:i:s'));
        $eku_de->save();

        //$eku_de->setInicializarDEGrupoI001(); // Firma Digital
        //$eku_de->setInicializarDEGrupoJ001(); // Campos Fuera de la Firma
        
        return $eku_de;
    }
    
    /**
     * 
     */
    public function setInicializarDE(){
        
    }
    
    /**
     * 
     */
    public function setGenerarVinculoConFactura($vta_factura){
        $inicial = 1;
        
        $array = array(
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_factura->getId()),
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_facturas = EkuDeVtaFactura::getOsxArray($array);
        foreach($eku_de_vta_facturas as $eku_de_vta_factura){
            $eku_de_vta_factura->setActual(0);
            $eku_de_vta_factura->save();
            
            $inicial = 0;
        }
        
        $eku_de_vta_factura = new EkuDeVtaFactura();
        $eku_de_vta_factura->setEkuDeId($this->getId());
        $eku_de_vta_factura->setVtaFacturaId($vta_factura->getId());
        $eku_de_vta_factura->setInicial($inicial);
        $eku_de_vta_factura->setActual(1);
        $eku_de_vta_factura->setEstado(1);
        $eku_de_vta_factura->save();
        
        return $eku_de_vta_factura;
    }

    /**
     * 
     */
    public function setGenerarVinculoConNotaCredito($vta_nota_credito){
        $inicial = 1;
        
        $array = array(
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID, 'valor' => $vta_nota_credito->getId()),
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_nota_creditos = EkuDeVtaNotaCredito::getOsxArray($array);
        foreach($eku_de_vta_nota_creditos as $eku_de_vta_nota_credito){
            $eku_de_vta_nota_credito->setActual(0);
            $eku_de_vta_nota_credito->save();
            
            $inicial = 0;
        }
        
        $eku_de_vta_nota_credito = new EkuDeVtaNotaCredito();
        $eku_de_vta_nota_credito->setEkuDeId($this->getId());
        $eku_de_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());
        $eku_de_vta_nota_credito->setInicial($inicial);
        $eku_de_vta_nota_credito->setActual(1);
        $eku_de_vta_nota_credito->setEstado(1);
        $eku_de_vta_nota_credito->save();
        
        return $eku_de_vta_nota_credito;
    }
    
    /**
     * A001 - Campos firmados del Documento Electrónico
     */
    static function setInicializarDEGrupoA001(){
        $eku_de = new EkuDe();
        $eku_de->setEkuDverfor(EkuDe::VERSION); // Versión del formato
        $eku_de->setEkuA002IdCdc('XXX-FALTA-COMPLETAR-XXX'); // Identificador del DE
        $eku_de->setEkuA003Ddvid('XXX-FALTA-COMPLETAR-XXX'); // Dígito verificador del identificador del DE
        $eku_de->setEkuA004Dfecfirma('XXX-FALTA-COMPLETAR-XXX'); // Fecha de la firma
        $eku_de->setEkuA005Dsisfact('1'); // Sistema de facturación
        
        $eku_de->setEstado(1);
        $eku_de->save();
        
        return $eku_de;
    }
    
    /**
     * B001 - Campos inherentes a la operación de DE
     */
    public function setInicializarDEGrupoB001(){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $eku_param_tipo_emision = EkuParamTipoEmision::getOxCodigo(EkuParamTipoEmision::TIPO_NORMAL);
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_b001_g_ope_d_e = new EkuDeB001GOpeDE();
        $eku_de_b001_g_ope_d_e->setEkuDeId($this->getId());
        
        $eku_de_b001_g_ope_d_e->setEkuB002Itipemi($eku_param_tipo_emision->getCodigoEku());
        $eku_de_b001_g_ope_d_e->setEkuB003Ddestipemi($eku_param_tipo_emision->getDescripcion());
        $eku_de_b001_g_ope_d_e->setEkuB004Dcodseg($this->getCodigoSeguridadDeCDC());
        //$eku_de_b001_g_ope_d_e->setEkuB005Dinfoemi('XXX-FALTA-COMPLETAR-XXX');
        //$eku_de_b001_g_ope_d_e->setEkuB006Dinfofisc('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_b001_g_ope_d_e->setObservacion('');
        $eku_de_b001_g_ope_d_e->setEstado(1);
        $eku_de_b001_g_ope_d_e->save();
        
        return $eku_de_b001_g_ope_d_e;
    }
    
    /**
     * C001 - Datos del timbrado
     */
    public function setInicializarDEGrupoC001($eku_param_tipo_de_codigo){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $eku_param_tipo_de = EkuParamTipoDe::getOxCodigo($eku_param_tipo_de_codigo);

        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $vta_punto_venta = $vta_comprobante->getVtaPuntoVenta();
        
        //$numero_punto_venta = $vta_factura->getNumeroPuntoVenta();
        //$numero_sucursal = $vta_factura->getNumeroSucursal();
        //$numero_comprobante = $vta_factura->getNumeroComprobante();
        $numero_punto_venta = $vta_comprobante->getNumeroPuntoVenta();
        $numero_sucursal = $vta_comprobante->getNumeroSucursal();
        $numero_comprobante = $vta_comprobante->getNumeroComprobante();

        $timbrado_numero = $vta_punto_venta->getNumeroTimbrado();
        $timbrado_fecha_inicio = $vta_punto_venta->getFechaInicioTimbrado();
                
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_c001_g_timb = new EkuDeC001GTimb();
        $eku_de_c001_g_timb->setEkuDeId($this->getId());
        
        $eku_de_c001_g_timb->setEkuC002Itide($eku_param_tipo_de->getCodigoEku());
        $eku_de_c001_g_timb->setEkuC003Ddestide($eku_param_tipo_de->getDescripcion());
        //$eku_de_c001_g_timb->setEkuC004Dnumtim(Ekuatia::getTimbradoNumero());
        $eku_de_c001_g_timb->setEkuC004Dnumtim($timbrado_numero);
        $eku_de_c001_g_timb->setEkuC005Dest($numero_sucursal);
        $eku_de_c001_g_timb->setEkuC006Dpunexp($numero_punto_venta);
        $eku_de_c001_g_timb->setEkuC007Dnumdoc($numero_comprobante);
        //$eku_de_c001_g_timb->setEkuC010Dserienum('XXX-FALTA-COMPLETAR-XXX');
        //$eku_de_c001_g_timb->setEkuC008Dfeinit(Ekuatia::getTimbradoFechaDesde());
        $eku_de_c001_g_timb->setEkuC008Dfeinit($timbrado_fecha_inicio);
        //$eku_de_c001_g_timb->setEkuC009Dfefint('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_c001_g_timb->setObservacion('');
        $eku_de_c001_g_timb->setEstado(1);
        $eku_de_c001_g_timb->save();
        
        return $eku_de_c001_g_timb;
    }

    /**
     * D001 - Campos generales del DE
     */
    public function setInicializarDEGrupoD001(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d001_g_dat_gral_ope = new EkuDeD001GDatGralOpe();
        $eku_de_d001_g_dat_gral_ope->setEkuDeId($this->getId());
        
        $eku_de_d001_g_dat_gral_ope->setEkuD002Dfeemide(Gral::getFechaHoraDBToSIFEN($vta_comprobante->getCreado()));

        $eku_de_d001_g_dat_gral_ope->setObservacion('');
        $eku_de_d001_g_dat_gral_ope->setEstado(1);
        $eku_de_d001_g_dat_gral_ope->save();
        
        return $eku_de_d001_g_dat_gral_ope;
    }
    
    /**
     * D010 - Campos inherentes a la operación comercial
     */
    public function setInicializarDEGrupoD010($eku_param_tipo_de_codigo){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $eku_param_tipo_transaccion = EkuParamTipoTransaccion::getOxCodigo(EkuParamTipoTransaccion::TIPO_VENTA_DE_MERCADERIA);
        $eku_param_tipo_iva = EkuParamTipoImpuesto::getOxCodigo(EkuParamTipoImpuesto::TIPO_IVA);
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuDeId($this->getId());
        
        if($eku_param_tipo_de_codigo == EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA){
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD011Itiptra($eku_param_tipo_transaccion->getCodigoEku());
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD012Ddestiptra($eku_param_tipo_transaccion->getDescripcion());
        }
        
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD013Itimp($eku_param_tipo_iva->getCodigoEku());
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD014Ddestimp($eku_param_tipo_iva->getDescripcion());
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD015Cmoneope('PYG');
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD016Ddesmoneope('Guarani');
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD017Dcondticam('');
        //$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD018Dticam('');
        //$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD019Icondant('');
        //$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD020Ddescondant('');

        $eku_de_d010_g_dat_gral_ope_g_ope_com->setObservacion('');
        $eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(1);
        $eku_de_d010_g_dat_gral_ope_g_ope_com->save();
        
        return $eku_de_d010_g_dat_gral_ope_g_ope_com;
    }
    
    /**
     * D100 - Grupo de campos que identifican al emisor
     */
    public function setInicializarDEGrupoD100(){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $eku_param_tipo_contribuyente = EkuParamTipoContribuyente::getOxCodigo(EkuParamTipoContribuyente::TIPO_PERSONA_JURIDICA);
                
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $vta_punto_venta = $vta_comprobante->getVtaPuntoVenta();
        
        //$gral_sucursal = $vta_comprobante->getGralSucursal();
        $gral_empresa = $vta_punto_venta->getGralEmpresa();
        
        $eku_s119Ddensuc = "";
        if($gral_sucursal){
            $eku_s119Ddensuc = 'Suc '.$gral_sucursal->getDescripcion();            
        }
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------        
        $eku_d111_cDepEmi = $vta_punto_venta->getGeoLocalidad()->getGeoProvincia()->getCodigoEku();
        $eku_d112_dDesDepEmi = $vta_punto_venta->getGeoLocalidad()->getGeoProvincia()->getDescripcion();
        $eku_d113_cDisEmi = $vta_punto_venta->getGeoLocalidad()->getCodigoDistritoEku();
        //$eku_d114_dDesDisEmi = $vta_punto_venta->getGeoLocalidad()->getCodigoDistritoEkuDescripcion();
        $eku_d115_cCiuEmi = $vta_punto_venta->getGeoLocalidad()->getCodigoEku();
        $eku_d116_dDesCiuEmi = $vta_punto_venta->getGeoLocalidad()->getDescripcion();
        
        // ---------------------------------------------------------------------
        // se inicializa objeto
        // ---------------------------------------------------------------------
        $eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuDeId($this->getId());
        
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD101Drucem($gral_empresa->getRucNumero());
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD102Ddvemi($gral_empresa->getRucDV());
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD103Itipcont($eku_param_tipo_contribuyente->getCodigoEku());
        //$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD104Ctipreg('8'); // dinamizar
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD105Dnomemi($gral_empresa->getRazonSocial());
        //$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD106Dnomfanemi($gral_empresa->getDescripcion());
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD107Ddiremi($vta_punto_venta->getDomicilioFiscal());
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD108Dnumcas('0'); // dinamizar
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD109Dcompdir1('-'); // desestimar
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD110Dcompdir2(''); // desestimar
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD111Cdepemi($eku_d111_cDepEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD112Ddesdepemi($eku_d112_dDesDepEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD113Cdisemi($eku_d113_cDisEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD114Ddesdisemi($eku_d114_dDesDisEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD115Cciuemi($eku_d115_cCiuEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD116Ddesciuemi($eku_d116_dDesCiuEmi);
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD117Dtelemi('0975626090'); // $gral_empresa->getTelefono()
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD118Demaile($gral_empresa->getEmail());
        $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD119Ddensuc($eku_s119Ddensuc);

        $eku_de_d100_g_dat_gral_ope_g_emis->setObservacion('');
        $eku_de_d100_g_dat_gral_ope_g_emis->setEstado(1);
        $eku_de_d100_g_dat_gral_ope_g_emis->save();
        
        return $eku_de_d100_g_dat_gral_ope_g_emis;
    }
    
    /**
     * D130 - Campos que describen la actividad económica del emisor
     */
    public function setInicializarDEGrupoD130(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = new EkuDeD130GDatGralOpeGEmisGActEco();
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuDeId($this->getId());
        
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuD131Cacteco('17090'); // dinamizar
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuD132Ddesacteco('FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL Y CARTÓN'); // dinamizar

        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setObservacion('');
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEstado(1);
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->save();

        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = new EkuDeD130GDatGralOpeGEmisGActEco();
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuDeId($this->getId());
        
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuD131Cacteco('49231'); // dinamizar
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEkuD132Ddesacteco('TRANSPORTE TERRESTRE LOCAL DE CARGA'); // dinamizar

        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setObservacion('');
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEstado(1);
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->save();
        
        return $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco;
    }    

    /**
     * D140 - Campos que identifican al responsable de la generación del DE
     */
    public function setInicializarDEGrupoD140(){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $eku_param_tipo_documento = EkuParamTipoDocumento::getOxCodigo(EkuParamTipoDocumento::TIPO_CEDULA_PARAGUAYA);
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e = new EkuDeD140GDatGralOpeGRespDE();
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuDeId($this->getId());
        
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuD141Itipidrespde($eku_param_tipo_documento->getCodigoEku());
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuD142Ddtipidrespde($eku_param_tipo_documento->getDescripcion());
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuD143Dnumidrespde('44444401-7');
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuD144Dnomrespde('FUNCIONARIO PREDETERMINADO');
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEkuD145Dcarrespde('Cajero');

        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setObservacion('');
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->setEstado(1);
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e->save();
        
        return $eku_de_d140_g_dat_gral_ope_g_resp_d_e;
    }    

    /**
     * D200 - Campos que identifican al receptor del Documento Electrónico DE
     */
    public function setInicializarDEGrupoD200(){
        
        // ---------------------------------------------------------------------
        // se inicializan objetos param
        // ---------------------------------------------------------------------
        $geo_pais_paraguay = GeoPais::getOxCodigoAlpha3(GeoPais::CODIGO_ALPHA3_PARAGUAY);
        $eku_param_tipo_documento = EkuParamTipoDocumento::getOxCodigo(EkuParamTipoDocumento::TIPO_CEDULA_PARAGUAYA);
        $eku_param_tipo_operacion_b2c = EkuParamTipoOperacion::getOxCodigo(EkuParamTipoOperacion::TIPO_B2C);
        $eku_param_tipo_naturaleza_receptor_contribuyente = EkuParamTipoNaturalezaReceptor::getOxCodigo(EkuParamTipoNaturalezaReceptor::TIPO_CONTRIBUYENTE);
        $eku_param_tipo_naturaleza_receptor_no_contribuyente = EkuParamTipoNaturalezaReceptor::getOxCodigo(EkuParamTipoNaturalezaReceptor::TIPO_NO_CONTRIBUYENTE);
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $cli_cliente = $vta_comprobante->getCliCliente();

        if($cli_cliente->getId() != 'null'){

            $gral_tipo_personeria = $cli_cliente->getGralTipoPersoneria();
            $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
            $gral_tipo_documento = $cli_cliente->getGralTipoDocumento();
            $cli_tipo_cliente = $cli_cliente->getCliTipoCliente();
            $geo_pais = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais();

            $eku_param_tipo_naturaleza_receptor = $gral_condicion_iva->getEkuParamTipoNaturalezaReceptorXEkuParamTipoNaturalezaReceptorGralCondicionIva();
            $eku_param_tipo_documento = $gral_tipo_documento->getEkuParamTipoDocumentoXEkuParamTipoDocumentoGralTipoDocumento();
            $eku_param_tipo_contribuyente = $gral_tipo_personeria->getEkuParamTipoContribuyenteXEkuParamTipoContribuyenteGralTipoPersoneria();
            $eku_param_tipo_operacion = $cli_tipo_cliente->getEkuParamTipoOperacionXEkuParamTipoOperacionCliTipoCliente();
            
            /*
            switch ($gral_condicion_iva->getCodigo()){
                case GralCondicionIva::TIPO_IVA_INSCRIPTO:
                case GralCondicionIva::TIPO_EXENTO:
                    //$eku_d201_iNatRec = $eku_param_tipo_naturaleza_receptor_contribuyente->getCodigoEku();
                    $eku_d208_iTipIDRec = ""; // no informar
                    $eku_d209_dDTipIDRec = ""; // no informar
                    break;
                case GralCondicionIva::TIPO_CONSUMIDOR_FINAL:
                    //$eku_d201_iNatRec = $eku_param_tipo_naturaleza_receptor_no_contribuyente->getCodigoEku();
                    if($eku_param_tipo_documento){
                        $eku_d208_iTipIDRec = $eku_param_tipo_documento->getCodigoEku();
                        $eku_d209_dDTipIDRec = $eku_param_tipo_documento->getDescripcion();
                    }
                    break;
            }
            */

            if($eku_param_tipo_naturaleza_receptor){
                $eku_d201_iNatRec = $eku_param_tipo_naturaleza_receptor->getCodigoEku();                
            }
            if($eku_param_tipo_operacion){
                $eku_d202_iTiOpe = $eku_param_tipo_operacion->getCodigoEku();
            }
            
            // -----------------------------------------------------------------
            // 1 - Contribuyente
            // -----------------------------------------------------------------
            if($eku_d201_iNatRec == 1){
                
                if($eku_param_tipo_contribuyente){
                    $eku_d205_iTiContRec = $eku_param_tipo_contribuyente->getCodigoEku();
                }
                
                $eku_d206_dRucRec = $cli_cliente->getRucNumero();
                $eku_d207_dDVRec = $cli_cliente->getRucDV();
                
                $eku_d208_iTipIDRec = ""; // no informar
                $eku_d209_dDTipIDRec = ""; // no informar
                $eku_d210_dnumIDRec = ""; // no informar
                
            }
            
            // -----------------------------------------------------------------
            // 2 - No Contribuyente
            // -----------------------------------------------------------------
            if($eku_d201_iNatRec == 2){
                
                $eku_d205_iTiContRec = ""; // no informar
                $eku_d206_dRucRec = ""; // no informar
                $eku_d207_dDVRec = ""; // no informar
                
                if($eku_param_tipo_documento){
                    $eku_d208_iTipIDRec = $eku_param_tipo_documento->getCodigoEku();
                    $eku_d209_dDTipIDRec = $eku_param_tipo_documento->getDescripcion();
                }
                $eku_d210_dnumIDRec = $cli_cliente->getCuit();                
            }
            
            // -----------------------------------------------------------------
            // SI es cliente
            // -----------------------------------------------------------------
            $eku_d203_cPaisRec = $geo_pais->getCodigoAlpha3();
            $eku_d203_dDesPaisRe = $geo_pais->getDescripcion();
            
            $eku_d211_dNomRec = $cli_cliente->getRazonSocial();
            $eku_d212_dNomFanRec = $cli_cliente->getDescripcion();
            $eku_d213_dDirRec = $cli_cliente->getDomicilioLegal();
            $eku_d216_dEmailRec = $cli_cliente->getEmailPrincipalUnico();
            $eku_d217_dCodCliente = $cli_cliente->getCodigoCliente();
            $eku_d218_dNumCasRec = $cli_cliente->getNumeroCasa();
            //$eku_d219_cDepRec = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getCodigoEku();
            //$eku_d220_dDesDepRec = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion();
            //$eku_d221_cDisRec = $cli_cliente->getGeoLocalidad()->getCodigoDistritoEku();
            //$eku_d222_dDesDisRec = $cli_cliente->getGeoLocalidad()->getCodigoDistritoEkuDescripcion();
            //$eku_d223_cCiuRec = $cli_cliente->getGeoLocalidad()->getCodigoEku();
            //$eku_d224_dDesCiuRec = $cli_cliente->getGeoLocalidad()->getDescripcion();
            $eku_d214_dTelRec = $cli_cliente->getTelefono();
            $eku_d215_dCelRec = $cli_cliente->getTelefonoWhatsapp();
            
        }else{
            $gral_tipo_documento = $vta_comprobante->getGralTipoDocumento();
            $eku_param_tipo_documento = $gral_tipo_documento->getEkuParamTipoDocumentoXEkuParamTipoDocumentoGralTipoDocumento();
            if(!$eku_param_tipo_documento){
                $eku_param_tipo_documento = EkuParamTipoDocumento::getOxCodigo(EkuParamTipoDocumento::TIPO_INNOMINADO);
            }
            
            // -----------------------------------------------------------------
            // NO es cliente
            // -----------------------------------------------------------------
            $eku_d201_iNatRec = $eku_param_tipo_naturaleza_receptor_no_contribuyente->getCodigoEku();
            $eku_d202_iTiOpe = $eku_param_tipo_operacion_b2c->getCodigoEku();
            $eku_d203_cPaisRec = $geo_pais_paraguay->getCodigoAlpha3();
            $eku_d203_dDesPaisRe = $geo_pais_paraguay->getDescripcion();
            $eku_d205_iTiContRec = ""; // no informar
            $eku_d206_dRucRec = ""; // no informar
            $eku_d207_dDVRec = ""; // no informar
            $eku_d208_iTipIDRec = $eku_param_tipo_documento->getCodigoEku();
            $eku_d209_dDTipIDRec = $eku_param_tipo_documento->getDescripcion();
            
            if($eku_param_tipo_documento->getCodigo() == EkuParamTipoDocumento::TIPO_INNOMINADO){
                $eku_d210_dnumIDRec = '00000000000000000000';
                $eku_d211_dNomRec = 'Sin Nombre';
            }else{
                $eku_d210_dnumIDRec = $vta_comprobante->getPersonaDocumento();
                $eku_d211_dNomRec = $vta_comprobante->getPersonaDescripcion();
            }
            
            $eku_d212_dNomFanRec = ""; // no informar
            $eku_d213_dDirRec = ""; // no informar
            $eku_d218_dNumCasRec = ""; // no informar
            $eku_d219_cDepRec = ""; // no informar
            $eku_d220_dDesDepRec = ""; // no informar
            $eku_d221_cDisRec = ""; // no informar
            $eku_d222_dDesDisRec = ""; // no informar
            $eku_d223_cCiuRec = ""; // no informar
            $eku_d224_dDesCiuRec = ""; // no informar
            $eku_d214_dTelRec = ""; // no informar
            $eku_d215_dCelRec = ""; // no informar
            
        }
        
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuDeId($this->getId());
        
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD201Inatrec($eku_d201_iNatRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD202Itiope($eku_d202_iTiOpe);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD203Cpaisrec($eku_d203_cPaisRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD204Ddespaisre($eku_d203_dDesPaisRe);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD205Iticontrec($eku_d205_iTiContRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD206Drucrec($eku_d206_dRucRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD207Ddvrec($eku_d207_dDVRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD208Itipidrec($eku_d208_iTipIDRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD209Ddtipidrec($eku_d209_dDTipIDRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD210Dnumidrec($eku_d210_dnumIDRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD211Dnomrec($eku_d211_dNomRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD212Dnomfanrec($eku_d212_dNomFanRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD213Ddirrec($eku_d213_dDirRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD218Dnumcasrec($eku_d218_dNumCasRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD219Cdeprec($eku_d219_cDepRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD220Ddesdeprec($eku_d220_dDesDepRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD221Cdisrec($eku_d221_cDisRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD222Ddesdisrec($eku_d222_dDesDisRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD223Cciurec($eku_d223_cCiuRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD224Ddesciurec($eku_d224_dDesCiuRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD214Dtelrec($eku_d214_dTelRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD215Dcelrec($eku_d215_dCelRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD216Demailrec($eku_d216_dEmailRec);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD217Dcodcliente($eku_d217_dCodCliente);

        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setObservacion('');
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(1);
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->save();
        
        return $eku_de_d200_g_dat_gral_ope_g_dat_rec;
    }   
    
    /**
     * E010 - Campos que componen la Factura Electrónica FE
     */
    public function setInicializarDEGrupoE010(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $cli_cliente = $vta_comprobante->getCliCliente();
        $gral_escenario = $vta_comprobante->getGralEscenario();
        
        $eku_param_tipo_presencia = $gral_escenario->getEkuParamTipoPresenciaXEkuParamTipoPresenciaGralEscenario();
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_tipo_presencia){
            $eku_de011_iIndPres = $eku_param_tipo_presencia->getCodigoEku();
            $eku_de012_dDesIndPres = $eku_param_tipo_presencia->getDescripcion();
        }
        $eku_de013_dFecEmNR = ""; // no informar
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e010_g_dtip_d_e_g_cam_f_e = new EkuDeE010GDtipDEGCamFE();
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setEkuDeId($this->getId());
        
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setEkuE011Iindpres($eku_de011_iIndPres);
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setEkuE012Ddesindpres($eku_de012_dDesIndPres);
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setEkuE013Dfecemnr($eku_de013_dFecEmNR);

        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setObservacion('');
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->setEstado(1);
        $eku_de_e010_g_dtip_d_e_g_cam_f_e->save();
        
        return $eku_de_e010_g_dtip_d_e_g_cam_f_e;
    }    

    /**
     * E020 - Campos de informaciones de Compras Públicas
     */
    public function setInicializarDEGrupoE020(){ // FALTA PROGRAMAR COMPRAS PUBLICAS
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e020_g_dtip_d_e_g_comp_pub = new EkuDeE020GDtipDEGCompPub();
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuDeId($this->getId());
        
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuE021Dmodcont('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuE022Dentcont('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuE023Danocont('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuE024Dseccont('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEkuE025Dfecodcont('XXX-FALTA-COMPLETAR-XXX');
        
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setObservacion('');
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEstado(1);
        $eku_de_e020_g_dtip_d_e_g_comp_pub->save();
        
        return $eku_de_e020_g_dtip_d_e_g_comp_pub;
    }    

    /**
     * E300 - Campos que componen la Autofactura Electrónica
     */
    public function setInicializarDEGrupoE300(){ // FALTA PROGRAMAR AUTOFACTURA
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuDeId($this->getId());
        
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE301Inatven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE302Ddesnatven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE304Itipidven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE305Ddtipidven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE306Dnumidven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE307Dnomven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE308Ddirven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE309Dnumcasven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE310Cdepven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE311Ddesdepven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE312Cdisven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE313Ddesdisven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE314Cciuven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE315Ddesciuven('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE316Ddirprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE317Cdepprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE318Ddesdepprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE319Cdisprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE320Ddesdisprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE321Cciuprov('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE322Ddesciuprov('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setObservacion('');
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(1);
        $eku_de_e300_g_dtip_d_e_g_cam_a_e->save();
        
        return $eku_de_e300_g_dtip_d_e_g_cam_a_e;
    }  
    
    /**
     * E400 - Campos que componen la Nota de Crédito/Débito Electrónica NCE-NDE
     */
    public function setInicializarDEGrupoE400(){ // FALTA PROGRAMAR NCE-NDE
        
        $eku_param_tipo_motivo_emision_credito_debito = EkuParamTipoMotivoEmisionCreditoDebito::getOxCodigo(EkuParamTipoMotivoEmisionCreditoDebito::TIPO_DEVOLUCION_Y_AJUSTE_DE_PRECIOS);
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = new EkuDeE400GDtipDEGCamNCDE();
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuDeId($this->getId());
        
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE401Imotemi($eku_param_tipo_motivo_emision_credito_debito->getCodigoEku());
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEkuE402Ddesmotemi($eku_param_tipo_motivo_emision_credito_debito->getDescripcion());

        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setObservacion('');
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->setEstado(1);
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->save();
        
        return $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e;
    }  
    
    /**
     * E500 - Campos que componen la Nota de Remisión Electrónica NRE
     */
    public function setInicializarDEGrupoE500(){ // FALTA PROGRAMAR NRE
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = new EkuDeE500GDtipDEGCamNRE();
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuDeId($this->getId());
        
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE501Imoteminr('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE502Ddesmoteminr('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE503Irespeminr('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE504Ddesrespeminr('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE505Dkmr('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE506Dfecem('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setObservacion('');
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEstado(1);
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->save();
        
        return $eku_de_e500_g_dtip_d_e_g_cam_n_r_e;
    }  
    
    /**
     * E600 - Campos que describen la condición de la operación
     */
    public function setInicializarDEGrupoE600(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        
        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();

        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_tipo_condicion_operacion){
            $eku_e601_iCondOpe = $eku_param_tipo_condicion_operacion->getCodigoEku();
            $eku_e601_dDCondOpe = $eku_param_tipo_condicion_operacion->getDescripcion();
        }
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e600_g_dtip_d_e_g_cam_cond = new EkuDeE600GDtipDEGCamCond();
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEkuDeId($this->getId());
        
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEkuE601Icondope($eku_e601_iCondOpe);
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEkuE602Ddcondope($eku_e601_dDCondOpe);

        $eku_de_e600_g_dtip_d_e_g_cam_cond->setObservacion('');
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEstado(1);
        $eku_de_e600_g_dtip_d_e_g_cam_cond->save();
        
        return $eku_de_e600_g_dtip_d_e_g_cam_cond;
    }  
    
    /**
     * E605 - Campos que describen la forma de pago de la operación al contado o del monto de la entrega inicial
     */
    public function setInicializarDEGrupoE605(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        
        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();
        $eku_param_tipo_pago = $gral_fp_forma_pago->getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago();
        
        $vta_comprobante_importe = $vta_comprobante->getImporteTotal();
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_tipo_pago){
            $eku_e606_iTiPago = $eku_param_tipo_pago->getCodigoEku();
            $eku_e607_dDesTiPag = $eku_param_tipo_pago->getDescripcion();
        }
        $eku_e608_dMonTiPag = Gral::completar_decimales(Gral::rnd($vta_comprobante_importe, 0), 4); // se redondea y agregan 4 ceros
        $eku_e609_cMoneTiPag = 'PYG';
        $eku_e610_dDMoneTiPag = 'Guarani';
        $eku_e611_dTiCamTiPag = ''; // ni informar si moneda = PYG
        
        // ---------------------------------------------------------------------
        // solo si es CONTADO
        // ---------------------------------------------------------------------
        if($eku_param_tipo_condicion_operacion->getCodigo() == EkuParamTipoCondicionOperacion::TIPO_CONTADO){
            // ---------------------------------------------------------------------
            // se inicializa objeto
            // ---------------------------------------------------------------------
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = new EkuDeE605GDtipDEGCamCondGPaConEIni();
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuDeId($this->getId());

            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE606Itipago($eku_e606_iTiPago);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE607Ddestipag($eku_e607_dDesTiPag);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE608Dmontipag($eku_e608_dMonTiPag);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE609Cmonetipag($eku_e609_cMoneTiPag);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE610Ddmonetipag($eku_e610_dDMoneTiPag);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEkuE611Dticamtipa($eku_e611_dTiCamTiPag);

            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setObservacion('');
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEstado(1);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->save();

            return $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini;
        }
        return false;
    }  
    
    /**
     * E620 - Campos que describen el pago o entrega inicial de la operación con tarjeta de crédito/débito
     */
    public function setInicializarDEGrupoE620(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();

        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();
        $eku_param_tipo_pago = $gral_fp_forma_pago->getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago();
        $eku_param_denominacion_tarjeta = $gral_fp_medio_pago->getEkuParamDenominacionTarjetaXEkuParamDenominacionTarjetaGralFpMedioPago();
               
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_denominacion_tarjeta){
            $eku_de_e621_iDenTarj = $eku_param_denominacion_tarjeta->getCodigoEku();
            $eku_de_e622_dDesDenTarj = $eku_param_denominacion_tarjeta->getDescripcion();
        }
        $eku_de_e626_iForProPa = "1"; // HARDCODEADO 1= POS        
        
        // ---------------------------------------------------------------------
        // solo si es CONTADO
        // ---------------------------------------------------------------------
        if($eku_param_tipo_condicion_operacion->getCodigo() == EkuParamTipoCondicionOperacion::TIPO_CONTADO){
            // ---------------------------------------------------------------------
            // solo si es PAGO CON TARJETA (CREDITO O DEBITO)
            // ---------------------------------------------------------------------
            if($eku_param_tipo_pago->getCodigo() == EkuParamTipoPago::TIPO_TARJETA_DE_CREDITO 
                    || $eku_param_tipo_pago->getCodigo() == EkuParamTipoPago::TIPO_TARJETA_DE_DEBITO){
                // ---------------------------------------------------------------------
                // se inicializa objeto
                // ---------------------------------------------------------------------
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuDeId($this->getId());

                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE621Identarj($eku_de_e621_iDenTarj);
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE622Ddesdentarj($eku_de_e622_dDesDenTarj);
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE623Drsprotar('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE624Drucprotar('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE625Ddvprotar('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE626Iforpropa($eku_de_e626_iForProPa);
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE627Dcodauope('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE628Dnomtit('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE629Dnumtarj('');

                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setObservacion('');
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(1);
                $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->save();

                return $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d;
            }
        }
        return false;
    }  
    
    /**
     * E630 - Campos que describen el pago o entrega inicial de la operación con cheque
     */
    public function setInicializarDEGrupoE630(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        
        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();
        $eku_param_tipo_pago = $gral_fp_forma_pago->getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago();
        
        
        // ---------------------------------------------------------------------
        // solo si es CONTADO
        // ---------------------------------------------------------------------
        if($eku_param_tipo_condicion_operacion->getCodigo() == EkuParamTipoCondicionOperacion::TIPO_CONTADO){
            
            // ---------------------------------------------------------------------
            // solo si es PAGO CON TARJETA (CREDITO O DEBITO)
            // ---------------------------------------------------------------------
            if($eku_param_tipo_pago->getCodigo() == EkuParamTipoPago::TIPO_CHEQUE){
        
                // ---------------------------------------------------------------------
                // se inicializa objeto        
                // ---------------------------------------------------------------------
                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = new EkuDeE630GDtipDEGCamCondGPagCheq();
                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEkuDeId($this->getId());

                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEkuE631Dnumcheq('XXX-FALTA-COMPLETAR-XXX');
                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEkuE632Dbcoemi('XXX-FALTA-COMPLETAR-XXX');

                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setObservacion('');
                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEstado(1);
                $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->save();
                
                return $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq;
            }
        }
        return false;
    }  
    
    /**
     * E640 - Campos que describen la operación a crédito
     */
    public function setInicializarDEGrupoE640(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        
        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();
        $eku_param_tipo_pago = $gral_fp_forma_pago->getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago();
        $eku_param_condicion_credito = $gral_fp_medio_pago->getEkuParamCondicionCreditoXEkuParamCondicionCreditoGralFpMedioPago();
        //Gral::prr($gral_fp_medio_pago);
        //Gral::prr($eku_param_condicion_credito);
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_condicion_credito){
            $eku_de_e641_iCondCred = $eku_param_condicion_credito->getCodigoEku();
            $eku_de_e642_dDCondCred = $eku_param_condicion_credito->getDescripcion();
            
            switch ($eku_param_condicion_credito->getCodigo()){
                case EkuParamCondicionCredito::CONDICION_PLAZO:
                    $eku_de_e643_dPlazoCre = $gral_fp_cuota->getDescripcion();
                    break;
                case EkuParamCondicionCredito::CONDICION_CUOTA:
                    $eku_de_e644_dCuotas = $gral_fp_cuota->getCantidad();
                    break;
            }
            $eku_de_e645_dMonEnt = '';
        
            // ---------------------------------------------------------------------
            // solo si es CREDITO
            // ---------------------------------------------------------------------
            if($eku_param_tipo_condicion_operacion->getCodigo() == EkuParamTipoCondicionOperacion::TIPO_CREDITO){

                // ---------------------------------------------------------------------
                // se inicializa objeto        
                // ---------------------------------------------------------------------
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = new EkuDeE640GDtipDEGCamCondGPagCred();
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuDeId($this->getId());

                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE641Icondcred($eku_de_e641_iCondCred);
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE642Ddcondcred($eku_de_e642_dDCondCred);
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE643Dplazocre($eku_de_e643_dPlazoCre);
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE644Dcuotas($eku_de_e644_dCuotas);
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEkuE645Dmonent($eku_de_e645_dMonEnt);

                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setObservacion('');
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->setEstado(1);
                $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->save();
                //Gral::prr($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred);

                return $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred;
            }
        }
        return false;
    }  
    
    /**
     * E650 - Campos que describen las cuotas
     */
    public function setInicializarDEGrupoE650(){
                
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
        $gral_fp_cuota = $vta_comprobante->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        
        $eku_param_tipo_condicion_operacion = $gral_fp_forma_pago->getEkuParamTipoCondicionOperacionXEkuParamTipoCondicionOperacionGralFpFormaPago();
        $eku_param_tipo_pago = $gral_fp_forma_pago->getEkuParamTipoPagoXEkuParamTipoPagoGralFpFormaPago();
        $eku_param_condicion_credito = $gral_fp_medio_pago->getEkuParamCondicionCreditoXEkuParamCondicionCreditoGralFpMedioPago();
        
        $vta_comprobante_importe = $vta_comprobante->getImporteTotal();
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_condicion_credito){
            $eku_de_e653_cMoneCuo = "PYG";
            $eku_de_e654_dDMoneCuo = "Guarani";
            $eku_de_e651_dMonCuota = Gral::completar_decimales(Gral::rnd($vta_comprobante_importe / $gral_fp_cuota->getCantidad(), 0), 4); // se redondea y agregan 4 ceros            
            $eku_de_e652_dVencCuo = ""; // no informar, no tenemos plan de cuotas aun en gexteno
        }
        
        // ---------------------------------------------------------------------
        // solo si es CREDITO
        // ---------------------------------------------------------------------
        if($eku_param_tipo_condicion_operacion->getCodigo() == EkuParamTipoCondicionOperacion::TIPO_CREDITO){

            
            // ---------------------------------------------------------------------
            // solo si es PAGO en CUOTAS
            // ---------------------------------------------------------------------
            if($eku_param_condicion_credito && $eku_param_condicion_credito->getCodigo() == EkuParamCondicionCredito::CONDICION_CUOTA){

                // ---------------------------------------------------------------------
                // se inicializa objeto        
                // ---------------------------------------------------------------------
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = new EkuDeE650GDtipDEGCamCondGPagCredGCuotas();
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuDeId($this->getId());

                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE653Cmonecuo($eku_de_e653_cMoneCuo);
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE654Ddmonecuo($eku_de_e654_dDMoneCuo);
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE651Dmoncuota($eku_de_e651_dMonCuota);
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE652Dvenccuo($eku_de_e652_dVencCuo);

                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setObservacion('');
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEstado(1);
                $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->save();

                return $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas;
            }
        }
        return true;
    }      
        
    /**
     * E700 - Items
     */
    public function setInicializarDEGrupoE700Full(){
        
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura();
        $vta_comprobante = $this->getObjComprobanteVinculado();
        
        
        $arr_items = $vta_comprobante->getArrItemsFormateadoParaSIFEN();
        //Gral::prr($arr_items);
        //exit;
        
        
        
        
        if($vta_comprobante){

            // -----------------------------------------------------------------
            // se recorre coleccion de ordenes de venta de la factura
            // -----------------------------------------------------------------
            //$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentasHabilitados();
            //foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){
            foreach($arr_items as $arr_item){
                
                // ---------------------------------------------------------
                // E700 - Cada Item
                // ---------------------------------------------------------
                //$eku_de_e700_g_dtip_d_e_g_cam_item = $this->setInicializarDEGrupoE700_OLD($vta_factura_vta_orden_venta);
                $eku_de_e700_g_dtip_d_e_g_cam_item = $this->setInicializarDEGrupoE700($arr_item);
                if($eku_de_e700_g_dtip_d_e_g_cam_item){
                    
                    // ---------------------------------------------------------
                    // E720 - Campos que describen el precio, tipo de cambio y valor total de la operación por ítem
                    // ---------------------------------------------------------
                    //$this->setInicializarDEGrupoE720_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta);
                    $this->setInicializarDEGrupoE720($eku_de_e700_g_dtip_d_e_g_cam_item, $arr_item);
                    
                    // ---------------------------------------------------------
                    // E730 - Campos que describen el IVA de la operación por ítem
                    // ---------------------------------------------------------
                    //$this->setInicializarDEGrupoE730_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta);
                    $this->setInicializarDEGrupoE730($eku_de_e700_g_dtip_d_e_g_cam_item, $arr_item);
                    
                    // ---------------------------------------------------------
                    // E750 - Grupo de rastreo de la mercadería
                    // ---------------------------------------------------------
                    //$this->setInicializarDEGrupoE750_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta);
                    
                    // ---------------------------------------------------------
                    // E770 - Sector de automotores nuevos y usados
                    // ---------------------------------------------------------
                    //$this->setInicializarDEGrupoE770_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta);
                }
            }
        }
        
        return $eku_de_e700_g_dtip_d_e_g_cam_item;
    }
    
    /**
     * E700 - Cada Item
     */
    public function setInicializarDEGrupoE700($arr_item){
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        $eku_de_e701_dCodInt = $arr_item['codigo_interno'];
        $eku_de_e702_dParAranc = ""; // no informar (solo para B2G)
        $eku_de_e703_dNCM = ""; // no informar (solo para B2G)
        $eku_de_e704_dDncpG = ""; // no informar (solo para B2G)
        $eku_de_e705_dDncpE = ""; // no informar (solo para B2G)
        $eku_de_e706_dGtin = $arr_item['codigo_barra'];
        $eku_de_e707_dGtinPq = ""; // no informar
        $eku_de_e708_dDesProSer = $arr_item['descripcion'];
        
        if(trim($arr_item['eku_param_unidad_medida_codigo']) != ""){
            $eku_de_e709_cUniMed = $arr_item['eku_param_unidad_medida_codigo'];
            $eku_de_e710_dDesUniMed = $arr_item['eku_param_unidad_medida_representacion'];
        }
        $eku_de_e711_dCantProSer = $arr_item['cantidad'];
        
        $eku_de_e712_cPaisOrig = ""; // no informar
        $eku_de_e713_dDesPaisOrig = ""; // no informar
        $eku_de_e714_dInfItem = ""; // no informar
        $eku_de_e715_cRelMerc = ""; // no informar
        $eku_de_e716_dDesRelMerc = ""; // no informar
        $eku_de_e717_dCanQuiMer = ""; // no informar
        $eku_de_e718_dPorQuiMer = ""; // no informar
        $eku_de_e719_dCDCAnticipo = ""; // no informar
        
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId($this->getId());
        
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint($eku_de_e701_dCodInt);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc($eku_de_e702_dParAranc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm($eku_de_e703_dNCM);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg($eku_de_e704_dDncpG);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe($eku_de_e705_dDncpE);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin($eku_de_e706_dGtin);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq($eku_de_e707_dGtinPq);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser($eku_de_e708_dDesProSer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed($eku_de_e709_cUniMed);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed($eku_de_e710_dDesUniMed);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser($eku_de_e711_dCantProSer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig($eku_de_e712_cPaisOrig);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig($eku_de_e713_dDesPaisOrig);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem($eku_de_e714_dInfItem);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc($eku_de_e715_cRelMerc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc($eku_de_e716_dDesRelMerc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer($eku_de_e717_dCanQuiMer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer($eku_de_e718_dPorQuiMer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo($eku_de_e719_dCDCAnticipo);

        $eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion('');
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(1);
        $eku_de_e700_g_dtip_d_e_g_cam_item->save();
        
        return $eku_de_e700_g_dtip_d_e_g_cam_item;
    }    
    
    /**
     * E700 - Cada Item
     */
    public function setInicializarDEGrupoE700_OLD($vta_factura_vta_orden_venta){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
        $ins_insumo = $vta_orden_venta->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        
        $eku_param_unidad_medida = $ins_unidad_medida->getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida();
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        $eku_de_e701_dCodInt = $ins_insumo->getCodigoInterno();
        $eku_de_e702_dParAranc = ""; // no informar (solo para B2G)
        $eku_de_e703_dNCM = ""; // no informar (solo para B2G)
        $eku_de_e704_dDncpG = ""; // no informar (solo para B2G)
        $eku_de_e705_dDncpE = ""; // no informar (solo para B2G)
        $eku_de_e706_dGtin = $ins_insumo->getCodigoBarra();
        $eku_de_e707_dGtinPq = ""; // no informar
        $eku_de_e708_dDesProSer = $vta_orden_venta->getDescripcion();
        
        if($eku_param_unidad_medida){
            $eku_de_e709_cUniMed = $eku_param_unidad_medida->getCodigoEku();
            $eku_de_e710_dDesUniMed = $eku_param_unidad_medida->getRepresentacion();
        }
        $eku_de_e711_dCantProSer = $vta_factura_vta_orden_venta->getCantidad();
        
        $eku_de_e712_cPaisOrig = ""; // no informar
        $eku_de_e713_dDesPaisOrig = ""; // no informar
        $eku_de_e714_dInfItem = ""; // no informar
        $eku_de_e715_cRelMerc = ""; // no informar
        $eku_de_e716_dDesRelMerc = ""; // no informar
        $eku_de_e717_dCanQuiMer = ""; // no informar
        $eku_de_e718_dPorQuiMer = ""; // no informar
        $eku_de_e719_dCDCAnticipo = ""; // no informar
        
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId($this->getId());
        
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint($eku_de_e701_dCodInt);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc($eku_de_e702_dParAranc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm($eku_de_e703_dNCM);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg($eku_de_e704_dDncpG);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe($eku_de_e705_dDncpE);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin($eku_de_e706_dGtin);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq($eku_de_e707_dGtinPq);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser($eku_de_e708_dDesProSer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed($eku_de_e709_cUniMed);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed($eku_de_e710_dDesUniMed);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser($eku_de_e711_dCantProSer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig($eku_de_e712_cPaisOrig);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig($eku_de_e713_dDesPaisOrig);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem($eku_de_e714_dInfItem);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc($eku_de_e715_cRelMerc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc($eku_de_e716_dDesRelMerc);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer($eku_de_e717_dCanQuiMer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer($eku_de_e718_dPorQuiMer);
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo($eku_de_e719_dCDCAnticipo);

        $eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion('');
        $eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(1);
        $eku_de_e700_g_dtip_d_e_g_cam_item->save();
        
        return $eku_de_e700_g_dtip_d_e_g_cam_item;
    }  
    
    /**
     * E720 - Campos que describen el precio, tipo de cambio y valor total de la operación por ítem
     */
    public function setInicializarDEGrupoE720($eku_de_e700_g_dtip_d_e_g_cam_item, $arr_item){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
                
        //$cantidad = $vta_factura_vta_orden_venta->getCantidad();
        
        //$vta_orden_venta_importe_unitario_sin_descuentos = $vta_orden_venta->getImporteUnitarioSinDescuentoConIva();
        //$vta_orden_venta_importe_total_sin_descuentos = $vta_orden_venta_importe_unitario_sin_descuentos * $cantidad;
        
        //$descuento_unitario_porcentaje = $vta_orden_venta->getDescuento();
        //$descuento_unitario_importe = $vta_orden_venta_importe_unitario_sin_descuento * ($descuento_unitario_porcentaje/100);
        //$descuento_total = $descuento_unitario_importe * $cantidad;
        
        //$vta_orden_venta_importe_total_con_descuento = $vta_orden_venta_importe_total_sin_descuento - $descuento_total;
        
        // ---------------------------------------------------------------------
        // se redondean los importes
        // ---------------------------------------------------------------------
        //$vta_orden_venta_importe_unitario_sin_descuento = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_unitario_sin_descuento, 4), 8); // se redondea y agregan 8 ceros            
        //$vta_orden_venta_importe_total_sin_descuento = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_total_sin_descuento, 4), 8); // se redondea y agregan 8 ceros            
        //$descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8); // se redondea y agregan 8 ceros            
        //$descuento_total = Gral::completar_decimales(Gral::rnd($descuento_total, 4), 8); // se redondea y agregan 8 ceros            
        //$vta_orden_venta_importe_total_con_descuento = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_total_con_descuento, 4), 8); // se redondea y agregan 8 ceros            

        //Gral::pr('---------------------------------------------------------------------------------');
        //Gral::pr($vta_orden_venta_importe_unitario_sin_descuentos, '$vta_orden_venta_importe_unitario_sin_descuentos');
        //Gral::pr($vta_orden_venta_importe_total_sin_descuentos, '$vta_orden_venta_importe_total_sin_descuentos');
        //Gral::pr($descuento_unitario_importe, '$descuento_unitario_importe');
        //Gral::pr($descuento_total, 'descuento_total');
        //Gral::pr($vta_orden_venta_importe_total_con_descuentos, '$vta_orden_venta_importe_total_con_descuentos');        
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        $eku_de_e721_dPUniProSer = $arr_item['importe_unitario_sin_descuento_con_iva'];
        $eku_de_e725_dTiCamIt = ""; // no informar
        $eku_de_e727_dTotBruOpeItem = $arr_item['importe_total_sin_descuento_con_iva'];
        
        $eku_de_ea002_dDescItem = $arr_item['descuento_unitario_importe'];
        $eku_de_ea003_dPorcDesIt = $arr_item['descuento_unitario_porcentaje'];
        $eku_de_ea004_dDescGloItem = "0";
        $eku_de_ea006_dAntPreUniIt = "0";
        $eku_de_ea007_dAntGloPreUniIt = "0";
        $eku_de_ea008_dTotOpeItem = $arr_item['importe_total_con_descuento_con_iva'];
        $eku_de_ea009_dTotOpeGs = ""; // no informar
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId($this->getId());
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser($eku_de_e721_dPUniProSer);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit($eku_de_e725_dTiCamIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem($eku_de_e727_dTotBruOpeItem);
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem($eku_de_ea002_dDescItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit($eku_de_ea003_dPorcDesIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem($eku_de_ea004_dDescGloItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit($eku_de_ea006_dAntPreUniIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit($eku_de_ea007_dAntGloPreUniIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem($eku_de_ea008_dTotOpeItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs($eku_de_ea009_dTotOpeGs);
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion('');
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(1);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->save();
        
        return $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item;
    }     
    
    /**
     * E720 - Campos que describen el precio, tipo de cambio y valor total de la operación por ítem
     */
    public function setInicializarDEGrupoE720_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
                
        $cantidad = $vta_factura_vta_orden_venta->getCantidad();
        
        $vta_orden_venta_importe_unitario_sin_descuentos = $vta_orden_venta->getImporteUnitarioSinDescuentoConIva();
        $vta_orden_venta_importe_total_sin_descuentos = $vta_orden_venta_importe_unitario_sin_descuentos * $cantidad;
        
        $descuento_unitario_porcentaje = $vta_orden_venta->getDescuento();
        $descuento_unitario_importe = $vta_orden_venta_importe_unitario_sin_descuentos * ($descuento_unitario_porcentaje/100);
        $descuento_total = $descuento_unitario_importe * $cantidad;
        
        $vta_orden_venta_importe_total_con_descuentos = $vta_orden_venta_importe_total_sin_descuentos - $descuento_total;
        
        // ---------------------------------------------------------------------
        // se redondean los importes
        // ---------------------------------------------------------------------
        $vta_orden_venta_importe_unitario_sin_descuentos = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_unitario_sin_descuentos, 4), 8); // se redondea y agregan 8 ceros            
        $vta_orden_venta_importe_total_sin_descuentos = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_total_sin_descuentos, 4), 8); // se redondea y agregan 8 ceros            
        $descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8); // se redondea y agregan 8 ceros            
        $descuento_total = Gral::completar_decimales(Gral::rnd($descuento_total, 4), 8); // se redondea y agregan 8 ceros            
        $vta_orden_venta_importe_total_con_descuentos = Gral::completar_decimales(Gral::rnd($vta_orden_venta_importe_total_con_descuentos, 4), 8); // se redondea y agregan 8 ceros            

        //Gral::pr('---------------------------------------------------------------------------------');
        //Gral::pr($vta_orden_venta_importe_unitario_sin_descuentos, '$vta_orden_venta_importe_unitario_sin_descuentos');
        //Gral::pr($vta_orden_venta_importe_total_sin_descuentos, '$vta_orden_venta_importe_total_sin_descuentos');
        //Gral::pr($descuento_unitario_importe, '$descuento_unitario_importe');
        //Gral::pr($descuento_total, 'descuento_total');
        //Gral::pr($vta_orden_venta_importe_total_con_descuentos, '$vta_orden_venta_importe_total_con_descuentos');        
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        $eku_de_e721_dPUniProSer = $vta_orden_venta_importe_unitario_sin_descuentos;
        $eku_de_e725_dTiCamIt = ""; // no informar
        $eku_de_e727_dTotBruOpeItem = $vta_orden_venta_importe_total_sin_descuentos;
        
        $eku_de_ea002_dDescItem = $descuento_unitario_importe;
        $eku_de_ea003_dPorcDesIt = $descuento_unitario_porcentaje;
        $eku_de_ea004_dDescGloItem = "0";
        $eku_de_ea006_dAntPreUniIt = "0";
        $eku_de_ea007_dAntGloPreUniIt = "0";
        $eku_de_ea008_dTotOpeItem = $vta_orden_venta_importe_total_con_descuentos;
        $eku_de_ea009_dTotOpeGs = ""; // no informar
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId($this->getId());
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser($eku_de_e721_dPUniProSer);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit($eku_de_e725_dTiCamIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem($eku_de_e727_dTotBruOpeItem);
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem($eku_de_ea002_dDescItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit($eku_de_ea003_dPorcDesIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem($eku_de_ea004_dDescGloItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit($eku_de_ea006_dAntPreUniIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit($eku_de_ea007_dAntGloPreUniIt);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem($eku_de_ea008_dTotOpeItem);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs($eku_de_ea009_dTotOpeGs);
        
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion('');
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(1);
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->save();
        
        return $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item;
    }  
    
    /**
     * E730 - Campos que describen el IVA de la operación por ítem
     */
    public function setInicializarDEGrupoE730($eku_de_e700_g_dtip_d_e_g_cam_item, $arr_item){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
        //$ins_insumo = $vta_orden_venta->getInsInsumo();
        //$gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
        
        //$eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
        //Gral::prr($gral_tipo_iva);
        //Gral::prr($eku_param_tipo_afectacion_tributaria);

        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if(trim($arr_item['eku_param_tipo_afectacion_tributaria_codigo']) != ""){
            $eku_de_e731_iAfecIVA = $arr_item['eku_param_tipo_afectacion_tributaria_codigo'];
            $eku_de_e732_dDesAfecIVA = $arr_item['eku_param_tipo_afectacion_tributaria_descripcion'];
        }
        $eku_de_e733_dPropIVA = $arr_item['proporcion_iva'];
        $eku_de_e734_dTasaIVA = $arr_item['valor_iva'];
        
        // * ATENCION Programar logica con datos de PROPORCION IVA. Se debe intervenir
        // todo el sistema con este dato de proporcion
        $eku_de_e735_dBasGravIVA = 0;
        $eku_de_e736_dLiqIVAItem = 0;
        $eku_de_e737_dBasexe = 0;

        switch($eku_de_e731_iAfecIVA){
            case 1: // Gravado IVA
            case 4: // Gravado parcial (Grav-Exento)
                $eku_de_e735_dBasGravIVA = $arr_item['importe_total']; // ATENCION considerar el porcentaje de proporcion iva
                $eku_de_e736_dLiqIVAItem = $arr_item['importe_iva']; // ATENCION considerar el porcentaje de proporcion iva
                break;
        }
        
        //$eku_de_e735_dBasGravIVA = round($eku_de_e735_dBasGravIVA, 8); // max decimales aceptados por SIFEN (8)
        
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId($this->getId());
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva($eku_de_e731_iAfecIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva($eku_de_e732_dDesAfecIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva($eku_de_e733_dPropIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva($eku_de_e734_dTasaIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva($eku_de_e735_dBasGravIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem($eku_de_e736_dLiqIVAItem);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE737Dbasexe($eku_de_e737_dBasexe);

        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion('');
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(1);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->save();
        
        return $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a;
    }     
    
    /**
     * E730 - Campos que describen el IVA de la operación por ítem
     */
    public function setInicializarDEGrupoE730_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
        $ins_insumo = $vta_orden_venta->getInsInsumo();
        $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
        
        $eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
        //Gral::prr($gral_tipo_iva);
        //Gral::prr($eku_param_tipo_afectacion_tributaria);

        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        if($eku_param_tipo_afectacion_tributaria){
            $eku_de_e731_iAfecIVA = $eku_param_tipo_afectacion_tributaria->getCodigoEku();
            $eku_de_e732_dDesAfecIVA = $eku_param_tipo_afectacion_tributaria->getDescripcion();
        }
        $eku_de_e733_dPropIVA = $ins_insumo->getProporcionIva();
        $eku_de_e734_dTasaIVA = $gral_tipo_iva->getValorIva();
        
        // * ATENCION Programar logica con datos de PROPORCION IVA. Se debe intervenir
        // todo el sistema con este dato de proporcion
        $eku_de_e735_dBasGravIVA = 0;
        $eku_de_e736_dLiqIVAItem = 0;
        $eku_de_e737_dBasexe = 0;

        switch($eku_de_e731_iAfecIVA){
            case 1: // Gravado IVA
            case 4: // Gravado parcial (Grav-Exento)
                $eku_de_e735_dBasGravIVA = $vta_factura_vta_orden_venta->getImporteTotal(); // ATENCION considerar el porcentaje de proporcion iva
                $eku_de_e736_dLiqIVAItem = $vta_factura_vta_orden_venta->getImporteIva(); // ATENCION considerar el porcentaje de proporcion iva
                break;
        }
        
        $eku_de_e735_dBasGravIVA = round($eku_de_e735_dBasGravIVA, 8); // max decimales aceptados por SIFEN (8)
        
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId($this->getId());
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva($eku_de_e731_iAfecIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva($eku_de_e732_dDesAfecIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva($eku_de_e733_dPropIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva($eku_de_e734_dTasaIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva($eku_de_e735_dBasGravIVA);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem($eku_de_e736_dLiqIVAItem);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE737Dbasexe($eku_de_e737_dBasexe);

        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion('');
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(1);
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->save();
        
        return $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a;
    }  
    
    /**
     * E750 - Grupo de rastreo de la mercadería
     */
    public function setInicializarDEGrupoE750_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeId($this->getId());
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE751Dnumlote('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE752Dvencmerc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE753Dnserie('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE754Dnumpedi('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE755Dnumsegui('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE756Dnomimp('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE757Ddirimp('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE758Dnumfir('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE759Dnumreg('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE760Dnumregentcom('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setObservacion('');
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(1);
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->save();
        
        return $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc;
    }  
    
    /**
     * E770 - Sector de automotores nuevos y usados
     */
    public function setInicializarDEGrupoE770_OLD($eku_de_e700_g_dtip_d_e_g_cam_item, $vta_factura_vta_orden_venta){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeId($this->getId());
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeE700GDtipDEGCamItemId($eku_de_e700_g_dtip_d_e_g_cam_item->getId());
        
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE771Itipopvn('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE772Ddestipopvn('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE773Dchasis('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE774Dcolor('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE775Dpotencia('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE776Dcapmot('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE777Dpnet('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE778Dpbruto('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE779Itipcom('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE780Ddestipcom('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE781Dnromotor('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE782Dcaptracc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE783Danofab('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE784Ctipveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE785Dcapac('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE786Dcilin('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setObservacion('');
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(1);
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->save();
        
        return $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo;
    }  
    
    /**
     * E791 - Sector Energía Eléctrica
     */
    public function setInicializarDEGrupoE791(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e791_g_cam_esp_g_grup_ener = new EkuDeE791GCamEspGGrupEner();
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuDeId($this->getId());
        
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE792Dnromed('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE793Dactiv('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE794Dcateg('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE795Dlecant('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE796Dlecact('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEkuE797Dconkwh('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e791_g_cam_esp_g_grup_ener->setObservacion('');
        $eku_de_e791_g_cam_esp_g_grup_ener->setEstado(1);
        $eku_de_e791_g_cam_esp_g_grup_ener->save();
        
        return $eku_de_e791_g_cam_esp_g_grup_ener;
    }  
    
    /**
     * E800 - Sector Seguros
     */
    public function setInicializarDEGrupoE800(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e800_g_cam_esp_g_grup_seg = new EkuDeE800GCamEspGGrupSeg();
        $eku_de_e800_g_cam_esp_g_grup_seg->setEkuDeId($this->getId());
        
        $eku_de_e800_g_cam_esp_g_grup_seg->setEkuE801Dcodempseg('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e800_g_cam_esp_g_grup_seg->setObservacion('');
        $eku_de_e800_g_cam_esp_g_grup_seg->setEstado(1);
        $eku_de_e800_g_cam_esp_g_grup_seg->save();
        
        return $eku_de_e800_g_cam_esp_g_grup_seg;
    }  
    
    /**
     * EA790 - Polizas de Seguro
     */
    public function setInicializarDEGrupoEA790(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = new EkuDeEa790GCamEspGGrupSegGGrupPolSeg();
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuDeId($this->getId());
        
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa791Dpoliza('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa792Dunidvig('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa793Dvigencia('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa794Dnumpoliza('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa795Dfecinivig('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa796Dfecfinvig('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEkuEa797Dcodint('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setObservacion('');
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEstado(1);
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->save();
        
        return $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg;
    }  
    
    /**
     * E810 - Sector de Supermercados
     */
    public function setInicializarDEGrupoE810(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e810_g_cam_esp_g_grup_sup = new EkuDeE810GCamEspGGrupSup();
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuDeId($this->getId());
        
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuE811Dnomcaj('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuE812Defectivo('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuE813Dvuelto('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuE814Ddonac('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e810_g_cam_esp_g_grup_sup->setEkuE815Ddesdonac('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e810_g_cam_esp_g_grup_sup->setObservacion('');
        $eku_de_e810_g_cam_esp_g_grup_sup->setEstado(1);
        $eku_de_e810_g_cam_esp_g_grup_sup->save();
        
        return $eku_de_e810_g_cam_esp_g_grup_sup;
    }  
    
    /**
     * E820 - Grupo de datos adicionales de uso comercial
     */
    public function setInicializarDEGrupoE820(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e820_g_cam_esp_g_grup_adi = new EkuDeE820GCamEspGGrupAdi();
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuDeId($this->getId());
        
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE821Dciclo('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE822Dfecinic('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE823Dfecfinc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE824Dvencpag('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE825Dcontrato('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEkuE826Dsalant('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e820_g_cam_esp_g_grup_adi->setObservacion('');
        $eku_de_e820_g_cam_esp_g_grup_adi->setEstado(1);
        $eku_de_e820_g_cam_esp_g_grup_adi->save();
        
        return $eku_de_e820_g_cam_esp_g_grup_adi;
    }  
    
    /**
     * E900 - Transporte de Mercaderia
     */
    public function setInicializarDEGrupoE900(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuDeId($this->getId());
        
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE901Itiptrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE902Ddestiptrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE903Imodtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE904Ddesmodtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE905Irespflete('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE906Ccondneg('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE907Dnumanif('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE908Dnudespimp('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE909Dinitras('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE910Dfintras('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE911Cpaisdest('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e900_g_dtip_d_e_g_transp->setEkuE912Ddespaisdest('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e900_g_dtip_d_e_g_transp->setObservacion('');
        $eku_de_e900_g_dtip_d_e_g_transp->setEstado(1);
        $eku_de_e900_g_dtip_d_e_g_transp->save();
        
        return $eku_de_e900_g_dtip_d_e_g_transp;
    }  
    
    /**
     * E920 - Local de Salida de Mercaderia
     */
    public function setInicializarDEGrupoE920(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuDeId($this->getId());
        
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE921Ddirlocsal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE922Dnumcassal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE923Dcomp1sal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE924Dcomp2sal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE925Cdepsal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE926Ddesdepsal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE927Cdissal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE928Ddesdissal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE929Cciusal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE930Ddesciusal('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE931Dtelsal('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setObservacion('');
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(1);
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->save();
        
        return $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal;
    }  
    
    /**
     * E940 - Local de Entrega de Mercaderia
     */
    public function setInicializarDEGrupoE940(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuDeId($this->getId());
        
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE941Ddirlocent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE942Dnumcasent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE943Dcomp1ent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE944Dcomp2ent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE945Cdepent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE946Ddesdepent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE947Cdisent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE948Ddesdisent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE949Cciuent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE950Ddesciuent('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE951Dtelent('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setObservacion('');
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(1);
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->save();
        
        return $eku_de_o;
    }  
    
    /**
     * E960 - Vehiculo Traslado Mercaderia
     */
    public function setInicializarDEGrupoE960(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuDeId($this->getId());
        
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE961Dtivehtras('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE962Dmarveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE967Dtipidenveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE963Dnroidveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE964Dadicveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE965Dnromatveh('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE966Dnrovuelo('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setObservacion('');
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(1);
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->save();
        
        return $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras;
    }  
    
    /**
     * E980 - Transportista
     */
    public function setInicializarDEGrupoE980(){
         
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuDeId($this->getId());
        
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE981Inattrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE982Dnomtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE983Dructrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE984Ddvtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE985Itipidtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE986Ddtipidtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE987Dnumidtrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE988Cnactrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE989Ddesnactrans('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE990Dnumidchof('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE991Dnomchof('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE992Ddomfisc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE993Ddirchof('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE994Dnombag('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE995Drucag('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE996Ddvag('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE997Ddirage('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setObservacion('');
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(1);
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->save();
        
        return $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans;
    }  
    
    /**
     * F001 - Totales y Subtotales del Comprobante
     */
    public function setInicializarDEGrupoF001(){
        
        // ---------------------------------------------------------------------
        // se inicializa objetos vinculados
        // ---------------------------------------------------------------------
        //$vta_factura = $this->getVtaFacturaXEkuDeVtaFactura(null, null, true);
        $vta_comprobante = $this->getObjComprobanteVinculado();
                
        $vta_comprobante_importe = $vta_comprobante->getImporteTotal();
        
        $f002_dSubExe = 0;
        $f003_dSubExo = 0;
        $f004_dSub5 = 0;
        $f005_dSub10 = 0;
        $f015_dIVA5 = 0;
        $f016_dIVA10 = 0;
        $f018_dBaseGrav5 = 0;
        $f019_dBaseGrav10 = 0;
        
        $eku_de_e700_g_dtip_d_e_g_cam_items = $this->getEkuDeE700GDtipDEGCamItems();
        foreach($eku_de_e700_g_dtip_d_e_g_cam_items as $eku_de_e700_g_dtip_d_e_g_cam_item){            
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE720GDtipDEGCamItemGValorItem();
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE730GDtipDEGCamItemGCamIVA();
            //Gral::prr($eku_de_e700_g_dtip_d_e_g_cam_item);
            //Gral::prr($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item);
            //Gral::prr($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a);
            
            //$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
            //$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
            
            $eku_e711_dcantproser = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser(); // cantidad
            
            $eku_ea002_ddescitem = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem();
            $eku_ea008_dtotopeitem = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem();
            
            $eku_e731_iafeciva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva();
            $eku_e734_dtasaiva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva();
            $eku_e735_dbasgraviva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735DBasGravIva();
            $eku_e736_dliqivaitem = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem();
            
            
            if($eku_e731_iafeciva == 3){ // exentas                
                $f002_dSubExe += $eku_ea008_dtotopeitem;
                
            }elseif($eku_e731_iafeciva == 2){ // exoneradas
                $f003_dSubExo += $eku_ea008_dtotopeitem;                
                
            }elseif($eku_e731_iafeciva == 1 || $eku_e731_iafeciva == 4){ // IVA Gravado o Gravado Parcial
                
                if($eku_e734_dtasaiva == 5){ // IVA 5%
                    $f004_dSub5+= $eku_ea008_dtotopeitem;
                    $f015_dIVA5+= $eku_e736_dliqivaitem;
                    $f018_dBaseGrav5+= $eku_e735_dbasgraviva;
                }
                if($eku_e734_dtasaiva == 10){ // IVA 10%
                    $f005_dSub10+= $eku_ea008_dtotopeitem;
                    $f016_dIVA10+= $eku_e736_dliqivaitem;
                    $f019_dBaseGrav10+= $eku_e735_dbasgraviva;
                }                
            }
        }
        
        // se suman todas las bases imponibles (importes brutos)
        $f008_dTotOpe = $f002_dSubExe + $f003_dSubExo + $f004_dSub5 + $f005_dSub10;
        $f014_dTotGralOpe = $f008_dTotOpe;
        
        $f009_dTotDesc = $eku_ea002_ddescitem * $eku_e711_dcantproser;
        $f033_dTotDescGlotem = 0; // se desestima
        $f034_dTotAntItem = 0; // se desestima
        $f035_dTotAnt = 0; // se desestima
        
        $f010_dPorcDescTotal = 0; // se desestima
        $f011_dDescTotal = $eku_ea002_ddescitem * $eku_e711_dcantproser;
        $f012_dAnticipo = 0; // se desestima
        $f013_dRedon = 0; // se desestima
        $f025_dComi = ""; // se desestima
        $f036_dLiqTotIVA5 = 0; // se desestima
        $f037_dLiqTotIVA10 = 0; // se desestima
        $f026_dIVAComi = 0; // se desestima
        $f017_dTotIVA = $f015_dIVA5 + $f016_dIVA10 - $f036_dLiqTotIVA5 - $f037_dLiqTotIVA10 + $f026_dIVAComi;
        $f020_dTBasGraIVA = $f018_dBaseGrav5 + $f019_dBaseGrav10;
        
        $f023_dTotalGs = '';
        
        // ---------------------------------------------------------------------
        // se cargan variables para cargar objetos
        // ---------------------------------------------------------------------
        $eku_de_f002_dSubExe = $f002_dSubExe;
        $eku_de_f003_dSubExo = $f003_dSubExo;
        $eku_de_f004_dSub5 = $f004_dSub5;
        $eku_de_f005_dSub10 = $f005_dSub10;
        $eku_de_f008_dTotOpe = $f008_dTotOpe;
        $eku_de_f009_dTotDesc = $f009_dTotDesc;
        $eku_de_f033_dTotDescGlotem = $f033_dTotDescGlotem;
        $eku_de_f034_dTotAntItem = $f034_dTotAntItem;
        $eku_de_f035_dTotAnt = $f035_dTotAnt;
        $eku_de_f010_dPorcDescTotal = $f010_dPorcDescTotal;
        $eku_de_f011_dDescTotal = $f011_dDescTotal;
        $eku_de_f012_dAnticipo = $f012_dAnticipo;
        $eku_de_f013_dRedon = $f013_dRedon;
        $eku_de_f025_dComi = $f025_dComi;
        $eku_de_f014_dTotGralOpe = $f014_dTotGralOpe;
        $eku_de_f015_dIVA5 = $f015_dIVA5;
        $eku_de_f016_dIVA10 = $f016_dIVA10;
        $eku_de_f036_dLiqTotIVA5 = $f036_dLiqTotIVA5;
        $eku_de_f037_dLiqTotIVA10 = $f037_dLiqTotIVA10;
        $eku_de_f026_dIVAComi = $f026_dIVAComi;
        $eku_de_f017_dTotIVA = $f017_dTotIVA;
        $eku_de_f018_dBaseGrav5 = $f018_dBaseGrav5;
        $eku_de_f019_dBaseGrav10 = $f019_dBaseGrav10;
        $eku_de_f020_dTBasGraIVA = $f020_dTBasGraIVA;
        $eku_de_f023_dTotalGs = $f023_dTotalGs;
        $eku_de_f024_dTotCom = 0; // no va mas
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
        $eku_de_f001_g_tot_sub->setEkuDeId($this->getId());
        
        $eku_de_f001_g_tot_sub->setEkuF002Dsubexe($eku_de_f002_dSubExe);
        $eku_de_f001_g_tot_sub->setEkuF003Dsubexo($eku_de_f003_dSubExo);
        $eku_de_f001_g_tot_sub->setEkuF004Dsub5($eku_de_f004_dSub5);
        $eku_de_f001_g_tot_sub->setEkuF005Dsub10($eku_de_f005_dSub10);
        $eku_de_f001_g_tot_sub->setEkuF008Dtotope($eku_de_f008_dTotOpe);
        $eku_de_f001_g_tot_sub->setEkuF009Dtotdesc($eku_de_f009_dTotDesc);
        $eku_de_f001_g_tot_sub->setEkuF033Dtotdescglotem($eku_de_f033_dTotDescGlotem);
        $eku_de_f001_g_tot_sub->setEkuF034Dtotantitem($eku_de_f034_dTotAntItem);
        $eku_de_f001_g_tot_sub->setEkuF035Dtotant($eku_de_f035_dTotAnt);
        $eku_de_f001_g_tot_sub->setEkuF010Dporcdesctotal($eku_de_f010_dPorcDescTotal);
        $eku_de_f001_g_tot_sub->setEkuF011Ddesctotal($eku_de_f011_dDescTotal);
        $eku_de_f001_g_tot_sub->setEkuF012Danticipo($eku_de_f012_dAnticipo);
        $eku_de_f001_g_tot_sub->setEkuF013Dredon($eku_de_f013_dRedon);
        $eku_de_f001_g_tot_sub->setEkuF025Dcomi($eku_de_f025_dComi);
        $eku_de_f001_g_tot_sub->setEkuF014Dtotgralope($eku_de_f014_dTotGralOpe);
        $eku_de_f001_g_tot_sub->setEkuF015Diva5($eku_de_f015_dIVA5);
        $eku_de_f001_g_tot_sub->setEkuF016Diva10($eku_de_f016_dIVA10);
        $eku_de_f001_g_tot_sub->setEkuF036Dliqtotiva5($eku_de_f036_dLiqTotIVA5);
        $eku_de_f001_g_tot_sub->setEkuF037Dliqtotiva10($eku_de_f037_dLiqTotIVA10);
        $eku_de_f001_g_tot_sub->setEkuF026Divacomi($eku_de_f026_dIVAComi);
        $eku_de_f001_g_tot_sub->setEkuF017Dtotiva($eku_de_f017_dTotIVA);
        $eku_de_f001_g_tot_sub->setEkuF018Dbasegrav5($eku_de_f018_dBaseGrav5);
        $eku_de_f001_g_tot_sub->setEkuF019Dbasegrav10($eku_de_f019_dBaseGrav10);
        $eku_de_f001_g_tot_sub->setEkuF020Dtbasgraiva($eku_de_f020_dTBasGraIVA);
        $eku_de_f001_g_tot_sub->setEkuF023Dtotalgs($eku_de_f023_dTotalGs);
        $eku_de_f001_g_tot_sub->setEkuF024Dtotcom($eku_de_f024_dTotCom);

        $eku_de_f001_g_tot_sub->setObservacion('');
        $eku_de_f001_g_tot_sub->setEstado(1);
        $eku_de_f001_g_tot_sub->save();
        
        return $eku_de_f001_g_tot_sub;
    }  
    
    /**
     * G001 - Datos de Uso General
     */
    public function setInicializarDEGrupoG001(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
        $eku_de_g001_g_cam_gen->setEkuDeId($this->getId());
        
        $eku_de_g001_g_cam_gen->setEkuG002Dordcompra('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g001_g_cam_gen->setEkuG003Dordvta('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g001_g_cam_gen->setEkuG004Dasiento('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_g001_g_cam_gen->setObservacion('');
        $eku_de_g001_g_cam_gen->setEstado(1);
        $eku_de_g001_g_cam_gen->save();
        
        return $eku_de_g001_g_cam_gen;
    }  
    
    /**
     * G050 - Campos Generales de la Carga
     */
    public function setInicializarDEGrupoG050(){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuDeId($this->getId());
        
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG051Cunimedtotvol('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG052Ddesunimedtotvol('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG053Dtotvolmerc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG054Cunimedtotpes('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG055Ddesunimedtotpes('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG056Dtotpesmerc('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG057Icarcarga('XXX-FALTA-COMPLETAR-XXX');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG058Ddescarcarga('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_g050_g_cam_gen_g_cam_carg->setObservacion('');
        $eku_de_g050_g_cam_gen_g_cam_carg->setEstado(1);
        $eku_de_g050_g_cam_gen_g_cam_carg->save();
        
        return $eku_de_g050_g_cam_gen_g_cam_carg;
    }  
    
    /**
     * H001 - Documento Asociado
     */
    public function setInicializarDEGrupoH001($eku_param_tipo_de_codigo){
        
        
        $vta_comprobante = $this->getObjComprobanteVinculado();
        
        $eku_param_tipo_documento_asociado = EkuParamTipoDocumentoAsociado::getOxCodigo(EkuParamTipoDocumentoAsociado::TIPO_ELECTRONICO);

        switch ($eku_param_tipo_de_codigo){
                        
            // -----------------------------------------------------------------
            case EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA:
                    $vta_factura = $vta_comprobante->getVtaFacturaXVtaFacturaVtaNotaCredito(null, null, true);
                    if($vta_factura){
                        $eku_de_vinculado = $vta_factura->getEkuDeActualDelComprobante();
                        if($eku_de_vinculado){
                            $eku_h004_dCdCDERef = $eku_de_vinculado->getEkuA002IdCdc();
                            $eku_h005_dNTimDI = ""; // no informar en documento asociado electronico
                            $eku_h006_dEstDocAso = ""; // no informar en documento asociado electronico
                            $eku_h007_dPExpDocAso = ""; // no informar en documento asociado electronico
                            $eku_h008_dNumDocAso = ""; // no informar en documento asociado electronico
                            $eku_h009_iTipoDocAso = ""; // no informar en documento asociado electronico
                            $eku_h010_dDTipoDocAso = ""; // no informar en documento asociado electronico
                            $eku_h011_dFecEmiDI = ""; // no informar en documento asociado electronico
                            $eku_h012_dNumComRet = ""; // solo retencion E606
                            $eku_h013_dNumResCF = ""; 
                        }
                    }
                break;
        }        
        
        if($eku_de_vinculado){
            // ---------------------------------------------------------------------
            // se inicializa objeto
            // ---------------------------------------------------------------------
            $eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
            $eku_de_h001_g_cam_d_e_asoc->setEkuDeId($this->getId());

            $eku_de_h001_g_cam_d_e_asoc->setEkuH002Itipdocaso($eku_param_tipo_documento_asociado->getCodigoEku());
            $eku_de_h001_g_cam_d_e_asoc->setEkuH003Ddestipdocaso($eku_param_tipo_documento_asociado->getDescripcion());
            $eku_de_h001_g_cam_d_e_asoc->setEkuH004Dcdcderef($eku_h004_dCdCDERef);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH005Dntimdi($eku_h005_dNTimDI);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH006Destdocaso($eku_h006_dEstDocAso);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH007Dpexpdocaso($eku_h007_dPExpDocAso);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH008Dnumdocaso($eku_h008_dNumDocAso);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH009Itipodocaso($eku_h009_iTipoDocAso);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH010Ddtipodocaso($eku_h010_dDTipoDocAso);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH011Dfecemidi($eku_h011_dFecEmiDI);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH012Dnumcomret($eku_h012_dNumComRet);
            $eku_de_h001_g_cam_d_e_asoc->setEkuH013Dnumrescf($eku_h013_dNumResCF);
            //$eku_de_h001_g_cam_d_e_asoc->setEkuH014Itipcons('XXX-FALTA-COMPLETAR-XXX');
            //$eku_de_h001_g_cam_d_e_asoc->setEkuH015Ddestipcons('XXX-FALTA-COMPLETAR-XXX');
            //$eku_de_h001_g_cam_d_e_asoc->setEkuH016Dnumcons('XXX-FALTA-COMPLETAR-XXX');
            //$eku_de_h001_g_cam_d_e_asoc->setEkuH017Dnumcontrol('XXX-FALTA-COMPLETAR-XXX');

            $eku_de_h001_g_cam_d_e_asoc->setObservacion('');
            $eku_de_h001_g_cam_d_e_asoc->setEstado(1);
            $eku_de_h001_g_cam_d_e_asoc->save();

            return $eku_de_h001_g_cam_d_e_asoc;
        }
        
        return false;
    }  
    
    /**
     * I001 - Información de la Firma Digital
     */
    public function setInicializarDEGrupoI001($signature, $digest_value){
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_i001_signature = $this->getEkuDeI001Signature();
        if(!$eku_de_i001_signature){
            $eku_de_i001_signature = new EkuDeI001Signature();
        }
        $eku_de_i001_signature->setEkuDeId($this->getId());
        
        $eku_de_i001_signature->setEkuI002Signature($signature);
        $eku_de_i001_signature->setCodigo($digest_value);

        $eku_de_i001_signature->setEstado(1);
        $eku_de_i001_signature->save();

        return $eku_de_i001_signature;
    }

    /**
     * J001 - Campos fuera de la Firma Digital
     */
    public function setInicializarDEGrupoJ001(){
        
        $qr_string = $this->getQRString();
        
        // ---------------------------------------------------------------------
        // se inicializa objeto        
        // ---------------------------------------------------------------------
        $eku_de_j001_g_cam_fu_f_d = $this->getEkuDeJ001GCamFuFD();
        if(!$eku_de_j001_g_cam_fu_f_d){
            $eku_de_j001_g_cam_fu_f_d = new EkuDeJ001GCamFuFD();
        }
        $eku_de_j001_g_cam_fu_f_d->setEkuDeId($this->getId());
        
        $eku_de_j001_g_cam_fu_f_d->setEkuJ002Dcarqr($qr_string);
        //$eku_de_j001_g_cam_fu_f_d->setEkuJ003Dinfadic('XXX-FALTA-COMPLETAR-XXX');

        $eku_de_j001_g_cam_fu_f_d->setEstado(1);
        $eku_de_j001_g_cam_fu_f_d->save();
        
        return $eku_de_j001_g_cam_fu_f_d;
    }
    
    
    /**
     * XML Grupo INI
     */
    public function setXMLAgregarGrupoIni($grupo, $string_props = ""){
        $string_props = (trim($string_props) != '') ? ' '.$string_props : $string_props;
        $xml_grupo.= '<'.$grupo.$string_props.'>';
        $xml_grupo.=PHP_EOL;
        
        return $xml_grupo;        
    }

    /**
     * XML Grupo FIN
     */
    public function setXMLAgregarGrupoFin($grupo){
        $xml_grupo.= '</'.$grupo.'>';
        $xml_grupo.=PHP_EOL;
        
        return $xml_grupo;        
    }
    
    /**
     * XML Item
     */
    public function setXMLAgregarItem($label, $dato){
        if(trim($dato) != ""){ // solo si no es vacio
            $xml_item.= '<'.$label.'>'.$dato.'</'.$label.'>';
            $xml_item.= PHP_EOL;
        }
        return $xml_item;
    }
    
    
    /**
     * XML Generar
     */
    public function setGenerarXmlDE(){
        $eku_de = $this;
        $eku_de_b001_g_ope_d_e = $this->getEkuDeB001GOpeDE();
        $eku_de_c001_g_timb = $this->getEkuDeC001GTimb();
        $eku_de_d001_g_dat_gral_ope = $this->getEkuDeD001GDatGralOpe();
        $eku_de_d010_g_dat_gral_ope_g_ope_com = $this->getEkuDeD010GDatGralOpeGOpeCom();
        $eku_de_d100_g_dat_gral_ope_g_emis = $this->getEkuDeD100GDatGralOpeGEmis();
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos = $this->getEkuDeD130GDatGralOpeGEmisGActEcos(); // coleccion
        $eku_de_d140_g_dat_gral_ope_g_resp_d_e = $this->getEkuDeD140GDatGralOpeGRespDE();
        $eku_de_d200_g_dat_gral_ope_g_dat_rec = $this->getEkuDeD200GDatGralOpeGDatRec();
        $eku_de_e010_g_dtip_d_e_g_cam_f_e = $this->getEkuDeE010GDtipDEGCamFE();
        $eku_de_e020_g_dtip_d_e_g_comp_pub = $this->getEkuDeE020GDtipDEGCompPub();
        $eku_de_e300_g_dtip_d_e_g_cam_a_e = $this->getEkuDeE300GDtipDEGCamAE();
        $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = $this->getEkuDeE400GDtipDEGCamNCDE();
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = $this->getEkuDeE500GDtipDEGCamNRE();
        $eku_de_e600_g_dtip_d_e_g_cam_cond = $this->getEkuDeE600GDtipDEGCamCond();
        $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = $this->getEkuDeE605GDtipDEGCamCondGPaConEIni();
        $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = $this->getEkuDeE620GDtipDEGCamCondGPagTarCD();
        $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = $this->getEkuDeE630GDtipDEGCamCondGPagCheq();
        $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = $this->getEkuDeE640GDtipDEGCamCondGPagCred();
        $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = $this->getEkuDeE650GDtipDEGCamCondGPagCredGCuotas();
        $eku_de_e700_g_dtip_d_e_g_cam_items = $this->getEkuDeE700GDtipDEGCamItems(null, null, true);
        $eku_de_e791_g_cam_esp_g_grup_ener = $this->getEkuDeE791GCamEspGGrupEner();
        $eku_de_e800_g_cam_esp_g_grup_seg = $this->getEkuDeE800GCamEspGGrupSeg();
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = $this->getEkuDeEa790GCamEspGGrupSegGGrupPolSeg();
        $eku_de_e810_g_cam_esp_g_grup_sup = $this->getEkuDeE810GCamEspGGrupSup();
        $eku_de_e820_g_cam_esp_g_grup_adi = $this->getEkuDeE820GCamEspGGrupAdi();
        $eku_de_e900_g_dtip_d_e_g_transp = $this->getEkuDeE900GDtipDEGTransp();
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = $this->getEkuDeE920GDtipDEGTranspGCamSal();
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = $this->getEkuDeE940GDtipDEGTranspGCamEnt();
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = $this->getEkuDeE960GDtipDEGTranspGVehTras();
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = $this->getEkuDeE980GDtipDEGTranspGCamTrans();
        $eku_de_f001_g_tot_sub = $this->getEkuDeF001GTotSub();
        $eku_de_g001_g_cam_gen = $this->getEkuDeG001GCamGen();
        $eku_de_g050_g_cam_gen_g_cam_carg = $this->getEkuDeG050GCamGenGCamCarg();
        $eku_de_h001_g_cam_d_e_asoc = $this->getEkuDeH001GCamDEAsoc();
        //$eku_de_i001_signature = $this->getEkuDeI001Signature();
        //$eku_de_j001_g_cam_fu_f_d = $this->getEkuDeJ001GCamFuFD();
        
        
        /*
        <?xml version="150" encoding="UTF-8"?>
        <?xml version="1.0" encoding="UTF-8"?>
        */
        
        $xml_de = '
<rDE xmlns="http://ekuatia.set.gov.py/sifen/xsd" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ekuatia.set.gov.py/sifen/xsd/ siRecepDE_v150.xsd">
    ';
        
    // -------------------------------------------------------------------------
    // A001 - DE
    // -------------------------------------------------------------------------
    $xml_de .= $this->setXMLAgregarItem("dVerFor", $this->getEkuDverfor());
    
    $xml_de .= $this->setXMLAgregarGrupoIni("DE", 'Id="'.$this->getEkuA002IdCdc().'"');
        
    $xml_de .= $this->setXMLAgregarItem("dDVId", $this->getEkuA003Ddvid());
    $xml_de .= $this->setXMLAgregarItem("dFecFirma", $this->getEkuA004Dfecfirma());
    $xml_de .= $this->setXMLAgregarItem("dSisFact", $this->getEkuA005Dsisfact());

    // -------------------------------------------------------------------------
    // B001 - DE - gEmis
    // -------------------------------------------------------------------------
    if($eku_de_b001_g_ope_d_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gOpeDE");
        $xml_de .= $this->setXMLAgregarItem("iTipEmi", $eku_de_b001_g_ope_d_e->getEkuB002Itipemi());
        $xml_de .= $this->setXMLAgregarItem("dDesTipEmi", $eku_de_b001_g_ope_d_e->getEkuB003Ddestipemi());
        $xml_de .= $this->setXMLAgregarItem("dCodSeg", $eku_de_b001_g_ope_d_e->getEkuB004Dcodseg());
        $xml_de .= $this->setXMLAgregarItem("dInfoEmi", $eku_de_b001_g_ope_d_e->getEkuB005Dinfoemi());
        $xml_de .= $this->setXMLAgregarItem("dInfoFisc", $eku_de_b001_g_ope_d_e->getEkuB006Dinfofisc());
        $xml_de .= $this->setXMLAgregarGrupoFin("gOpeDE");
    }

    // -------------------------------------------------------------------------
    // C001 - DE - gTimb
    // -------------------------------------------------------------------------
    if(true){
        $xml_de .= $this->setXMLAgregarGrupoIni("gTimb");
        $xml_de .= $this->setXMLAgregarItem("iTiDE", $eku_de_c001_g_timb->getEkuC002Itide());
        $xml_de .= $this->setXMLAgregarItem("dDesTiDE", $eku_de_c001_g_timb->getEkuC003Ddestide());
        $xml_de .= $this->setXMLAgregarItem("dNumTim", $eku_de_c001_g_timb->getEkuC004Dnumtim());
        $xml_de .= $this->setXMLAgregarItem("dEst", $eku_de_c001_g_timb->getEkuC005Dest());
        $xml_de .= $this->setXMLAgregarItem("dPunExp", $eku_de_c001_g_timb->getEkuC006Dpunexp());
        $xml_de .= $this->setXMLAgregarItem("dNumDoc", $eku_de_c001_g_timb->getEkuC007Dnumdoc());
        $xml_de .= $this->setXMLAgregarItem("dSerieNum", $eku_de_c001_g_timb->getEkuC010Dserienum());
        $xml_de .= $this->setXMLAgregarItem("dFeIniT", $eku_de_c001_g_timb->getEkuC008Dfeinit());
        $xml_de .= $this->setXMLAgregarGrupoFin("gTimb");
    }

    // -------------------------------------------------------------------------
    // D001 - DE - gDatGralOpe
    // -------------------------------------------------------------------------
    $xml_de .= $this->setXMLAgregarGrupoIni("gDatGralOpe");
    
    if(true){
        $xml_de .= $this->setXMLAgregarItem("dFeEmiDE", $eku_de_d001_g_dat_gral_ope->getEkuD002Dfeemide());
    }
    
    // -------------------------------------------------------------------------
    // D010 - DE - gDatGralOpe - gOpeCom
    // -------------------------------------------------------------------------
    if($eku_de_d010_g_dat_gral_ope_g_ope_com){
        $xml_de .= $this->setXMLAgregarGrupoIni("gOpeCom");    
        $xml_de .= $this->setXMLAgregarItem("iTipTra", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD011Itiptra());
        $xml_de .= $this->setXMLAgregarItem("dDesTipTra", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra());
        $xml_de .= $this->setXMLAgregarItem("iTImp", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD013Itimp());
        $xml_de .= $this->setXMLAgregarItem("dDesTImp", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD014Ddestimp());
        $xml_de .= $this->setXMLAgregarItem("cMoneOpe", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope());
        $xml_de .= $this->setXMLAgregarItem("dDesMoneOpe", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope());
        //$xml_de .= $this->setXMLAgregarItem("dCondTiCam", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD017DCondTiCam());
        //$xml_de .= $this->setXMLAgregarItem("dTiCam", $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018DTiCam());
        $xml_de .= $this->setXMLAgregarGrupoFin("gOpeCom");
    }
    
    
    // -------------------------------------------------------------------------
    // D100 - DE - gEmis
    // -------------------------------------------------------------------------
    if($eku_de_d100_g_dat_gral_ope_g_emis){
        $xml_de .= $this->setXMLAgregarGrupoIni("gEmis");    
        $xml_de .= $this->setXMLAgregarItem("dRucEm", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem());
        $xml_de .= $this->setXMLAgregarItem("dDVEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi());
        $xml_de .= $this->setXMLAgregarItem("iTipCont", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont());
        $xml_de .= $this->setXMLAgregarItem("cTipReg", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD104Ctipreg());
        $xml_de .= $this->setXMLAgregarItem("dNomEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi());
        $xml_de .= $this->setXMLAgregarItem("dNomFanEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi());
        $xml_de .= $this->setXMLAgregarItem("dDirEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi());
        $xml_de .= $this->setXMLAgregarItem("dNumCas", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD108Dnumcas());
        $xml_de .= $this->setXMLAgregarItem("dCompDir1", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD109Dcompdir1());
        $xml_de .= $this->setXMLAgregarItem("cDepEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD111Cdepemi());
        $xml_de .= $this->setXMLAgregarItem("dDesDepEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD112Ddesdepemi());
        $xml_de .= $this->setXMLAgregarItem("cCiuEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD115Cciuemi());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi());
        $xml_de .= $this->setXMLAgregarItem("dTelEmi", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi());
        $xml_de .= $this->setXMLAgregarItem("dEmailE", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile());
        $xml_de .= $this->setXMLAgregarItem("dDenSuc", $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD119Ddensuc());
    }
    
    // -------------------------------------------------------------------------
    // D130 - DE - gEmis - gActEco
    // -------------------------------------------------------------------------
    if($eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos){
        foreach($eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos as $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco){
            $xml_de .= $this->setXMLAgregarGrupoIni("gActEco");
            $xml_de .= $this->setXMLAgregarItem("cActEco", $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD131Cacteco());    
            $xml_de .= $this->setXMLAgregarItem("dDesActEco", $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD132Ddesacteco());    
            $xml_de .= $this->setXMLAgregarGrupoFin("gActEco");
        }
    }
    
    // -------------------------------------------------------------------------
    // D140 - DE - gEmis - gRespDE
    // -------------------------------------------------------------------------
    if($eku_de_d140_g_dat_gral_ope_g_resp_d_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gRespDE");    
        $xml_de .= $this->setXMLAgregarItem("iTipIDRespDE", $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD141Itipidrespde());    
        $xml_de .= $this->setXMLAgregarItem("dDTipIDRespDE", $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD142Ddtipidrespde());    
        $xml_de .= $this->setXMLAgregarItem("dNumIDRespDE", $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD143Dnumidrespde());    
        $xml_de .= $this->setXMLAgregarItem("dNomRespDE", $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD144Dnomrespde());    
        $xml_de .= $this->setXMLAgregarItem("dCarRespDE", $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD145Dcarrespde());    
        $xml_de .= $this->setXMLAgregarGrupoFin("gRespDE");
    }
    $xml_de .= $this->setXMLAgregarGrupoFin("gEmis");
    
    // -------------------------------------------------------------------------
    // D200 - DE - gDatRec
    // -------------------------------------------------------------------------
    if($eku_de_d200_g_dat_gral_ope_g_dat_rec){
        $xml_de .= $this->setXMLAgregarGrupoIni("gDatRec");    
        $xml_de .= $this->setXMLAgregarItem("iNatRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec());    
        $xml_de .= $this->setXMLAgregarItem("iTiOpe", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD202Itiope());    
        $xml_de .= $this->setXMLAgregarItem("cPaisRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD203Cpaisrec());    
        $xml_de .= $this->setXMLAgregarItem("dDesPaisRe", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD204Ddespaisre());    
        $xml_de .= $this->setXMLAgregarItem("iTiContRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD205Iticontrec());    
        $xml_de .= $this->setXMLAgregarItem("dRucRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec());    
        $xml_de .= $this->setXMLAgregarItem("dDVRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec());

        $xml_de .= $this->setXMLAgregarItem("iTipIDRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD208Itipidrec());
        $xml_de .= $this->setXMLAgregarItem("dDTipIDRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD209Ddtipidrec());
        $xml_de .= $this->setXMLAgregarItem("dNumIDRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec());

        $xml_de .= $this->setXMLAgregarItem("dNomRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec());
        $xml_de .= $this->setXMLAgregarItem("dNomFanRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD212Dnomfanrec());
        $xml_de .= $this->setXMLAgregarItem("dDirRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec());

        $xml_de .= $this->setXMLAgregarItem("dNumCasRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD218Dnumcasrec());
        $xml_de .= $this->setXMLAgregarItem("cDepRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD219Cdeprec());
        $xml_de .= $this->setXMLAgregarItem("dDesDepRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD220Ddesdeprec());
        $xml_de .= $this->setXMLAgregarItem("cDisRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD221Cdisrec());
        $xml_de .= $this->setXMLAgregarItem("dDesDisRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD222Ddesdisrec());
        $xml_de .= $this->setXMLAgregarItem("cCiuRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD223Cciurec());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD224Ddesciurec());

        $xml_de .= $this->setXMLAgregarItem("dTelRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec());
        $xml_de .= $this->setXMLAgregarItem("dCelRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD215Dcelrec());
        $xml_de .= $this->setXMLAgregarItem("dEmailRec", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec());
        $xml_de .= $this->setXMLAgregarItem("dCodCliente", $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD217Dcodcliente());
        $xml_de .= $this->setXMLAgregarGrupoFin("gDatRec");
    }
    
    $xml_de .= $this->setXMLAgregarGrupoFin("gDatGralOpe");
    
    // -------------------------------------------------------------------------
    // E001 - DE - gDtipDE
    // -------------------------------------------------------------------------
    $xml_de .= $this->setXMLAgregarGrupoIni("gDtipDE");

    // -------------------------------------------------------------------------
    // E010 - DE - gDtipDE - gCamFE
    // -------------------------------------------------------------------------
    if($eku_de_e010_g_dtip_d_e_g_cam_f_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamFE");
        $xml_de .= $this->setXMLAgregarItem("iIndPres", $eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE011Iindpres());
        $xml_de .= $this->setXMLAgregarItem("dDesIndPres", $eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE012Ddesindpres());
        //$xml_de .= $this->setXMLAgregarItem("dFecEmNR", $eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE013Dfecemnr());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamFE");
    }
    
    // -------------------------------------------------------------------------
    // E020 - DE - gDtipDE - gCamFE - gCompPub
    // -------------------------------------------------------------------------
    if($eku_de_e020_g_dtip_d_e_g_comp_pub){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCompPub");
        $xml_de .= $this->setXMLAgregarItem("dModCont", $eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE021Dmodcont());
        $xml_de .= $this->setXMLAgregarItem("dEntCont", $eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE022Dentcont());
        $xml_de .= $this->setXMLAgregarItem("dAnoCont", $eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE023Danocont());
        $xml_de .= $this->setXMLAgregarItem("dSecCont", $eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE024Dseccont());
        $xml_de .= $this->setXMLAgregarItem("dFeCodCont", $eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE025Dfecodcont());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCompPub");
    }
    
    // -------------------------------------------------------------------------
    // E300 - DE - gDtipDE - gCamAE
    // -------------------------------------------------------------------------
    if($eku_de_e300_g_dtip_d_e_g_cam_a_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamAE");
        $xml_de .= $this->setXMLAgregarItem("iNatVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE301Inatven());
        $xml_de .= $this->setXMLAgregarItem("dDesNatVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE302Ddesnatven());
        $xml_de .= $this->setXMLAgregarItem("iTipIDVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE304Itipidven());
        $xml_de .= $this->setXMLAgregarItem("dDTipIDVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE305Ddtipidven());
        $xml_de .= $this->setXMLAgregarItem("dNumIDVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE306Dnumidven());
        $xml_de .= $this->setXMLAgregarItem("dNomVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE307Dnomven());
        $xml_de .= $this->setXMLAgregarItem("dDirVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE308Ddirven());
        $xml_de .= $this->setXMLAgregarItem("dNumCasVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE309Dnumcasven());
        $xml_de .= $this->setXMLAgregarItem("cDepVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE310Cdepven());
        $xml_de .= $this->setXMLAgregarItem("dDesDepVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE311Ddesdepven());
        $xml_de .= $this->setXMLAgregarItem("cDisVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE312Cdisven());
        $xml_de .= $this->setXMLAgregarItem("dDesDisVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE313Ddesdisven());
        $xml_de .= $this->setXMLAgregarItem("cCiuVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE314Cciuven());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuVen", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE315Ddesciuven());
        $xml_de .= $this->setXMLAgregarItem("dDirProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE316Ddirprov());
        $xml_de .= $this->setXMLAgregarItem("cDepProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE317Cdepprov());
        $xml_de .= $this->setXMLAgregarItem("dDesDepProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE318Ddesdepprov());
        $xml_de .= $this->setXMLAgregarItem("cDisProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE319Cdisprov());
        $xml_de .= $this->setXMLAgregarItem("dDesDisProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE320Ddesdisprov());
        $xml_de .= $this->setXMLAgregarItem("cCiuProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE321Cciuprov());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuProv", $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE322Ddesciuprov());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamAE");
    }
        
    // -------------------------------------------------------------------------
    // E400 - DE - gDtipDE - gCamNCDE
    // -------------------------------------------------------------------------
    if($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamNCDE");
        $xml_de .= $this->setXMLAgregarItem("iMotEmi", $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE401Imotemi());
        $xml_de .= $this->setXMLAgregarItem("dDesMotEmi", $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE402Ddesmotemi());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamNCDE");
    }
    
    // -------------------------------------------------------------------------
    // E500 - DE - gDtipDE - gCamNRE
    // -------------------------------------------------------------------------
    if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamNRE");
        $xml_de .= $this->setXMLAgregarItem("iMotEmiNR", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE501Imoteminr());
        $xml_de .= $this->setXMLAgregarItem("dDesMotEmiNR", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE502Ddesmoteminr());
        $xml_de .= $this->setXMLAgregarItem("iRespEmiNR", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE503Irespeminr());
        $xml_de .= $this->setXMLAgregarItem("dDesRespEmiNR", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE504Ddesrespeminr());
        $xml_de .= $this->setXMLAgregarItem("dKmR", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE505Dkmr());
        $xml_de .= $this->setXMLAgregarItem("dFecEm", $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE506Dfecem());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamNRE");
    }
    
    
    // -------------------------------------------------------------------------
    // E600 - DE - gDtipDE - gCamCond
    // -------------------------------------------------------------------------
    if($eku_de_e600_g_dtip_d_e_g_cam_cond){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamCond");

            $xml_de .= $this->setXMLAgregarItem("iCondOpe", $eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE601Icondope());
            $xml_de .= $this->setXMLAgregarItem("dDCondOpe", $eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE602Ddcondope());    

        // -------------------------------------------------------------------------
        // E605 - DE - gDtipDE - gCamCond - gPaConEIni
        // -------------------------------------------------------------------------
        if($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){
            $xml_de .= $this->setXMLAgregarGrupoIni("gPaConEIni");
            $xml_de .= $this->setXMLAgregarItem("iTiPago", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE606Itipago());
            $xml_de .= $this->setXMLAgregarItem("dDesTiPag", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE607Ddestipag());
            $xml_de .= $this->setXMLAgregarItem("dMonTiPag", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE608Dmontipag());
            $xml_de .= $this->setXMLAgregarItem("cMoneTiPag", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE609Cmonetipag());
            $xml_de .= $this->setXMLAgregarItem("dDMoneTiPag", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE610Ddmonetipag());
            $xml_de .= $this->setXMLAgregarItem("dTiCamTiPag", $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE611Dticamtipa());
            $xml_de .= $this->setXMLAgregarGrupoFin("gPaConEIni");
        }

        // -------------------------------------------------------------------------
        // E620 - DE - gDtipDE - gCamCond - gPagTarCD
        // -------------------------------------------------------------------------
        if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){
            $xml_de .= $this->setXMLAgregarGrupoIni("gPagTarCD");
            $xml_de .= $this->setXMLAgregarItem("iDenTarj", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE621Identarj());
            $xml_de .= $this->setXMLAgregarItem("dDesDenTarj", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE622Ddesdentarj());
            $xml_de .= $this->setXMLAgregarItem("dRSProTar", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE623Drsprotar());
            $xml_de .= $this->setXMLAgregarItem("dRUCProTar", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE624Drucprotar());
            $xml_de .= $this->setXMLAgregarItem("dDVProTar", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE625Ddvprotar());
            $xml_de .= $this->setXMLAgregarItem("iForProPa", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE626Iforpropa());
            $xml_de .= $this->setXMLAgregarItem("dCodAuOpe", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE627Dcodauope());
            $xml_de .= $this->setXMLAgregarItem("dNomTit", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE628Dnomtit());
            $xml_de .= $this->setXMLAgregarItem("dNumTarj", $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE629Dnumtarj());
            $xml_de .= $this->setXMLAgregarGrupoFin("gPagTarCD");
        }

        // -------------------------------------------------------------------------
        // E630 - DE - gDtipDE - gCamCond - gPagCheq
        // -------------------------------------------------------------------------
        if($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq){
            $xml_de .= $this->setXMLAgregarGrupoIni("gPagCheq");
            $xml_de .= $this->setXMLAgregarItem("dNumCheq", $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE631Dnumcheq());
            $xml_de .= $this->setXMLAgregarItem("dBcoEmi", $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE632Dbcoemi());
            $xml_de .= $this->setXMLAgregarGrupoFin("gPagCheq");    
        }

        // -------------------------------------------------------------------------
        // E640 - DE - gDtipDE - gCamCond - gPagCred
        // -------------------------------------------------------------------------
        if($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred){
            $xml_de .= $this->setXMLAgregarGrupoIni("gPagCred");
            $xml_de .= $this->setXMLAgregarItem("iCondCred", $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred());
            $xml_de .= $this->setXMLAgregarItem("dDCondCred", $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred());
            $xml_de .= $this->setXMLAgregarItem("dPlazoCre", $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE643Dplazocre());
            $xml_de .= $this->setXMLAgregarItem("dCuotas", $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE644Dcuotas());
            $xml_de .= $this->setXMLAgregarItem("dMonEnt", $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE645Dmonent());

            // -------------------------------------------------------------------------
            // E650 - DE - gDtipDE - gCamCond - gPagCred - gCuotas
            // -------------------------------------------------------------------------
            if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){
                $xml_de .= $this->setXMLAgregarGrupoIni("gCuotas");
                $xml_de .= $this->setXMLAgregarItem("cMoneCuo", $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE653Cmonecuo());
                $xml_de .= $this->setXMLAgregarItem("dDMoneCuo", $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE654Ddmonecuo());
                $xml_de .= $this->setXMLAgregarItem("dMonCuota", $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE651Dmoncuota());
                $xml_de .= $this->setXMLAgregarItem("dVencCuo", $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE652Dvenccuo());
                $xml_de .= $this->setXMLAgregarGrupoFin("gCuotas");   
            }

            $xml_de .= $this->setXMLAgregarGrupoFin("gPagCred");    
        }

        $xml_de .= $this->setXMLAgregarGrupoFin("gCamCond");
    }

    // -------------------------------------------------------------------------
    // Coleccion de Items 
    // -------------------------------------------------------------------------
    foreach($eku_de_e700_g_dtip_d_e_g_cam_items as $eku_de_e700_g_dtip_d_e_g_cam_item){ 
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE720GDtipDEGCamItemGValorItem();
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE730GDtipDEGCamItemGCamIVA();
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE750GDtipDEGCamItemGRasMerc();
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE770GDtipDEGCamItemGVehNuevo();
        
        // -------------------------------------------------------------------------
        // E700 - DE - gDtipDE - gCamItem
        // -------------------------------------------------------------------------
        if($eku_de_e700_g_dtip_d_e_g_cam_item){
            $xml_de .= $this->setXMLAgregarGrupoIni("gCamItem");
            $xml_de .= $this->setXMLAgregarItem("dCodInt", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint());
            //$xml_de .= $this->setXMLAgregarItem("dParAranc", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE702Dpararanc());
            //$xml_de .= $this->setXMLAgregarItem("dNCM", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE703Dncm());
            //$xml_de .= $this->setXMLAgregarItem("dDncpG", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE704Ddncpg());
            //$xml_de .= $this->setXMLAgregarItem("dDncpE", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE705Ddncpe());
            //$xml_de .= $this->setXMLAgregarItem("dGtin", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE706Dgtin());
            //$xml_de .= $this->setXMLAgregarItem("dGtinPq", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE707Dgtinpq());
            $xml_de .= $this->setXMLAgregarItem("dDesProSer", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser());
            $xml_de .= $this->setXMLAgregarItem("cUniMed", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE709Cunimed());
            $xml_de .= $this->setXMLAgregarItem("dDesUniMed", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed());
            $xml_de .= $this->setXMLAgregarItem("dCantProSer", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser());
            //$xml_de .= $this->setXMLAgregarItem("cPaisOrig", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE712Cpaisorig());
            //$xml_de .= $this->setXMLAgregarItem("dDesPaisOrig", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE713Ddespaisorig());
            $xml_de .= $this->setXMLAgregarItem("dInfItem", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE714Dinfitem());
            //$xml_de .= $this->setXMLAgregarItem("cRelMerc", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE715Crelmerc());
            //$xml_de .= $this->setXMLAgregarItem("dDesRelMerc", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE716Ddesrelmerc());
            //$xml_de .= $this->setXMLAgregarItem("dCanQuiMer", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE717Dcanquimer());
            //$xml_de .= $this->setXMLAgregarItem("dPorQuiMer", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE718Dporquimer());
            //$xml_de .= $this->setXMLAgregarItem("dCDCAnticipo", $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE719Dcdcanticipo());
        }
        
        // -------------------------------------------------------------------------
        // E720 - DE - gDtipDE - gCamItem - gValorItem
        // -------------------------------------------------------------------------
        $xml_de .= $this->setXMLAgregarGrupoIni("gValorItem");
        
        if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){
            $xml_de .= $this->setXMLAgregarItem("dPUniProSer", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser());
            //$xml_de .= $this->setXMLAgregarItem("dTiCamIt", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE725Dticamit());
            $xml_de .= $this->setXMLAgregarItem("dTotBruOpeItem", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE727Dtotbruopeitem());
        }
        
        // -------------------------------------------------------------------------
        // EA001 - DE - gDtipDE - gCamItem - gValorItem - gValorRestaItem
        // -------------------------------------------------------------------------
        if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){
            $xml_de .= $this->setXMLAgregarGrupoIni("gValorRestaItem");
            $xml_de .= $this->setXMLAgregarItem("dDescItem", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem());
            $xml_de .= $this->setXMLAgregarItem("dPorcDesIt", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa003Dporcdesit());
            $xml_de .= $this->setXMLAgregarItem("dDescGloItem", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa004Ddescgloitem());
            $xml_de .= $this->setXMLAgregarItem("dAntPreUniIt", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa006Dantpreuniit());
            $xml_de .= $this->setXMLAgregarItem("dAntGloPreUniIt", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa007Dantglopreuniit());
            $xml_de .= $this->setXMLAgregarItem("dTotOpeItem", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem());
            $xml_de .= $this->setXMLAgregarItem("dTotOpeGs", $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa009Dtotopegs());
            $xml_de .= $this->setXMLAgregarGrupoFin("gValorRestaItem");
        }
        
        $xml_de .= $this->setXMLAgregarGrupoFin("gValorItem");

        // -------------------------------------------------------------------------
        // E730 - DE - gDtipDE - gCamItem - gCamIVA
        // -------------------------------------------------------------------------
        if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){
            $xml_de .= $this->setXMLAgregarGrupoIni("gCamIVA");
            $xml_de .= $this->setXMLAgregarItem("iAfecIVA", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva());
            $xml_de .= $this->setXMLAgregarItem("dDesAfecIVA", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva());
            $xml_de .= $this->setXMLAgregarItem("dPropIVA", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva());
            $xml_de .= $this->setXMLAgregarItem("dTasaIVA", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva());
            $xml_de .= $this->setXMLAgregarItem("dBasGravIVA", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva());
            $xml_de .= $this->setXMLAgregarItem("dLiqIVAItem", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem());
            $xml_de .= $this->setXMLAgregarItem("dBasExe", $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE737Dbasexe());
            $xml_de .= $this->setXMLAgregarGrupoFin("gCamIVA");
        }
        
        // -------------------------------------------------------------------------
        // E750 - DE - gDtipDE - gCamItem - gRasMerc
        // -------------------------------------------------------------------------
        if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){
            $xml_de .= $this->setXMLAgregarGrupoIni("gRasMerc");
            $xml_de .= $this->setXMLAgregarItem("dNumLote", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote());
            $xml_de .= $this->setXMLAgregarItem("dVencMerc", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc());
            $xml_de .= $this->setXMLAgregarItem("dNSerie", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie());
            $xml_de .= $this->setXMLAgregarItem("dNumPedi", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi());
            $xml_de .= $this->setXMLAgregarItem("dNumSegui", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui());
            $xml_de .= $this->setXMLAgregarItem("dNomImp", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp());
            $xml_de .= $this->setXMLAgregarItem("dDirImp", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp());
            $xml_de .= $this->setXMLAgregarItem("dNumFir", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir());
            $xml_de .= $this->setXMLAgregarItem("dNumReg", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg());
            $xml_de .= $this->setXMLAgregarItem("dNumRegEntCom", $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom());
            $xml_de .= $this->setXMLAgregarGrupoFin("gRasMerc");
        }
        
        // -------------------------------------------------------------------------
        // E770 - DE - gDtipDE - gCamItem - gVehNuevo
        // -------------------------------------------------------------------------
        if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
            $xml_de .= $this->setXMLAgregarGrupoIni("gVehNuevo");
            $xml_de .= $this->setXMLAgregarItem("iTipOpVN", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE771Itipopvn());
            $xml_de .= $this->setXMLAgregarItem("dDesTipOpVN", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE772Ddestipopvn());
            $xml_de .= $this->setXMLAgregarItem("dChasis", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE773Dchasis());
            $xml_de .= $this->setXMLAgregarItem("dColor", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE774Dcolor());
            $xml_de .= $this->setXMLAgregarItem("dPotencia", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE775Dpotencia());
            $xml_de .= $this->setXMLAgregarItem("dCapMot", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE776Dcapmot());
            $xml_de .= $this->setXMLAgregarItem("dPNet", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE777Dpnet());
            $xml_de .= $this->setXMLAgregarItem("dPBruto", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE778Dpbruto());
            $xml_de .= $this->setXMLAgregarItem("iTipCom", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE779Itipcom());
            $xml_de .= $this->setXMLAgregarItem("dDesTipCom", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE780Ddestipcom());
            $xml_de .= $this->setXMLAgregarItem("dNroMotor", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE781Dnromotor());
            $xml_de .= $this->setXMLAgregarItem("dCapTracc", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE782Dcaptracc());
            $xml_de .= $this->setXMLAgregarItem("dAnoFab", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE783Danofab());
            $xml_de .= $this->setXMLAgregarItem("cTipVeh", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE784Ctipveh());
            $xml_de .= $this->setXMLAgregarItem("dCapac", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE785Dcapac());
            $xml_de .= $this->setXMLAgregarItem("dCilin", $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE786Dcilin());
            $xml_de .= $this->setXMLAgregarGrupoFin("gVehNuevo");
        }
        
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamItem");
        
    }
   
    // -------------------------------------------------------------------------
    // E790 - DE - gCamEsp
    // -------------------------------------------------------------------------
    if($eku_de_e791_g_cam_esp_g_grup_ener || $eku_de_e800_g_cam_esp_g_grup_seg || $eku_de_e810_g_cam_esp_g_grup_sup || $eku_de_e820_g_cam_esp_g_grup_adi){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamEsp");
    }

    // -------------------------------------------------------------------------
    // E791 - DE - gCamEsp - gGrupEner
    // -------------------------------------------------------------------------
    if($eku_de_e791_g_cam_esp_g_grup_ener){
        $xml_de .= $this->setXMLAgregarGrupoIni("gGrupEner");
        $xml_de .= $this->setXMLAgregarItem("dNroMed", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE792Dnromed());
        $xml_de .= $this->setXMLAgregarItem("dActiv", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE793Dactiv());
        $xml_de .= $this->setXMLAgregarItem("dCateg", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE794Dcateg());
        $xml_de .= $this->setXMLAgregarItem("dLecAnt", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE795Dlecant());
        $xml_de .= $this->setXMLAgregarItem("dLecAct", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE796Dlecact());
        $xml_de .= $this->setXMLAgregarItem("dConKwh", $eku_de_e791_g_cam_esp_g_grup_ener->getEkuE797Dconkwh());
        $xml_de .= $this->setXMLAgregarGrupoFin("gGrupEner");
    }
    
    // -------------------------------------------------------------------------
    // E800 - DE - gCamEsp - gGrupSeg
    // -------------------------------------------------------------------------
    if($eku_de_e800_g_cam_esp_g_grup_seg){
        $xml_de .= $this->setXMLAgregarGrupoIni("gGrupSeg");
        $xml_de .= $this->setXMLAgregarItem("dCodEmpSeg", $eku_de_e800_g_cam_esp_g_grup_seg->getEkuE801Dcodempseg());

        // -------------------------------------------------------------------------
        // EA790 - DE - gCamEsp - gGrupSeg - gGrupPolSeg
        // -------------------------------------------------------------------------
        if($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg){
            $xml_de .= $this->setXMLAgregarGrupoIni("gGrupPolSeg");
            $xml_de .= $this->setXMLAgregarItem("dPoliza", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa791Dpoliza());
            $xml_de .= $this->setXMLAgregarItem("dUnidVig", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa792Dunidvig());
            $xml_de .= $this->setXMLAgregarItem("dVigencia", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa793Dvigencia());
            $xml_de .= $this->setXMLAgregarItem("dNumPoliza", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa794Dnumpoliza());
            $xml_de .= $this->setXMLAgregarItem("dFecIniVig", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa795Dfecinivig());
            $xml_de .= $this->setXMLAgregarItem("dFecFinVig", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa796Dfecfinvig());
            $xml_de .= $this->setXMLAgregarItem("dCodInt", $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa797Dcodint());
            $xml_de .= $this->setXMLAgregarGrupoFin("gGrupPolSeg");
        }

        $xml_de .= $this->setXMLAgregarGrupoFin("gGrupSeg");
    }
    
    // -------------------------------------------------------------------------
    // E810 - DE - gCamEsp - gGrupSup
    // -------------------------------------------------------------------------
    if($eku_de_e810_g_cam_esp_g_grup_sup){
        $xml_de .= $this->setXMLAgregarGrupoIni("gGrupSup");
        $xml_de .= $this->setXMLAgregarItem("dNomCaj", $eku_de_e810_g_cam_esp_g_grup_sup->getEkuE811Dnomcaj());
        $xml_de .= $this->setXMLAgregarItem("dEfectivo", $eku_de_e810_g_cam_esp_g_grup_sup->getEkuE812Defectivo());
        $xml_de .= $this->setXMLAgregarItem("dVuelto", $eku_de_e810_g_cam_esp_g_grup_sup->getEkuE813Dvuelto());
        $xml_de .= $this->setXMLAgregarItem("dDonac", $eku_de_e810_g_cam_esp_g_grup_sup->getEkuE814Ddonac());
        $xml_de .= $this->setXMLAgregarItem("dDesDonac", $eku_de_e810_g_cam_esp_g_grup_sup->getEkuE815Ddesdonac());
        $xml_de .= $this->setXMLAgregarGrupoFin("gGrupSup");
    }
    
    // -------------------------------------------------------------------------
    // E820 - DE - gCamEsp - gGrupAdi
    // -------------------------------------------------------------------------
    if($eku_de_e820_g_cam_esp_g_grup_adi){
        $xml_de .= $this->setXMLAgregarGrupoIni("gGrupAdi");    
        $xml_de .= $this->setXMLAgregarItem("dCiclo", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE821Dciclo());
        $xml_de .= $this->setXMLAgregarItem("dFecIniC", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE822Dfecinic());
        $xml_de .= $this->setXMLAgregarItem("dFecFinC", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE823Dfecfinc());    
        //$xml_de .= $this->setXMLAgregarItem("dVencPag", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE824Dvencpag());    
        //$xml_de .= $this->setXMLAgregarItem("dContrato", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE825Dcontrato());    
        //$xml_de .= $this->setXMLAgregarItem("dSalAnt", $eku_de_e820_g_cam_esp_g_grup_adi->getEkuE826Dsalant());    
        $xml_de .= $this->setXMLAgregarGrupoFin("gGrupAdi");
    }
    
    if($eku_de_e791_g_cam_esp_g_grup_ener || $eku_de_e800_g_cam_esp_g_grup_seg || $eku_de_e810_g_cam_esp_g_grup_sup || $eku_de_e820_g_cam_esp_g_grup_adi){
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamEsp");
    }
    
    // -------------------------------------------------------------------------
    // E900 - DE - gTransp
    // -------------------------------------------------------------------------
    if($eku_de_e900_g_dtip_d_e_g_transp){
        $xml_de .= $this->setXMLAgregarGrupoIni("gTransp");    
        //$xml_de .= $this->setXMLAgregarItem("iTipTrans", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE901Itiptrans());
        //$xml_de .= $this->setXMLAgregarItem("dDesTipTrans", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE902Ddestiptrans());
        $xml_de .= $this->setXMLAgregarItem("iModTrans", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE903Imodtrans());
        $xml_de .= $this->setXMLAgregarItem("dDesModTrans", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE904Ddesmodtrans());
        $xml_de .= $this->setXMLAgregarItem("iRespFlete", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE905Irespflete());
        $xml_de .= $this->setXMLAgregarItem("cCondNeg", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE906Ccondneg());
        //$xml_de .= $this->setXMLAgregarItem("dNuManif", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE907Dnumanif());    
        $xml_de .= $this->setXMLAgregarItem("dNuDespImp", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE908Dnudespimp());
        //$xml_de .= $this->setXMLAgregarItem("dIniTras", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE909Dinitras());    
        //$xml_de .= $this->setXMLAgregarItem("dFinTras", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE910Dfintras());    
        //$xml_de .= $this->setXMLAgregarItem("cPaisDest", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE911Cpaisdest());    
        //$xml_de .= $this->setXMLAgregarItem("dDesPaisDest", $eku_de_e900_g_dtip_d_e_g_transp->getEkuE912Ddespaisdest());    
        $xml_de .= $this->setXMLAgregarGrupoFin("gTransp");
    }
    
    // -------------------------------------------------------------------------
    // E920 - DE - gTransp - gCamSal
    // -------------------------------------------------------------------------
    if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamSal");
        $xml_de .= $this->setXMLAgregarItem("dDirLocSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal());
        $xml_de .= $this->setXMLAgregarItem("dNumCasSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal());
        $xml_de .= $this->setXMLAgregarItem("dComp1Sal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal());
        $xml_de .= $this->setXMLAgregarItem("dComp2Sal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal());
        $xml_de .= $this->setXMLAgregarItem("cDepSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal());
        $xml_de .= $this->setXMLAgregarItem("dDesDepSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal());
        $xml_de .= $this->setXMLAgregarItem("cDisSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal());
        $xml_de .= $this->setXMLAgregarItem("dDesDisSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal());
        $xml_de .= $this->setXMLAgregarItem("cCiuSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal());
        $xml_de .= $this->setXMLAgregarItem("dTelSal", $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamSal");
    }

    // -------------------------------------------------------------------------
    // E940 - DE - gTransp - gCamEnt
    // -------------------------------------------------------------------------
    if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamEnt");
        $xml_de .= $this->setXMLAgregarItem("dDirLocEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent());
        $xml_de .= $this->setXMLAgregarItem("dNumCasEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent());
        $xml_de .= $this->setXMLAgregarItem("dComp1Ent", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent());
        $xml_de .= $this->setXMLAgregarItem("dComp2Ent", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent());
        $xml_de .= $this->setXMLAgregarItem("cDepEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent());
        $xml_de .= $this->setXMLAgregarItem("dDesDepEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent());
        $xml_de .= $this->setXMLAgregarItem("cDisEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent());
        $xml_de .= $this->setXMLAgregarItem("dDesDisEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent());
        $xml_de .= $this->setXMLAgregarItem("cCiuEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent());
        $xml_de .= $this->setXMLAgregarItem("dDesCiuEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent());
        $xml_de .= $this->setXMLAgregarItem("dTelEnt", $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamEnt");
    }
        
    // -------------------------------------------------------------------------
    // E960 - DE - gTransp - gVehTras
    // -------------------------------------------------------------------------
    if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){
        $xml_de .= $this->setXMLAgregarGrupoIni("gVehTras");
        $xml_de .= $this->setXMLAgregarItem("dTiVehTras", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras());
        $xml_de .= $this->setXMLAgregarItem("dMarVeh", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh());
        $xml_de .= $this->setXMLAgregarItem("dTipIdenVeh", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh());
        $xml_de .= $this->setXMLAgregarItem("dNroIDVeh", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh());
        $xml_de .= $this->setXMLAgregarItem("dAdicVeh", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh());
        $xml_de .= $this->setXMLAgregarItem("dNroMatVeh", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh());
        $xml_de .= $this->setXMLAgregarItem("dNroVuelo", $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh());
        $xml_de .= $this->setXMLAgregarGrupoFin("gVehTras");
    }
    
    // -------------------------------------------------------------------------
    // E980 - DE - gTransp - gCamTrans
    // -------------------------------------------------------------------------
    if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamTrans");
        $xml_de .= $this->setXMLAgregarItem("iNatTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans());
        $xml_de .= $this->setXMLAgregarItem("dNomTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans());
        $xml_de .= $this->setXMLAgregarItem("dRucTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans());
        $xml_de .= $this->setXMLAgregarItem("dDVTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans());
        $xml_de .= $this->setXMLAgregarItem("iTipIDTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans());
        $xml_de .= $this->setXMLAgregarItem("dDTipIDTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans());
        $xml_de .= $this->setXMLAgregarItem("dNumIDTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans());
        $xml_de .= $this->setXMLAgregarItem("cNacTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans());
        $xml_de .= $this->setXMLAgregarItem("dDesNacTrans", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans());
        $xml_de .= $this->setXMLAgregarItem("dNumIDChof", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof());
        $xml_de .= $this->setXMLAgregarItem("dNomChof", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof());
        $xml_de .= $this->setXMLAgregarItem("dDomFisc", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc());
        $xml_de .= $this->setXMLAgregarItem("dDirChof", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof());
        $xml_de .= $this->setXMLAgregarItem("dNombAg", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag());
        $xml_de .= $this->setXMLAgregarItem("dRucAg", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag());
        $xml_de .= $this->setXMLAgregarItem("dDVAg", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag());
        $xml_de .= $this->setXMLAgregarItem("dDirAge", $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamTrans");    
    }
    
    $xml_de .= $this->setXMLAgregarGrupoFin("gDtipDE");
    
    // -------------------------------------------------------------------------
    // F001 - DE - gTotSub
    // -------------------------------------------------------------------------
    if($eku_de_f001_g_tot_sub){
        $xml_de .= $this->setXMLAgregarGrupoIni("gTotSub");    
        $xml_de .= $this->setXMLAgregarItem("dSubExe", $eku_de_f001_g_tot_sub->getEkuF002Dsubexe());
        $xml_de .= $this->setXMLAgregarItem("dSubExo", $eku_de_f001_g_tot_sub->getEkuF003Dsubexo());
        $xml_de .= $this->setXMLAgregarItem("dSub5", $eku_de_f001_g_tot_sub->getEkuF004Dsub5());
        $xml_de .= $this->setXMLAgregarItem("dSub10", $eku_de_f001_g_tot_sub->getEkuF005Dsub10());
        $xml_de .= $this->setXMLAgregarItem("dTotOpe", $eku_de_f001_g_tot_sub->getEkuF008Dtotope());
        $xml_de .= $this->setXMLAgregarItem("dTotDesc", $eku_de_f001_g_tot_sub->getEkuF009Dtotdesc());
        $xml_de .= $this->setXMLAgregarItem("dTotDescGlotem", $eku_de_f001_g_tot_sub->getEkuF033Dtotdescglotem());
        $xml_de .= $this->setXMLAgregarItem("dTotAntItem", $eku_de_f001_g_tot_sub->getEkuF034Dtotantitem());
        $xml_de .= $this->setXMLAgregarItem("dTotAnt", $eku_de_f001_g_tot_sub->getEkuF035Dtotant());
        $xml_de .= $this->setXMLAgregarItem("dPorcDescTotal", $eku_de_f001_g_tot_sub->getEkuF010Dporcdesctotal());
        $xml_de .= $this->setXMLAgregarItem("dDescTotal", $eku_de_f001_g_tot_sub->getEkuF011Ddesctotal());
        $xml_de .= $this->setXMLAgregarItem("dAnticipo", $eku_de_f001_g_tot_sub->getEkuF012Danticipo());
        $xml_de .= $this->setXMLAgregarItem("dRedon", $eku_de_f001_g_tot_sub->getEkuF013Dredon());
        $xml_de .= $this->setXMLAgregarItem("dComi", $eku_de_f001_g_tot_sub->getEkuF025Dcomi());
        $xml_de .= $this->setXMLAgregarItem("dTotGralOpe", $eku_de_f001_g_tot_sub->getEkuF014Dtotgralope());
        $xml_de .= $this->setXMLAgregarItem("dIVA5", $eku_de_f001_g_tot_sub->getEkuF015Diva5());
        $xml_de .= $this->setXMLAgregarItem("dIVA10", $eku_de_f001_g_tot_sub->getEkuF016Diva10());
        $xml_de .= $this->setXMLAgregarItem("dLiqTotIVA5", $eku_de_f001_g_tot_sub->getEkuF036Dliqtotiva5());
        $xml_de .= $this->setXMLAgregarItem("dLiqTotIVA10", $eku_de_f001_g_tot_sub->getEkuF037Dliqtotiva10());
        $xml_de .= $this->setXMLAgregarItem("dIVAComi", $eku_de_f001_g_tot_sub->getEkuF026Divacomi());
        $xml_de .= $this->setXMLAgregarItem("dTotIVA", $eku_de_f001_g_tot_sub->getEkuF017Dtotiva());
        $xml_de .= $this->setXMLAgregarItem("dBaseGrav5", $eku_de_f001_g_tot_sub->getEkuF018Dbasegrav5());
        $xml_de .= $this->setXMLAgregarItem("dBaseGrav10", $eku_de_f001_g_tot_sub->getEkuF019Dbasegrav10());
        $xml_de .= $this->setXMLAgregarItem("dTBasGraIVA", $eku_de_f001_g_tot_sub->getEkuF020Dtbasgraiva());
        $xml_de .= $this->setXMLAgregarItem("dTotalGs", $eku_de_f001_g_tot_sub->getEkuF023Dtotalgs());
        $xml_de .= $this->setXMLAgregarGrupoFin("gTotSub");
    }
    
    // -------------------------------------------------------------------------
    // G001 - DE - gCamGen
    // -------------------------------------------------------------------------
    if($eku_de_g001_g_cam_gen){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamGen");
        $xml_de .= $this->setXMLAgregarItem("dOrdCompra",$eku_de_g001_g_cam_gen->getEkuG002Dordcompra());
        $xml_de .= $this->setXMLAgregarItem("dOrdVta", $eku_de_g001_g_cam_gen->getEkuG003Dordvta());
        $xml_de .= $this->setXMLAgregarItem("dAsiento", $eku_de_g001_g_cam_gen->getEkuG004Dasiento());
    }
    
    // -------------------------------------------------------------------------
    // G050 - DE - gCamGen - gCamCarg
    // -------------------------------------------------------------------------
    if($eku_de_g050_g_cam_gen_g_cam_carg){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamCarg");
        $xml_de .= $this->setXMLAgregarItem("cUniMedTotVol", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol());
        $xml_de .= $this->setXMLAgregarItem("dDesUniMedTotVol", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol());
        $xml_de .= $this->setXMLAgregarItem("dTotVolMerc", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc());
        $xml_de .= $this->setXMLAgregarItem("cUniMedTotPes", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes());
        $xml_de .= $this->setXMLAgregarItem("dDesUniMedTotPes", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes());
        $xml_de .= $this->setXMLAgregarItem("dTotPesMerc", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc());
        $xml_de .= $this->setXMLAgregarItem("iCarCarga", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga());
        $xml_de .= $this->setXMLAgregarItem("dDesCarCarga", $eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamCarg");
    }
    
    if($eku_de_g001_g_cam_gen){
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamGen");
    }
    
    // -------------------------------------------------------------------------
    // H001 - DE - gCamDEAsoc
    // -------------------------------------------------------------------------
    if($eku_de_h001_g_cam_d_e_asoc){
        $xml_de .= $this->setXMLAgregarGrupoIni("gCamDEAsoc");
        $xml_de .= $this->setXMLAgregarItem("iTipDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso());
        $xml_de .= $this->setXMLAgregarItem("dDesTipDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso());
        $xml_de .= $this->setXMLAgregarItem("dCdCDERef", $eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef());
        $xml_de .= $this->setXMLAgregarItem("dNTimDI", $eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi());
        $xml_de .= $this->setXMLAgregarItem("dEstDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso());
        $xml_de .= $this->setXMLAgregarItem("dPExpDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso());
        $xml_de .= $this->setXMLAgregarItem("dNumDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso());
        $xml_de .= $this->setXMLAgregarItem("iTipoDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso());
        $xml_de .= $this->setXMLAgregarItem("dDTipoDocAso", $eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso());
        $xml_de .= $this->setXMLAgregarItem("dFecEmiDI", $eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi());
        $xml_de .= $this->setXMLAgregarItem("dNumComRet", $eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret());
        $xml_de .= $this->setXMLAgregarItem("dNumResCF", $eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf());
        $xml_de .= $this->setXMLAgregarItem("iTipCons", $eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons());
        $xml_de .= $this->setXMLAgregarItem("dDesTipCons", $eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons());
        $xml_de .= $this->setXMLAgregarItem("dNumCons", $eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons());
        $xml_de .= $this->setXMLAgregarItem("dNumControl", $eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol());
        $xml_de .= $this->setXMLAgregarGrupoFin("gCamDEAsoc");
    }
    
    $xml_de .= $this->setXMLAgregarGrupoFin("DE");
        
        
    /*
    // -------------------------------------------------------------------------
    // I001 - Signature
    // -------------------------------------------------------------------------
    $xml_de .= $this->setXMLAgregarGrupoIni("Signature", 'xmlns="http://www.w3.org/2000/09/xmldsig#"');
    $xml_de .= $this->setXMLAgregarGrupoFin("Signature");
    
    // -------------------------------------------------------------------------
    // J001 - gCamFuFD
    // -------------------------------------------------------------------------
    $xml_de .= $this->setXMLAgregarGrupoIni("gCamFuFD");
    
    $xml_de .= $this->setXMLAgregarGrupoIni("dCarQR");
    $xml_de .= $this->setXMLAgregarGrupoFin("dCarQR");
    
    $xml_de .= $this->setXMLAgregarGrupoFin("gCamFuFD");
    */
    
    $xml_de.= '
</rDE>
';

        $file = fopen(DbConfig::PATH_ABSOLUTO."ekuatia/archivo.xml","w+");
        fwrite($file, $xml_de);
        fclose($file);
        
        return $xml_de;
    }
    
    /**
     * 
     */
    public function setAgregarQrAlXmlDEFirmado($xml_de_firmado){

        $qr_string = $this->getQRString();
        
        // -------------------------------------------------------------------------
        // J001 - gCamFuFD
        // -------------------------------------------------------------------------
        $documento = new DOMDocument();
        $documento->loadXML($xml_de_firmado);        
        
        $xml_gCamFuFD = $documento->createElement('gCamFuFD');
        
        $xml_dCarQR = $documento->createElement('dCarQR', $qr_string);
        $xml_gCamFuFD->appendChild($xml_dCarQR);
        
        $documento->documentElement->appendChild($xml_gCamFuFD);
        
        $xml_de_firmado = $documento->saveXML($documento->documentElement);
                
        //$file = fopen(DbConfig::PATH_ABSOLUTO."ekuatia/archivo.xml","w+");
        //fwrite($file, $xml_de_firmado);
        //fclose($file);
        
        return $xml_de_firmado;
    }
    
    /**
     * 
     */
    public function setFirmarXmlDERobRichards($xml_de){
        //Gral::prr($this);
        //exit;

        // ---------------------------------------------------------------------
        // Cargar el documento XML a firmar
        // ---------------------------------------------------------------------
        $xml = new DOMDocument();
        $xml->loadXML($xml_de);
        $xml->formatOutput = false;
        $xml->preserveWhiteSpace = false;

        $documento->version = "1.0";
        $documento->encoding = "UTF-8";
        
        $xml_de = $xml->getElementsByTagName("DE")->item(0);
        $xml_rde = $xml->getElementsByTagName("rDE")->item(0);
        $xml_rde = $xml->documentElement;
        
        // Path del Certificado PFX
        $certificate_pfx_path = Ekuatia::getCertificadoPFXFilePath();

        $certificado = file_get_contents($certificate_pfx_path);
        $contrasena  = Ekuatia::getCertificadoPFXPass();

        openssl_pkcs12_read($certificado, $clave, $contrasena);
        $clave_privada        = $clave['pkey'];
        $cadena_certificacion = $clave['cert'];

        $objDSig = new XMLSecurityDSig('', array('prefix' => 'ds'));
        $objDSig->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);

        $objDSig->addReference(
            $xml_de,
            XMLSecurityDSig::SHA256,
            array(
                'http://www.w3.org/2000/09/xmldsig#enveloped-signature', 
                XMLSecurityDSig::EXC_C14N
                    ),
            array(
                'force_uri' => true, 
                'overwrite' => false,
                'prefix' => null,
                )
        );

        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA256, array('type' => 'private'));
        $objKey->loadKey($clave_privada);
        $objDSig->sign($objKey);

        $objDSig->add509Cert($cadena_certificacion, true);
        $objDSig->appendSignature($xml->documentElement);

        $xmlString  = $xml->saveXML();
        //file_put_contents($path_signed, $xmlString  );

        //echo $xml->saveXML();
        
        $xml_de_firmado = $xml->saveXML($xml_rde);
        //echo($xml_de_firmado);
        //exit;
        
        // ---------------------------------------------------------------------
        // se recupera firma y digest value desde el XML
        // ---------------------------------------------------------------------
        $xmls = new DOMDocument();
        $xmls->loadXML($xml_de_firmado);
        $DigestValue = $xmls->getElementsByTagName("DigestValue")->item(0);
        $SignatureValue = $xmls->getElementsByTagName("SignatureValue")->item(0);
        $signature_base64 = $SignatureValue->nodeValue;
        $digestValue = $DigestValue->nodeValue;
                
        // ---------------------------------------------------------------------
        // se registra el Digest Value, que se utiliza luego en el QR
        // ---------------------------------------------------------------------
        $this->setInicializarDEGrupoI001($signature_base64, $digestValue);
                
        return $xml_de_firmado;
    }

    /**
     * 
     */
    public function getCodigoDeControlCDC(){
        $cdc_codigo_de_control = "";        

        // ---------------------------------------------------------------------
        // Datos Inherentes del DE
        // ---------------------------------------------------------------------
        $eku_de_b001_g_ope_d_e = $this->getEkuDeB001GOpeDE();
        if($eku_de_b001_g_ope_d_e){
            //$eku_de_b001_g_ope_d_e = new EkuDeB001GOpeDE();
            
            $eku_B002_itipemi = $eku_de_b001_g_ope_d_e->getEkuB002Itipemi();
            $eku_B004_dcodseg = $eku_de_b001_g_ope_d_e->getEkuB004Dcodseg();
        }
        
        // ---------------------------------------------------------------------
        // Datos Generales del Timbrado
        // ---------------------------------------------------------------------
        $eku_de_c001_g_timb = $this->getEkuDeC001GTimb();
        if($eku_de_c001_g_timb){
            //$eku_de_c001_g_timb = new EkuDeC001GTimb();
            
            $eku_C002_itide = $eku_de_c001_g_timb->getEkuC002Itide();
            $eku_C005_dest = $eku_de_c001_g_timb->getEkuC005Dest();
            $eku_C006_dpunexp = $eku_de_c001_g_timb->getEkuC006Dpunexp();
            $eku_C007_dnumdoc = $eku_de_c001_g_timb->getEkuC007Dnumdoc();
            
            $eku_C002_itide_saneado = str_pad($eku_C002_itide, 2, 0, STR_PAD_LEFT);
        }

        // ---------------------------------------------------------------------
        // Datos Generales del DE
        // ---------------------------------------------------------------------
        $eku_de_d001_g_dat_gral_ope = $this->getEkuDeD001GDatGralOpe();
        if($eku_de_d001_g_dat_gral_ope){
            //$eku_de_d001_g_dat_gral_ope = new EkuDeD001GDatGralOpe();
            
            $eku_D002_dfeemide = $eku_de_d001_g_dat_gral_ope->getEkuD002Dfeemide();
            
            $eku_D002_dfeemide_saneado = substr($eku_D002_dfeemide, 0, 10);
            $eku_D002_dfeemide_saneado = str_replace("-", "", $eku_D002_dfeemide_saneado);
        }
        
        // ---------------------------------------------------------------------
        // Datos Generales de la operacion comercial
        // ---------------------------------------------------------------------
        $eku_de_d010_g_dat_gral_ope_g_ope_com = $this->getEkuDeD010GDatGralOpeGOpeCom();
        if($eku_de_d010_g_dat_gral_ope_g_ope_com){
            //$eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
            
            //$eku_de_d010_g_dat_gral_ope_g_ope_com->geteku
        }        
        
        // ---------------------------------------------------------------------
        // Datos del Emisor
        // ---------------------------------------------------------------------
        $eku_de_d100_g_dat_gral_ope_g_emis = $this->getEkuDeD100GDatGralOpeGEmis();
        if($eku_de_d100_g_dat_gral_ope_g_emis){
            //$eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
            
            $eku_D101_drucem = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem();                        
            $eku_D102_ddvemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi();
            $eku_D103_itipcont = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont();
            
            $eku_D101_drucem_saneado = str_pad($eku_D101_drucem, 8, 0, STR_PAD_LEFT);
            $eku_D102_ddvemi_saneado = str_pad($eku_D102_ddvemi, 1, 0, STR_PAD_LEFT);            
        }
        
        // ---------------------------------------------------------------------
        // Se compone el CDC
        // ---------------------------------------------------------------------
        $cdc_codigo_de_control.= $eku_C002_itide_saneado;
        $cdc_codigo_de_control.= $eku_D101_drucem_saneado;
        $cdc_codigo_de_control.= $eku_D102_ddvemi_saneado;
        $cdc_codigo_de_control.= $eku_C005_dest;
        $cdc_codigo_de_control.= $eku_C006_dpunexp;
        $cdc_codigo_de_control.= $eku_C007_dnumdoc;
        $cdc_codigo_de_control.= $eku_D103_itipcont;
        $cdc_codigo_de_control.= $eku_D002_dfeemide_saneado;
        $cdc_codigo_de_control.= $eku_B002_itipemi;
        $cdc_codigo_de_control.= $eku_B004_dcodseg;
        
        $digito_verificador = Gral::getDigitoVerificadorM11($cdc_codigo_de_control);
        $cdc_codigo_de_control.= $digito_verificador;
        
        return $cdc_codigo_de_control;
    }
    
    /**
     * 
     */
    public function getCodigoSeguridadDeCDC(){
        $cds = str_pad(rand(1, 999999999), 9, 0, STR_PAD_LEFT);        
        return $cds;
    }
    
    /**
     * 
     */
    public function getQRString(){
        
        $eku_de_d001_g_dat_gral_ope = $this->getEkuDeD001GDatGralOpe();
        $eku_de_d200_g_dat_gral_ope_g_dat_rec = $this->getEkuDeD200GDatGralOpeGDatRec();
        $eku_de_e700_g_dtip_d_e_g_cam_items = $this->getEkuDeE700GDtipDEGCamItems(null, null, true);
        $eku_de_f001_g_tot_sub = $this->getEkuDeF001GTotSub();
        $eku_de_i001_signature = $this->getEkuDeI001Signature();
                        
        $ampersand = "&amp;";
        $ampersand = "&";
        //$ampersand = PHP_EOL;
        
        $qr_string_parametros = "";
        $qr_string_parametros.= "nVersion=".$this->getEkuDverfor();
        $qr_string_parametros.= $ampersand."Id=".$this->getEkuA002IdCdc();
        $qr_string_parametros.= $ampersand."dFeEmiDE=".bin2hex($eku_de_d001_g_dat_gral_ope->getEkuD002Dfeemide()); // se convierte a hexa
        if(trim($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec()) != ""){
            $qr_string_parametros.= $ampersand."dRucRec=".$eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec();
        }
        if(trim($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec()) != ""){
            $qr_string_parametros.= $ampersand."dNumIDRec=".$eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec();
        }
        $qr_string_parametros.= $ampersand."dTotGralOpe=".$eku_de_f001_g_tot_sub->getEkuF014Dtotgralope();
        $qr_string_parametros.= $ampersand."dTotIVA=".$eku_de_f001_g_tot_sub->getEkuF017Dtotiva();
        $qr_string_parametros.= $ampersand."cItems=".count($eku_de_e700_g_dtip_d_e_g_cam_items);
        $qr_string_parametros.= $ampersand."DigestValue=".bin2hex($eku_de_i001_signature->getCodigo()); // se convierte a hexa
        $qr_string_parametros.= $ampersand."IdCSC=".Ekuatia::getEkuatiaCscId();

        // ---------------------------------------------------------------------
        // se genera el hash del QR, incluyendo el codigo secreto
        // ---------------------------------------------------------------------
        $cHashQR = $qr_string_parametros.Ekuatia::getEkuatiaCsc();
        $cHashQR = hash('sha256', $cHashQR);

        $qr_string_parametros.= $ampersand."cHashQR=".$cHashQR;
        
        $qr_string_parametros = str_replace($ampersand, "&amp;", $qr_string_parametros);
        
        $qr_string = "";        
        $qr_string.= Ekuatia::getEkuatiaQRUrlBase();
        $qr_string.= "?";
        $qr_string.= $qr_string_parametros;        
        
        //echo $qr_string; exit;
        return $qr_string;
    }
        
    /**
     * 
     */
    public function getDescripcionCompleta(){
        
        //$eku_de_arsch01_resp = new EkuDeArsch01Resp();
        //$eku_de_arsch01_resp_mensaje = new EkuDeArsch01RespMensaje();
        
        $eku_de_asch01_req = $this->getEkuDeAsch01Req();
        if($eku_de_asch01_req){
            $eku_de_arsch01_resp = $eku_de_asch01_req->getEkuDeArsch01Resp();
            if($eku_de_arsch01_resp){
                $eku_de_arsch01_resp_mensajes = $eku_de_arsch01_resp->getEkuDeArsch01RespMensajes();
            }
        }

        //Gral::prr($this);
        //Gral::prr($eku_de_asch01_req);
        //Gral::prr($eku_de_arsch01_resp);
        //Gral::prr($eku_de_arsch01_resp_mensajes);

        $texto = "";
        $texto.= $this->getId();
        $texto.= " - ";
        $texto.= $this->getEkuA002IdCdc();
        $texto.= " - ";
        $texto.= $this->getEkuA004Dfecfirma();
        if($eku_de_arsch01_resp){
            $texto.= " - ";
            $texto.= strtoupper($eku_de_arsch01_resp->getEkuArsch01Pp050Destres());
            
            foreach($eku_de_arsch01_resp_mensajes as $eku_de_arsch01_resp_mensaje){
                $texto.= " - ";
                $texto.= $eku_de_arsch01_resp_mensaje->getEkuArsch01Pp052Dcodres();
                $texto.= " - ";
                $texto.= $eku_de_arsch01_resp_mensaje->getEkuArsch01Pp053Dmsgres();
            }
        }
        
        return $texto;
    }
    
    /**
     * Devuelve el comprobante vinculado al EkuDe
     * VtaFactura / VtaNotaCredito / VtaNotaDebito / VtaRemito
     */
    public function getObjComprobanteVinculado(){
        
        // ---------------------------------------------------------------------
        // si es una VtaFactura
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_EKU_DE_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_factura = EkuDeVtaFactura::getOxArray($array);
        if($eku_de_vta_factura){
            return $eku_de_vta_factura->getVtaFactura();
        }
                
        // ---------------------------------------------------------------------
        // si es una VtaNotaCredito
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_EKU_DE_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_nota_credito = EkuDeVtaNotaCredito::getOxArray($array);
        if($eku_de_vta_nota_credito){
            return $eku_de_vta_nota_credito->getVtaNotaCredito();
        }

        // ---------------------------------------------------------------------
        // si es una VtaNotaDebito
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => EkuDeVtaNotaDebito::GEN_ATTR_MIN_EKU_DE_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaNotaDebito::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_nota_debito = EkuDeVtaNotaDebito::getOxArray($array);
        if($eku_de_vta_nota_debito){
            return $eku_de_vta_nota_debito->getVtaNotaDebito();
        }

        // ---------------------------------------------------------------------
        // si es una VtaRemito
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => EkuDeVtaRemito::GEN_ATTR_MIN_EKU_DE_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaRemito::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_remito = EkuDeVtaRemito::getOxArray($array);
        if($eku_de_vta_remito){
            return $eku_de_vta_remito->getVtaRemito();
        }        
        
        return false;
    }
    
    /**
     * 
     */
    public function getSIFEN_DTE_URL(){
        $url = "";
        
        $eku_de_j001_g_cam_fu_f_d = $this->getEkuDeJ001GCamFuFD();
        $url = $eku_de_j001_g_cam_fu_f_d->getEkuJ002Dcarqr();
        $url = str_replace("&amp;", "&", $url);
        
        return $url;
    }

    /**
     * 
     */
    public function getSIFEN_DTE_XML(){
        $xml = "";
        
        $eku_de_asch01_req = $this->getEkuDeAsch01Req();
        if($eku_de_asch01_req){
            $xml = $eku_de_asch01_req->getEkuAsch03Xde();
        }
        
        return $xml;
    }
    
    /**
     * 
     */
    public function getCdcFormateadoParaComprobante(){
        $texto = "";
        
        $texto = $this->getEkuA002IdCdc();
        
        // Dividimos el string en grupos de 4 caracteres
        $arr_texto = str_split($texto, 4);

        // Unimos los grupos con espacios
        $texto = implode(" ", $arr_texto);
        
        return $texto;
    }
    
    /**
     * 
     */
    public function getConsultarEventosEnSIFEN(){
        $dId = 1;
        $dCDC = $this->getEkuA002IdCdc();
        
        $result = Ekuatia::getEkuatiaConsultaDe($dId, $dCDC);
        //Gral::prr($result);
        
        $dFecProc = $result->dFecProc;
        $dCodRes = $result->dCodRes;
        $dMsgRes = $result->dMsgRes;
        
        $array_datos_sifen['eku_de_id'] = $this->getId();
        $array_datos_sifen['dCDC'] = $dCDC;
        $array_datos_sifen['dFecProc'] = $dFecProc;
        $array_datos_sifen['dCodRes'] = $dCodRes;
        $array_datos_sifen['dMsgRes'] = $dMsgRes;
        
        $xContenDE = $result->xContenDE;
        $xContenDE = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $xContenDE); // se quitan header del xml
        $xContenDE = "<a>".$xContenDE."</a>"; // se agrega un nodo parent para poder procesar con DOMDocument
        
        /*
         * 0420=CDC inexistente
         * 0421=RUC Certificado sin permiso
         * 0422=CDC encontrado
         */
        if($dCodRes == '0422'){
            
            // -----------------------------------------------------------------
            // Se encontro DE en SIFEN
            // -----------------------------------------------------------------
            $xml = new DOMDocument();
            $xml->loadXML($xContenDE);
            $xml_string = $xml->saveXML();

            $xml_xContEv = $xml->getElementsByTagName("xContEv")->item(0);   
            if($xml_xContEv){
                
                $xml_xContEv_rEve = $xml_xContEv->getElementsByTagName("rEve")->item(0);   
                if($xml_xContEv_rEve){

                    $xml_xContEv_rEve_attributes = $xml_xContEv_rEve->attributes;   
                    $xml_xContEv_rEve_Id = $xml_xContEv_rEve_attributes->getNamedItem("Id")->nodeValue;   
                    
                    $xml_xContEv_rEve_dFecFirma = $xml_xContEv_rEve->getElementsByTagName("dFecFirma")->item(0)->nodeValue;   
                    
                    $xml_xContEv_gGroupTiEvt = $xml_xContEv->getElementsByTagName("gGroupTiEvt")->item(0);   
                    if($xml_xContEv_gGroupTiEvt){

                        $xml_xContEv_gGroupTiEvt_rGeVeCan = $xml_xContEv_gGroupTiEvt->getElementsByTagName("rGeVeCan")->item(0);   

                        // -----------------------------------------------------------------
                        // Tiene Evento de Cancelacion (PROPIO)
                        // -----------------------------------------------------------------
                        if($xml_xContEv_gGroupTiEvt_rGeVeCan){
        
                            $xml_xContEv_gGroupTiEvt_rGeVeCan_id = $xml_xContEv_gGroupTiEvt_rGeVeCan->getElementsByTagName("Id")->item(0)->nodeValue;   
                            $xml_xContEv_gGroupTiEvt_rGeVeCan_mOtEve = $xml_xContEv_gGroupTiEvt_rGeVeCan->getElementsByTagName("mOtEve")->item(0)->nodeValue;   

                            
                            $array_evento_sifen['eku_eve_tipo_evento_codigo'] = EkuEveTipoEvento::TIPO_CANCELACION;
                            $array_evento_sifen['id'] = $xml_xContEv_rEve_Id;
                            $array_evento_sifen['mOtEve'] = $xml_xContEv_gGroupTiEvt_rGeVeCan_mOtEve;
                            $array_evento_sifen['dFecFirma'] = $xml_xContEv_rEve_dFecFirma;
                            
                            $array_datos_sifen['eventos'][] = $array_evento_sifen;
                            
                            // -----------------------------------------------------
                            // se registra evento encontrado del DE
                            // -----------------------------------------------------
                            /*
                            $eku_eve = $this->setImporteEventoEmisorCancelacion($array_datos_sifen);
                            if($eku_eve){
                                // ---------------------------------------------
                                // se registra cancelacion del comprobante original
                                // ---------------------------------------------
                                $vta_comprobante = $this->getObjComprobanteVinculado();
                                if($vta_comprobante){
                                    //$vta_comprobante->setVtaCompro();
                                }
                            }
                            */
                            
                        }

                        //file_put_contents(DbConfig::PATH_ABSOLUTO. 'prcs/ekuatia/aaaaaaaaaaa.xml', $xml->saveXML($xml_xContEv_gGroupTiEvt_rGeVeCan));
                        //file_put_contents(DbConfig::PATH_ABSOLUTO. 'prcs/ekuatia/aaaaaaaaaaa.xml', print_r($xml_xContEv_gGroupTiEvt_rGeVeCan, true));
                    }
                }
            }
        }
        
        return $array_datos_sifen;
    }
    
    /**
     * 
     */
    public function setImporteEventoEmisor($array_datos_sifen){
        
        $eku_eve_tipo_evento_codigo = $array_datos_sifen['eku_eve_tipo_evento_codigo'];
        $id = $array_datos_sifen['id'];
        $mOtEve = $array_datos_sifen['mOtEve'];
        $dFecFirma = $array_datos_sifen['dFecFirma'];
        
        $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo($eku_eve_tipo_evento_codigo);
        
        $array = array(
            array('campo' => EkuEve::GEN_ATTR_MIN_EKU_DE_ID, 'valor' => $this->getId()),
            array('campo' => EkuEve::GEN_ATTR_MIN_EKU_EVE_TIPO_EVENTO_ID, 'valor' => $eku_eve_tipo_evento->getId()),
            array('campo' => EkuEve::GEN_ATTR_MIN_EKU_DID, 'valor' => $id),
            array('campo' => EkuEve::GEN_ATTR_MIN_ESTADO, 'valor' => 1),
        );
        $eku_eve = EkuEve::getOxArray($array);
        if(!$eku_eve){
            $eku_eve = new EkuEve();
            $eku_eve->setEkuDeId($this->getId());
            $eku_eve->setEkuEveTipoEventoId($eku_eve_tipo_evento->getId());
            $eku_eve->setEkuDid($id);
            $eku_eve->setEkuObservacion($mOtEve);
            $eku_eve->setEkuDfecfirma($dFecFirma);
            $eku_eve->setEkuXml('');
            $eku_eve->setEkuXmlFirmado('');
            $eku_eve->setEstado(1);
            $eku_eve->save();            
        }
        return $eku_eve;
    }
    
}
?>