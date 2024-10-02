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
$xls->createSheet(5);
$xls->setActiveSheetIndex(5);
$xls->getActiveSheet()->setTitle('Retenciones a Proveedores');

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
    $columna++ => array('ancho' => 10, 'titulo' => 'Alicuota', 'indice' => 'alicuota_porecentual'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Importe Retencion', 'indice' => 'importe_retencion'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha Emision', 'indice' => 'fecha_emision'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Base Imponible', 'indice' => 'importe_base_imponible'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Nro Comprobante', 'indice' => 'numero_comprobante'),
    $columna++ => array('ancho' => 16, 'titulo' => 'CUIT', 'indice' => 'cuit'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Proveedor', 'indice' => 'cliente'),
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

foreach ($pde_orden_pago_pde_tributos_retencions as $pde_orden_pago_pde_tributo_retencion) {

    $pde_orden_pago = $pde_orden_pago_pde_tributo_retencion->getPdeOrdenPago();
    $pde_tributo = $pde_orden_pago_pde_tributo_retencion->getPdeTributo();
    $prv_proveedor = $pde_orden_pago->getPrvProveedor();

    $alicuota_porcentual = $pde_tributo->getAlicuotaPorcentual();
        
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // demas columnas
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_tributo->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($alicuota_porcentual, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_orden_pago_pde_tributo_retencion->getImporteTributo(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($pde_orden_pago_pde_tributo_retencion->getFechaEmision()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_orden_pago_pde_tributo_retencion->getImporteImponible(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_orden_pago_pde_tributo_retencion->getCodigoRetencion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getRazonSocial(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getDomicilioLegal(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_orden_pago_pde_tributo_retencion->getStringConcatenadoParaResumenATM(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    
}

?>
