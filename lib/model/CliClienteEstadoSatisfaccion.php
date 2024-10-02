<?php 
require_once "base/BCliClienteEstadoSatisfaccion.php"; 
class CliClienteEstadoSatisfaccion extends BCliClienteEstadoSatisfaccion
{
    /**
     * 
     * @return type
     */
    public function getDescripcion() {      
        $texto = $this->getCliClienteTipoEstadoSatisfaccion()->getDescripcion();
        
        return $texto;
    }
}
?>