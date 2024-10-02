<?php 
require_once "base/BGralMonedaTipoCambio.php"; 
class GralMonedaTipoCambio extends BGralMonedaTipoCambio
{
    public function getDescripcion() {
        $texto = '';

        $texto.= $this->getGralMoneda()->getCodigoIso();
        $texto.= ' a ';
        $texto.= $this->getGralMonedaComparadaObj()->getCodigoIso();
        $texto.= ' el '.Gral::getFechaToWEB($this->getFecha());
        
        return $texto;
    }
}
?>