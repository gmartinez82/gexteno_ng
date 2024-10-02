<?php 
require_once "base/BPrdOrdenTrabajoOperacion.php"; 
class PrdOrdenTrabajoOperacion extends BPrdOrdenTrabajoOperacion
{ 
    const PREFIJO_OT_OP = 'OT-OP-';

    public function getDescripcion()
    {
        $descripcion = 'OT Operacion #' . $this->getNumero();
        return $descripcion;
    }
}
?>