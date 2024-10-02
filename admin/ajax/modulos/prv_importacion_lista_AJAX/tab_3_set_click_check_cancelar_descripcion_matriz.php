<?php

include 'cabecera_phpexcel_tab_3.php';

$path_destino_rollback = Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo;
if (file_exists($path_destino_rollback)) {
    $objReader_rollback = PHPExcel_IOFactory::createReader('Excel2007');
    $objReader_rollback->setReadDataOnly(false);

    $objPHPExcel_rollback = $objReader_rollback->load($path_destino_rollback);
    $objWorksheet_rollback = $objPHPExcel_rollback->setActiveSheetIndex(0);


    // Obtengo los valores viejos de la carpeta rollback
    $col_descripcion_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_descripcion, $row)->getValue();
    $col_descripcion_matriz_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_descripcion_matriz, $row)->getValue();

    // Asigno los nuevos valores
    $objWorksheet->setCellValueByColumnAndRow($col_descripcion, $row, $col_descripcion_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_descripcion_matriz, $row, $col_descripcion_matriz_rollback_val);
} else {
    echo "El archivo " . $path_destino_rollback . " no existe.";
    exit();
}


// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
