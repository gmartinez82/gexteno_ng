<?php 
require_once "base/BPrvImportacionEstado.php"; 
class PrvImportacionEstado extends BPrvImportacionEstado
{
    public function getDescripcion() {
        $texto = $this->getPrvImportacionTipoEstado()->getDescripcion();
        return $texto;
    }
}
?>