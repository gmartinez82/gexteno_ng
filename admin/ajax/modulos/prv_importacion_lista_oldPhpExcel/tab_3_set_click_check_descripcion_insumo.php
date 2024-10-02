<?php

include 'cabecera_phpexcel_tab_3.php';

$check_descripcion = Gral::getVars(2, 'descripcion', 0);

if (!empty($check_descripcion)) {

    if ($col_actualiza_descripcion_val) {
        $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, 0);
    } else {
        $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, 1);
    }

    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);

    // Guarda e imprime una fila de el excel
    include "pie_phpexcel_tab_3.php";
}


