<?php 
require_once "base/BVtaAjusteDebeVtaRecibo.php"; 
class VtaAjusteDebeVtaRecibo extends BVtaAjusteDebeVtaRecibo
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaAjusteDebe();
    }
    
    public function getVtaComprobanteHaber(){
        return $this->getVtaRecibo();
    }
}
?>