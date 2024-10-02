<?php
// ----------------------------------------------------------------------------
// percepciones a clientes
// ----------------------------------------------------------------------------
$vta_factura_vta_tributos = VtaFacturaVtaTributo::getVtaFacturaVtaTributosPercepcionesAClientes($txt_filtro_desde, $txt_filtro_hasta, $cmb_filtro_vta_tributo_id);
//Gral::prr($vta_factura_vta_tributos);
//exit;
// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

/** PHPExcel */
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';
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


// -----------------------------------------------------------------------------
// se arma el segundo sheet
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
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
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Comprobante'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Comprobante Afectado'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tributo'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Razon Social'),
    $columna++ => array('ancho' => 16, 'titulo' => 'CUIT'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Numero Comprobante'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Base Imponible'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Importe Percibido'),
    $columna++ => array('ancho' => 8, 'titulo' => 'Alicuota'),
    $columna++ => array('ancho' => 200, 'titulo' => 'String Concatenado ATM'),
    $columna++ => array('ancho' => 200, 'titulo' => 'String Concatenado Muni Posadas'),
);

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
}

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

$importe_total_subtotal = 0;

foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

    $vta_comprobante = $vta_factura_vta_tributo->getVtaComprobante();
    $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
    $cli_cliente = $vta_comprobante->getCliCliente();
    
    $multiplicador = 1;
    if(get_class($vta_comprobante) == 'VtaNotaCredito'){
        $multiplicador = -1;
    }

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // columnas de datos
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($vta_comprobante->getFechaEmision()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_comprobante->getTipoComprobante(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_comprobante->getNumeroComprobanteCompleto(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_tributo->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getRazonSocial(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_factura_vta_tributo->getId(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_factura_vta_tributo->getImporteImponible(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_factura_vta_tributo->getImporteTributo() * $multiplicador, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_tributo->getAlicuotaPorcentual(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_factura_vta_tributo->getStringConcatenadoParaResumenATM(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_factura_vta_tributo->getStringConcatenadoParaResumenMunicipalidadPosadas(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
}

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>