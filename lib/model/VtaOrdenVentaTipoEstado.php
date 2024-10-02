<?php

require_once "base/BVtaOrdenVentaTipoEstado.php";

class VtaOrdenVentaTipoEstado extends BVtaOrdenVentaTipoEstado {

    const TIPO_ACTIVO = 'ACTIVO';
    const TIPO_FINALIZADO = 'FINALIZADO';
    const TIPO_CANCELADO = 'CANCELADO';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_ACTIVO:
                $color = '#168dc7';
                break;
            case self::TIPO_FINALIZADO:
                $color = '#69b02a';
                break;
            case self::TIPO_CANCELADO:
                $color = '#ff2727';
                break;
            default: 
                $color = '#ccc';
        }
        return $color;
    }

}

?>