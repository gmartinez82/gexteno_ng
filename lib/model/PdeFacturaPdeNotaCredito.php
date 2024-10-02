<?php 
require_once "base/BPdeFacturaPdeNotaCredito.php"; 
class PdeFacturaPdeNotaCredito extends BPdeFacturaPdeNotaCredito
{
    public function getPdeComprobanteDebe(){
        return $this->getPdeFactura();
    }
    public function getPdeComprobanteHaber(){
        return $this->getPdeNotaCredito();
    }
}
?>