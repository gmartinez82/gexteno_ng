<?php 
require_once "base/BVtaPresupuestoTipoEstado.php"; 
class VtaPresupuestoTipoEstado extends BVtaPresupuestoTipoEstado
{
    const TIPO_EN_CURSO = 'EN_CURSO';
    const TIPO_APROBADO = 'APROBADO';
    const TIPO_APROBADO_PARCIAL = 'APROBADO_PARCIAL';
    const TIPO_CANCELADO = 'CANCELADO';
    const TIPO_CANCELADO_PARCIAL = 'CANCELADO_PARCIAL';
    const TIPO_VENCIDO = 'VENCIDO';
    const TIPO_EXTENDIDO = 'EXTENDIDO';
    const TIPO_DUPLICADO = 'DUPLICADO';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_EN_PROCESO_TIENDA = 'EN_PROCESO_TIENDA';
    const TIPO_PREAPROBADO = 'PREAPROBADO';
    const TIPO_EN_PRODUCCION = 'EN_PRODUCCION';
    const TIPO_PRODUCCION_FINALIZADA = 'PRODUCCION_FINALIZADA';
    
    
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
            case self::TIPO_EN_CURSO:
                $color = '#168dc7';
                break;
            case self::TIPO_APROBADO:
                $color = '#69b02a';
                break;
            case self::TIPO_APROBADO_PARCIAL:
                $color = '#6cdc1c';
                break;
            case self::TIPO_CANCELADO:
                $color = '#ff2727';
                break;
            case self::TIPO_CANCELADO_PARCIAL:
                $color = '#fc5c5a';
                break;
            case self::TIPO_VENCIDO:
                $color = '#ffd632';
                break;
            case self::TIPO_EXTENDIDO:
                $color = '#d87410';
                break;
            case self::TIPO_DUPLICADO:
                $color = '#1c94d4';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }
}
?>