<?php 
require_once "base/BVtaPresupuestoEstado.php"; 
class VtaPresupuestoEstado extends BVtaPresupuestoEstado
{
    public function getDescripcion() {
        $texto = $this->getVtaPresupuestoTipoEstado()->getDescripcion();
        
        return $texto;
    }
}
?>