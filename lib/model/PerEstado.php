<?php 
require_once "base/BPerEstado.php"; 
class PerEstado extends BPerEstado
{
    public function getDescripcion() {
        return $this->getPerTipoEstado()->getDescripcion();
    }    
}
?>