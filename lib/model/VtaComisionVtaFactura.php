<?php 
require_once "base/BVtaComisionVtaFactura.php"; 
class VtaComisionVtaFactura extends BVtaComisionVtaFactura
{
    public function getVtaComprobante(){
        return $this->getVtaFactura();
    }
}
?>