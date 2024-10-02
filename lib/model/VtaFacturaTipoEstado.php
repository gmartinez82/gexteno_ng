<?php
require_once "base/BVtaFacturaTipoEstado.php";

class VtaFacturaTipoEstado extends BVtaFacturaTipoEstado {

    const TIPO_GENERADO = 'GENERADO';
    const TIPO_RECHAZADO_AFIP = 'RECHAZADO_AFIP';
    const TIPO_OBSERVADO_AFIP = 'OBSERVADO_AFIP';
    const TIPO_APROBADO_AFIP = 'APROBADO_AFIP';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_SALDADO = 'SALDADO';
    const TIPO_SALDADO_PARCIAL = 'SALDADO_PARCIAL';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_ANULADO_PARCIAL = 'ANULADO_PARCIAL';
    const TIPO_ANULADO_SIN_CAE = 'ANULADO_SIN_CAE';
    const TIPO_ANULADO_RENUMERADO = 'ANULADO_RENUMERADO';
    const TIPO_CANCELADO_SIFEN = 'CANCELADO_SIFEN';
    const TIPO_INUTILIZADO_SIFEN = 'INUTILIZADO_SIFEN';

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
            case self::TIPO_SALDADO:
                $color = '#5ea60d';
                break;
            case self::TIPO_SALDADO_PARCIAL:
                $color = '#67f904';
                break;
            case self::TIPO_ANULADO:
                $color = '#cc6600';
                break;
            case self::TIPO_ANULADO_PARCIAL:
                $color = '#efc161';
                break;
            case self::TIPO_ANULADO_SIN_CAE:
                $color = '#fc9d40';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>