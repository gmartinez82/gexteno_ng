<?php 
require_once "base/BCliCentroRecepcion.php"; 
class CliCentroRecepcion extends BCliCentroRecepcion
{
    public function getDescripcionFull($incluir_localidad = false){
        if($incluir_localidad){
            return $this->getDescripcion().' - '.$this->getDomicilio().' ('.$this->getGeoLocalidad()->getDescripcionFull().')';
        }
        return $this->getDescripcion().' - '.$this->getDomicilio();        
    }
    public function getDescripcionParaSelect() {
        return $this->getDescripcion().' - '.$this->getDomicilio();
    }
}
?>