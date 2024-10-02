<?php

//https://wswhomo.afip.gov.ar/wsfev1/service.asmx // Funciones
//https://wswhomo.afip.gov.ar/wsfev1/service.asmx?WSDL // para obtener WSDL

// const WSFEURL = "https://wswhomo.afip.gov.ar/wsfev1/service.asmx"; // TEST  (sacar 0000 por precaucion)
// const WSFEURL = "https://servicios1.afip.gov.ar/wsfev1/service.asmx0000"; // produccion  (sacar 0000 por precaucion)

require_once "BWsExceptionHandler.php";
require_once "BWsAa.php";

class BWsAfip {

    const WSDL = "/wsdl/wsfe.wsdl";                                             # The WSDL corresponding to WSFEV1	
    const TA = "xml/TA.xml";                                                    # Archivo con el Token y Sign
    const WSDL_URL = "https://servicios1.afip.gov.ar/wsfev1/service.asmx?WSDL";    # The WSDL corresponding to WSFEV1	
    const LOG_XMLS = true;                                                      # For debugging purposes
    const WSFEURL = "https://servicios1.afip.gov.ar/wsfev1/service.asmx";          # homologacion wsfev1 (testing)

    private $cuit = ''; // CUIT del emisor de las facturas. Solo numeros sin comillas.

    private $path = '/home/pablo/workspace/www/gexteno_kya/comps/afip/';
    //private $path = '/var/www/html/gexteno/kya/comps/afip/';

    /**
     * manejo de errores
     */
    public $error = '';
    public $ObsCode = '';
    public $ObsMsg = '';
    public $Code = '';
    public $Msg = '';

    /**
     * Cliente SOAP
     */
    private $client;

    /**
     * objeto que va a contener el xml de TA
     */
    private $TA;

    /**
     * Constructor
     */
    public function __construct($cuit) {

        $this->cuit = $cuit;

        // seteos en php
        ini_set("soap.wsdl_cache_enabled", "0");

        // validar archivos necesarios (En caso de tener el WSDL local)
        if (!file_exists($this->path . self::WSDL))
            $this->error .= " Error al abrir " . self::WSDL;

        if (!empty($this->error)) {
            throw new Exception('WSFE class. Faltan archivos necesarios para el funcionamiento');
        }

        //$this->client = new SoapClient(self::WSDL_URL, array(
        $this->client = new SoapClient($this->path . self::WSDL, array( // En caso de tener el WSDL local.
            'soap_version' => SOAP_1_2,
            'location' => self::WSFEURL,
            'exceptions' => 0,
            'trace' => 1)
        );
    }

    /**
     * Chequea los errores en la operacion, si encuentra algun error fatal lanza una exepcion
     * si encuentra un error no fatal, loguea lo que paso en $this->error
     */
    private function _checkErrors($results, $method) {
        if (self::LOG_XMLS) {
            file_put_contents("xml/request-" . $method . ".xml", $this->client->__getLastRequest());
            file_put_contents("xml/response-" . $method . ".xml", $this->client->__getLastResponse());
        }

        if (is_soap_fault($results)) {
            throw new Exception('WsFe class. FaultString: ' . $results->faultcode . ' ' . $results->faultstring);
        }

        if ($method == 'FEDummy') {
            return;
        }

        $XXX = $method . 'Result';

        if ($results->$XXX->Errors->Err->Code != 0) {
            //$this->error = "<br>Metodo: " . $method . " <br>Codigo de Error: " . $results->$XXX->Errors->Err->Code . " <br>Mensaje: " . $results->$XXX->Errors->Err->Msg;
            //Gral::prr($this->error);
        }

        //asigna error a variable
        if ($method == 'FECAESolicitar') {
            if ($results->$XXX->FeDetResp->FECAEDetResponse->Observaciones->Obs->Code) {
                $this->ObsCode = $results->$XXX->FeDetResp->FECAEDetResponse->Observaciones->Obs->Code;
                $this->ObsMsg = $results->$XXX->FeDetResp->FECAEDetResponse->Observaciones->Obs->Msg;
//                Gral::prr($results->$XXX->FeDetResp->FECAEDetResponse->Observaciones->Obs);
            }
        }
        $this->Code = $results->$XXX->Errors->Err->Code;
        $this->Msg = $results->$XXX->Errors->Err->Msg;
//        Gral::prr($resuslts->$XXX->Errors->Err);
        //fin asigna error a variable

        return $results->$XXX->Errors->Err->Code != 0 ? true : false;
    }

    /**
     * Abre el archivo de TA xml, si hay algun problema devuelve false
     */
    public function openTA() {
        $this->TA = simplexml_load_file($this->path . self::TA);

        return $this->TA == false ? false : true;
    }

    /**
     * Retorna el ultimo número autorizado.
     */
    public function FECompUltimoAutorizado($punto_venta, $tipo_comprobante) {
        $results = $this->client->FECompUltimoAutorizado(
                array('Auth' => array('Token' => $this->TA->credentials->token,
                        'Sign' => $this->TA->credentials->sign,
                        'Cuit' => $this->cuit),
                    'PtoVta' => $punto_venta,
                    'CbteTipo' => $tipo_comprobante));

        $e = $this->_checkErrors($results, 'FECompUltimoAutorizado');

        return $e == false ? $results->FECompUltimoAutorizadoResult->CbteNro : false;
    }

    /**
     * Solicitud CAE y fecha de vencimiento 
     * Recuperador de cantidad máxima de registros FECAESolicitar / FECAEARegInformativo  (FECompTotXRequest) 
     * Retorna la cantidad máxima de registros que se podrá incluir 
     * en un request al  método FECAESolicitar / FECAEARegInformativo. 
     */
    public function FECAESolicitar($punto_venta, $numero_comprobante, $array_fe, $array_fe_tributos, $array_fe_ivas, $array_fe_comprobante_asociados, $array_fe_opcionals) {

        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
            'FeCAEReq' =>
            array('FeCabReq' =>
                array('CantReg' => 1,
                    'PtoVta' => $punto_venta,
                    'CbteTipo' => $array_fe['CbteTipo']),
                'FeDetReq' =>
                array('FECAEDetRequest' =>
                    array('Concepto' => $array_fe['Concepto'],
                        'DocTipo' => $array_fe['DocTipo'],
                        'DocNro' => $array_fe['DocNro'],
                        'CbteDesde' => $numero_comprobante,
                        'CbteHasta' => $numero_comprobante,
                        'CbteFch' => $array_fe['CbteFch'],
                        'ImpNeto' => $array_fe['ImpNeto'],
                        'ImpTotConc' => $array_fe['ImpTotConc'],
                        'ImpIVA' => $array_fe['ImpIVA'],
                        'ImpTrib' => $array_fe['ImpTrib'],
                        'ImpOpEx' => $array_fe['ImpOpEx'],
                        'ImpTotal' => $array_fe['ImpTotal'],
                        'FchServDesde' => $array_fe['FchServDesde'], //null
                        'FchServHasta' => $array_fe['FchServHasta'], //null
                        'FchVtoPago' => $array_fe['FchVtoPago'], //null
                        'MonId' => $array_fe['MonId'], //PES 
                        'MonCotiz' => $array_fe['MonCotiz'], //1 
                        'CbtesAsoc' => //array(),
                            $array_fe_comprobante_asociados,
                        'Tributos' =>
                        $array_fe_tributos,
                        'Iva' =>
                        $array_fe_ivas,
//                        'Opcionales' =>
//                        array('Opcional' =>
//                            array('Id' => $array_fe_opcional['Id'],
//                                'Valor' => $array_fe_opcional['Valor']),
//                        ),
                    ),
                ),
            ),
        );

//        Gral::pr(' ======================== $params ======================== ');
//        Gral::prr($params);exit;
//        Gral::wLogArray($params);

        $results = $this->client->FECAESolicitar($params);

//        Gral::pr(' ======================== $results ======================== ');
//        Gral::prr($results);
//        Gral::wLogArray($results);
//        Gral::pr(' ========================================================== ');

        $e = $this->_checkErrors($results, 'FECAESolicitar');

        // Asigno respuesta 
        $datos[] = $results->FECAESolicitarResult;
        
        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de documentos de la AFIP
     * @return type
     */
    public function FEParamGetTiposDoc() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposDoc($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposDoc');

        $tipo_documentos = $results->FEParamGetTiposDocResult->ResultGet->DocTipo;

        //asigno respuesta 
        foreach ($tipo_documentos as $tipo_documento) {
            $data['id'] = $tipo_documento->Id;
            $data['descripcion'] = $tipo_documento->Desc;
            $data['fecha_desde'] = $tipo_documento->FchDesde;
            $data['fecha_hasta'] = $tipo_documento->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de conceptos de la AFIP
     * @return type
     */
    public function FEParamGetTiposConcepto() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposConcepto($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposConcepto');

        $tipo_conceptos = $results->FEParamGetTiposConceptoResult->ResultGet->ConceptoTipo;

        //asigno respuesta 
        foreach ($tipo_conceptos as $tipo_concepto) {
            $data['id'] = $tipo_concepto->Id;
            $data['descripcion'] = $tipo_concepto->Desc;
            $data['desde'] = $tipo_concepto->FchDesde;
            $data['hasta'] = $tipo_concepto->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de IVA de la AFIP
     * @return type
     */
    public function FEParamGetTiposIva() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposIva($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposIva');

        $tipo_ivas = $results->FEParamGetTiposIvaResult->ResultGet->IvaTipo;

        //asigno respuesta 
        foreach ($tipo_ivas as $tipo_iva) {
            $data['id'] = $tipo_iva->Id;
            $data['descripcion'] = $tipo_iva->Desc;
            $data['desde'] = $tipo_iva->FchDesde;
            $data['hasta'] = $tipo_iva->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de monedas de la AFIP
     * @return type
     */
    public function FEParamGetTiposMonedas() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposMonedas($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposMonedas');

        $tipo_monedas = $results->FEParamGetTiposMonedasResult->ResultGet->Moneda;

        //asigno respuesta 
        foreach ($tipo_monedas as $tipo_moneda) {
            $data['id'] = $tipo_moneda->Id;
            $data['descripcion'] = $tipo_moneda->Desc;
            $data['desde'] = $tipo_moneda->FchDesde;
            $data['hasta'] = $tipo_moneda->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de opcionales de la AFIP
     * @return type
     */
    public function FEParamGetTiposOpcional() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposOpcional($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposOpcional');

        $tipo_opcionals = $results->FEParamGetTiposOpcionalResult->ResultGet->OpcionalTipo;

        //asigno respuesta 
        foreach ($tipo_opcionals as $tipo_opcional) {
            $data['id'] = $tipo_opcional->Id;
            $data['descripcion'] = $tipo_opcional->Desc;
            $data['desde'] = $tipo_opcional->FchDesde;
            $data['hasta'] = $tipo_opcional->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de tributos de la AFIP
     * @return type
     */
    public function FEParamGetTiposTributos() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposTributos($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposTributos');

        $tipo_tributos = $results->FEParamGetTiposTributosResult->ResultGet->TributoTipo;

        //asigno respuesta 
        foreach ($tipo_tributos as $tipo_tributo) {
            $data['id'] = $tipo_tributo->Id;
            $data['descripcion'] = $tipo_tributo->Desc;
            $data['desde'] = $tipo_tributo->FchDesde;
            $data['hasta'] = $tipo_tributo->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de tributos de la AFIP
     * Este método permite consultar los puntos de venta para ambos tipos 
     * de Código de Autorización (CAE y CAEA) gestionados previamente por la CUIT emisora. 
     * @return type
     */
    public function FEParamGetPtosVenta() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetPtosVenta($params);

        $e = $this->_checkErrors($results, 'FEParamGetPtosVenta');

        $punto_ventas = $results->FEParamGetPtosVentaResult->ResultGet->PtoVenta;

        //asigno respuesta 
        foreach ($punto_ventas as $punto_venta) {
            $data['numero'] = $punto_venta->Nro;
            $data['tipo_emision'] = $punto_venta->EmisionTipo;
            $data['bloqueado'] = $punto_venta->Bloqueado;
            $data['fecha_baja'] = $punto_venta->FchBaja;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Metodo que retorna los tipo de tributos de la AFIP
     * Retorna la última cotización de la base de datos aduanera de la moneda ingresada. Este valor es orientativo. 
     * @return type
     */
    public function FEParamGetCotizacion($moneda_id) {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
            'MonId' => $moneda_id,
        );

        $results = $this->client->FEParamGetCotizacion($params);

        $e = $this->_checkErrors($results, 'FEParamGetCotizacion');

        $afip_cotizacion = $results->FEParamGetCotizacionResult->ResultGet;

        //asigno respuesta 
        $data['moneda_id'] = $afip_cotizacion->MonId;
        $data['moneda_cotizacion'] = $afip_cotizacion->MonCotiz;
        $data['fecha_cotizacion'] = $afip_cotizacion->FchCotiz;

        return $e == false ? $data : false;
    }

    /**
     * Método  para consultar valores referenciales de códigos de paises.
     * Esta operación permite consultar los códigos de paises y descripción de los mismos. 
     * @return type
     */
    public function FEParamGetTiposPaises() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposPaises($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposPaises');

        $tipo_paiss = $results->FEParamGetTiposPaisesResult->ResultGet->PaisTipo;

        //asigno respuesta 
        foreach ($tipo_paiss as $tipo_pais) {
            $data['id'] = $tipo_pais->Id;
            $data['descripcion'] = $tipo_pais->Desc;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Este método permite consultar los tipos de comprobantes habilitados en este WS.
     * @return type
     */
    public function FEParamGetTiposCbte() {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
        );

        $results = $this->client->FEParamGetTiposCbte($params);

        $e = $this->_checkErrors($results, 'FEParamGetTiposCbte');

        $tipo_paiss = $results->FEParamGetTiposCbteResult->ResultGet->CbteTipo;

        //asigno respuesta 
        foreach ($tipo_paiss as $tipo_pais) {
            $data['id'] = $tipo_pais->Id;
            $data['descripcion'] = $tipo_pais->Desc;
            $data['fecha_desde'] = $tipo_pais->FchDesde;
            $data['fecha_hasta'] = $tipo_pais->FchHasta;
            $datos[] = $data;
        }

        return $e == false ? $datos : false;
    }

    /**
     * Método Dummy para verificación de funcionamiento de infraestructura.
     * @return type
     */
    public function FEDummy() {
        $params = array();

        $results = $this->client->FEDummy($params);

        $e = $this->_checkErrors($results, 'FEDummy');

        $dummy = $results->FEDummyResult;

        //asigno respuesta 
        $data['AppServer'] = $dummy->AppServer;
        $data['DbServer'] = $dummy->DbServer;
        $data['AuthServer'] = $dummy->AuthServer;

        return $e == false ? $data : false;
    }

    /**
     * Método  para consultar Comprobantes Emitidos y su código.
     * Esta operación permite consultar mediante tipo, numero de comprobante y punto de 
     * venta los datos de un comprobante ya emitido. Dentro de los datos del comprobante 
     * resultante se obtiene el tipo de emisión utilizado para generar el código de autorización.  
     * @return type
     */
    public function FECompConsultar($punto_venta, $numero_comprobante, $tipo_comprobante) {
        $params = array(
            'Auth' =>
            array('Token' => $this->TA->credentials->token,
                'Sign' => $this->TA->credentials->sign,
                'Cuit' => $this->cuit),
            'FeCompConsReq' =>
            array('CbteTipo' => $tipo_comprobante,
                'CbteNro' => $numero_comprobante,
                'PtoVta' => $punto_venta),
        );

        $results = $this->client->FECompConsultar($params);

        $e = $this->_checkErrors($results, 'FECompConsultar');

        $comprobante = $results->FECompConsultarResult->ResultGet;

        //asigno respuesta 
        $data['concepto'] = $comprobante->Concepto;
        $data['tipo_documento'] = $comprobante->DocTipo;
        $data['numero_documento'] = $comprobante->DocNro;
        $data['comprobante_desde'] = $comprobante->CbteDesde;
        $data['comprobante_hasta'] = $comprobante->CbteHasta;
        $data['comprobante_fecha'] = $comprobante->CbteFch;
        $data['importe_total'] = $comprobante->ImpTotal;
        $data['importe_total_concepto'] = $comprobante->ImpTotConc;
        $data['importe_neto'] = $comprobante->ImpNeto;
        $data['importe_operacion_exenta'] = $comprobante->ImpOpEx;
        $data['importe_tributo'] = $comprobante->ImpTrib;
        $data['importe_iva'] = $comprobante->ImpIVA;
        $data['fecha_servicio_desde'] = $comprobante->FchServDesde;
        $data['fecha_servicio_hasta'] = $comprobante->FchServHasta;
        $data['fecha_vencimiento_pago'] = $comprobante->FchVtoPago;
        $data['moneda_id'] = $comprobante->MonId;
        $data['moneda_cotizacion'] = $comprobante->MonCotiz;

        foreach ($comprobante->CbtesAsoc as $comprobante_asociado) {
            $data_comprobante_asociado['comprobante_asociado']['tipo'] = $comprobante_asociado->Tipo;
            $data_comprobante_asociado['comprobante_asociado']['punto_venta'] = $comprobante_asociado->PtoVta;
            $data_comprobante_asociado['comprobante_asociado']['numero'] = $comprobante_asociado->Nro;
            $data['comprobante_asociados'][] = $data_comprobante_asociado;
        }

        foreach ($comprobante->Tributos as $tributo) {
            $data_tributo['tributo']['id'] = $tributo->Id;
            $data_tributo['tributo']['descripcion'] = $tributo->Desc;
            $data_tributo['tributo']['base_imponible'] = $tributo->BaseImp;
            $data_tributo['tributo']['alicuota'] = $tributo->Alic;
            $data_tributo['tributo']['iporte'] = $tributo->Importe;
            $data['tributos'][] = $data_tributo;
        }

        foreach ($comprobante->Iva as $iva) {
            $data_iva['alicuota_iva']['id'] = $iva->Id;
            $data_iva['alicuota_iva']['base_imponible'] = $iva->BaseImp;
            $data_iva['alicuota_iva']['importe'] = $iva->Importe;

            $data['iva'][] = $data_iva;
        }

        foreach ($comprobante->Opcionales as $opcional) {
            $data_opcional['opcional']['id'] = $opcional->Id;
            $data_opcional['opcional']['valor'] = $opcional->valor;

            $data['opcionales'][] = $data_opcional;
        }

        foreach ($comprobante->Compradores as $comprador) {
            $data_comprador['comprador']['tipo_documento'] = $comprador->DocTipo;
            $data_comprador['comprador']['numero_documento'] = $comprador->DocNro;
            $data_comprador['comprador']['porcentaje'] = $comprador->Porcentaje;

            $data['compradores'][] = $data_comprador;
        }

        $data['resultado'] = $comprobante->Resultado;
        $data['codigo_autorizacion'] = $comprobante->CodAutorizacion;
        $data['tipo_emision'] = $comprobante->EmisionTipo;
        $data['fecha_vencimiento'] = $comprobante->FchVto;
        $data['fecha_proceso'] = $comprobante->FchProceso;

        foreach ($comprobante->Observaciones as $observacion) {
            $data_observacion['observacion']['codigo'] = $observacion->Code;
            $data_observacion['observacion']['mensaje'] = $observacion->Msg;

            $data['observaciones'][] = $data_observacion;
        }

        $data['punto_venta'] = $comprobante->PtoVta;
        $data['tipo_comprobante'] = $comprobante->CbteTipo;

        return $e == false ? $data : false;
    }

}
