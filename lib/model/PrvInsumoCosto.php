<?php

require_once "base/BPrvInsumoCosto.php";

class PrvInsumoCosto extends BPrvInsumoCosto {

    const GEN_CLASE_AUDITORIA = false;

    public function getImporteNeto() {
        return number_format($this->getImporteBruto() * (1 - ($this->getDescuento() / 100)), 2, '.', '');
    }

}

?>