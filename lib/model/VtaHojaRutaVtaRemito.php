<?php 
require_once "base/BVtaHojaRutaVtaRemito.php"; 
class VtaHojaRutaVtaRemito extends BVtaHojaRutaVtaRemito
{

    public function getVtaComprobante(){
        return $this->getVtaRemito();
    }
        
}
?>