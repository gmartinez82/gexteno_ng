<?php 
require_once "base/BGralEscenario.php"; 
class GralEscenario extends BGralEscenario
{
    public function getDescripcionParaSelect() {
        $texto = $this->getGralActividad()->getDescripcion();
        $texto.= " > ";
        $texto.= $this->getDescripcion();
        
        return $texto;
    }
}
?>