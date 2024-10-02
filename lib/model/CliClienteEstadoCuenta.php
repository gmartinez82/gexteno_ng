<?php 
require_once "base/BCliClienteEstadoCuenta.php"; 
class CliClienteEstadoCuenta extends BCliClienteEstadoCuenta
{
    /**
     * 
     * @return type
     */
    public function getDescripcion() {      
        $texto = $this->getCliClienteTipoEstadoCuenta()->getDescripcion();
        
        return $texto;
    }
}
?>