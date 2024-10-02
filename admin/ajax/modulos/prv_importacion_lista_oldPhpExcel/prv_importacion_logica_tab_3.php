<?php

$arr = PrvInsumo::getPrvInsumosEnArray($prv_proveedor_id);

for ($row = 2; $row <= $highestRow; ++$row) {

    //$prv_insumo = PrvInsumo::getPrvInsumoXPrvProveedorIdXCodProveedor($prv_proveedor_id, PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_web_codigo_proveedor, $row)->getValue()));
    $cod_proveedor_saneado = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_proveedor, $row)->getValue());
    $prv_insumo = $arr[$prv_proveedor_id][$cod_proveedor_saneado];

    if ($prv_insumo) {
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
        $ins_insumo_costo_actual = $prv_insumo->getInsInsumoCostoActual($prv_insumo->getInsInsumoId());

        $id = $prv_insumo->getId();
        $codigo_proveedor = $cod_proveedor_saneado;
        $actualiza_descripcion = '0';
        $decripcion = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
        $importe = number_format($objWorksheet_tab2->getCellByColumnAndRow($col_web_importe, $row)->getValue(), 2, '.', '');
        $importe_neto = number_format($importe * (1 - ($descuento / 100)), 2, '.', '');
        $ultimo_importe = $prv_insumo_costo_actual->getImporteNeto();
        $fecha_importacion = Gral::getFechaHoraToWEB($prv_insumo_costo_actual->getFechaActualizacion());
        $proveedor_referencial = $prv_insumo->getReferencial();

        $incremento = ($importe_neto != $ultimo_importe) ? number_format((($importe_neto - $ultimo_importe) / $ultimo_importe) * 100, 0, '.', '') : "0";

        if ($ins_insumo_costo_actual) {
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $variacion = number_format((($importe_neto - $ins_insumo_costo_actual->getCosto()) / $ins_insumo_costo_actual->getCosto()) * 100, 0, '.', '');
        } else {
            $costo_actual = '';
            $variacion = '';
        }
        $actualizar_costo = '0';
        if($prv_insumo->getReferencial()) $actualizar_costo = '1'; // si es referencial de precios se configura check = 1

        if (isset($col_web_codigo_marca)) {
            $codigo_marca = ($prv_insumo->getCodigoMarca() != null) ? $prv_insumo->getCodigoMarca() : PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_marca, $row)->getValue());
        } else {
            $codigo_marca = ($prv_insumo->getCodigoMarca() != null) ? $prv_insumo->getCodigoMarca() : '';
        }

        if (isset($col_web_codigo_pieza)) {
            $codigo_pieza = ($prv_insumo->getCodigoPieza() != null) ? $prv_insumo->getCodigoPieza() : PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_pieza, $row)->getValue());
        } else {
            $codigo_pieza = ($prv_insumo->getCodigoPieza() != null) ? $prv_insumo->getCodigoPieza() : '';
        }


        if (isset($web_ins_marca_id)) {
            $marca_id = ($prv_insumo->getInsMarcaId() != 'null') ? $prv_insumo->getInsMarcaId() : $web_ins_marca_id;
        } else {
            $marca_id = ($prv_insumo->getInsMarcaId() != 'null') ? $prv_insumo->getInsMarcaId() : '';
        }

        if (isset($web_pieza_id)) {
            $pieza_id = ($prv_insumo->getInsMarcaPieza() != 'null') ? $prv_insumo->getInsMarcaPieza() : $web_pieza_id;
        } else {
            $pieza_id = ($prv_insumo->getInsMarcaPieza() != 'null') ? $prv_insumo->getInsMarcaPieza() : '';
        }

        $ins_insumo_id = ((int) $prv_insumo->getInsInsumoId() != 0) ? (int) $prv_insumo->getInsInsumoId() : '';
        $ins_matriz_id = ((int) $prv_insumo->getInsMatrizId() != 0) ? (int) $prv_insumo->getInsMatrizId() : '';
        $modificado = '0';
        $nuevo = '0';
        $cancelado = '0';
        $descripcion_matriz = '';
    } else {
        $id = '';
        $codigo_proveedor = $cod_proveedor_saneado;
        $actualiza_descripcion = '0';
        $decripcion = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
        $importe = number_format($objWorksheet_tab2->getCellByColumnAndRow($col_web_importe, $row)->getValue(), 2, '.', '');
        $importe_neto = number_format($importe * (1 - ($descuento / 100)), 2, '.', '');
        $ultimo_importe = '';
        $fecha_importacion = '';
        $incremento = '';
        $costo_actual = '';
        $variacion = '';
        $actualizar_costo = '0';

        if (isset($col_web_codigo_marca)) {
            $codigo_marca = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_marca, $row)->getValue());
        } else {
            $codigo_marca = '';
        }

        if (isset($col_web_codigo_pieza)) {
            $codigo_pieza = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_pieza, $row)->getValue());
        } else {
            $codigo_pieza = '';
        }

        $marca_id = ($web_ins_marca_id != 0) ? $web_ins_marca_id : '';
        $pieza_id = ($web_pieza_id != 0) ? $web_pieza_id : '';

        $ins_insumo_id = '';
        $ins_matriz_id = '';
        $modificado = '0';
        $nuevo = '0';
        $cancelado = '0';
        $descripcion_matriz = '';
        $proveedor_referencial = 0;
    }

    $objWorksheet->setCellValueByColumnAndRow($col_prv_insumo_id, $row, $id);
//    $objWorksheet->setCellValueByColumnAndRow($col_codigo_proveedor, $row, $cod_proveedor_saneado);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_codigo_proveedor, $row, $cod_proveedor_saneado, PHPExcel_Cell_DataType::TYPE_STRING);
    $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $row, $actualiza_descripcion);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_descripcion, $row, $decripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $objWorksheet->setCellValueByColumnAndRow($col_importe, $row, $importe);
    $objWorksheet->setCellValueByColumnAndRow($col_descuento, $row, $descuento);
    $objWorksheet->setCellValueByColumnAndRow($col_importe_neto, $row, $importe_neto);
    $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, $row, $ultimo_importe);
    $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, $row, $fecha_importacion);
    $objWorksheet->setCellValueByColumnAndRow($col_incremento, $row, $incremento);
    $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, $costo_actual);
    $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, $variacion);
    $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $row, $actualizar_costo);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_codigo_marca, $row, $codigo_marca, PHPExcel_Cell_DataType::TYPE_STRING);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_codigo_pieza, $row, $codigo_pieza, PHPExcel_Cell_DataType::TYPE_STRING);
    $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $marca_id);
    $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $row, $pieza_id);
    $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, $ins_insumo_id);
    $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, $ins_matriz_id);
    $objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, $modificado);
    $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, $nuevo);
    $objWorksheet->setCellValueByColumnAndRow($col_cancelado, $row, $cancelado);
    $objWorksheet->setCellValueExplicitByColumnAndRow($col_descripcion_matriz, $row, $descripcion_matriz, PHPExcel_Cell_DataType::TYPE_STRING);
    $objWorksheet->setCellValueByColumnAndRow($col_proveedor_referencial, $row, $proveedor_referencial);
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo);
$objWriter->save(Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo);
