<?php 
require_once "base/BVtaAjusteDebeVtaNotaCredito.php"; 
class VtaAjusteDebeVtaNotaCredito extends BVtaAjusteDebeVtaNotaCredito
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaAjusteDebe();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaNotaCredito();
    }
}
?>