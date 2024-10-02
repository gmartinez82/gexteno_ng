<?php 
require_once "base/BCliClienteEstadoCobro.php"; 
class CliClienteEstadoCobro extends BCliClienteEstadoCobro
{
    /**
     * 
     * @return type
     */
    public function getDescripcion() {      
        $texto = $this->getCliClienteTipoEstadoCobro()->getDescripcion();
        
        return $texto;
    }
}
?>