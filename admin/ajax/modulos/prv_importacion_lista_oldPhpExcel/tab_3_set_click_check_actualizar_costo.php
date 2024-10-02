<?php

include 'cabecera_phpexcel_tab_3.php';

$check_actualiza_costo = Gral::getVars(2, 'actualiza_costo', 0);

if (!empty($check_actualiza_costo)) {
    if ($col_actualizar_costo_val) {
        $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, 0);
    } else {
        $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, 1);
    }

    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);

// Guarda e imprime una fila de el excel
    include "pie_phpexcel_tab_3.php";
}
