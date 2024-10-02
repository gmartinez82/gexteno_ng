<?php

include 'cabecera_phpexcel_tab_3.php';

$descripcion_matriz = Gral::getVars(2, 'descripcion_matriz', 0);
$descripcion_insumo = Gral::getVars(2, 'descripcion_insumo', 0);

$modificado = false;
if (!empty($descripcion_matriz)) {
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_descripcion_matriz, $row, $descripcion_matriz, PHPExcel_Cell_DataType::TYPE_STRING);
    $modificado = true;
}

if (!empty($descripcion_insumo)) {
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_descripcion, $row, $descripcion_insumo, PHPExcel_Cell_DataType::TYPE_STRING);
    $modificado = true;
}


if ($modificado) {
    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save($path_destino);
}