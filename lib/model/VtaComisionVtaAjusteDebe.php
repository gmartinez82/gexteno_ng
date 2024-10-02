<?php
require_once "base/BVtaComisionVtaAjusteDebe.php";

class VtaComisionVtaAjusteDebe extends BVtaComisionVtaAjusteDebe {

    public function getVtaComprobante() {
        return $this->getVtaAjusteDebe();
    }

}

?>