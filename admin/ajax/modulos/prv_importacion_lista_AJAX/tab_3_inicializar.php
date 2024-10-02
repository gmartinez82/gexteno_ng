<?php
include "_autoload.php";

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
include 'prv_insumo_variables_cabecera.php';

Gral::setSes('PRV_IMPORTACION_LISTA_BUSCADOR_PALABRA', '');
Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_CAMPO', 'fila');
Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_TIPO', 'asc');
        
$prv_importacion_id = Gral::getSes('prv_importacion_id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
if ($prv_importacion) {
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_EN_TAB_3);
    Gral::setSes('prv_importacion_id', $prv_importacion->getId());
}

$nombre_archivo = Gral::getSes('nombre_archivo');
$path_destino = Gral::getPathAbs() . 'excel/tab_2/' . $nombre_archivo;

$filas = Gral::getVars(1, 'check_fila', 0);
$columnas = Gral::getVars(1, 'columna', 0);

$prv_proveedor_id = Gral::getSes('prv_proveedor_id');
$descuento = Gral::getSes('descuento');
$web_ins_marca_id = Gral::getSes('web_ins_marca_id');
$web_pieza_id = Gral::getSes('web_pieza_id');

$objReader_tab2 = PHPExcel_IOFactory::createReader('Excel2007');
$objReader_tab2->setReadDataOnly(false);

if (file_exists($path_destino)) {
    $objPHPExcel_tab2 = $objReader_tab2->load($path_destino);
    $objWorksheet_tab2 = $objPHPExcel_tab2->setActiveSheetIndex(0);

    $highestRow = $objWorksheet_tab2->getHighestRow();

    // Seteo los check
    if (isset($filas)) {
        foreach ($filas as $fila) {
            $objWorksheet_tab2->setCellValueByColumnAndRow(0, $fila, '1');
        }
    }

    // Seteo la cabecera
    if (isset($columnas)) {
        $objWorksheet_tab2->insertNewRowBefore();
        $objWorksheet_tab2->setCellValueByColumnAndRow(0, 1, 'seleccion');
        for ($i = 0; $i < count($columnas); $i++) {
            $objWorksheet_tab2->setCellValueByColumnAndRow($i + 1, 1, $columnas[$i]);
        }
    }

    // borro las filas vacias
    $highestRow = $objWorksheet_tab2->getHighestRow();
    //Gral::pr($highestRow, 'Paso 1');
    for ($row = $highestRow; $row >= 1; --$row) {
        if ($objWorksheet_tab2->getCellByColumnAndRow(0, $row)->getValue() == '') {
            //$objWorksheet_tab2->removeRow($row);
        }
    }

    $highestRow = $objWorksheet_tab2->getHighestRow();
    //Gral::pr($highestRow, 'Paso 2');
    // Ordeno las columnas
    $highestColumn = $objWorksheet_tab2->getHighestColumn();
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

    for ($col = 0; $col <= $highestColumnIndex; ++$col) {
        switch ($objWorksheet_tab2->getCellByColumnAndRow($col, 1)->getValue()) {
            case 'seleccion':
                $col_web_seleccion = $col;
                break;
            case 'descripcion':
                $col_web_descripcion = $col;
                break;
            case 'codigo_proveedor':
                $col_web_codigo_proveedor = $col;
                break;
            case 'codigo_marca':
                $col_web_codigo_marca = $col;
                break;
            case 'codigo_pieza':
                $col_web_codigo_pieza = $col;
                break;
            case 'marca_id':
                $col_web_marca_id = $col;
                break;
            case 'pieza_id':
                $col_web_pieza_id = $col;
                break;
            case 'importe':
                $col_web_importe = $col;
                break;
        }
    }

    if (!isset($col_web_codigo_proveedor) || !isset($col_web_descripcion) || !isset($col_web_importe)) {
        echo 'Error al seleccionar las columnas. Debe seleccionar minimamente CODIGO DE PROVEEDOR, DESCRIPCION e IMPORTE';
        echo ""
        . "<script>"
        . "ocultarLoadingPaso();"
        . "</script>"
        ;
        exit();
    }

    // borro las filas que no tengan cod de proveedor, descripcion o importe
    $highestRow = $objWorksheet_tab2->getHighestRow();
    //Gral::pr($highestRow, 'Paso 3');

    for ($row = $highestRow; $row > 1; --$row) {
        $col_prv_objWorksheet_tab2_tmp = $objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_proveedor, $row)->getValue();
        //$col_descripcion_objWorksheet_tab2_tmp = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
        if ($col_prv_objWorksheet_tab2_tmp == '') {
            //$objWorksheet_tab2->removeRow($row, 1);
        }
    }

    include 'prv_importacion_logica_tab_3.php';
} else {
    echo "No se encuentra el documento: ";
    echo $path_destino;
    exit();
}
?>