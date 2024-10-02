<?php

// -----------------------------------------------------------------------------
// se arma el primer sheet
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Resumen Subtotal');


// -----------------------------------------------------------------------------
// filtros aplicados
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->getStyle('A1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('A1', $titulo);
$xls->getActiveSheet()->getStyle('B1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('B1', $evento);

$xls->getActiveSheet()->getColumnDimension('B')->setWidth('30');
$xls->getActiveSheet()->getColumnDimension('C')->setWidth('16');
$xls->getActiveSheet()->getColumnDimension('D')->setWidth('16');
$xls->getActiveSheet()->getColumnDimension('E')->setWidth('16');
$xls->getActiveSheet()->getColumnDimension('F')->setWidth('16');

$fila = 2;

$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B' . $fila . ':C' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Cliente", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($cliente_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->mergeCells('C' . $fila . ':E' . $fila);

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B' . $fila . ':C' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Desde", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit(Gral::getFechaToWeb($fecha_desde), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->mergeCells('C' . $fila . ':E' . $fila);

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B' . $fila . ':C' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Hasta", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit(Gral::getFechaToWeb($fecha_hasta), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->mergeCells('C' . $fila . ':E' . $fila);

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B' . $fila . ':C' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Empresa", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($empresa_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->mergeCells('C' . $fila . ':E' . $fila);
// -----------------------------------------------------------------------------

$fila++;
$fila++;

// -----------------------------------------------------------------------------
// Resumen Subtotal
// -----------------------------------------------------------------------------

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('666666');
$xls->getActiveSheet()->getStyle('B' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("SUBTOTAL GENERAL", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

foreach ($arr_resumen_libro_ventas as $i => $arr_resumen_libro) {
    $importe_subtotal = $arr_resumen_libro
            ['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'];

    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('B' . $fila . ':F' . $fila)->applyFromArray($style_libros_linea_comprobantes);
    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit(' ' . $i, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $xls->getActiveSheet()->getCell('F' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('F' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('F' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    if ($importe_subtotal == 0) {
        $xls->getActiveSheet()->getStyle('F' . $fila)->getFont()->getColor()->setARGB('999999');
    }

    foreach ($vta_punto_ventas as $vta_punto_venta) {
        $importe_subtotal = $arr_resumen_libro
                ['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL']
        ;

        $fila++;
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
        $xls->getActiveSheet()->getStyle('B' . $fila . ':F' . $fila)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("     " . $vta_punto_venta->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        $xls->getActiveSheet()->getCell('E' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle('E' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle('E' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

        if ($importe_subtotal == 0) {
            $xls->getActiveSheet()->getStyle('E' . $fila)->getFont()->getColor()->setARGB('999999');
        }

        foreach ($gral_condicion_ivas as $gral_condicion_iva) {
            $importe_subtotal = $arr_resumen_libro
                    ['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]
                    ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL']
            ;

            $fila++;
            $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(18);
            $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
            $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
            $xls->getActiveSheet()->getStyle('B' . $fila . ':F' . $fila)->applyFromArray($borde_style); // bordes
            $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("        " . $gral_condicion_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
            $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

            $xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
            $xls->getActiveSheet()->getStyle('D' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
            $xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

            if ($importe_subtotal == 0) {
                $xls->getActiveSheet()->getStyle('D' . $fila)->getFont()->getColor()->setARGB('999999');
            }

            foreach ($gral_tipo_ivas as $gral_tipo_iva) {
                $importe_subtotal = $arr_resumen_libro
                        ['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]
                        ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]
                        //['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] // generaba confusion el importe subtotal del comprobante
                        ['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE']
                ;

                // solo se agrega si el importe es distinto a cero
                if ($importe_subtotal != 0) {

                    $fila++;
                    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
                    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
                    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
                    $xls->getActiveSheet()->getStyle('B' . $fila . ':F' . $fila)->applyFromArray($borde_style); // bordes
                    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("             " . $gral_tipo_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
                    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                    $xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
                    $xls->getActiveSheet()->getStyle('C' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
                    $xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                    if ($importe_subtotal == 0) {
                        $xls->getActiveSheet()->getStyle('C' . $fila)->getFont()->getColor()->setARGB('999999');
                    }
                }
            }
        }
    }
}
?>