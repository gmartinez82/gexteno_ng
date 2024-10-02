<?php 
require_once "base/BVtaFacturaVtaNotaCredito.php"; 
class VtaFacturaVtaNotaCredito extends BVtaFacturaVtaNotaCredito
{
    public function getVtaComprobanteDebe(){
        return $this->getVtaFactura();
    }
    public function getVtaComprobanteHaber(){
        return $this->getVtaNotaCredito();
    }
}
?>