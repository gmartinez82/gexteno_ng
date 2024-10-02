<?php
require_once "base/BPdeFacturaItem.php";

class PdeFacturaItem extends BPdeFacturaItem {

    /**
     * 
     * @param type $porcentaje
     * @return type
     */
    public function getImporteTotal() {
        return $this->getImporteUnitario() * $this->getCantidad();
    }

    /**
     * 
     * @param type $porcentaje
     * @return type
     */
    public function getImporteAfectadoParaGralCentroCosto($porcentaje) {
        return $this->getImporteTotal() * ($porcentaje / 100);
    }

}

?>