<?php 
require_once "base/BVtaAjusteDebeVtaAjusteHaber.php"; 
class VtaAjusteDebeVtaAjusteHaber extends BVtaAjusteDebeVtaAjusteHaber
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaAjusteDebe();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaAjusteHaber();
    }
}
?>