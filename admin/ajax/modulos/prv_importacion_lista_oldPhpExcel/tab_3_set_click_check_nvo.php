<?php
include_once '_autoload.php';
/*
include_once Gral::getPathAbs()."comps/eiseXLSX/eiseXLSX.php";

$identificador = Gral::getVars(2, 'identificador', 0);
$insumo_id = Gral::getVars(2, 'insumo_id');
$matriz_id = Gral::getVars(2, 'matriz_id');
$nuevo = Gral::getVars(2, 'nuevo', 0);

$xlsx = new eiseXLSX(Gral::getPathAbs()."excel/tab_3/80.xlsx");

//$xlsx->data('U'.$identificador, $nuevo);

$xlsx->Output(Gral::getPathAbs()."excel/tab_3/80.xlsx", "F");

for($i=1; $i<=24; $i++){
$myData = $xlsx->data("R".$identificador."C".$i);
Gral::prr($myData);
}

return;
*/

include 'cabecera_phpexcel_tab_3.php';

if ($nuevo == 1) {
    include 'set_rollback_nvo.php';

    $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, 0);
    $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, 0);

    $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, 1);
}

// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
