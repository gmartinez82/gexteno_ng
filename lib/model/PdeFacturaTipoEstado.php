<?php

require_once "base/BPdeFacturaTipoEstado.php";

class PdeFacturaTipoEstado extends BPdeFacturaTipoEstado {

    const TIPO_GENERADO = 'GENERADO';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_SALDADO = 'SALDADO';
    const TIPO_SALDADO_PARCIAL = 'SALDADO_PARCIAL';
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
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>