<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$check_descripcion = Gral::getVars(2, 'descripcion', 0);

$ejec = new Ejecucion();
$sql = "UPDATE tmp_prv_importacion_tab_3 SET "
        . "seleccion = ".$check_descripcion.", "
        . "modificado = 1 "
        . "WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;
//Gral::pr($sql);
$ejec->setSql($sql);
$ejec->execute();
