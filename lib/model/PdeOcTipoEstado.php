<?php 
require_once "base/BPdeOcTipoEstado.php"; 
class PdeOcTipoEstado extends BPdeOcTipoEstado
{
    const TIPO_ESTADO_SOLICITADO = 'SOLICITADO';
    const TIPO_ESTADO_APROBADO = 'APROBADO';
    const TIPO_ESTADO_RETRASADO = 'RETRASADO';
    const TIPO_ESTADO_ANULADO = 'ANULADO';
    const TIPO_ESTADO_DESPACHADO = 'DESPACHADO';
    const TIPO_ESTADO_RECIBIDO = 'RECIBIDO';
    const TIPO_ESTADO_RECIBIDO_PARCIAL = 'RECIBIDO_PARCIAL';
    
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
            case self::TIPO_ESTADO_SOLICITADO:
                $color = '#acacac';
                break;
            case self::TIPO_ESTADO_APROBADO:
                $color = '#0470a0';
                break;
            case self::TIPO_ESTADO_RETRASADO:
                $color = '#d4700c';
                break;
            case self::TIPO_ESTADO_ANULADO:
                $color = '#fc7414';
                break;
            case self::TIPO_ESTADO_DESPACHADO:
                $color = '#fcd010';
                break;
            case self::TIPO_ESTADO_RECIBIDO:
                $color = '#64ac14';
                break;
            case self::TIPO_ESTADO_RECIBIDO_PARCIAL:
                $color = '#8cc48c';
                break;
        }
        return $color;
    }
}
?>