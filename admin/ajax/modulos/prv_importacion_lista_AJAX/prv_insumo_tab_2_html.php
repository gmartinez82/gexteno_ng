<tbody>
    <?php
    foreach ($objWorksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        ?>
        <tr>
            <?php
            foreach ($cellIterator as $cell) {
                if ($cell->getColumn() == 'A') {
                    ?>
                    <td align="center" >
                        <input type="checkbox" name="check_fila[]"  value="<?php echo $cell->getRow() ?>" checked>
                    </td>
                    <?php
                } else {
                    ?>
                    <td align="center" ><?php echo $cell->getValue() ?></td>
                    <?php
                }
            }
            ?>
        </tr>
        <?php
    }
    ?>
</tbody>
