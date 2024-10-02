<?php 
require_once "base/BVtaFacturaVtaRecibo.php"; 
class VtaFacturaVtaRecibo extends BVtaFacturaVtaRecibo
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaFactura();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaRecibo();
    }
}
?>