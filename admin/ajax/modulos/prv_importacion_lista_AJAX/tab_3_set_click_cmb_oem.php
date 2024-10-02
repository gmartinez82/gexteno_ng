<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$cmb_marca_oem = Gral::getVars(2, 'pieza_id', null);

$ejec = new Ejecucion();
$sql = "UPDATE tmp_prv_importacion_tab_3 SET "
        . "ins_marca_oem_id = '".$cmb_marca_oem."', "
        . "modificado = 1 "
        . "WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;
//Gral::pr($sql);
$ejec->setSql($sql);
$ejec->execute();
