<?php

require_once "base/BPdiTipoEstado.php";

class PdiTipoEstado extends BPdiTipoEstado {

    const TIPO_ESTADO_GENERADO = 'GENERADO';
    const TIPO_ESTADO_SOLICITADO = 'SOLICITADO';
    const TIPO_ESTADO_DESPACHADO = 'DESPACHADO';
    const TIPO_ESTADO_RECIBIDO = 'RECIBIDO';
    const TIPO_ESTADO_RECHAZADO = 'RECHAZADO';
    const TIPO_ESTADO_ANULADO = 'ANULADO';
    const TIPO_ESTADO_REDIRIGIDO = 'REDIRIGIDO';
    const TIPO_ESTADO_ENTREGADO = 'ENTREGADO';
    const TIPO_ESTADO_CONSUMIDO = 'CONSUMIDO';
    const TIPO_ESTADO_AJUSTADO = 'AJUSTADO';
    const TIPO_ESTADO_COMPRADO = 'COMPRADO';
    const TIPO_ESTADO_ACEPTADO = 'ACEPTADO';
    const TIPO_ESTADO_RECHAZADO_ERRONEO = 'RECHAZADO_ERRONEO';
    const TIPO_ESTADO_REMITIDO = 'REMITIDO';
    const TIPO_ESTADO_DEVUELTO = 'DEVUELTO';

    /* Método getPdiTipoEstados para select */

    static function getPdiTipoEstadosGestionablesCmb() {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_GESTIONABLE, 1, Criterio::IGUAL);
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden(self::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->setCriterios();

        $col = PdiTipoEstado::getPdiTipoEstados($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    public function getColor() {
        $color = self::getColorTipoEstado($this->getCodigo());
        return $color;
    }

    static function getColorTipoEstado($codigo) {
        $color = '';
        switch ($codigo) {
            case self::TIPO_ESTADO_GENERADO:
                $color = '#9d9d9d';
                break;
            case self::TIPO_ESTADO_SOLICITADO:
                $color = '#9d9d9d';
                break;
            case self::TIPO_ESTADO_DESPACHADO:
                $color = '#ffce0b';
                break;
            case self::TIPO_ESTADO_RECIBIDO:
                $color = '#64a917';
                break;
            case self::TIPO_ESTADO_RECHAZADO:
                $color = '#ff0b0b';
                break;
            case self::TIPO_ESTADO_ANULADO:
                $color = '#ff6c0a';
                break;
            case self::TIPO_ESTADO_REDIRIGIDO:
                $color = '#cf6c0a';
                break;
            case self::TIPO_ESTADO_ENTREGADO:
                $color = '#ffce0b';
                break;
            case self::TIPO_ESTADO_CONSUMIDO:
                $color = '#64a917';
                break;
            case self::TIPO_ESTADO_AJUSTADO:
                $color = '#64a917';
                break;
            case self::TIPO_ESTADO_COMPRADO:
                $color = '#64a917';
                break;
            case self::TIPO_ESTADO_ACEPTADO:
                $color = '#093b6e';
                break;
            case self::TIPO_ESTADO_RECHAZADO_ERRONEO:
                $color = '#ff0b0b';
                break;
            case self::TIPO_ESTADO_REMITIDO:
                $color = '#000';
                break;
            case self::TIPO_ESTADO_DEVUELTO:
                $color = '#000';
                break;
            default:
                $color = '#168dc7';
        }
        return $color;
    }

}

?>