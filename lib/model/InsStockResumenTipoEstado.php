<?php

require_once "base/BInsStockResumenTipoEstado.php";

class InsStockResumenTipoEstado extends BInsStockResumenTipoEstado {

    const TIPO_REGULAR = 'REGULAR';
    const TIPO_EXCEDIDO = 'EXCEDIDO';
    const TIPO_REQUIERE_PEDIDO = 'REQUIERE_PEDIDO';
    const TIPO_MENOR_MINIMO = 'MENOR_MINIMO';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_REGULAR:
                $color = '#5ea60d';
                break;
            case self::TIPO_EXCEDIDO:
                $color = '#006699';
                break;
            case self::TIPO_REQUIERE_PEDIDO:
                $color = '#ff9900';
                break;
            case self::TIPO_MENOR_MINIMO:
                $color = '#ff0000';
                break;
            case self::TIPO_NO_INICIALIZADO:
                $color = '#999999';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>