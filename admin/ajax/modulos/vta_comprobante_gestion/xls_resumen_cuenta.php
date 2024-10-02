<?php
set_time_limit(0);

include_once '_autoload.php';
//include_once 'control/seguridad.php';

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

$fecha_desde = Gral::getVars(Gral::VARS_GET, 'fecha_desde', '');
$fecha_hasta = Gral::getVars(Gral::VARS_GET, 'fecha_hasta', '');

$otros = Gral::getVars(Gral::VARS_GET, 'otros', '0');

$gral_empresa_id = 1;

$gral_empresa = GralEmpresa::getOxId($gral_empresa_id);

$vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id = false, $anio = false, $cli_cliente_id, $incluir_recibos = true, $orden = 'ASC', $vta_vendedor_id = false, $incluir_ajustes = $otros, $cli_categoria_id = false);

$fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
$importe_total_saldo_inicial_en_fecha = $cli_cliente->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo, false, $otros);


/** PHPExcel */
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// Create new PHPExcel object
$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Lista Recibos');

$xls->getActiveSheet()->getStyle('A1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('A1', $titulo);
$xls->getActiveSheet()->getStyle('B1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('B1', $evento);

$xls->getActiveSheet()->getRowDimension(2)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B2')->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B2:C2')->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B2')->setValueExplicit("Cliente", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$xls->getActiveSheet()->getColumnDimension('C')->setWidth('50');
$xls->getActiveSheet()->getCell('C2')->setValueExplicit($cli_cliente->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);


$xls->getActiveSheet()->getRowDimension(3)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B3')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B3')->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B3:C3')->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B3')->setValueExplicit("Desde", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C3')->setValueExplicit(Gral::getFechaToWeb($fecha_desde), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

$xls->getActiveSheet()->getRowDimension(4)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B4')->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B4:C4')->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B4')->setValueExplicit("Hasta", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C4')->setValueExplicit(Gral::getFechaToWeb($fecha_hasta), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

$xls->getActiveSheet()->getRowDimension(5)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('B5')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('B5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('B5')->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('B5:C5')->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('B5')->setValueExplicit("Empresa", PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('B5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getActiveSheet()->getCell('C5')->setValueExplicit($gral_empresa->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('C5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);



// Cabecera
$cols = array(
    "A" => array("ancho" => 20, "titulo" => "Fecha", "indice" => "fecha"),
    "B" => array("ancho" => 20, "titulo" => "Tipo", "indice" => "tipoº"),
    "C" => array("ancho" => 50, "titulo" => "Nro Comprobante", "indice" => "nro_comprobante"),
    "D" => array("ancho" => 20, "titulo" => "Tipo de Estado", "indice" => "tipo_estado"),
    "E" => array("ancho" => 20, "titulo" => "Debe", "indice" => "debe"),
    "F" => array("ancho" => 20, "titulo" => "Haber", "indice" => "haber"),
    "G" => array("ancho" => 20, "titulo" => "Saldo", "indice" => "saldo"),
    "H" => array("ancho" => 20, "titulo" => "Nro Comprobante Ext", "indice" => "nro_comprobante_ext"),
);

$linea = 7;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(18);
}

$ultima_columna_fija = 'H';
$ultima_columna_fija_dyn = $ultima_columna_fija;

// -----------------------------------------------------------------------------
// fila de saldo inicial
// -----------------------------------------------------------------------------
$linea++;

$xls->getActiveSheet()->getStyle('A' . $linea . ':' . $ultima_columna_fija_dyn . $linea . '')->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(25);

$xls->getActiveSheet()->mergeCells('A' . $linea . ':C' . $linea);

$xls->getActiveSheet()->getCell('A' . $linea)->setValueExplicit('Saldo de cuenta al ' . Gral::getFechaToWEB($fecha_hasta_saldo), PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('A' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->getStyle('A' . $linea)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$xls->getActiveSheet()->getCell('G' . $linea)->setValueExplicit($importe_total_saldo_inicial_en_fecha, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle('G' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle('G' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// -----------------------------------------------------------------------------


$importe_total_debe_total = 0;
$importe_total_haber_total = 0;
$importe_total_saldo = $importe_total_saldo_inicial_en_fecha;
foreach ($vta_comprobantes as $vta_comprobante) {
    $linea++;

    $importe_total_debe = $vta_comprobante->getImporteTotalComprobanteDebe();
    $importe_total_haber = $vta_comprobante->getImporteTotalComprobanteHaber();

    $importe_total_debe_total += $importe_total_debe;
    $importe_total_haber_total += $importe_total_haber;

    $importe_total_saldo += $importe_total_debe - $importe_total_haber;

    $fecha = Gral::getFechaToWeb($vta_comprobante->getFechaEmision());
    $comprobante_siglas = $vta_comprobante->getTipoComprobanteSiglas();
    $comprobante_min = $vta_comprobante->getTipoComprobanteMin();
    $comprobante_completo = $vta_comprobante->getNumeroComprobanteCompleto();
    $tipo_estado_comprobante = $vta_comprobante->getTipoEstadoComprobante();
    $importe_total_debe = $importe_total_debe;
    $importe_total_haber = $importe_total_haber;
    $importe_total_saldo = $importe_total_saldo;

    $xls->getActiveSheet()->getStyle('A' . $linea . ':' . $ultima_columna_fija_dyn . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // demas columnas
    $xls->getActiveSheet()->getCell('A' . $linea)->setValueExplicit($fecha, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('A' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $xls->getActiveSheet()->getCell('B' . $linea)->setValueExplicit($comprobante_siglas, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('B' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $xls->getActiveSheet()->getCell('C' . $linea)->setValueExplicit($comprobante_min . "-" . $comprobante_completo, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('C' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $xls->getActiveSheet()->getCell('D' . $linea)->setValueExplicit($tipo_estado_comprobante, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('D' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $xls->getActiveSheet()->getCell('E' . $linea)->setValueExplicit($importe_total_debe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('E' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('E' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    $xls->getActiveSheet()->getCell('F' . $linea)->setValueExplicit($importe_total_haber, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('F' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('F' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    $xls->getActiveSheet()->getCell('G' . $linea)->setValueExplicit($importe_total_saldo, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle('G' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle('G' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    $xls->getActiveSheet()->getCell('H' . $linea)->setValueExplicit($vta_comprobante->getCodigoOpCliente(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle('H' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
}

$linea++;

$xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
$xls->getActiveSheet()->getStyle('E' . $linea . ':F' . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
$xls->getActiveSheet()->getStyle('E' . $linea . ':F' . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$xls->getActiveSheet()->getStyle('E' . $linea . ':F' . $linea)->getFill()->getStartColor()->setARGB('CCCCCC');
$xls->getActiveSheet()->getStyle('E' . $linea . ':F' . $linea)->applyFromArray($borde_style); // bordes
$xls->getActiveSheet()->getCell('E' . $linea)->setValueExplicit($importe_total_debe_total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle('E' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle('E' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

$xls->getActiveSheet()->getCell('F' . $linea)->setValueExplicit($importe_total_haber_total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle('F' . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle('F' . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . 'xls_resumen_cuenta.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>