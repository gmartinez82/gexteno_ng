<?php 
require_once "base/BCliClienteEstado.php"; 
class CliClienteEstado extends BCliClienteEstado
{
    /**
     * 
     * @return type
     */
    public function getDescripcion() {      
        $texto = $this->getCliClienteTipoEstado()->getDescripcion();
        
        return $texto;
    }
}
?>