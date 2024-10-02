<?php 
require_once "base/BPdeOrdenPagoPdeFactura.php"; 
class PdeOrdenPagoPdeFactura extends BPdeOrdenPagoPdeFactura
{
    public function getPdeComprobante(){
        return $this->getPdeFactura();
    }
}
?>