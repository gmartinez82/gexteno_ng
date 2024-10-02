<?php

include_once '_autoload.php';

$prv_importacion_id = Gral::getVars(2, 'prv_importacion_id', 0);

if ($prv_importacion_id > 0) {

    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);

    if ($prv_importacion) {
        $codigo_tab = $prv_importacion->getPrvImportacionTipoEstadoActual()->getCodigo();

        if ($codigo_tab == PrvImportacionTipoEstado::TIPO_EN_TAB_3) {
            echo 2;
        } elseif ($codigo_tab == PrvImportacionTipoEstado::TIPO_EN_TAB_4) {
            echo 3;
        }
    }
}

