<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$sql = "SELECT * FROM tmp_prv_importacion_tab_3 WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;

$cons = new Consulta();
$cons->setSQL($sql);
$cons->execute();

include "get_row_uno.php";

$ins_marcas = InsMarca::getInsMarcas();
include "prv_insumo_uno.php";
