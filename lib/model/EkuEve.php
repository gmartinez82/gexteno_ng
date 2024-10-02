<?php

require(__DIR__.'/../../vendor/autoload.php');
use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;

require_once "base/BEkuEve.php";

class EkuEve extends BEkuEve {
    
    /**
     * 
     */
    static function setInicializarRegistroEvento($eku_de, $eku_eve_tipo_evento_id){
        $eku_eve = new EkuEve();
        $eku_eve->setEkuDeId($eku_de->getId());
        $eku_eve->setEkuEveTipoEventoId($eku_eve_tipo_evento_id);
        $eku_eve->setEkuObservacion('');
        $eku_eve->setEkuDfecfirma('');
        $eku_eve->setEkuXml('');
        $eku_eve->setEkuXmlFirmado('');
        $eku_eve->setEstado(1);
        $eku_eve->save();
        
        $eku_eve->setEkuDid($eku_eve->getId());
        $eku_eve->save();
        
        return $eku_eve;
    }
    
    /**
     * 
     */
    static function setRegistrarEventoCancelacion($eku_de, $observacion) {
        $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo(EkuEveTipoEvento::TIPO_CANCELACION);
        
        $eku_eve = self::setInicializarRegistroEvento($eku_de, $eku_eve_tipo_evento->getId());
        
        // ---------------------------------------------------------------------
        // se registra el motivo
        // ---------------------------------------------------------------------
        $eku_eve->setEkuObservacion($observacion);
        $eku_eve->save();
        
        // ---------------------------------------------------------------------
        // se recarga el objeto
        // ---------------------------------------------------------------------
        $eku_eve = EkuEve::getOxId($eku_eve->getId()); // **** RECARGA 
                
        // ---------------------------------------------------------------------
        // se genera el XML
        // ---------------------------------------------------------------------
        $xml_dom = $eku_eve->setGenerarXmlEventoCancelacion();

        // ---------------------------------------------------------------------
        // se recarga el objeto
        // ---------------------------------------------------------------------
        $eku_eve = EkuEve::getOxId($eku_eve->getId()); // **** RECARGA 
        
        // ---------------------------------------------------------------------
        // se fima el XML
        // ---------------------------------------------------------------------
        $eku_eve = $eku_eve->setFirmarXmlEvento($xml_dom);
        
        // ---------------------------------------------------------------------
        // se fima el XML
        // ---------------------------------------------------------------------
        $eku_eve_resp = $eku_eve->setEnviarEventoAlSIFEN();
        
        return $eku_eve_resp;
    }

    /**
     * 
     */
    public function setGenerarXmlEventoCancelacion() {
        
        $eku_de = $this->getEkuDe();
        
        $Id = $this->getId();
        $dFecFirma = date('Y-m-d').'T'.date('H:i:s');
        
        $rGeVeCan_Id = $eku_de->getEkuA002IdCdc();
        $rGeVeCan_mOtEve = $this->getEkuObservacion();

        // Declaración del espacio de nombres XML Schema Instance
        $xsiNamespace = 'http://www.w3.org/2001/XMLSchema-instance';

        // -----------------------------------------------------------------------------
        // se crea XML
        // -----------------------------------------------------------------------------
        $xml = new DOMDocument();
        $xml->formatOutput = false;
        $xml->preserveWhiteSpace = false;

        $xml->version = "1.0";
        $xml->encoding = "UTF-8";

        // -----------------------------------------------------------------------------
        // Crear un elemento rEnviEventoDe
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe = $xml->createElement('rEnviEventoDe');
        $xml_rEnviEventoDe->setAttribute('xmlns', 'http://ekuatia.set.gov.py/sifen/xsd');
        $xml_rEnviEventoDe->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd');
        $xml->appendChild($xml_rEnviEventoDe);

        // -----------------------------------------------------------------------------
        // Elemento dFecFirma
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe_dId = $xml->createElement('dId');
        $xml_rEnviEventoDe_dId->appendChild($xml->createTextNode($Id));
        $xml_rEnviEventoDe->appendChild($xml_rEnviEventoDe_dId);

        // Crear un elemento gGroupGesEve
        $xml_gGroupGesEve = $xml->createElement('gGroupGesEve');
        $xml_gGroupGesEve->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd siRecepEvento_v150.xsd');
        $xml_rEnviEventoDe->appendChild($xml_gGroupGesEve);

        // Crear un elemento rGesEve
        $xml_rGesEve = $xml->createElement('rGesEve');
        $xml_rGesEve->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd siRecepEvento_v150.xsd');
        $xml_gGroupGesEve->appendChild($xml_rGesEve);
        //$xml->appendChild($xml_rGesEve);

        // Crear un elemento rEve
        $xml_rGesEve_rEve = $xml->createElement('rEve');
        $xml_rGesEve_rEve->setAttribute('Id', $Id);
        $xml_rGesEve->appendChild($xml_rGesEve_rEve);

        // -----------------------------------------------------------------------------
        // Elemento dFecFirma
        // -----------------------------------------------------------------------------
        $xml_rGesEve_dFecFirma = $xml->createElement('dFecFirma');
        $xml_rGesEve_dFecFirma->appendChild($xml->createTextNode($dFecFirma));
        $xml_rGesEve_rEve->appendChild($xml_rGesEve_dFecFirma);

        // -----------------------------------------------------------------------------
        // Elemento dVerFor
        // -----------------------------------------------------------------------------
        $xml_rGesEve_dVerFor = $xml->createElement('dVerFor');
        $xml_rGesEve_dVerFor->appendChild($xml->createTextNode(EkuDe::VERSION));
        $xml_rGesEve_rEve->appendChild($xml_rGesEve_dVerFor);

        // -----------------------------------------------------------------------------
        // Elemento dTiGDE
        // -----------------------------------------------------------------------------
        //$xml_rGesEve_dTiGDE = $xml->createElement('dTiGDE');
        //$xml_rGesEve_dTiGDE->appendChild($xml->createTextNode($dTiGDE));
        //$xml_rGesEve_rEve->appendChild($xml_rGesEve_dTiGDE);

        // -----------------------------------------------------------------------------
        // Elemento gGroupTiEvt
        // -----------------------------------------------------------------------------
        $xml_rGesEve_gGroupTiEvt = $xml->createElement('gGroupTiEvt');

        // -----------------------------------------------------------------------------
        // Elemento rGeVeCan (Cancelacion)
        // -----------------------------------------------------------------------------
        $xml_rGesEve_gGroupTiEvt_rGeVeCan = $xml->createElement('rGeVeCan');
        $xml_rGesEve_gGroupTiEvt->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeCan);

        $xml_rGesEve_gGroupTiEvt_rGeVeCan_Id = $xml->createElement('Id');
        $xml_rGesEve_gGroupTiEvt_rGeVeCan_Id->appendChild($xml->createTextNode($rGeVeCan_Id));
        $xml_rGesEve_gGroupTiEvt_rGeVeCan->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeCan_Id);

        $xml_rGesEve_gGroupTiEvt_rGeVeCan_mOtEve = $xml->createElement('mOtEve');
        $xml_rGesEve_gGroupTiEvt_rGeVeCan_mOtEve->appendChild($xml->createTextNode($rGeVeCan_mOtEve));
        $xml_rGesEve_gGroupTiEvt_rGeVeCan->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeCan_mOtEve);

        $xml_rGesEve_rEve->appendChild($xml_rGesEve_gGroupTiEvt);

        // -----------------------------------------------------------------------------
        // Elemento dEvReg
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe_dEvReg = $xml->createElement('dEvReg');
        $xml_rEnviEventoDe_dEvReg->appendChild($xml_gGroupGesEve);
        $xml_rEnviEventoDe->appendChild($xml_rEnviEventoDe_dEvReg);
        
        $xml_evento = $xml->saveXML($xml);
        
        // ---------------------------------------------------------------------
        // se registra el XML en la tabla 
        // ---------------------------------------------------------------------
        $this->setEkuDfecfirma($dFecFirma);
        $this->setEkuDverfor(EkuDe::VERSION);
        $this->setEkuXml($xml_evento);
        $this->save();
        
        return $xml;
    }
    
    /**
     * 
     */
    static function setRegistrarEventoInutilizacion($eku_de, $observacion) {
        $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo(EkuEveTipoEvento::TIPO_INUTILIZACION);
        
        $eku_eve = self::setInicializarRegistroEvento($eku_de, $eku_eve_tipo_evento->getId());
        
        // ---------------------------------------------------------------------
        // se registra el motivo
        // ---------------------------------------------------------------------
        $eku_eve->setEkuObservacion($observacion);
        $eku_eve->save();
        
        // ---------------------------------------------------------------------
        // se recarga el objeto
        // ---------------------------------------------------------------------
        $eku_eve = EkuEve::getOxId($eku_eve->getId()); // **** RECARGA 
                
        // ---------------------------------------------------------------------
        // se genera el XML
        // ---------------------------------------------------------------------
        $xml_dom = $eku_eve->setGenerarXmlEventoInutilizacion();

        // ---------------------------------------------------------------------
        // se recarga el objeto
        // ---------------------------------------------------------------------
        $eku_eve = EkuEve::getOxId($eku_eve->getId()); // **** RECARGA 
        
        // ---------------------------------------------------------------------
        // se fima el XML
        // ---------------------------------------------------------------------
        $eku_eve = $eku_eve->setFirmarXmlEvento($xml_dom);
        
        // ---------------------------------------------------------------------
        // se fima el XML
        // ---------------------------------------------------------------------
        $eku_eve_resp = $eku_eve->setEnviarEventoAlSIFEN();
        
        return $eku_eve_resp;
    }

    /**
     * 
     */
    public function setGenerarXmlEventoInutilizacion() {
        
        $eku_de = $this->getEkuDe();
        
        $Id = $this->getId();
        $dFecFirma = date('Y-m-d').'T'.date('H:i:s');
        
        $rGeVeInu_dNumTim = '80054196';
        $rGeVeInu_dEst = '001';
        $rGeVeInu_dPunExp = '002';
        $rGeVeInu_dNumIn = '0000008';
        $rGeVeInu_dNumFin = '0000008';
        $rGeVeInu_iTiDE = '1'; // 1: Factura Electronica
        $rGeVeInu_mOtEve = $this->getEkuObservacion();

        // Declaración del espacio de nombres XML Schema Instance
        $xsiNamespace = 'http://www.w3.org/2001/XMLSchema-instance';

        // -----------------------------------------------------------------------------
        // se crea XML
        // -----------------------------------------------------------------------------
        $xml = new DOMDocument();
        $xml->formatOutput = false;
        $xml->preserveWhiteSpace = false;

        $xml->version = "1.0";
        $xml->encoding = "UTF-8";

        // -----------------------------------------------------------------------------
        // Crear un elemento rEnviEventoDe
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe = $xml->createElement('rEnviEventoDe');
        $xml_rEnviEventoDe->setAttribute('xmlns', 'http://ekuatia.set.gov.py/sifen/xsd');
        $xml_rEnviEventoDe->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd');
        $xml->appendChild($xml_rEnviEventoDe);

        // -----------------------------------------------------------------------------
        // Elemento dFecFirma
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe_dId = $xml->createElement('dId');
        $xml_rEnviEventoDe_dId->appendChild($xml->createTextNode($Id));
        $xml_rEnviEventoDe->appendChild($xml_rEnviEventoDe_dId);

        // Crear un elemento gGroupGesEve
        $xml_gGroupGesEve = $xml->createElement('gGroupGesEve');
        $xml_gGroupGesEve->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd siRecepEvento_v150.xsd');
        $xml_rEnviEventoDe->appendChild($xml_gGroupGesEve);

        // Crear un elemento rGesEve
        $xml_rGesEve = $xml->createElement('rGesEve');
        $xml_rGesEve->setAttributeNS($xsiNamespace, 'xsi:schemaLocation', 'http://ekuatia.set.gov.py/sifen/xsd siRecepEvento_v150.xsd');
        $xml_gGroupGesEve->appendChild($xml_rGesEve);
        //$xml->appendChild($xml_rGesEve);

        // Crear un elemento rEve
        $xml_rGesEve_rEve = $xml->createElement('rEve');
        $xml_rGesEve_rEve->setAttribute('Id', $Id);
        $xml_rGesEve->appendChild($xml_rGesEve_rEve);

        // -----------------------------------------------------------------------------
        // Elemento dFecFirma
        // -----------------------------------------------------------------------------
        $xml_rGesEve_dFecFirma = $xml->createElement('dFecFirma');
        $xml_rGesEve_dFecFirma->appendChild($xml->createTextNode($dFecFirma));
        $xml_rGesEve_rEve->appendChild($xml_rGesEve_dFecFirma);

        // -----------------------------------------------------------------------------
        // Elemento dVerFor
        // -----------------------------------------------------------------------------
        $xml_rGesEve_dVerFor = $xml->createElement('dVerFor');
        $xml_rGesEve_dVerFor->appendChild($xml->createTextNode(EkuDe::VERSION));
        $xml_rGesEve_rEve->appendChild($xml_rGesEve_dVerFor);

        // -----------------------------------------------------------------------------
        // Elemento dTiGDE
        // -----------------------------------------------------------------------------
        //$xml_rGesEve_dTiGDE = $xml->createElement('dTiGDE');
        //$xml_rGesEve_dTiGDE->appendChild($xml->createTextNode($dTiGDE));
        //$xml_rGesEve_rEve->appendChild($xml_rGesEve_dTiGDE);

        // -----------------------------------------------------------------------------
        // Elemento gGroupTiEvt
        // -----------------------------------------------------------------------------
        $xml_rGesEve_gGroupTiEvt = $xml->createElement('gGroupTiEvt');

        // -----------------------------------------------------------------------------
        // Elemento rGeVeInu (Inutilizacion)
        // -----------------------------------------------------------------------------
        $xml_rGesEve_gGroupTiEvt_rGeVeInu = $doc->createElement('rGeVeInu');
        $xml_rGesEve_gGroupTiEvt->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu);

        // dNumTim
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumTim = $doc->createElement('dNumTim');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumTim->appendChild($doc->createTextNode($rGeVeInu_dNumTim));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumTim);

        // dEst
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dEst = $doc->createElement('dEst');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dEst->appendChild($doc->createTextNode($rGeVeInu_dEst));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_dEst);

        // dPunExp
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dPunExp = $doc->createElement('dPunExp');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dPunExp->appendChild($doc->createTextNode($rGeVeInu_dPunExp));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_dPunExp);

        // dNumIn
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumIn = $doc->createElement('dNumIn');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumIn->appendChild($doc->createTextNode($rGeVeInu_dNumIn));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumIn);

        // dNumFin
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumFin = $doc->createElement('dNumFin');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumFin->appendChild($doc->createTextNode($rGeVeInu_dNumFin));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_dNumFin);

        // iTiDE
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_iTiDE = $doc->createElement('iTiDE');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_iTiDE->appendChild($doc->createTextNode($rGeVeInu_iTiDE));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_iTiDE);

        // mOtEve
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_mOtEve = $doc->createElement('mOtEve');
        $xml_rGesEve_gGroupTiEvt_rGeVeInu_mOtEve->appendChild($doc->createTextNode($rGeVeInu_mOtEve));
        $xml_rGesEve_gGroupTiEvt_rGeVeInu->appendChild($xml_rGesEve_gGroupTiEvt_rGeVeInu_mOtEve);

        $xml_rGesEve_rEve->appendChild($xml_rGesEve_gGroupTiEvt);

        // -----------------------------------------------------------------------------
        // Elemento dEvReg
        // -----------------------------------------------------------------------------
        $xml_rEnviEventoDe_dEvReg = $xml->createElement('dEvReg');
        $xml_rEnviEventoDe_dEvReg->appendChild($xml_gGroupGesEve);
        $xml_rEnviEventoDe->appendChild($xml_rEnviEventoDe_dEvReg);
        
        $xml_evento = $xml->saveXML($xml);
        
        // ---------------------------------------------------------------------
        // se registra el XML en la tabla 
        // ---------------------------------------------------------------------
        $this->setEkuDfecfirma($dFecFirma);
        $this->setEkuDverfor(EkuDe::VERSION);
        $this->setEkuXml($xml_evento);
        $this->save();
        
        return $xml;
    }
    
    /**
     * 
     */
    public function setFirmarXmlEvento($xml) {
        
        $xml_gGroupGesEve = $xml->getElementsByTagName("gGroupGesEve")->item(0);
        $xml_rGesEve = $xml->getElementsByTagName("rGesEve")->item(0);
        $xml_reve = $xml->getElementsByTagName("rEve")->item(0);
        $xml_full = $xml->documentElement;

        //Gral::prr($xml_reve);
        //exit;

        // Path del Certificado PFX
        $certificate_pfx_path = Ekuatia::getCertificadoPFXFilePath();

        $certificado = file_get_contents($certificate_pfx_path);
        $contrasena  = Ekuatia::getCertificadoPFXPass();

        openssl_pkcs12_read($certificado, $clave, $contrasena);
        $clave_privada        = $clave['pkey'];
        $cadena_certificacion = $clave['cert'];

        $objDSig = new XMLSecurityDSig('', array('prefix' => 'ds'));
        $objDSig->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);
        //$objDSig->setCanonicalMethod(XMLSecurityDSig::C14N);

        $objDSig->addReference(
            $xml_reve,
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
        $objDSig->appendSignature($xml_rGesEve);

        $xml_eve_firmado = $xml->saveXML($xml_full);
        //echo $xml_eve_firmado;
        //exit;
        
        // ---------------------------------------------------------------------
        // se registra el XML Firmado en la tabla 
        // ---------------------------------------------------------------------
        $this->setEkuXmlFirmado($xml_eve_firmado);
        $this->save();
        
        return $this;
    }
    
    /**
     * 
     */
    public function setEnviarEventoAlSIFEN() {
        
        $dId = $this->getEkuDid();
        $xml_eve_firmado = $this->getEkuXmlFirmado();
        
        $result = Ekuatia::setEkuatiaRecepEventoDe($dId, $xml_eve_firmado);
        //Gral::prr($result);
        
        $dFecProc = $result->dFecProc;
        $gResProcEVe = $result->gResProcEVe;
        $gResProcEVe_dEstRes = $gResProcEVe->dEstRes;
        $gResProcEVe_dProtAut = $gResProcEVe->dProtAut;
        $gResProcEVe_id = $gResProcEVe->id;
        $gResProcEVe_gResProc = $gResProcEVe->gResProc;
        $gResProcEVe_gResProc_dCodRes = $gResProcEVe_gResProc->dCodRes;
        $gResProcEVe_gResProc_dMsgRes = $gResProcEVe_gResProc->dMsgRes;
        
        if($result){
            
            $eku_eve_resp = new EkuEveResp();
            $eku_eve_resp->setEkuEveId($this->getId());
            $eku_eve_resp->setEkuDeId($this->getEkuDeId());
            $eku_eve_resp->setEkuFdecproc($dFecProc);
            $eku_eve_resp->setEkuGresproceveDestres($gResProcEVe_dEstRes);
            $eku_eve_resp->setEkuGresproceveDprotaut($gResProcEVe_dProtAut);
            $eku_eve_resp->setEkuGresproceveDid($gResProcEVe_id);
            $eku_eve_resp->setEkuGresproceveGresprocDcodres($gResProcEVe_gResProc_dCodRes);
            $eku_eve_resp->setEkuGresproceveGresprocDmsgres($gResProcEVe_gResProc_dMsgRes);
            $eku_eve_resp->setEstado(1);
            $eku_eve_resp->save();            
            //Gral::prr($eku_eve_resp);
            
            if($eku_eve_resp->getEkuGresproceveGresprocDcodres() == '0600'){ // Evento registrado correctamente
                
            }
            
            return $eku_eve_resp;
        }
        
        return false;
    }
    
}
