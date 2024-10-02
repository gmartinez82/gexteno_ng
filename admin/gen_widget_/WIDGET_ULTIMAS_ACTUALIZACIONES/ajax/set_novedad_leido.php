<?php

include "_autoload.php";

$novedad_id = Gral::getVars(Gral::VARS_POST, 'novedad_id', 0);
$nov_novedad = NovNovedad::getOxId($novedad_id);

if ($nov_novedad) {

    // se consulta si esta leido
    $es_novedad_leido = $nov_novedad->getNovedadLeido();

    if (!$es_novedad_leido) {
        // se marca como leido
        $nov_novedad->setNovedadLeido();
    }
}