<?php 
require_once "base/BPdeOrdenPagoTipoEstado.php"; 
class PdeOrdenPagoTipoEstado extends BPdeOrdenPagoTipoEstado
{
    const TIPO_GENERADO = 'GENERADO';    
    const TIPO_AUTORIZADO = 'AUTORIZADO';
    const TIPO_PREPARADO = 'PREPARADO';
    const TIPO_RECHAZADO = 'RECHAZADO';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_PAGO_ENVIADO = 'PAGO_ENVIADO';
    const TIPO_PAGO_PREVENTISTA = 'PAGO_PREVENTISTA';
    const TIPO_PAGO_RECIBIDO = 'PAGO_RECIBIDO';
    
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
                $color = '#acacac';
                break;
            case self::TIPO_AUTORIZADO:
                $color = '#2cf2f0';
                break;
            case self::TIPO_PREPARADO:
                $color = '#fcdc50';
                break;
            case self::TIPO_RECHAZADO:
                $color = '#fc5151';
                break;
            case self::TIPO_ANULADO:
                $color = '#fc2c2c';
                break;
            case self::TIPO_PAGO_ENVIADO:
                $color = '#0470a0';
                break;
            case self::TIPO_PAGO_PREVENTISTA:
                $color = '#1c94d4';
                break;
            case self::TIPO_PAGO_RECIBIDO:
                $color = '#64ac14';
                break;
        }
        return $color;
    }
}
?>