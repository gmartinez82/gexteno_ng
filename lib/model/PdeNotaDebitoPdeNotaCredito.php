<?php 
require_once "base/BPdeNotaDebitoPdeNotaCredito.php"; 
class PdeNotaDebitoPdeNotaCredito extends BPdeNotaDebitoPdeNotaCredito
{
    public function getPdeComprobanteDebe(){
        return $this->getPdeNotaDebito();
    }
    public function getPdeComprobanteHaber(){
        return $this->getPdeNotaCredito();
    }
}
?>