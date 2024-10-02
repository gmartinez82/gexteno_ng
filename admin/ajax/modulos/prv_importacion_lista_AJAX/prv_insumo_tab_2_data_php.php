<?php

$fp = fopen(Gral::getPathAbs() . "excel/tab_2/arrays/arrays2.txt", "w+");

$array = array();

foreach ($objWorksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);

    
    $array_col = array();
    foreach ($cellIterator as $cell) {

        $cell_value_saneado = $cell->getValue();
        //$cell_value_saneado = str_replace('"', '\'', $cell_value_saneado);
        //$cell_value_saneado = utf8_encode($cell_value_saneado);


        if ($cell->getColumn() == 'A') {

            $linea = '<input type=\'checkbox\' name=\'check_fila[]\'  value=\'' . $cell->getRow() . '\' checked>';
            $array_col[] = $linea;
        } else {

            $linea = $cell_value_saneado;
            $array_col[] = $linea;
        }
    }
    
    $array['data'][] = $array_col;
    
}

$array_json = json_encode($array);
//$array_json = print_r($array, true);

fwrite($fp, $array_json . PHP_EOL);
fclose($fp);
?>