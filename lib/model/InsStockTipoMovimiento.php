<?php

require_once "base/BInsStockTipoMovimiento.php";

class InsStockTipoMovimiento extends BInsStockTipoMovimiento {

    const TIPO_MOV_INICIALIZACION = 'INICIALIZACION';
    const TIPO_MOV_RESERVA = 'RESERVA';
    const TIPO_MOV_INGRESO = 'INGRESO';
    const TIPO_MOV_SALIDA = 'SALIDA';
    const TIPO_MOV_BAJA = 'BAJA';
    const TIPO_MOV_AJUSTE_POSITIVO = 'AJUSTE_POSITIVO';
    const TIPO_MOV_AJUSTE_NEGATIVO = 'AJUSTE_NEGATIVO';
    const TIPO_MOV_REINGRESO = 'REINGRESO';

    /**
     * Metodo que retorna la coleccion para combo de tipos de movimiento de stock para ajustes
     * @return type
     */
    static function getInsStockTipoMovimientosCmbDeInicializacion() {
        $c = new Criterio();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL, false, '');
        $c->addFinSubconsulta();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_INICIALIZACION, Criterio::IGUAL, false, Criterio::_AND);
        $c->addFinSubconsulta();

        $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
        $c->setCriterios();
        return parent::getInsStockTipoMovimientosCmbF(null, $c);
    }

    /**
     * Metodo que retorna la coleccion para combo de tipos de movimiento de stock para ajustes
     * @return type
     */
    static function getInsStockTipoMovimientosCmbDeAjuste() {
        $c = new Criterio();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL, false, '');
        $c->addFinSubconsulta();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL, false, Criterio::_AND);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL, false, Criterio::_OR);
        //$c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_INICIALIZACION, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();

        $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
        $c->setCriterios();
        return parent::getInsStockTipoMovimientosCmbF(null, $c);
    }

    /**
     * Metodo que retorna la coleccion para combo de tipos de movimiento de stock para ajustes
     * @return type
     */
    static function getInsStockTipoMovimientosCmbDeInicializacionYAjuste() {
        $c = new Criterio();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL, false, '');
        $c->addFinSubconsulta();

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL, false, Criterio::_AND);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL, false, Criterio::_OR);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_INICIALIZACION, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();

        $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
        $c->setCriterios();
        return parent::getInsStockTipoMovimientosCmbF(null, $c);
    }
    
}

?>