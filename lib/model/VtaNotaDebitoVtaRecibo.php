<?php 
require_once "base/BVtaNotaDebitoVtaRecibo.php"; 
class VtaNotaDebitoVtaRecibo extends BVtaNotaDebitoVtaRecibo
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaNotaDebito();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaRecibo();
    }
}
?>