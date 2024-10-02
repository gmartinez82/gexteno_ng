<?php 
require_once "base/BVtaNotaDebitoVtaAjusteHaber.php"; 
class VtaNotaDebitoVtaAjusteHaber extends BVtaNotaDebitoVtaAjusteHaber
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaNotaDebito();
    }
    
    public function getVtaComprobanteHaber(){
        return $this->getVtaAjusteHaber();
    }
}
?>