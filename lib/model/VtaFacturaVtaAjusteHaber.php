<?php 
require_once "base/BVtaFacturaVtaAjusteHaber.php"; 
class VtaFacturaVtaAjusteHaber extends BVtaFacturaVtaAjusteHaber
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaFactura();
    }
    
    public function getVtaComprobanteHaber(){
        return $this->getVtaAjusteHaber();
    }
}
?>