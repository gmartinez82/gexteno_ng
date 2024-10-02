<?php

require_once "base/BPdeRecepcionAgrupacion.php";

class PdeRecepcionAgrupacion extends BPdeRecepcionAgrupacion {

    const PREFIJO_CODIGO = "ARCP";

    public function getCodigoConCeros() {
        $codigo = self::PREFIJO_CODIGO;
        $codigo .= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);

        return $codigo;
    }

}

?>