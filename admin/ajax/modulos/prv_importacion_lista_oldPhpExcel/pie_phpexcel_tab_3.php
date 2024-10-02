<?php

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save($path_destino);

$ins_marcas = InsMarca::getInsMarcas();
include "prv_insumo_uno.php";

