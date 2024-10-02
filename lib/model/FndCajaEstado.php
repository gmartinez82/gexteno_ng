<?php 
require_once "base/BFndCajaEstado.php"; 
class FndCajaEstado extends BFndCajaEstado
{
    public function getDescripcion() {
        return $this->getFndCajaTipoEstado()->getDescripcion();
    }
}
?>