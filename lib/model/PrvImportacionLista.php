<?php

class PrvImportacionLista {

    const SES_PAGINACION = 'adm_prvimportacionlista_paginas';
    const SES_PAGINACION_REGISTROS = 'adm_prvimportacionlista_paginas_registros';
    const SES_CRITERIOS = 'adm_prvimportacionlista_criterios';

    /* Seteo y Geteo de Pagina Actual */

    static function getSesPag() {
        if (trim(Gral::getSes(self::SES_PAGINACION)) == '')
            return 1;
        return Gral::getSes(self::SES_PAGINACION);
    }

    static function setSesPag($v) {
        Gral::setSes(self::SES_PAGINACION, $v);
    }

    /* Seteo y Geteo de Cantidad de Registros por Pagina */

    static function getSesPagCantidad() {
        if (trim(Gral::getSes(self::SES_PAGINACION_REGISTROS)) == '')
            return 10;
        return Gral::getSes(self::SES_PAGINACION_REGISTROS);
    }

    static function setSesPagCantidad($v) {
        Gral::setSes(self::SES_PAGINACION_REGISTROS, $v);
    }

}
