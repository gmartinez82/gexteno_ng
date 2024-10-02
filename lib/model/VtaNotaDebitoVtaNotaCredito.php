<?php 
require_once "base/BVtaNotaDebitoVtaNotaCredito.php"; 
class VtaNotaDebitoVtaNotaCredito extends BVtaNotaDebitoVtaNotaCredito
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaNotaDebito();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaNotaCredito();
    }
}
?>