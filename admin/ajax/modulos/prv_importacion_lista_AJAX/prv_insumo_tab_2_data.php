<?php

$fp = fopen(Gral::getPathAbs() . "excel/tab_2/arrays/arrays2.txt", "w+");

$linea = '{
  "data": [
';
fwrite($fp, $linea . PHP_EOL);
foreach ($objWorksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    ?>

    <?php

    $linea = '          [';
    foreach ($cellIterator as $cell) {
        
        $cell_value_saneado = $cell->getValue();
        $cell_value_saneado = str_replace('"', '\'', $cell_value_saneado);
        $cell_value_saneado = utf8_encode($cell_value_saneado);
        

        if ($cell->getColumn() == 'A') {
            $linea.= '
            "<input type=\'checkbox\' name=\'check_fila[]\'  value=\'' . $cell->getRow() . '\' checked>",';
        } elseif ($cell->getColumn() == $highestColumn) {
            $linea.= '
            "' . $cell_value_saneado . '"';
        } else {
            $linea.= '
            "' . $cell_value_saneado . '" ,';
        }
    }
    $linea.= '
            ]';

    $linea.= ($prv_importacion->getCantidadTab2() > $cell->getRow()) ? ',' : '';

    // cuerpo
    fwrite($fp, $linea . PHP_EOL);
}

$linea = ']
}                    

                        ';
fwrite($fp, $linea . PHP_EOL);
fclose($fp);
?>