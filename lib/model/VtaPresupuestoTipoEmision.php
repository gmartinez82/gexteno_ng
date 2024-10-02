<?php

require_once "base/BVtaPresupuestoTipoEmision.php";

class VtaPresupuestoTipoEmision extends BVtaPresupuestoTipoEmision {

    const TIPO_DIFERIDO = 'DIFERIDO';
    const TIPO_INMEDIATA_CONTADO = 'INMEDIATA_CONTADO';
    const TIPO_INMEDIATA_CTACTE = 'INMEDIATA_CTACTE';

    public function getCodigoMin() {
        $codigo_min = '-';

        switch ($this->getCodigo()) {
            case self::TIPO_DIFERIDO: $codigo_min = 'D';
                break;
            case self::TIPO_INMEDIATA_CONTADO: $codigo_min = 'IC';
                break;
            case self::TIPO_INMEDIATA_CTACTE: $codigo_min = 'ICC';
                break;
        }

        return $codigo_min;
    }

}

?>