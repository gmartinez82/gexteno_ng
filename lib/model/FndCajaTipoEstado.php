<?php

require_once "base/BFndCajaTipoEstado.php";

class FndCajaTipoEstado extends BFndCajaTipoEstado {

    const TIPO_ABIERTA = 'ABIERTA';
    const TIPO_CERRADA = 'CERRADA';
    const TIPO_RENDIDA = 'RENDIDA';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_ABIERTA:
                $color = '#32cccc';
                break;
            case self::TIPO_CERRADA:
                $color = '#ce6b08';
                break;
            case self::TIPO_RENDIDA:
                $color = '#64a916';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>