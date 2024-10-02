<?php
require_once "base/BEkuDeArsch01Resp.php";

class EkuDeArsch01Resp extends BEkuDeArsch01Resp {
    
    /**
     * 
     * @return type
     */
    public function getDescripcion_VER() {
        $texto = '';
        
        $eku_de_arsch01_resp_mensajes = $this->getEkuDeArsch01RespMensajes();
        $texto.= $this->getEkuArsch01Pp050Destres();

        foreach($eku_de_arsch01_resp_mensajes as $eku_de_arsch01_resp_mensaje){
                $texto.= " - ";
                $texto.= $eku_de_arsch01_resp_mensaje->getEkuArsch01Pp052Dcodres();
                $texto.= " - ";
                $texto.= $eku_de_arsch01_resp_mensaje->getEkuArsch01Pp053Dmsgres();
            }
        
        return $texto;
    }
    
}
