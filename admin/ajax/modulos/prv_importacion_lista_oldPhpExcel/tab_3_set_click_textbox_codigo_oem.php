<?php

include 'cabecera_phpexcel_tab_3.php';

$codigo = PrvInsumoExcel::getCodigoSaneado(Gral::getVars(2, 'codigo', ''));

if ($identificador) {

//    $objWorksheet->setCellValueByColumnAndRow($col_codigo_pieza, $row, $codigo);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_codigo_pieza, $row, $codigo, PHPExcel_Cell_DataType::TYPE_STRING);

    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);
}

// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
