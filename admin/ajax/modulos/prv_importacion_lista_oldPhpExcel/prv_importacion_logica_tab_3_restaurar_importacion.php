<?php

$arr = PrvInsumo::getPrvInsumosEnArray($prv_proveedor_id);

for ($row = 2; $row <= $highestRow; ++$row) {

    $cod_proveedor_saneado = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_proveedor, $row)->getValue());
    //$prv_insumo = PrvInsumo::getPrvInsumoXPrvProveedorIdXCodProveedor($prv_proveedor_id, $cod_proveedor_saneado);
    $prv_insumo = $arr[$prv_proveedor_id][$cod_proveedor_saneado];

    if ($prv_insumo) {

        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
        $ins_insumo_costo_actual = $prv_insumo->getInsInsumoCostoActual($prv_insumo->getInsInsumoId());

        $importe = number_format($objWorksheet->getCellByColumnAndRow($col_importe, $row)->getValue(), 2, '.', '');
        $importe_neto = number_format($importe * (1 - ($descuento / 100)), 2, '.', '');
        $ultimo_importe = $prv_insumo_costo_actual->getImporteNeto();
        $fecha_importacion = Gral::getFechaHoraToWEB($prv_insumo_costo_actual->getFechaActualizacion());

        $incremento = ($importe_neto != $ultimo_importe) ? number_format((($importe_neto - $ultimo_importe) / $ultimo_importe) * 100, 0, '.', '') : "0";

        if ($ins_insumo_costo_actual) {
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $variacion = number_format((($importe_neto - $costo_actual) / $costo_actual) * 100, 0, '.', '');
        } else {
            $costo_actual = '';
            $variacion = '';
        }
        $proveedor_referencial = $prv_insumo->getReferencial();
        
    } else {
        
        $ultimo_importe = '';
        $fecha_importacion = '';
        $incremento = '';
        $costo_actual = '';
        $variacion = '';
        
        $proveedor_referencial = 0;
    }

    $objWorksheet_rollback->setCellValueByColumnAndRow($col_ultimo_importe, $row, $ultimo_importe);
    $objWorksheet_rollback->setCellValueByColumnAndRow($col_fecha_importacion, $row, $fecha_importacion);
    $objWorksheet_rollback->setCellValueByColumnAndRow($col_incremento, $row, $incremento);
    $objWorksheet_rollback->setCellValueByColumnAndRow($col_costo_actual, $row, $costo_actual);
    $objWorksheet_rollback->setCellValueByColumnAndRow($col_variacion, $row, $variacion);
    
    $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, $row, $ultimo_importe);
    $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, $row, $fecha_importacion);
    $objWorksheet->setCellValueByColumnAndRow($col_incremento, $row, $incremento);
    $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, $costo_actual);
    $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, $variacion);
    $objWorksheet->setCellValueByColumnAndRow($col_proveedor_referencial, $row, $proveedor_referencial);
}

$objWriter_rollback = PHPExcel_IOFactory::createWriter($objPHPExcel_rollback, 'Excel2007');
$objWriter_rollback->save(Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo);
