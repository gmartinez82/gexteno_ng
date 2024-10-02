<?php
include_once '_autoload.php';

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
include 'prv_insumo_variables_cabecera.php';

$identificador = Gral::getVars(2, 'identificador', 0);
$insumo_id = Gral::getVars(2, 'insumo_id');
$matriz_id = Gral::getVars(2, 'matriz_id');
$nuevo = Gral::getVars(2, 'nuevo');

$row = $identificador;
$web_ins_marca_id = Gral::getSes('web_ins_marca_id');
$web_pieza_id = Gral::getSes('web_pieza_id');
$nombre_archivo = Gral::getSes('nombre_archivo');
$path_destino = Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo;

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(false);

if (file_exists($path_destino)) {
    $objPHPExcel = $objReader->load($path_destino);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
} else {
    echo "El archivo " . $path_destino . " no existe.";
    exit();
}

include 'set_excel_variables.php';
