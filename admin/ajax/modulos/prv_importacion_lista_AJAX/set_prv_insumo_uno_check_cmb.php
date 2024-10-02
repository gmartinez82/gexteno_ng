<?php

include_once '_autoload.php';
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
include 'prv_insumo_variables_cabecera.php';

$identificador = Gral::getVars(2, 'identificador', 0);

$check_descripcion = Gral::getVars(2, 'descripcion', 0);
$check_actualiza_costo = Gral::getVars(2, 'actualiza_costo', 0);
$cmb_marca = Gral::getVars(2, 'marca_id', 0);
$cmb_pieza = Gral::getVars(2, 'pieza_id', 0);

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

$col_descripcion_val = $objWorksheet->getCellByColumnAndRow($col_seleccion, $row)->getValue();
$col_actualizar_costo_val = $objWorksheet->getCellByColumnAndRow($col_actualizar_costo, $row)->getValue();

if (!empty($check_descripcion)) {
    if ($col_descripcion_val) {
        $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, 0);
    } else {
        $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, 1);
    }
}

if (!empty($check_actualiza_costo)) {
    if ($col_actualizar_costo_val) {
        $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, 0);
    } else {
        $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, 1);
    }
}

if (!empty($cmb_marca)) {
    $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $cmb_marca);
}

if (!empty($cmb_pieza)) {
    $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $row, $cmb_pieza);
}


$objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save($path_destino);

$ins_marcas = InsMarca::getInsMarcas();
include "prv_insumo_uno.php";


