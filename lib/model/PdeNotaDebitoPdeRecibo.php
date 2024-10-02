<?php 
require_once "base/BPdeNotaDebitoPdeRecibo.php"; 
class PdeNotaDebitoPdeRecibo extends BPdeNotaDebitoPdeRecibo
{
    public function getPdeComprobanteDebe(){
        return $this->getPdeNotaDebito();
    }
    public function getPdeComprobanteHaber(){
        return $this->getPdeRecibo();
    }
}
?>