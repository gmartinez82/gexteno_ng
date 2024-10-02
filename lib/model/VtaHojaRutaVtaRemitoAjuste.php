<?php 
require_once "base/BVtaHojaRutaVtaRemitoAjuste.php"; 
class VtaHojaRutaVtaRemitoAjuste extends BVtaHojaRutaVtaRemitoAjuste
{
    
    public function getVtaComprobante(){
        return $this->getVtaRemitoAjuste();
    }    
}
?>