<?php

include 'cabecera_phpexcel_tab_3.php';

$cmb_marca = Gral::getVars(2, 'marca_id', null);

if (!is_null($cmb_marca)) {
    $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $cmb_marca);
    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);
}



// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
