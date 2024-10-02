<?php 
require_once "base/BVehModelo.php"; 
class VehModelo extends BVehModelo
{
    public function getDescripcionFull() {
        $texto = $this->getVehMarca()->getDescripcion();
        $texto.= " ";
        $texto.= $this->getDescripcion();
        
        return $texto;
    }
    
    public function getDescripcionParaSelect() {
        $texto = $this->getVehMarca()->getDescripcion();
        $texto.= " > ";
        $texto.= $this->getDescripcion();
        
        return $texto;
    }
    
    
}
?>