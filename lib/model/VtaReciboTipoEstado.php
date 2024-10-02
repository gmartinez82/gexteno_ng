<?php

require_once "base/BVtaReciboTipoEstado.php";

class VtaReciboTipoEstado extends BVtaReciboTipoEstado {

    const TIPO_GENERADO = 'GENERADO';
    const TIPO_RECHAZADO_AFIP = 'RECHAZADO_AFIP';
    const TIPO_OBSERVADO_AFIP = 'OBSERVADO_AFIP';
    const TIPO_APROBADO_AFIP = 'APROBADO_AFIP';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_IMPUTADO = 'IMPUTADO';
    const TIPO_IMPUTADO_PARCIAL = 'IMPUTADO_PARCIAL';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_ANULADO_PARCIAL = 'ANULADO_PARCIAL';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_GENERADO:
                $color = '#999999';
                break;
            case self::TIPO_RECHAZADO_AFIP:
                $color = '#ff0000';
                break;
            case self::TIPO_OBSERVADO_AFIP:
                $color = '#ffcc00';
                break;
            case self::TIPO_APROBADO_AFIP:
                $color = '#006699';
                break;
            case self::TIPO_PENDIENTE:
                $color = '#33cccc';
                break;
            case self::TIPO_IMPUTADO:
                $color = '#5ea60d';
                break;
            case self::TIPO_IMPUTADO_PARCIAL:
                $color = '#67f904';
                break;
            case self::TIPO_ANULADO:
                $color = '#cc6600';
                break;
            case self::TIPO_ANULADO_PARCIAL:
                $color = '#efc161';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>