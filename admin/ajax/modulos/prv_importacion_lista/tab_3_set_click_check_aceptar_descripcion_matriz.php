<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$descripcion_matriz = Gral::getVars(2, 'descripcion_matriz', '');
$descripcion_insumo = Gral::getVars(2, 'descripcion_insumo', '');

$modificado = false;
if (!empty($descripcion_matriz)) {
    $modificado = true;
}

if (!empty($descripcion_insumo)) {
    $modificado = true;
}


if ($modificado) {
    $ejec = new Ejecucion();
    $sql = "UPDATE tmp_prv_importacion_tab_3 SET "
            . "descripcion = '".$descripcion_insumo."', "
            . "descripcion_matriz = '".$descripcion_matriz."', "
            . "modificado = 1 "
            . "WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;
    //Gral::pr($sql);
    $ejec->setSql($sql);
    $ejec->execute();
}
