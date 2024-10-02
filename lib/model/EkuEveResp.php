<?php
require_once "base/BEkuEveResp.php";

class EkuEveResp extends BEkuEveResp {
    
    /**
     * 
     * @return type
     */
    public function getDescripcion() {
        $texto = '';
        
        $texto.= $this->getEkuGresproceveGresprocDcodres();
        $texto.= ' - ';
        $texto.= $this->getEkuGresproceveGresprocDmsgres();
        $texto.= ' - ';
        $texto.= $this->getEkuFdecproc();
        
        return $texto;
    }
    
}
