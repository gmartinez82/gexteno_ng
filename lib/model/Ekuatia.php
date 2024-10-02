<?php 
class Ekuatia 
{
    // -------------------------------------------------------------------------
    const EKUATIA_PRODUCCION = false;
    // -------------------------------------------------------------------------
    
    //const CERTIFICADO_PFX_FILE_PATH = 'MARGARITA-WERTHEIMER.pfx';
    const CERTIFICADO_PFX_FILE_PATH = 'MARGARITA-WERTHEIMER-2024.pfx';
    const CERTIFICADO_PFX_PASS = '271067kns';

    const CERTIFICADO_PEM_FILE_PATH = "key.pem";
    //const EKUATIA_PATH_CERTIFICADO_PEM = DbConfig::PATH_ABSOLUTO."ekuatia/key.pem";
    
    const EKUATIA_API_URL_BASE_PRODUCCION = "https://sifen.set.gov.py/de/ws/";
    const EKUATIA_API_URL_BASE_TEST = "https://sifen-test.set.gov.py/de/ws/";
        
    const EKUATIA_QR_URL_BASE_PRODUCCION = "https://ekuatia.set.gov.py/consultas/qr";
    const EKUATIA_QR_URL_BASE_TEST = "https://ekuatia.set.gov.py/consultas-test/qr";
    //const EKUATIA_QR_URL_BASE_TEST = "https://ekuatia.set.gov.py/consultas/qr"; // reemplazar por la de arriba, solo se utiliza para que no de error el validador de xml del SIFEN
    
    const EKUATIA_CSC_ID_PRODUCCION = '0001x'; // no va la ultima "x"
    const EKUATIA_CSC_ID_TEST = '0001';

    const EKUATIA_CSC_PRODUCCION = '26dC073375621E53b8D16220875B66f7x'; // no va la ultima "x"
    const EKUATIA_CSC_TEST = 'ABCD0000000000000000000000000000';
    
    const TIMBRADO_NUMERO_PRODUCCION = '16472760';
    const TIMBRADO_FECHA_DESDE_PRODUCCION = '2023-06-14';
    const TIMBRADO_AUTORIZACION_PRODUCCION = '364010004234';

    const TIMBRADO_NUMERO_TEST = '80054196';
    const TIMBRADO_FECHA_DESDE_TEST = '2023-06-13';
    const TIMBRADO_AUTORIZACION_TEST = '000000000000';
        
    /**
     * 
     */
    static function getCertificadoPFXFilePath(){
        $file_path = DbConfig::PATH_ABSOLUTO.'ekuatia/'.self::CERTIFICADO_PFX_FILE_PATH;
        return $file_path;
    }

    /**`
     * 
     */
    static function getCertificadoPFXPass(){
        $pass = self::CERTIFICADO_PFX_PASS;
        return $pass;
    }

    /**
     * 
     */
    static function getCertificadoPEMFilePath(){
        $file_path = DbConfig::PATH_ABSOLUTO.'ekuatia/'.self::CERTIFICADO_PEM_FILE_PATH;
        return $file_path;
    }
    
    /**
     * 
     */
    static function getEkuatiaApiUrlBase(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::EKUATIA_API_URL_BASE_PRODUCCION;
        }else{
            $url= self::EKUATIA_API_URL_BASE_TEST;            
        }
        
        return $url;
    }

    /**
     * 
     */
    static function getEkuatiaQRUrlBase(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::EKUATIA_QR_URL_BASE_PRODUCCION;
        }else{
            $url= self::EKUATIA_QR_URL_BASE_TEST;            
        }
        
        return $url;
    }

    /**
     * 
     */
    static function getEkuatiaCscId(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::EKUATIA_CSC_ID_PRODUCCION;
        }else{
            $url= self::EKUATIA_CSC_ID_TEST;            
        }
        
        return $url;
    }

    /**
     * 
     */
    static function getEkuatiaCsc(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::EKUATIA_CSC_PRODUCCION;
        }else{
            $url= self::EKUATIA_CSC_TEST;            
        }
        
        return $url;
    }

    /**
     * 
     */
    static function getTimbradoNumero(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::TIMBRADO_NUMERO_PRODUCCION;
        }else{
            $url= self::TIMBRADO_NUMERO_TEST;            
        }
        
        return $url;
    }

    /**
     * 
     */
    static function getTimbradoFechaDesde(){
        $url = "";
        if(self::EKUATIA_PRODUCCION){
            $url= self::TIMBRADO_FECHA_DESDE_PRODUCCION;
        }else{
            $url= self::TIMBRADO_FECHA_DESDE_TEST;            
        }
        
        return $url;
    }
    
    /**
     * 
     */
    static function getEkuatiaConsultaRuc($dId, $dRUCCons){
        $ekuatia_url_base = self::getEkuatiaApiUrlBase();
        
        $endpoint = $ekuatia_url_base."consultas/consulta-ruc.wsdl?wsdl";
        $endpoint = "https://sifen.set.gov.py/de/ws/consultas/consulta-ruc.wsdl?wsdl"; // produccion

        $options = [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'local_cert' => self::getCertificadoPEMFilePath(),
            'trace' => 1,
            'exceptions' => true,
            'soap_version' => SOAP_1_2,
        ];

        $client = new SoapClient($endpoint, $options);

        $param = [
            "dId" => $dId, 
            "dRUCCons" => $dRUCCons
        ];
        //Gral::prr($param);
        
        $result = $client->rEnviConsRUC($param);
        //Gral::prr($result);
        
        //echo $client->__getLastRequest();
        
        return $result;        
    }

    /**
     * 
     */
    static function getEkuatiaConsultaDe($dId, $dCDC){
        $ekuatia_url_base = self::getEkuatiaApiUrlBase();
    
        $endpoint = $ekuatia_url_base."consultas/consulta.wsdl?wsdl";

        $options = [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'local_cert' => self::getCertificadoPEMFilePath(),
            'trace' => 1,
            'exceptions' => true,
            'soap_version' => SOAP_1_2,
        ];

        $client = new SoapClient($endpoint, $options);

        $param = [
            "dId" => $dId, 
            "dCDC" => $dCDC
        ];        
        //Gral::prr($param);
        
        $result = $client->rEnviConsDe($param);
        //Gral::prr($result);
        
        return $result;        
    }

    /**
     * 
     */
    static function setEkuatiaRecibeDe($dId, $xDe){
        $ekuatia_url_base = self::getEkuatiaApiUrlBase();
        
        //$xsd = "https://ekuatia.set.gov.py/sifen/xsd/DE_v150.xsd";
        $endpoint = $ekuatia_url_base."sync/recibe.wsdl?wsdl";

        $client = new SoapClient(
            $endpoint,
            array(
                'cache_wsdl' => WSDL_CACHE_NONE,
                'local_cert' => self::getCertificadoPEMFilePath(),
                //'location' => $endpoint,
                //'uri' => $endpoint,
                'encoding' => 'UTF-8',
                'trace' => 1,
                'exceptions' => true,
                'soap_version' => SOAP_1_2,
                'use' => SOAP_LITERAL,
                'style' => SOAP_DOCUMENT,
            )
        );
        
        // ---------------------------------------------------------------------
        // Headers,si no se envian devuelve 0160 XML Mal Formado
        // ---------------------------------------------------------------------
        $header = new SoapHeader('');
        $client->__setSoapHeaders($header);  
                
        //$params = new SoapVar('<ns1:rEnviDe xmlns="http://ekuatia.set.gov.py/sifen/xsd"><ns1:dId>'.$dId.'</ns1:dId><ns1:xDE>'.$xDe.'</ns1:xDE></ns1:rEnviDe>', XSD_ANYXML, null, null, null, "http://ekuatia.set.gov.py/sifen/xsd");
        $params = new SoapVar('<rEnviDe xmlns="http://ekuatia.set.gov.py/sifen/xsd"><dId>'.$dId.'</dId><xDE>'.$xDe.'</xDE></rEnviDe>', XSD_ANYXML, null, null, null);
        $result = $client->rEnviDe($params);
        //Gral::prr($result);
        
        //echo $client->__getLastRequest();
        
        return $result;  
   }
   
   /**
     * 
     */
    static function setEkuatiaRecepEventoDe($dId, $dEvReg){
        $ekuatia_url_base = self::getEkuatiaApiUrlBase();
        
        $endpoint = $ekuatia_url_base."eventos/evento.wsdl?wsdl";

        $client = new SoapClient(
            $endpoint,
            array(
                'cache_wsdl' => WSDL_CACHE_NONE,
                'local_cert' => self::getCertificadoPEMFilePath(),
                //'location' => $endpoint,
                //'uri' => $endpoint,
                'encoding' => 'UTF-8',
                'trace' => 1,
                'exceptions' => true,
                'soap_version' => SOAP_1_2,
                'use' => SOAP_LITERAL,
                'style' => SOAP_DOCUMENT,
            )
        );
        
        // ---------------------------------------------------------------------
        // Headers,si no se envian devuelve 0160 XML Mal Formado
        // ---------------------------------------------------------------------
        $header = new SoapHeader('');
        $client->__setSoapHeaders($header);  
        
        //$param = '<rEnviEventoDe xmlns="http://ekuatia.set.gov.py/sifen/xsd"><dId xmlns="http://ekuatia.set.gov.py/sifen/xsd">'.$dId.'</dId><dEvReg xmlns="http://ekuatia.set.gov.py/sifen/xsd"><gGroupGesEve xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ekuatia.set.gov.py/sifen/xsd siRecepEvento_v150.xsd">'.$dEvReg.'</gGroupGesEve></dEvReg></rEnviEventoDe>';        
        //$param = '<rEnviEventoDe xmlns="http://ekuatia.set.gov.py/sifen/xsd" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><dId>'.$dId.'</dId><dEvReg>'.$dEvReg.'</dEvReg></rEnviEventoDe>';        
        $param = $dEvReg;        
        $params = new SoapVar($param, XSD_ANYXML, null, null, null);

        $result = $client->rEnviEventoDe($params);        
        //Gral::prr($result);
        
        //echo $client->__getLastRequest();
        //file_put_contents('xml_evento_firmado.xml', $param);
        //file_put_contents(DbConfig::PATH_ABSOLUTO.'prcs/ekuatia/xml_evento_firmado.xml', $client->__getLastRequest());
        
        return $result;  
   }

}
