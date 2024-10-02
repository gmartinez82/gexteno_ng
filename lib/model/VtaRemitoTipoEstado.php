<?php 
require_once "base/BVtaRemitoTipoEstado.php"; 
class VtaRemitoTipoEstado extends BVtaRemitoTipoEstado
{ 
    const TIPO_GENERADO = 'GENERADO';
    const TIPO_PREPARADO = 'PREPARADO';
    const TIPO_AUTORIZADO_DESPACHO = 'AUTORIZADO_DESPACHO';
    const TIPO_DESPACHADO = 'DESPACHADO';
    const TIPO_ENTREGADO = 'ENTREGADO';
    const TIPO_ANULADO_RENUMERADO = 'ANULADO_RENUMERADO';
    
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
            case self::TIPO_GENERADO:
                $color = '#aeaeae';
                break;
            case self::TIPO_PREPARADO:
                $color = '#ffcf10';
                break;
            case self::TIPO_AUTORIZADO_DESPACHO:
                $color = '#ff7d26';
                break;
            case self::TIPO_DESPACHADO:
                $color = '#64ac14';
                break;
            case self::TIPO_ENTREGADO:
                $color = '#1083bb';
                break;
        }
        return $color;
    }
}
?>