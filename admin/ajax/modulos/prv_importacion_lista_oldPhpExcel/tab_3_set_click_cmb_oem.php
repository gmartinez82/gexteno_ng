<?php

include 'cabecera_phpexcel_tab_3.php';

$cmb_pieza = Gral::getVars(2, 'pieza_id', null);

if (!is_null($cmb_pieza)) {
    $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $row, $cmb_pieza);
    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);
}



// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
