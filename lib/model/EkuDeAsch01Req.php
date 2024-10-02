<?php
require_once "base/BEkuDeAsch01Req.php";

class EkuDeAsch01Req extends BEkuDeAsch01Req {

    /**
     * 
     */
    static function setEkuatiaRecibeDe($eku_de_id, $xml_de) {
        
        // ---------------------------------------------------------------------
        // se instancia el eku de
        // ---------------------------------------------------------------------
        $eku_de = EkuDe::getOxId($eku_de_id);
        $obj_comprobante_vinculado = $eku_de->getObjComprobanteVinculado();
        $class_comprobante_vinculado = get_class($obj_comprobante_vinculado);
        
        // ---------------------------------------------------------------------
        // se inicializa tipo de estado
        // ---------------------------------------------------------------------
        $eku_de->setEkuDeOpeEstado(EkuDeOpeTipoEstado::TIPO_GENERADO, $observacion);
        
        $eku_de_asch01_req = new EkuDeAsch01Req();
        $eku_de_asch01_req->setEkuDeId($eku_de_id);
        $eku_de_asch01_req->setEkuAsch03Xde($xml_de);
        $eku_de_asch01_req->setEstado(1);
        $eku_de_asch01_req->save();

        // se asigna el dId generado
        $eku_de_asch01_req->setEkuAsch02Did($eku_de_asch01_req->getId());
        $eku_de_asch01_req->setCodigo($eku_de_asch01_req->getId(). str_pad(rand(1, 99), 3, 0, STR_PAD_LEFT));
        $eku_de_asch01_req->save();
        
        if($eku_de_asch01_req){
            $result = Ekuatia::setEkuatiaRecibeDe($eku_de_asch01_req->getCodigo(), $xml_de);
            //Gral::prr($result);
            //echo(PHP_EOL);

            $eku_de_arsch01_resp = new EkuDeArsch01Resp();
            $eku_de_arsch01_resp->setEkuDeId($eku_de_id);
            $eku_de_arsch01_resp->setEkuDeAsch01ReqId($eku_de_asch01_req->getId());
            //$eku_de_arsch01_resp->setObservacion(print_r($result, true));
            $eku_de_arsch01_resp->setEstado(1);
            $eku_de_arsch01_resp->save();

            if($result && $result->rProtDe){
                $rProtDe = $result->rProtDe;
                $rProtDeId = $rProtDe->Id;
                $rProtDedFecProc = $rProtDe->dFecProc;
                //$rProtDedDigVal = $rProtDe->dDigVal;
                $rProtDedEstRes = $rProtDe->dEstRes;
                $rProtDedProtAut = $rProtDe->dProtAut;
                
                $rProtDegResProc = $rProtDe->gResProc;
                $rProtDegResProc_dCodRes = $rProtDegResProc->dCodRes;
                $rProtDegResProc_dMsgRes = $rProtDegResProc->dMsgRes;
                
                //$rProtDedDigVal = bin2hex($rProtDedDigVal);
                
                $eku_de_arsch01_resp->setEkuArsch01Pp02IdCdc($rProtDeId);
                $eku_de_arsch01_resp->setEkuArsch01Pp03Ddecproc($rProtDedFecProc);
                //$eku_de_arsch01_resp->setEkuArsch01Pp04Ddigval($rProtDedDigVal);
                $eku_de_arsch01_resp->setEkuArsch01Pp050Destres($rProtDedEstRes);
                $eku_de_arsch01_resp->setEkuArsch01Pp051Dprotaut($rProtDedProtAut);
                $eku_de_arsch01_resp->setEstado(1);
                $eku_de_arsch01_resp->save();
                //Gral::prr($eku_de_arsch01_resp);
                
                if($eku_de_arsch01_resp){
                    $eku_de_arsch01_resp_mensaje = new EkuDeArsch01RespMensaje();
                    $eku_de_arsch01_resp_mensaje->setEkuDeId($eku_de_id);
                    $eku_de_arsch01_resp_mensaje->setEkuDeAsch01ReqId($eku_de_asch01_req->getId());
                    $eku_de_arsch01_resp_mensaje->setEkuDeArsch01RespId($eku_de_arsch01_resp->getId());
                    
                    $eku_de_arsch01_resp_mensaje->setEkuArsch01Pp052Dcodres($rProtDegResProc_dCodRes);
                    $eku_de_arsch01_resp_mensaje->setEkuArsch01Pp053Dmsgres($rProtDegResProc_dMsgRes);
                    
                    $eku_de_arsch01_resp_mensaje->setEstado(1);
                    $eku_de_arsch01_resp_mensaje->save();
                    //Gral::prr($eku_de_arsch01_resp_mensaje);
                }
                
                switch ($rProtDegResProc_dCodRes){
                    
                    case "0260":
                        $eku_de->setEkuDeOpeEstado(EkuDeOpeTipoEstado::TIPO_APROBADO, $observacion);                        
                        break;
                    
                    default: 
                        $eku_de->setEkuDeOpeEstado(EkuDeOpeTipoEstado::TIPO_RECHAZADO, $observacion);
                }
                
            }
        }

        // ---------------------------------------------------------------------
        // se fuerza la recarga del objeto para devolver completo
        // ---------------------------------------------------------------------
        $eku_de = EkuDe::getOxId($eku_de_id);
        
        return $eku_de;
    }

}

?>