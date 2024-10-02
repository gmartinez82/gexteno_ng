<?php

require_once "base/BVtaOrdenVentaTipoEstadoFacturacion.php";

class VtaOrdenVentaTipoEstadoFacturacion extends BVtaOrdenVentaTipoEstadoFacturacion {

    const TIPO_NO_FACTURADO = 'NO_FACTURADO';
    const TIPO_FACTURA_PARCIAL = 'FACTURA_PARCIAL';
    const TIPO_FACTURA_TOTAL = 'FACTURA_TOTAL';
    const TIPO_AJUSTE_TOTAL = 'AJUSTE_TOTAL';
    const TIPO_AJUSTE_PARCIAL = 'AJUSTE_PARCIAL';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_NO_FACTURADO:
                $color = '#ff0a0a';
                break;
            case self::TIPO_FACTURA_PARCIAL:
                $color = '#ffce0a';
                break;
            case self::TIPO_FACTURA_TOTAL:
                $color = '#64a916';
                break;
            case self::TIPO_AJUSTE_TOTAL:
                $color = '#ffce0a';
                break;
            case self::TIPO_AJUSTE_PARCIAL:
                $color = '#64a916';
                break;
            default: 
                $color = '#ccc';
        }
        return $color;
    }  
}

?>