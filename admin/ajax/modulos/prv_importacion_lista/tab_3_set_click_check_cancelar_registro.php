<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$cancelado = Gral::getVars(2, 'cancelado', 0);

// se invierte
if($cancelado == 1){
    $cancelado = 0;
}else{
    $cancelado = 1;
}

$ejec = new Ejecucion();
$sql = "UPDATE tmp_prv_importacion_tab_3 SET "
        . "cancelado = ".$cancelado.", "
        . "modificado = 1 "
        . "WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;
//Gral::pr($sql);
$ejec->setSql($sql);
$ejec->execute();