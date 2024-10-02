<?php

include 'cabecera_phpexcel_tab_3.php';

if ($col_cancelado_val == 0) {
    $objWorksheet->setCellValueByColumnAndRow($col_cancelado, $row, 1);
} else {
    $objWorksheet->setCellValueByColumnAndRow($col_cancelado, $row, 0);
}


// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
