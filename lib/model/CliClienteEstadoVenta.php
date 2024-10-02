<?php 
require_once "base/BCliClienteEstadoVenta.php"; 
class CliClienteEstadoVenta extends BCliClienteEstadoVenta
{
    /**
     * 
     * @return type
     */
    public function getDescripcion() {      
        $texto = $this->getCliClienteTipoEstadoVenta()->getDescripcion();
        
        return $texto;
    }
}
?>