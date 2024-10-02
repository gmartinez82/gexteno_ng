<?php 
require_once "base/BVtaHojaRutaTipoEstado.php"; 
class VtaHojaRutaTipoEstado extends BVtaHojaRutaTipoEstado
{
    const TIPO_EN_PREPARACION = 'EN_PREPARACION';
    const TIPO_EN_RUTA = 'EN_RUTA';
    const TIPO_ENTREGADO = 'ENTREGADO';

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_EN_PREPARACION:
                $color = '#006699';
                break;
            case self::TIPO_EN_RUTA:
                $color = '#cc6600';
                break;
            case self::TIPO_ENTREGADO:
                $color = '#63a915';
                break;
            default: 
                $color = '#ccc';
        }
        return $color;
    }    
}
?>