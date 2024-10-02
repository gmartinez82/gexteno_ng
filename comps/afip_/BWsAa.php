<?php

// https://wsaahomo.afip.gov.ar/ws/services/LoginCms?WSDL // para obtener WSDL

class BWsAa {

//    const URL = "https://wsaa.afip.gov.ar/ws/services/LoginCms"; // produccion 
    
    const CERT = "keys/gexteno_kya.crt";             # The X.509 certificate in PEM format. Importante setear variable $path
    const PRIVATE_KEY = "keys/gexteno_kya.key";      # The private key correspoding to CERT (PEM). Importante setear variable $path
    const PASSPHRASE = "";                          # The passphrase (if any) to sign
    const PROXY_ENABLE = false;
    const TA = "xml/TA.xml";                        # Archivo con el Token y Sign
    const WSDL = "/wsdl/wsaa.wsdl";                 # The WSDL corresponding to WSAA	
    const WSDL_URL = "https://servicios1.afip.gov.ar/wsfev1/service.asmx?WSDL";    # The WSDL corresponding to WSFEV1	
    const URL = "https://wsaa.afip.gov.ar/ws/services/LoginCms"; // homologacion (testing)

    private $path = '/home/pablo/workspace/www/gexteno_kya/comps/afip/';
    //private $path = '/var/www/html/gexteno/kya/comps/afip/';

    /**
     * manejo de errores
     */
    public $error = '';

    /**
     * Cliente SOAP
     */
    private $client;

    /**
     * servicio del cual queremos obtener la autorizacion
     */
    private $service;

    /**
     * Constructor
     */
    public function __construct($gral_empresa, $service = 'wsfe') {

        $this->service = $service;

        $fp = fopen($this->path . self::PRIVATE_KEY, "w");
        fwrite($fp, $gral_empresa->getAfipKey());
        fclose($fp);

        $fp = fopen($this->path . self::CERT, "w");
        fwrite($fp, $gral_empresa->getAfipCrt());
        fclose($fp);

        // seteos en php
        ini_set("soap.wsdl_cache_enabled", "0");

        // validar archivos necesarios
        if (!file_exists($this->path . self::CERT))
            $this->error .= " <br>Error al obtener el certificado de autorizacion.";
        if (!file_exists($this->path . self::PRIVATE_KEY))
            $this->error .= " <br>Error al obtener la llave de autorizacion.";
        if (!file_exists($this->path . self::WSDL))
            $this->error .= " <br>Error al abrir " . self::WSDL . ".";

        if (!empty($this->error)) {
            throw new Exception('<br>WSAA class. Faltan archivos necesarios para el funcionamiento. <br> Error: ' . $this->error);
        }

        //$this->client = new SoapClient(self::WSDL_URL, array(
        $this->client = new SoapClient($this->path . self::WSDL, array(
            'soap_version' => SOAP_1_2,
            'location' => self::URL,
            'trace' => 1,
            'exceptions' => 0
                )
        );
    }

    /**
     * Crea el archivo xml de TRA
     */
    private function create_TRA() {
        $TRA = new SimpleXMLElement(
                '<?xml version="1.0" encoding="UTF-8"?>' .
                '<loginTicketRequest version="1.0">' .
                '</loginTicketRequest>');
        $TRA->addChild('header');
        $TRA->header->addChild('uniqueId', date('U'));
        $TRA->header->addChild('generationTime', date('c', date('U') - 60));
        $TRA->header->addChild('expirationTime', date('c', date('U') + 60));
        $TRA->addChild('service', $this->service);
        $TRA->asXML($this->path . 'xml/TRA.xml');
    }

    /**
     * Esta función hace que la firma PKCS # 7 use TRA como archivo de entrada, 
     * CERT y PRIVATE_KEY para firmar. Genera un archivo intermedio y finalmente 
     * recorta el encabezado MIME dejando el CMS final requerido por WSAA.
     * @return CMS
     */
    private function sign_TRA() {

        $STATUS = openssl_pkcs7_sign($this->path . "xml/TRA.xml", $this->path . "xml/TRA.tmp", "file://" . $this->path . self::CERT, array("file://" . $this->path . self::PRIVATE_KEY, self::PASSPHRASE), array(), !PKCS7_DETACHED);

        if (!$STATUS)
            throw new Exception("<br>ERROR al generar la firma PKCS#7. <br>");

        $inf = fopen($this->path . "xml/TRA.tmp", "r");
        $i = 0;
        $CMS = "";
        while (!feof($inf)) {
            $buffer = fgets($inf);
            if ($i++ >= 4)
                $CMS .= $buffer;
        }

        fclose($inf);
        unlink($this->path . "xml/TRA.tmp");

        return $CMS;
    }

    /**
     * Conecta con el web service y obtiene el token y sign
     */
    private function call_WSAA($cms) {
        $results = $this->client->loginCms(array('in0' => $cms));

        // para logueo
        file_put_contents($this->path . "xml/request-loginCms.xml", $this->client->__getLastRequest());
        file_put_contents($this->path . "xml/response-loginCms.xml", $this->client->__getLastResponse());

        if (is_soap_fault($results))
            throw new Exception("SOAP Fault: " . $results->faultcode . ': ' . $results->faultstring);

        return $results->loginCmsReturn;
    }

    /**
     * Convertir un XML a Array
     */
    private function xml2array($xml) {
        $json = json_encode(simplexml_load_string($xml));
        return json_decode($json, TRUE);
    }

    /**
     * Funcion principal que llama a las demas para generar el archivo TA.xml
     * que contiene el token y sign
     */
    public function generar_TA() {
        $this->create_TRA();
        $TA = $this->call_WSAA($this->sign_TRA());

        if (!file_put_contents($this->path . self::TA, $TA))
            throw new Exception("Error al generar al archivo TA.xml");

        $this->TA = $this->xml2Array($TA);

        return true;
    }

    /**
     * Obtener la fecha de expiracion del TA, si no existe el archivo, devuelve false
     */
    public function get_expiration() {
        // si no esta en memoria abrirlo
        if (empty($this->TA)) {
            $TA_file = file($this->path . self::TA, FILE_IGNORE_NEW_LINES);
            if ($TA_file) {
                $TA_xml = '';
                for ($i = 0; $i < sizeof($TA_file); $i++)
                    $TA_xml .= $TA_file[$i];
                $this->TA = $this->xml2Array($TA_xml);
                $r = $this->TA['header']['expirationTime'];
            } else {
                $r = false;
            }
        } else {
            $r = $this->TA['header']['expirationTime'];
        }
        return $r;
    }

}
