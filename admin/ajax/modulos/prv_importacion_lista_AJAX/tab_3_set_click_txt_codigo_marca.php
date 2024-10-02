<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$codigo = PrvInsumoExcel::getCodigoSaneado(Gral::getVars(2, 'codigo', ''));

$ejec = new Ejecucion();
$sql = "UPDATE tmp_prv_importacion_tab_3 SET "
        . "codigo_marca = '".$codigo."', "
        . "modificado = 1 "
        . "WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;
//Gral::pr($sql);
$ejec->setSql($sql);
$ejec->execute();
