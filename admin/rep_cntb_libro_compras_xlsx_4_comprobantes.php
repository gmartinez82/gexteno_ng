<?php

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

require_once Gral::getPathAbs() . 'admin/rep_init.php';

// -----------------------------------------------------------------------------
// se arma el segundo sheet
// -----------------------------------------------------------------------------
$xls->createSheet(3);
$xls->setActiveSheetIndex(3);
$xls->getActiveSheet()->setTitle('Comprobantes');

// -----------------------------------------------------------------------------
// Cabecera
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$cols = array(
    $columna++ => array('ancho' => 6, 'titulo' => 'Linea', 'indice' => 'linea'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Fecha Emision', 'indice' => 'fecha_emision'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo', 'indice' => 'tipo'),
    $columna++ => array('ancho' => 18, 'titulo' => 'Nro Comprobante', 'indice' => 'nro_factura'),
    $columna++ => array('ancho' => 20, 'titulo' => 'CAI/CAE', 'indice' => 'cai_cae'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Razon Social', 'indice' => 'razon_social'),
    $columna++ => array('ancho' => 16, 'titulo' => 'CUIT', 'indice' => 'cuit'),
    $columna++ => array('ancho' => 23, 'titulo' => 'Condicion IVA', 'indice' => 'condicion_venta'),
    $columna++ => array('ancho' => 22, 'titulo' => 'Subtotal Neto Gravado', 'indice' => 'subtotal'),
    $columna++ => array('ancho' => 22, 'titulo' => 'Subtotal No Gravado', 'indice' => 'subtotal'),
    $columna++ => array('ancho' => 22, 'titulo' => 'Subtotal Exento', 'indice' => 'subtotal'),
);

foreach ($gral_tipo_ivas_gravados as $gral_tipo_iva) {
    $cols[$columna++] = array('ancho' => 22, 'titulo' => 'BI ' . $gral_tipo_iva->getDescripcion(), 'indice' => $gral_tipo_iva->getCodigo());
    $cols[$columna++] = array('ancho' => 22, 'titulo' => 'Imp ' . $gral_tipo_iva->getDescripcion(), 'indice' => $gral_tipo_iva->getCodigo());
}

foreach ($pde_tributos as $pde_tributo) {
    $cols[$columna++] = array('ancho' => 22, 'titulo' => 'BI ' . $pde_tributo->getDescripcion(), 'indice' => $pde_tributo->getCodigo());
    $cols[$columna++] = array('ancho' => 22, 'titulo' => 'Imp ' . $pde_tributo->getDescripcion(), 'indice' => $pde_tributo->getCodigo());
}

$cols[$columna++] = array('ancho' => 22, 'titulo' => 'Total', 'indice' => 'total');

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getStyle($i . $linea)->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->setBold(true);
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
}

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

$importe_total_subtotal = 0;

foreach ($pde_comprobantes as $pde_comprobante) {
    $cont++;

    switch (get_class($pde_comprobante)) {
        case 'PdeFactura':
        case 'PdeNotaDebito':
            $multiplicador = 1;
            break;
        case 'PdeNotaCredito':
            $multiplicador = (-1);
            break;
        default:
            $multiplicador = 1;
    }

    $gral_condicion_iva = $pde_comprobante->getGralCondicionIva();
    $tipo_comprobante = $pde_comprobante->getTipoComprobante();
    $fecha_emision = Gral::getFechaToWeb($pde_comprobante->getFechaEmision());
    $numero_comprobante = $pde_comprobante->getNumeroComprobanteCompleto();
    $cae = $pde_comprobante->getCae();
    $razon_social = $pde_comprobante->getRazonSocial();
    $cuit = $pde_comprobante->getCuit();
    $condicion_iva = $gral_condicion_iva->getDescripcion();

    $arr_iva_full = $pde_comprobante->getArrIvaComprobanteFull();
    $arr_tributo_full = $pde_comprobante->getArrTributoComprobanteFull();

    // importes por comprobante
    $importe_subtotal_neto_gravado = $pde_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO) * $multiplicador;
    $importe_subtotal_neto_no_gravado = $pde_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) * $multiplicador;
    $importe_subtotal_neto_exento = $pde_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO) * $multiplicador;

    $importe_total_comprobante = $importe_subtotal_neto_gravado + $importe_subtotal_neto_no_gravado + $importe_subtotal_neto_exento;

    // totalizador
    $importe_total_subtotal_neto_gravado += $importe_subtotal_neto_gravado;
    $importe_total_subtotal_neto_no_gravado += $importe_subtotal_neto_no_gravado;
    $importe_total_subtotal_neto_exento += $importe_subtotal_neto_exento;

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cont, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fecha_emision, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_comprobante, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($numero_comprobante, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cae, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($razon_social, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($condicion_iva, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_subtotal_neto_gravado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_subtotal_neto_no_gravado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_subtotal_neto_exento, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    foreach ($gral_tipo_ivas_gravados as $gral_tipo_iva) {
        $importe_iva_base_imponible = $pde_comprobante->getImporteIvaBaseImponible($gral_tipo_iva->getCodigo()) * $multiplicador;
        $importe_iva_importe = $pde_comprobante->getImporteIvaImporte($gral_tipo_iva->getCodigo()) * $multiplicador;

        $importe_total_comprobante += $importe_iva_importe;
        $arr_importe_iva_total["BASE_IMPONIBLE_" . $gral_tipo_iva->getCodigo()] += $importe_iva_base_imponible;
        $arr_importe_iva_total["IMPORTE_" . $gral_tipo_iva->getCodigo()] += $importe_iva_importe;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_iva_base_imponible, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_iva_importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    }

    foreach ($pde_tributos as $pde_tributo) {
        $importe_tributo_base_imponible = $pde_comprobante->getImporteTributoBaseImponible($pde_tributo->getCodigo()) * $multiplicador;
        $importe_tributo_importe = $pde_comprobante->getImporteTributoImporte($pde_tributo->getCodigo()) * $multiplicador;

        $importe_total_comprobante += $importe_tributo_importe;
        $arr_importe_tributo_total["BASE_IMPONIBLE_" . $pde_tributo->getCodigo()] += $importe_tributo_base_imponible;
        $arr_importe_tributo_total["IMPORTE_" . $pde_tributo->getCodigo()] += $importe_tributo_importe;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_tributo_base_imponible, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_tributo_importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;   
    }

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_comprobante, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $importe_total_total += $importe_total_comprobante;
}

$linea++;
$columna = 'I';

$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->getFill()->getStartColor()->setARGB('666666');
$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

$xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_subtotal_neto_gravado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$columna++;
$xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_subtotal_neto_no_gravado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$columna++;
$xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_subtotal_neto_exento, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$columna++;

foreach ($gral_tipo_ivas_gravados as $gral_tipo_iva) {
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_importe_iva_total["BASE_IMPONIBLE_" . $gral_tipo_iva->getCodigo()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_importe_iva_total["IMPORTE_" . $gral_tipo_iva->getCodigo()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
}
foreach ($pde_tributos as $pde_tributo) {
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_importe_tributo_total["BASE_IMPONIBLE_" . $pde_tributo->getCodigo()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_importe_tributo_total["IMPORTE_" . $pde_tributo->getCodigo()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
}

$xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$columna++;

// -----------------------------------------------------------------------------
//Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->freezePane(DB_XLS_CONFIG_PRIMER_COLUMNA.(DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
//Insertar filtros
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->setAutoFilter(DB_XLS_CONFIG_PRIMER_COLUMNA.DB_XLS_CONFIG_PRIMER_FILA.':'.$columna_ultima.DB_XLS_CONFIG_PRIMER_FILA);
?>