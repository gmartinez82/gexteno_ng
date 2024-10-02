<?php 
require_once "base/BPdeOrdenPagoPdeNotaDebito.php"; 
class PdeOrdenPagoPdeNotaDebito extends BPdeOrdenPagoPdeNotaDebito
{ 
    public function getPdeComprobante(){
        return $this->getPdeNotaDebito();
    }
}
?>