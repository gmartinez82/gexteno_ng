<?php 
require_once "base/BPdeFacturaPdeRecibo.php"; 
class PdeFacturaPdeRecibo extends BPdeFacturaPdeRecibo
{
    public function getPdeComprobanteDebe(){
        return $this->getPdeFactura();
    }
    public function getPdeComprobanteHaber(){
        return $this->getPdeRecibo();
    }
}
?>