<?php

$path_destino_rollback = Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo;
if (file_exists($path_destino_rollback)) {
    $objReader_rollback = PHPExcel_IOFactory::createReader('Excel2007');
    $objReader_rollback->setReadDataOnly(false);

    $objPHPExcel_rollback = $objReader_rollback->load($path_destino_rollback);
    $objWorksheet_rollback = $objPHPExcel_rollback->setActiveSheetIndex(0);


    // Obtengo los valores viejos de la carpeta rollback
//    $col_prv_insumo_id_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_prv_insumo_id, $row)->getValue();
//    $col_codigo_proveedor_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_codigo_proveedor, $row)->getValue();
//    $col_actualiza_descripcion_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_seleccion, $row)->getValue();
//    $col_descripcion_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_descripcion, $row)->getValue();
//    $col_importe_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_importe, $row)->getValue();
//    $col_descuento_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_descuento, $row)->getValue();
//    $col_importe_neto_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_importe_neto, $row)->getValue();
//    $col_ultimo_importe_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_ultimo_importe, $row)->getValue();
//    $col_fecha_importacion_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_fecha_importacion, $row)->getValue();
//    $col_incremento_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_incremento, $row)->getValue();
    $col_costo_actual_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_costo_actual, $row)->getValue();
    $col_variacion_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_variacion, $row)->getValue();
//    $col_actualizar_costo_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_actualizar_costo, $row)->getValue();


    if ((int) $col_prv_insumo_id_rollback_val > 0) {
        $prv_insumo_rollback = PrvInsumo::getOxId((int) $col_prv_insumo_id_rollback_val);
        if ($prv_insumo_rollback) {
            $col_codigo_marca_rollback_val = ($prv_insumo_rollback->getCodigoMarca() != null) ? $prv_insumo_rollback->getCodigoMarca() : $objWorksheet_rollback->getCellByColumnAndRow($col_codigo_marca, $row)->getValue();
            $col_codigo_pieza_rollback_val = ($prv_insumo_rollback->getCodigoPieza() != null) ? $prv_insumo_rollback->getCodigoPieza() : $col_codigo_pieza_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue();
            $col_marca_id_rollback_val = ($prv_insumo_rollback->getInsMarcaId() != 'null') ? $prv_insumo_rollback->getInsMarcaId() : $web_ins_marca_id;
            $col_pieza_id_rollback_val = ($col_pieza_id_rollback_val->getInsMarcaPieza() != 'null') ? $col_pieza_id_rollback_val->getInsMarcaPieza() : $web_pieza_id;
        }
    } else {
        /*
        // se obtiene desde el excel original
        $col_codigo_marca_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_codigo_marca, $row)->getValue();
        $col_codigo_pieza_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue();
        $col_marca_id_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_marca_id, $row)->getValue();
        $col_pieza_id_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_pieza_id, $row)->getValue();
        */
        
        // se toma desde el excel modificado
        $col_codigo_marca_rollback_val = $objWorksheet->getCellByColumnAndRow($col_codigo_marca, $row)->getValue();
        $col_codigo_pieza_rollback_val = $objWorksheet->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue();
        $col_marca_id_rollback_val = $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue();
        $col_pieza_id_rollback_val = $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue();
        
    }


    $col_ins_insumo_id_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_ins_insumo_id, $row)->getValue();
    $col_ins_matriz_id_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_ins_matriz_id, $row)->getValue();

//    $col_cancelado_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_cancelado, $row)->getValue();
//    $col_descripcion_matriz_rollback_val = $objWorksheet_rollback->getCellByColumnAndRow($col_descripcion_matriz, $row)->getValue();
    // Asigno los nuevos valores
//    $objWorksheet->setCellValueByColumnAndRow($col_prv_insumo_id, $row, $col_prv_insumo_id_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_codigo_proveedor, $row, $col_codigo_proveedor_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, $col_actualiza_descripcion_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_descripcion, $row, $col_descripcion_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_importe, $row, $col_importe_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_descuento, $row, $col_descuento_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_importe_neto, $row, $col_importe_neto_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, $row, $col_ultimo_importe_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, $row, $col_fecha_importacion_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_incremento, $row, $col_incremento_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, $col_costo_actual_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, $col_variacion_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, $col_actualizar_costo_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_codigo_marca, $row, $col_codigo_marca_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_codigo_pieza, $row, $col_codigo_pieza_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $col_marca_id_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $row, $col_pieza_id_rollback_val);

    $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, $col_ins_insumo_id_rollback_val);
    $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, $col_ins_matriz_id_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 0);
    $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, 0);

//    $objWorksheet->setCellValueByColumnAndRow($col_cancelado, $row, $col_cancelado_rollback_val);
//    $objWorksheet->setCellValueByColumnAndRow($col_descripcion_matriz, $row, $col_descripcion_matriz_rollback_val);
} else {
    echo "El archivo " . $path_destino_rollback . " no existe.";
    exit();
}
