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
$xls->createSheet(4);
$xls->setActiveSheetIndex(4);
$xls->getActiveSheet()->setTitle('Retenciones de Clientes');

$xls->getActiveSheet()->getStyle('A1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('A1', $titulo);
$xls->getActiveSheet()->getStyle('B1')->applyFromArray($negrita_style);
$xls->getActiveSheet()->setCellValue('B1', $evento);

// -----------------------------------------------------------------------------
// Cabecera
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$cols = array(
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Retencion', 'indice' => 'tipo_retencion'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Importe Retencion', 'indice' => 'importe_retencion'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha Emision', 'indice' => 'fecha_emision'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Base Imponible', 'indice' => 'importe_base_imponible'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Nro Comprobante', 'indice' => 'numero_comprobante'),
    $columna++ => array('ancho' => 16, 'titulo' => 'CUIT', 'indice' => 'cuit'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'indice' => 'cliente'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Domicilio', 'indice' => 'domicilio'),
    $columna++ => array('ancho' => 200, 'titulo' => 'String Concatenado', 'indice' => 'concatenado'),
);

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(18);
}

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

$importe_total_subtotal = 0;

foreach ($vta_recibo_items_retencions as $vta_recibo_item_retencion) {

    $vta_recibo_item = $vta_recibo_item_retencion->getVtaReciboItem();
    $vta_recibo = $vta_recibo_item->getVtaRecibo();
    $vta_recibo_concepto = $vta_recibo_item->getVtaReciboConcepto();
    $cli_cliente = $vta_recibo->getCliCliente();

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // demas columnas
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_recibo_concepto->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_recibo_item->getImporteUnitario(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($vta_recibo_item_retencion->getFechaEmision()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_recibo_item_retencion->getImporteBaseImponible(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_recibo_item_retencion->getNumeroComprobante(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getRazonSocial(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getDomicilioLegal(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_recibo_item_retencion->getStringConcatenadoParaResumenATM(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
}

?>
