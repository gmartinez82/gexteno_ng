<?php

// -----------------------------------------------------------------------------
// se arma el primer sheet
// -----------------------------------------------------------------------------
$xls->createSheet(1);
$xls->setActiveSheetIndex(1);
$xls->getActiveSheet()->setTitle('Resumen IVA');


// -----------------------------------------------------------------------------
// filtros aplicados
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->getStyle('A1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('A1', $titulo);
$xls->getActiveSheet()->getStyle('B1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('B1', $evento);

$xls->getActiveSheet()->getColumnDimension('B')->setWidth('30');
$xls->getActiveSheet()->getColumnDimension('C')->setWidth('20');
$xls->getActiveSheet()->getColumnDimension('D')->setWidth('20');

$fila = 2;

$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
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
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
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
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
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
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
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

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(25);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->applyFromArray($style_libros_cabecera_resumen_titulo); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("RESUMEN IVA", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(25);
$xls->getActiveSheet()->getStyle('C' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle('C' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($style_libros_cabecera_resumen_comprobantes); // bordes

$xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit("Base Imponible", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit("Importe IVA", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

foreach ($gral_condicion_ivas as $gral_condicion_iva) {

    $total_base_imponible_x_condicion_iva = 0;
    $total_importe_iva_x_condicion_iva = 0;

    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('CCCCCC');
    $xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($borde_negrita_style); // bordes
    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit($gral_condicion_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    foreach ($vta_tipo_comprobantes as $vta_tipo_comprobante) {

        $fila++;
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
        $xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit('    ' . $vta_tipo_comprobante['descripcion'], PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        foreach ($gral_tipo_ivas as $gral_tipo_iva) {
            $importe_base_imponible = $arr_resumen_libro_ventas
                    [$vta_tipo_comprobante['codigo']]
                    ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]
                    ['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE']
            ;
            $importe_iva_importe = $arr_resumen_libro_ventas
                    [$vta_tipo_comprobante['codigo']]
                    ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]
                    ['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE']
            ;

            $total_base_imponible_x_condicion_iva += $importe_base_imponible;
            $total_importe_iva_x_condicion_iva += $importe_iva_importe;

            $arr_total_base_imponible_x_tipo_iva[$gral_tipo_iva->getCodigo()] += $importe_base_imponible;
            $arr_total_importe_iva_x_tipo_iva[$gral_tipo_iva->getCodigo()] += $importe_iva_importe;

            if ($importe_base_imponible != 0) { // solo se muestra si el importe del iva es distinto de cero, para evitar datos confusos
                $fila++;
                $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
                $xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($borde_negrita_style); // bordes
                $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit('        ' . $gral_tipo_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($importe_base_imponible, PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $xls->getActiveSheet()->getStyle('C' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
                $xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                $xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit($importe_iva_importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $xls->getActiveSheet()->getStyle('D' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
                $xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            }
        }
    }

    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($style_libros_linea_comprobantes_subtotal); // bordes
    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Subtotal " . $gral_condicion_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($total_base_imponible_x_condicion_iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('C' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    $xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit($total_importe_iva_x_condicion_iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('D' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
}


$fila++;
foreach ($arr_total_base_imponible_x_tipo_iva as $tipo_iva_codigo => $importe_base_imponible) {
    
    $gral_tipo_iva = GralTipoIva::getOxCodigo($tipo_iva_codigo);
    
    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($style_libros_linea_comprobantes_subtotal); // bordes
    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("Total ".$gral_tipo_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $xls->getActiveSheet()->getCell('C' . $fila)->setValueExplicit($importe_base_imponible, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('C' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('C' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    $xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit($arr_total_importe_iva_x_tipo_iva[$tipo_iva_codigo], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('D' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
}






return;
//  no va mas, metodologia original

$fila++;
$fila++;

$fila_inicial = $fila;

// -----------------------------------------------------------------------------
// Resumen IVA Base Imponible
// -----------------------------------------------------------------------------

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('666666');
$xls->getActiveSheet()->getStyle('B' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("IVA Base Imponible", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

foreach ($arr_resumen_libro_ventas as $i => $arr_resumen_libro) {
    $importe_subtotal = $arr_resumen_libro
            ['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'];

    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('B' . $fila . ':E' . $fila)->applyFromArray($style_libros_linea_comprobantes); // bordes
    $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit(' ' . $i, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $xls->getActiveSheet()->getCell('E' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('E' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('E' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    if ($importe_subtotal == 0) {
        $xls->getActiveSheet()->getStyle('E' . $fila)->getFont()->getColor()->setARGB('999999');
    }


    foreach ($gral_condicion_ivas as $gral_condicion_iva) {
        $importe_subtotal = $arr_resumen_libro
                ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE']
        ;

        $fila++;
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
        $xls->getActiveSheet()->getStyle('B' . $fila . ':E' . $fila)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("    " . $gral_condicion_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle('B' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        $xls->getActiveSheet()->getCell('D' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle('D' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle('D' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

        if ($importe_subtotal == 0) {
            $xls->getActiveSheet()->getStyle('D' . $fila)->getFont()->getColor()->setARGB('999999');
        }

        foreach ($gral_tipo_ivas as $gral_tipo_iva) {
            $importe_subtotal = $arr_resumen_libro
                    ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]
                    ['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE']
            ;

            // solo se agrega si el importe es mayor a cero
            if ($importe_subtotal > 0 || true) {

                $fila++;
                $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $xls->getActiveSheet()->getStyle('B' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
                $xls->getActiveSheet()->getStyle('B' . $fila . ':E' . $fila)->applyFromArray($borde_style); // bordes
                $xls->getActiveSheet()->getCell('B' . $fila)->setValueExplicit("         " . $gral_tipo_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
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

$fila = $fila_inicial;

// -----------------------------------------------------------------------------
// Resumen IVA Importe IVA
// -----------------------------------------------------------------------------

$fila++;
$xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('H' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->getStartColor()->setARGB('666666');
$xls->getActiveSheet()->getStyle('H' . $fila)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('H' . $fila)->setValueExplicit("IVA Importe", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('H' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

foreach ($arr_resumen_libro_ventas as $i => $arr_resumen_libro) {
    //Gral::prr($arr_resumen_libro);
    //Gral::pr($arr_resumen_libro['IMPORTE_COMPROBANTE_IVA_IMPORTE']);

    $fila++;
    $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
    $xls->getActiveSheet()->getStyle('H' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
    $xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle('H' . $fila . ':K' . $fila)->applyFromArray($style_libros_linea_comprobantes); // bordes
    $xls->getActiveSheet()->getCell('H' . $fila)->setValueExplicit(' ' . $i, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('H' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $importe_subtotal = $arr_resumen_libro['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'];
    $xls->getActiveSheet()->getCell('K' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('K' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('K' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    if ($importe_subtotal == 0) {
        $xls->getActiveSheet()->getStyle('K' . $fila)->getFont()->getColor()->setARGB('999999');
    }

    foreach ($gral_condicion_ivas as $gral_condicion_iva) {
        $importe_subtotal = $arr_resumen_libro
                ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE']
        ;

        $fila++;
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
        $xls->getActiveSheet()->getStyle('H' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
        $xls->getActiveSheet()->getStyle('H' . $fila . ':K' . $fila)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getCell('H' . $fila)->setValueExplicit("    " . $gral_condicion_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle('H' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        $xls->getActiveSheet()->getCell('J' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle('J' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle('J' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

        if ($importe_subtotal == 0) {
            $xls->getActiveSheet()->getStyle('J' . $fila)->getFont()->getColor()->setARGB('999999');
        }

        foreach ($gral_tipo_ivas as $gral_tipo_iva) {
            $importe_subtotal = $arr_resumen_libro
                    ['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]
                    ['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE']
            ;

            // solo se agrega si el importe es mayor a cero
            if ($importe_subtotal > 0 || true) {

                $fila++;
                $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight(22);
                $xls->getActiveSheet()->getStyle('H' . $fila)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
                $xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $xls->getActiveSheet()->getStyle('H' . $fila)->getFill()->getStartColor()->setARGB('DDDDDD');
                $xls->getActiveSheet()->getStyle('H' . $fila . ':K' . $fila)->applyFromArray($borde_style); // bordes
                $xls->getActiveSheet()->getCell('H' . $fila)->setValueExplicit("         " . $gral_tipo_iva->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
                $xls->getActiveSheet()->getStyle('H' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

                $xls->getActiveSheet()->getCell('I' . $fila)->setValueExplicit($importe_subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $xls->getActiveSheet()->getStyle('I' . $fila)->getNumberFormat()->setFormatCode("$ #,##0.00");
                $xls->getActiveSheet()->getStyle('I' . $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

                if ($importe_subtotal == 0) {
                    $xls->getActiveSheet()->getStyle('I' . $fila)->getFont()->getColor()->setARGB('999999');
                }
            }
        }
    }
}
?>