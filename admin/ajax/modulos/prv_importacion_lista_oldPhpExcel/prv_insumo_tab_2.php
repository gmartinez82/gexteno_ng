<?php
include "_autoload.php";
session_start();

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
// 1= Post
// 2= Get
if (!isset($_POST['pos_worksheet'])) {
    $pos_worksheet = 0;

    $pos_cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', 0);
    $pos_cmb_prv_convenio_descuento_id = Gral::getVars(1, 'cmb_prv_convenio_descuento_id', null);
    $pos_descuento = Gral::getVars(1, 'descuento', 0);
    $pos_cmb_ins_marca_id = Gral::getVars(1, 'cmb_ins_marca_id', null);
    $pos_cmb_pieza_id = Gral::getVars(1, 'cmb_pieza_id', null);


    Gral::setSes('prv_proveedor_id', $pos_cmb_prv_proveedor_id);
    Gral::setSes('descuento', $pos_descuento);
    Gral::setSes('prv_convenio_descuento_id', $pos_cmb_prv_convenio_descuento_id);
    Gral::setSes('web_ins_marca_id', $pos_cmb_ins_marca_id);
    Gral::setSes('web_pieza_id', $pos_cmb_pieza_id);

// se inicializa el prv importacion
    $prv_importacion = new PrvImportacion();
    $prv_importacion->setPrvProveedorId($pos_cmb_prv_proveedor_id);
    $prv_importacion->setInsMarcaId($pos_cmb_ins_marca_id);
    $prv_importacion->setInsMarcaPieza($pos_cmb_pieza_id);
    $prv_importacion->setPrvConvenioDescuentoId($pos_cmb_prv_convenio_descuento_id);
    $prv_importacion->setDescuento($pos_descuento);
    $prv_importacion->setRegistrarImportacion();

    Gral::setSes('prv_importacion_id', $prv_importacion->getId());

    $uploadedfileload = true;

    if ($_FILES['file']['size'] > 2000000) {
        $msg = $msg . "El archivo es mayor que 20 MB, debes reduzcirlo antes de subirlo.";
        $uploadedfileload = false;
    }
    if ($_FILES['file']['type'] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" && $_FILES['file']['type'] != "application/vnd.ms-excel") {
        $msg = $msg . " El archivo tiene que ser formato Excel. Otros archivos no son permitidos.";
        $uploadedfileload = false;
    }

    $path = $_FILES['file']['tmp_name'];
    $nombre_archivo = $prv_importacion->getId() . '.xlsx';
    $path_destino_tab_1 = Gral::getPathAbs() . 'excel/tab_1/' . $nombre_archivo;
    $path_destino_tab_2 = Gral::getPathAbs() . 'excel/tab_2/' . $nombre_archivo;

    if ($uploadedfileload) {
        if (!move_uploaded_file($path, $path_destino_tab_1)) {
            echo "Error al subir el archivo. ";
        }
    } else {
        echo $msg;
        exit();
    }

    $extension = end(explode(".", $_FILES['file']['name']));

    if ($extension == "xls") {
        $objReader = new PHPExcel_Reader_Excel5(); // Excel5
    } else {
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
    }

    $objReader->setReadDataOnly(false);
} else {

    $pos_worksheet = Gral::getVars(1, 'pos_worksheet', 0);
    $prv_importacion_id = Gral::getSes('prv_importacion_id');
    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
    
    if ($prv_importacion) {
        $nombre_archivo = $prv_importacion->getId() . '.xlsx';
        $path_destino_tab_1 = Gral::getPathAbs() . 'excel/tab_1/' . $nombre_archivo;
        $path_destino_tab_2 = Gral::getPathAbs() . 'excel/tab_2/' . $nombre_archivo;
    } else {
        Gral::_echo("Error al intentar cambiar de Hoja de Trabajo.");
        exit();
    }

    $objReader = PHPExcel_IOFactory::createReader('Excel2007');
}

if (file_exists($path_destino_tab_1)) {
    $objPHPExcel_tmp = $objReader->load($path_destino_tab_1);
    $objWorksheet_tmp = $objPHPExcel_tmp->setActiveSheetIndex($pos_worksheet);

    $objPHPExcel = new PHPExcel();
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

    // Borro las filas vacias
    $fila_tmp = 1;
    $fila = 1;
    foreach ($objWorksheet_tmp->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);

        $vacia = true;
        foreach ($cellIterator as $cell) {
//            if (!empty($cell->getValue())) {
//            if ($cell->getValue()!='') {
//            if ($cell->getValue()!="") {
            if ($cell->getValue() != 0) {
                $vacia = false;
            }
        }
        $columna = 0;
        if (!$vacia) {
            foreach ($cellIterator as $cell) {
                $type = PHPExcel_Cell_DataType::TYPE_STRING2;
                //$objWorksheet->getCellByColumnAndRow($columna, $fila)->setValueExplicit($cell->getCalculatedValue(), $type);

                //$objPHPExcel->getActiveSheet()->setCellValueExplicit('A1', '0029', PHPExcel_Cell_DataType::TYPE_STRING);
                //$objPHPExcel->getActiveSheet()->getStyle('A1')->getNumberFormat()->setFormatCode('000000');

                //$objWorksheet->setCellValueExplicitByColumnAndRow($columna, $fila, $cell->getCalculatedValue());
                
                $valor_saneado = trim($cell->getCalculatedValue());
                $objWorksheet->setCellValueByColumnAndRow($columna, $fila, $valor_saneado);
                
                $columna++;
            }
            $fila++;
        }
        $fila_tmp++;
    }

    $objWorksheet->insertNewColumnBefore();

    $array_sheet_names = $objPHPExcel_tmp->getSheetNames();
    $objPHPExcel_tmp->__destruct();

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save($path_destino_tab_2);

    Gral::setSes('nombre_archivo', $nombre_archivo);
} else {
    echo "No se encuentra el documento: ";
    echo $path_destino_tab_1;
    exit();
}

$highestColumn = $objWorksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
?>


<form action="" method="POST" name="formulario_configurar_columnas" id="formulario_configurar_columnas">

    <?php include "prv_importacion_info_top.php" ?>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Hoja de Trabajo") ?>: </div>
        <div class="dato">
            <select id="cmb_worksheet" class="cmb_worksheet" name="cmb_worksheet">
                <?php
                foreach ($array_sheet_names as $key => $sheet) {
                    $cmb_worksheet_select = ($pos_worksheet == $key) ? "selected" : "";
                    ?>
                    <option value="<?php echo $key; ?>" <?php echo $cmb_worksheet_select; ?>><?php echo ($key + 1) . ' - ' . $sheet; ?> </option>
                <?php } ?> 
            </select>
        </div>
    </div>  
    
    <table class="display" id="tabla_tabs_2">

        <thead>
            <tr>
                <?php
                for ($col = 1; $col <= $highestColumnIndex; ++$col) {
                    if ($col == 1) {
                        ?>
                        <th>Sel</th>
                        <?php
                    } else {
                        ?>
                        <th> 
                            <select id="cmb_column_name_<?php echo $col ?>" class="column_name" name="columna[]">
                                <option value="">...</option>
                                <option value="descripcion">Descripción</option>
                                <option value="codigo_proveedor">Cod Proveedor</option>
                                <option value="codigo_marca">Cod Marca</option>
                                <option value="codigo_pieza">Cod OEM</option>
                                <option value="importe">Importe</option>
                            </select>
                        </th>
                        <?php
                    }
                }
                ?>
            </tr>
        </thead>
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
                            <td align="center" ><input type="checkbox" name="check_fila[]"  value="<?php echo $cell->getRow() ?>" checked></td>
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
    </table>

    <div class="botonera botonera-siguiente">
        <a class="boton" id="siguiente_tabs_3" href="#" >Siguiente</a>
    </div>

</form>
