<?php 
require_once "base/BVtaOrdenVentaTipoEstadoRemision.php"; 
class VtaOrdenVentaTipoEstadoRemision extends BVtaOrdenVentaTipoEstadoRemision
{ 
    const TIPO_NO_REMITIDO = 'NO_REMITIDO';
    const TIPO_EN_REMITO = 'EN_REMITO';
    const TIPO_DESPACHO_PARCIAL = 'DESPACHO_PARCIAL';
    const TIPO_DESPACHO_TOTAL = 'DESPACHO_TOTAL';
    
    const TIPO_EN_AJUSTE = 'EN_AJUSTE';
    const TIPO_AJUSTE_PARCIAL = 'AJUSTE_PARCIAL';
    const TIPO_AJUSTE_TOTAL = 'AJUSTE_TOTAL';
    
    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_NO_REMITIDO:
                $color = '#ffce0a';
                break;
            case self::TIPO_EN_REMITO:
                $color = '#096c9d';
                break;
            case self::TIPO_DESPACHO_PARCIAL:
                $color = '#a4cc5d';
                break;
            case self::TIPO_DESPACHO_TOTAL:
                $color = '#64a916';
                break;
            case self::TIPO_EN_AJUSTE:
                $color = '#096c9d';
                break;
            case self::TIPO_AJUSTE_PARCIAL:
                $color = '#a4cc5d';
                break;
            case self::TIPO_AJUSTE_TOTAL:
                $color = '#64a916';
                break;
            default: 
                $color = '#ccc';
        }
        return $color;
    }
}
?>