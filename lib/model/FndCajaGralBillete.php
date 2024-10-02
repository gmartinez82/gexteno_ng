<?php 
require_once "base/BFndCajaGralBillete.php"; 
class FndCajaGralBillete extends BFndCajaGralBillete
{
    public function getImporteTotal(){
        $importe = $this->getGralBillete()->getImporte() * $this->getCantidad();
        return $importe;
    }
}
?>