<?php 
require_once "base/BVtaReciboCondicionPago.php"; 
class VtaReciboCondicionPago extends BVtaReciboCondicionPago
{
    const TIPO_EN_TERMINO = 'EN_TERMINO';
    const TIPO_RETRASADO = 'RETRASADO';
    const TIPO_FUERA_TERMINO = 'FUERA_TERMINO';
    const TIPO_ADELANTADO = 'ADELANTADO';
    
    public function getColor()
    {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo)
    {
        $color = '';
        switch ($codigo)
        {
            case self::TIPO_EN_TERMINO:
                $color = '#0283bc';
                break;
            case self::TIPO_RETRASADO:
                $color = '#ffa861';
                break;
            case self::TIPO_FUERA_TERMINO:
                $color = '#9b2f00';
                break;
            case self::TIPO_ADELANTADO:
                $color = '#002235';
                break;
            default:
                $color = '#666666';
        }
        return $color;
    }
    
    
}
?>